<?php

class Dashboard extends Employee_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('employee_model');
        $this->load->model('emp_model');
        $this->load->model('task_model');
        $this->load->model('task_contact_model');

        $this->load->model('notice_model');
        $this->load->model('event_model');

        $this->load->model('award_model');
        $this->load->model('global_model');
        $this->load->model('mailbox_model');
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'asset/js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "100%",
                'height' => "350px"
            )
        );
    }

    public function index() {
        $data['menu'] = array("index" => 1);

        $data['title'] = "Employee Panel";
        $employee_id = $this->session->userdata('employee_id');


        $this->emp_model->_table_name = "tbl_attendance"; //table name
        $this->emp_model->_order_by = "employee_id";
        $data['total_attendance'] = count($this->total_attendace_in_month($employee_id));
        // get clock in/out time

        $this->emp_model->_table_name = "tbl_attendance"; //table name
        $this->emp_model->_order_by = "employee_id";
        $attendance_info = $this->emp_model->get_by(array('employee_id' => $employee_id,), FALSE);
        foreach ($attendance_info as $v_info) {
            $data['clocking'] = $this->emp_model->check_by(array('attendance_id' => $v_info->attendance_id, 'clocking_status' => 1), 'tbl_clock');
        }

        //get employee details by employee id
        $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);
        // upcoming birthday
        $data['employee'] = $this->emp_model->get_upcoming_birthday(); // get resutl
        //Total Attendance
        $this->emp_model->_table_name = "tbl_attendance"; //table name
        $this->emp_model->_order_by = "employee_id";
        $data['total_attendance'] = count($this->total_attendace_in_month($employee_id));
        // get working days holiday
        $holidays = count($this->global_model->get_holidays()); //tbl working Days Holiday
        // get public holiday
        $public_holiday = count($this->total_attendace_in_month($employee_id, TRUE));

        // get total days in a month
        $month = date('m');
        $year = date('Y');
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        // total attend days in a month without public holiday and working days
        $data['total_days'] = $days - $holidays - $public_holiday;

        //leave applied         
        $data['total_leave_applied'] = $this->get_approved_leave($employee_id);

        //award received
        $this->emp_model->_table_name = "tbl_employee_award"; //table name
        $this->emp_model->_order_by = "employee_id";
        $data['total_award_received'] = count($this->emp_model->get_by(array('employee_id' => $employee_id,), FALSE));

        //get all notice by flag       
        $data['notice_info'] = $this->emp_model->get_all_notice(TRUE);

        //get all upcomming events
        $data['total_event_info'] = count($this->emp_model->get_all_events());
        $data['event_info'] = $this->emp_model->get_all_events();
        // get recent email                  
        $data['get_inbox_message'] = $this->emp_model->get_inbox_message($this->session->userdata('email'), $flag = NULL, $del_info = NULL, TRUE);

        $data['subview'] = $this->load->view('employee/main_content', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function get_approved_leave() {
        $this->admin_model->_table_name = 'tbl_application_list';
        $this->admin_model->_order_by = "employee_id";
        $total_leave = $this->admin_model->get_by(array('employee_id' => $this->session->userdata('employee_id'), 'application_status' => '2'), FALSE);
        $total_days = 0;
        if (!empty($total_leave)) {
            $ge_days = 0;
            $m_days = 0;

            foreach ($total_leave as $v_leave) {
                $month = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($v_leave->leave_start_date)), date('Y', strtotime($v_leave->leave_start_date)));
                $datetime1 = new DateTime($v_leave->leave_start_date);

                $datetime2 = new DateTime($v_leave->leave_end_date);
                $difference = $datetime1->diff($datetime2);

                if ($difference->m != 0) {
                    $m_days += $month;
                } else {
                    $m_days = 0;
                }
                $ge_days += $difference->d + 1;
                $total_days = $m_days + $ge_days;
            }
        }
        if (!empty($total_days)) {
            $total_days = $total_days;
        } else {
            $total_days = 0;
        }
        return $total_days;
    }

    public function total_attendace_in_month($employee_id, $flag = NULL) {
        $month = date('m');
        $year = date('Y');

        if ($month >= 1 && $month <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
            $start_date = $year . "-" . '0' . $month . '-' . '01';
            $end_date = $year . "-" . '0' . $month . '-' . '31';
        } else {
            $start_date = $year . "-" . $month . '-' . '01';
            $end_date = $year . "-" . $month . '-' . '31';
        }
        if (!empty($flag)) { // if flag is not empty that means get pulic holiday
            $get_public_holiday = $this->emp_model->get_public_holiday($start_date, $end_date);
            if (!empty($get_public_holiday)) { // if not empty the public holiday
                foreach ($get_public_holiday as $v_holiday) {
                    if ($v_holiday->start_date == $v_holiday->end_date) { // if start date and end date is equal return one data
                        $total_holiday[] = $v_holiday->start_date;
                    } else { // if start date and end date not equan return all date
                        for ($j = $v_holiday->start_date; $j <= $v_holiday->end_date; $j++) {
                            $total_holiday[] = $j;
                        }
                    }
                }
                return $total_holiday;
            }
        } else {
            $get_total_attendance = $this->emp_model->get_total_attendace_by_date($start_date, $end_date, $employee_id); // get all attendace by start date and in date 
            return $get_total_attendance;
        }
    }

    public function set_clocking($id = NULL) {

        // sate into attendance table
        $adata['employee_id'] = $this->session->userdata('employee_id');
        $clocktime = $this->input->post('clocktime', TRUE);
        if ($clocktime == 1) {
            $adata['date_in'] = $this->input->post('date', TRUE);
        } else {
            $adata['date_out'] = $this->input->post('date', TRUE);
        }
        if (!empty($adata['date_in'])) {
            // chck existing date is here or not
            $check_date = $this->emp_model->check_by(array('employee_id' => $adata['employee_id'], 'date_in' => $adata['date_in']), 'tbl_attendance');
        }
        if (!empty($check_date)) { // if exis do not save date and return id
            if ($check_date->attendance_status != '1') {
                $udata['attendance_status'] = 1;
                $this->emp_model->_table_name = "tbl_attendance"; // table name        
                $this->emp_model->_primary_key = "attendance_id"; // $id 
                $this->emp_model->save($udata, $check_date->attendance_id);
            }
            $data['attendance_id'] = $check_date->attendance_id;
        } else { // else save data into tbl attendance 
            // get attendance id by clock id into tbl clock 
            // if attendance id exist that means he/she clock in 
            // return the id
            // and update the day out time
            $check_existing_data = $this->emp_model->check_by(array('clock_id' => $id), 'tbl_clock');
            $this->emp_model->_table_name = "tbl_attendance"; // table name        
            $this->emp_model->_primary_key = "attendance_id"; // $id            
            if (!empty($check_existing_data)) {
                $this->emp_model->save($adata, $check_existing_data->attendance_id);
            } else {
                $adata['attendance_status'] = 1;
                //save data into attendance table
                $data['attendance_id'] = $this->emp_model->save($adata);
            }
        }
        // save data into clock table
        if ($clocktime == 1) {
            $data['clockin_time'] = $this->input->post('time', TRUE);
        } else {
            $data['clockout_time'] = $this->input->post('time', TRUE);            
        }
        //save data in database
        $this->emp_model->_table_name = "tbl_clock"; // table name
        $this->emp_model->_primary_key = "clock_id"; // $id
        if (!empty($id)) {
            $data['clocking_status'] = 0;
            $this->emp_model->save($data, $id);
        } else {
            $data['clocking_status'] = 1;
            $this->emp_model->save($data);
        }
        redirect('employee/dashboard');
    }

    public function my_time() {
        $data['title'] = 'My Time Log';
        $data['menu'] = array("my_time" => 1);

        $employee_id = $this->session->userdata('employee_id');
        $this->emp_model->_table_name = "tbl_attendance"; // table name        
        $this->emp_model->_order_by = "employee_id"; // $id
        $attendance_info = $this->emp_model->get_by(array('employee_id' => $employee_id), FALSE);
        $data['mytime_info'] = $this->get_mytime_info($attendance_info);
        $data['active'] = date('Y');
        $data['subview'] = $this->load->view('employee/my_time', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function get_mytime_info($attendance_info) {
        if (!empty($attendance_info)) {
            foreach ($attendance_info as $v_info) {
                if ($v_info->date_in == $v_info->date_out) {
                    $date = date('d M Y', strtotime($v_info->date_in));
                } else {
                    $date = 'Date In : ' . date('d M Y', strtotime($v_info->date_in)) . ', Date Out : ' . date('d M Y', strtotime($v_info->date_out));
                }
                $clock_info[date('Y', strtotime($v_info->date_in))][date('W', strtotime($v_info->date_in))][$date] = $this->emp_model->get_mytime_info($v_info->attendance_id);
            }
            return $clock_info;
        }
    }

    public function edit_mytime($clock_id) {
        $data['title'] = "Admin Dashboard";
        $attendance_id = NULL;
        $data['clock_info'] = $this->emp_model->get_mytime_info($attendance_id, $clock_id);
        $data['subview'] = $this->load->view('employee/edit_mytime', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function cheanged_mytime($clock_id) {
        $cdata = $this->emp_model->array_from_post(array('reason', 'clockin_edit', 'clockout_edit'));

        $data['clock_id'] = $clock_id;
        $data['employee_id'] = $this->session->userdata('employee_id');
        $data['clockin_edit'] = date('H:i', strtotime($cdata['clockin_edit']));
        $data['clockout_edit'] = date('H:i', strtotime($cdata['clockout_edit']));
        $data['reason'] = $cdata['reason'];

        //save data in database
        $this->emp_model->_table_name = "tbl_clock_history"; // table name
        $this->emp_model->_order_by = "clock_history_id"; // $id
        $this->emp_model->save($data);
        // messages for user
        $type = "success";
        $message = "Clocking Information Successfully Submitted .Please Wait for admin approval !";
        set_message($type, $message);
        redirect('employee/dashboard/my_time');
    }

    public function payslip() {
        $data['menu'] = array("payslip" => 1);
        $data['title'] = "Payslip Info";
        $data['subview'] = $this->load->view('employee/payslip', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function salary_payment_details($salary_payment_id) {
        $data['title'] = "Manage Salery Details";
        $data['page_header'] = "Payroll Management";
        $data['salary_payment_info'] = $this->emp_model->get_salary_payment_info($salary_payment_id);
        $data['subview'] = $this->load->view('employee/salary_payment_details', $data, FALSE);
        $this->load->view('admin/_layout_modal_lg', $data);
    }

    public function expense($id = NULL) {
        $data['title'] = 'My expense';
        $data['menu'] = array("expense" => 1);
        $this->session->userdata('employee_id');
        if (!empty($id)) {
            $data['active'] = 2;
        } else {
            $data['active'] = 1;
        }
        $data['subview'] = $this->load->view('employee/my_expense', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function save_expense($id = NULL) {
        // input data
        $data = $this->emp_model->array_from_post(array('item_name', 'purchase_from', 'purchase_date', 'amount', 'employee_id')); //input post  
        // save into tbl expense and return expense id
        $this->emp_model->_table_name = "tbl_expense"; // table name
        $this->emp_model->_primary_key = "expense_id"; // $id
        $expense_id = $this->emp_model->save($data, $id);
        //upload bill info
        if (!empty($_FILES['bill_copy']['name']['0'])) {

            $old_path = $this->input->post('bill_copy_path');
            if ($old_path) {
                unlink($old_path);
            }
            $mul_val = $this->emp_model->multi_uploadAllType('bill_copy');
            foreach ($mul_val as $val) {
                $val == TRUE || redirect('employee/dashboard/expense');
                $bdata['bill_copy'] = $val['path'];
                $bdata['bill_copy_filename'] = $val['fileName'];
                $bdata['bill_copy_path'] = $val['fullPath'];
                $bdata['expense_id'] = $expense_id;
                $this->emp_model->_table_name = "tbl_expense_bill_copy"; // table name
                $this->emp_model->_primary_key = "expense_bill_copy_id"; // $id
                $this->emp_model->save($bdata, $id);
            }
        }
        $type = "success";
        $message = "Expense Information Successfully Saved!";
        set_message($type, $message);
        redirect('employee/dashboard/expense'); //redirect page
    }

    public function my_task($id = NULL) {
        $data['title'] = 'My Task';
        $data['menu'] = array("my_task" => 1);
        if (!empty($id)) {
            $data['active'] = 2;
        } else {
            $data['active'] = 1;
        }

        $data['subview'] = $this->load->view('employee/my_task', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function my_task_contact($id = NULL) {
        $data['title'] = 'Project Manager';
        $data['menu'] = array("my_task_contact" => 1);
        if (!empty($id)) {
            $data['active'] = 2;
        } else {
            $data['active'] = 1;
        }

        $data['subview'] = $this->load->view('employee/my_task_contact', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function save_comments() {

        $data['task_id'] = $this->input->post('task_id', TRUE);
        $data['comment'] = $this->input->post('comment', TRUE);
        $user_type = $this->session->userdata('user_type');
        if ($user_type == 1) {
            $data['user_id'] = $this->session->userdata('employee_id');
        } else {
            $data['employee_id'] = $this->session->userdata('employee_id');
        }
        //save data into table.
        $this->emp_model->_table_name = "tbl_task_comment"; // table name
        $this->emp_model->_primary_key = "task_comment_id"; // $id
        $this->emp_model->save($data);

        $type = "success";
        $message = "Task Successfully Updated!";
        set_message($type, $message);
        redirect('employee/dashboard/view_task_details/' . $data['task_id'] . '/' . $data['active'] = 2);
    }


    public function save_contact_comments() {

        $data['task_contact_id'] = $this->input->post('task_contact_id', TRUE);
        $data['comment'] = $this->input->post('comment', TRUE);
        $user_type = $this->session->userdata('user_type');
        if ($user_type == 1) {
            $data['user_id'] = $this->session->userdata('employee_id');
        } else {
            $data['employee_id'] = $this->session->userdata('employee_id');
        }
        //save data into table.
        $this->emp_model->_table_name = "tbl_task_contact_comment"; // table name
        $this->emp_model->_primary_key = "task_contact_comment_id"; // $id
        $this->emp_model->save($data);

        $type = "success";
        $message = "Task Successfully Updated!";
        set_message($type, $message);
        redirect('employee/dashboard/view_task_contact_details/' . $data['task_contact_id'] . '/' . $data['active'] = 2);
    }


    public function save_task_contact_attachment($task_attachment_id = NULL) {
        $data = $this->emp_model->array_from_post(array('title', 'project_details', 'task_contact_id'));
        $user_type = $this->session->userdata('user_type');
        if ($user_type == 1) {
            $data['user_id'] = $this->session->userdata('employee_id');
        } else {
            $data['employee_id'] = $this->session->userdata('employee_id');
        }
        // save and update into tbl_files
        $this->emp_model->_table_name = "tbl_task_contact_attachment"; //table name
        $this->emp_model->_primary_key = "task_contact_attachment_id";
        if (!empty($task_contact_attachment_id)) {
            $id = $task_contact_attachment_id;
            $this->emp_model->save($data, $id);
            $msg = lang('task_file_updated');
        } else {
            $id = $this->emp_model->save($data);
            $msg = lang('task_file_added');
        }

        if (!empty($_FILES['task_files']['name']['0'])) {
            $old_path_info = $this->input->post('uploaded_path');
            if (!empty($old_path_info)) {
                foreach ($old_path_info as $old_path) {
                    unlink($old_path);
                }
            }
            $mul_val = $this->emp_model->multi_uploadAllType('task_files');

            foreach ($mul_val as $val) {
                $val == TRUE || redirect('employee/dashboard/view_task_details/3/' . $data['task_id']);
                $fdata['files'] = $val['path'];
                $fdata['file_name'] = $val['fileName'];
                $fdata['uploaded_path'] = $val['fullPath'];
                $fdata['size'] = $val['size'];
                $fdata['ext'] = $val['ext'];
                $fdata['is_image'] = $val['is_image'];
                $fdata['image_width'] = $val['image_width'];
                $fdata['image_height'] = $val['image_height'];
                $fdata['task_attachment_id'] = $id;
                $this->emp_model->_table_name = "tbl_task_contact_uploaded_files"; // table name
                $this->emp_model->_primary_key = "uploaded_files_id"; // $id
                $this->emp_model->save($fdata);
            }
        }
        // messages for user
        $type = "success";
        $message = $msg;
        set_message($type, $message);
        redirect('employee/dashboard/view_task_contact_details/' . $data['task_contact_id'] . '/3');
    }


       

    public function view_task_details($id, $active = NULL) {
        $data['title'] = "Task Details";
        $data['page_header'] = "Task Management";
        $com = array();

        //get all task information
        $data['task_details'] = $this->emp_model->get_all_task_info($id);
        //get all comments info
       $result = $this->emp_model->get_all_comment_info($id);
       foreach ($result as $comment){
           if(($comment->employee_id == $this->session->userdata('employee_id')) ||  $comment->employee_id == NULL){
               $com[] = $comment;
           }
       }

        $data['comment_details'] = $com;
        $arr = ['view_status'=>1];
        $where = ['task_id'=>$id,
            'user_id !='=> '(Null)' ];
        $this->task_model->update_comment($arr, $where);

        $this->emp_model->_table_name = "tbl_task_attachment"; //table name
        $this->emp_model->_order_by = "task_id";
        $data['files_info'] = $this->emp_model->get_by(array('task_id' => $id), FALSE);

        foreach ($data['files_info'] as $key => $v_files) {
            $this->emp_model->_table_name = "tbl_task_uploaded_files"; //table name
            $this->emp_model->_order_by = "task_attachment_id";
            $data['project_files_info'][$key] = $this->emp_model->get_by(array('task_attachment_id' => $v_files->task_attachment_id), FALSE);
        }

        if ($active == 2) {
            $data['active'] = 2;
        } elseif ($active == 3) {
            $data['active'] = 3;
        } else {
            $data['active'] = 1;
        }
        $arr = ['view_status'=>1];
        $where = ['task_id'=>$id];

        $this->task_model->update($arr, $where);

        $data['subview'] = $this->load->view('employee/view_task', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }


    public function view_task_contact_details($id, $active = NULL) {
        $data['title'] = "Task Details";
        $data['page_header'] = "Task Management";
        $com = array();

        //get all task information
        $data['task_details'] = $this->emp_model->get_all_task_contact_info($id);

        //get all task team information
        $data['task_team_details'] = $this->emp_model->get_all_task_team_info($id);
        //get all task team information
        $data['task_advisor_details'] = $this->emp_model->get_all_task_advisor_info($id);
        //get all task team information
        $data['task_partner_details'] = $this->emp_model->get_all_task_partner_info($id);
//        var_dump($data['task_team_details']);
//        die();
        //get all comments info
        $result= $this->emp_model->get_all_contact_comment_info($id);

        foreach ($result as $comment){
//            echo $comment->employee_id;
            if(($comment->employee_id == $this->session->userdata('employee_id')) ||  $comment->employee_id == NULL){
                $com[] = $comment;
            }
        }
        $data['comment_details'] = $com;
        $arr = ['view_status'=>1];
        $where = ['task_contact_id'=>$id,
            'user_id !='=> '(Null)' ];
        $this->task_contact_model->update_comment($arr, $where);

        $this->emp_model->_table_name = "tbl_task_contact_attachment"; //table name
        $this->emp_model->_order_by = "task_contact_id";
        $data['files_info'] = $this->emp_model->get_by(array('task_contact_id' => $id), FALSE);

        foreach ($data['files_info'] as $key => $v_files) {
            $this->emp_model->_table_name = "tbl_task_contact_uploaded_files"; //table name
            $this->emp_model->_order_by = "task_contact_attachment_id";
            $data['project_files_info'][$key] = $this->emp_model->get_by(array('task_attachment_id' => $v_files->task_contact_attachment_id), FALSE);
        }

        if ($active == 2) {
            $data['active'] = 2;
        } elseif ($active == 3) {
            $data['active'] = 3;
        } else {
            $data['active'] = 1;
        }
        $arr = ['view_status'=>1];
        $where = ['task_contact_id'=>$id];
        $this->task_contact_model->update($arr, $where);

        $data['subview'] = $this->load->view('employee/view_task_contact', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function download_files($task_id, $uploaded_files_id) {
        $this->load->helper('download');
        $uploaded_files_info = $this->emp_model->check_by(array('uploaded_files_id' => $uploaded_files_id), 'tbl_task_uploaded_files');

        if ($uploaded_files_info->uploaded_path) {
            $data = file_get_contents($uploaded_files_info->uploaded_path); // Read the file's contents            
            force_download($uploaded_files_info->file_name, $data);
        } else {
            $type = "success";
            $message = lang('operation_failed');
            set_message($type, $message);
            redirect('employee/dashboard/view_task_details/' . $task_id . '/3');
        }
    }

    public function leave_application() {
        $data['menu'] = array("leave_application" => 1);
        $data['title'] = "Employee Panel";
        $data['active'] = 1;
        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_leave_category"; // table name
        $this->emp_model->_order_by = "leave_category_id"; // $id
        $data['all_leave_category'] = $this->emp_model->get(); // get result
        //get leave applied with category name
        $employee_id = $this->session->userdata('employee_id');
        $data['all_leave_applications'] = $this->emp_model->get_all_leave_applied($employee_id);
        $data['subview'] = $this->load->view('employee/emp_leave_application', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function save_leave_application() {

        $this->emp_model->_table_name = "tbl_application_list"; // table name
        $this->emp_model->_primary_key = "application_list_id"; // $id
        //receive form input by post
        $data['employee_id'] = $this->session->userdata('employee_id');
        $data['leave_category_id'] = $this->input->post('leave_category_id');
        $data['leave_start_date'] = $this->input->post('leave_start_date');
        $data['leave_end_date'] = $this->input->post('leave_end_date');
        $today = date('Y-m-d');
        if ($today == $data['leave_start_date']) {
            $type = "error";
            $message = "You can not Apply for leave the current day !";
        } else {
            $check_validation = $this->check_available_leave($data['employee_id'], $data['leave_start_date'], $data['leave_end_date'], $data['leave_category_id']);

            if (!empty($check_validation)) {
                $type = "error";
                $message = $check_validation;
            } else {
                $data['reason'] = $this->input->post('reason');
                //  File upload
                if (!empty($_FILES['upload_file']['name'])) {

                    $val = $this->emp_model->uploadAllType('upload_file');
                    $val == TRUE || redirect('employee/dashboard/apply_leave_application');
                    $data['filename'] = $val['fileName'];
                    $data['upload_file'] = $val['path'];
                }
                //save data in database
                $this->emp_model->save($data);

                // messages for user
                $type = "success";
                $message = lang('leave_application_submitted');
            }
        }
        set_message($type, $message);
        redirect('employee/dashboard/leave_application');
    }

    function check_available_leave($employee_id, $start_date = NULL, $end_date = NULL, $leave_category_id = NULL) {

        if (!empty($leave_category_id) && !empty($start_date)) {
            $total_leave = $this->emp_model->check_by(array('leave_category_id' => $leave_category_id), 'tbl_leave_category');
            $leave_total = $total_leave->leave_quota;

            $token_leave = $this->db->where(array('employee_id' => $employee_id, 'leave_category_id' => $leave_category_id))->get('tbl_application_list')->result();
            $total_token = 0;
            if (!empty($token_leave)) {
                $ge_days = 0;
                $m_days = 0;
                foreach ($token_leave as $v_leave) {
                    $month = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($v_leave->leave_start_date)), date('Y', strtotime($v_leave->leave_start_date)));

                    $datetime1 = new DateTime($v_leave->leave_start_date);

                    $datetime2 = new DateTime($v_leave->leave_end_date);
                    $difference = $datetime1->diff($datetime2);
                    if ($difference->m != 0) {
                        $m_days += $month;
                    } else {
                        $m_days = 0;
                    }
                    $ge_days += $difference->d + 1;
                    $total_token = $m_days + $ge_days;
                }
            }
            if (!empty($total_token)) {
                $total_token = $total_token;
            } else {
                $total_token = 0;
            }
            $input_ge_days = 0;
            $input_m_days = 0;
            if (!empty($start_date)) {
                $input_month = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($start_date)), date('Y', strtotime($end_date)));

                $input_datetime1 = new DateTime($start_date);
                $input_datetime2 = new DateTime($end_date);
                $input_difference = $input_datetime1->diff($input_datetime2);
                if ($input_difference->m != 0) {
                    $input_m_days += $input_month;
                } else {
                    $input_m_days = 0;
                }
                $input_ge_days += $input_difference->d + 1;
                $input_total_token = $input_m_days + $input_ge_days;
            }
            $taken_with_input = $total_token + $input_total_token;
            $left_leave = $leave_total - $total_token;
            if ($leave_total < $taken_with_input) {
                return "You already took  $total_token $total_leave->category You can apply maximum for $left_leave more";
            }
        } else {
            return lang('fill_up_all_fields');
        }
    }

    public function all_notice() {
        $data['menu'] = array("notice" => 1);
        $data['title'] = "All Notice";

        // get all notice by flag       
        $data['notice_info'] = $this->emp_model->get_all_notice();

        $data['subview'] = $this->load->view('employee/all_notice', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function notice_detail($id) {
        $data['title'] = "Notice Details";
        //get notice category for dropdown
        $this->emp_model->_table_name = "tbl_notice"; // table name
        $this->emp_model->_order_by = "notice_id"; // $id
        $data['full_notice_details'] = $this->emp_model->get_by(array('notice_id' => $id,), TRUE); // get result
        $arr = ['view_status'=>1];
        $where = ['notice_id'=>$id];
        $this->notice_model->update($arr,$where);
        $data['modal_subview'] = $this->load->view('employee/notice_details', $data, FALSE);
        $this->load->view('admin/_layout_modal_lg', $data);
    }

    public function all_events() {
        $data['menu'] = array("events" => 1);
        $data['title'] = "All Events";

        // get all notice by flag       
        $data['event_info'] = $this->emp_model->get_all_events();

        $data['subview'] = $this->load->view('employee/events', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function event_detail($id) {
        $data['title'] = "Event Details";

        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_holiday"; // table name
        $this->emp_model->_order_by = "holiday_id"; // $id
        $data['event_details'] = $this->emp_model->get_by(array('holiday_id' => $id,), TRUE); // get result
        $arr = ['view_status'=>1];
        $where = ['holiday_id'=>$id];
        $this->event_model->update($arr,$where);
        $data['subview'] = $this->load->view('employee/event_details', $data, FALSE);
        $this->load->view('admin/_layout_modal', $data);
    }

    public function all_award() {
        $data['menu'] = array("awards" => 1);
        $data['title'] = "All Awards";
        $id = $this->session->userdata('employee_id');
        // get all notice by flag       
        $arr = ['view_status'=>1];
        $where = ['employee_id'=>$id];
        $this->award_model->update($arr,$where);
        $data['award_info'] = $this->emp_model->get_all_awards();


        $data['subview'] = $this->load->view('employee/all_awards', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function award_detail($id) {
        $data['title'] = "All Awards";
//
        //get award detail info for particular employee    
        $data['employee_award_info'] = $this->emp_model->get_all_awards($id);
        $this->award_model->save(['view_status'=>1], $id);
        $data['subview'] = $this->load->view('employee/award_details_page', $data, FALSE);
        $this->load->view('admin/_layout_modal', $data);
    }



    public function job_circular($id = NULL) {
        $data['title'] = "Job Circular";
        $data['menu'] = array("job_circular" => 1);
        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_job_circular"; // table name
        $this->emp_model->_order_by = "job_circular_id"; // $id
        if (!empty($id)) {
            $data['job_circular'] = $this->emp_model->get_by(array('job_circular_id' => $id,), TRUE); // get result                    
        }
        $data['job_circular_info'] = $this->emp_model->get_by(array('status' => 1,), FALSE); // get result                
        $data['subview'] = $this->load->view('employee/job_circular', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function save_job_application($id) {
        $data = $this->emp_model->array_from_post(array('name', 'email', 'mobile', 'cover_letter'));
        // Resume File upload
        if (!empty($_FILES['resume']['name'])) {
            $val = $this->emp_model->uploadFile('resume');
            $val == TRUE || redirect('employee/dashboard/job_circular');
            $data['resume'] = $val['path'];
        }
        $data['job_circular_id'] = $id;
        $data['employee_id'] = $this->session->userdata('employee_id');
        $where = array('job_circular_id' => $id, 'employee_id' => $data['employee_id']);
        $check_existing_data = $this->emp_model->check_by($where, 'tbl_job_appliactions');
        if (!empty($check_existing_data)) {
            $type = "error";
            $message = "You Already Send This Application !";
        } else {
            $this->emp_model->_table_name = 'tbl_job_appliactions';
            $this->emp_model->_primary_key = 'job_appliactions_id';
            $this->emp_model->save($data);
            // messages for user
            $type = "success";
            $message = "Application Information Successfully Submitted !";
        }
        set_message($type, $message);
        redirect('employee/dashboard');
    }

    public function profile() {
        $data['title'] = "User Profile";
        $employee_id = $this->session->userdata('employee_id');

        //get employee details
        $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);

        $data['subview'] = $this->load->view('employee/user_profile', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    /*
     * Mailbox Controllers starts ------
     */

    public function inbox() {
        $data['title'] = "Inbox";
        $data['menu'] = array("mailbox" => 1, "inbox" => 1);
        $email = $this->session->userdata('email');
//        echo $email;
//        die();
        $data['unread_mail'] = count($this->emp_model->get_inbox_message($email, TRUE));
        $data['get_inbox_message'] = $this->emp_model->get_inbox_message($email);
        $data['subview'] = $this->load->view('employee/inbox', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function read_inbox_mail($id) {
        $data['menu'] = array("mailbox" => 1, "inbox" => 1);
        $data['title'] = "Inbox Details";
        $this->emp_model->_table_name = 'tbl_inbox';
        $this->emp_model->_order_by = 'inbox_id';
        $data['read_mail'] = $this->emp_model->get_by(array('inbox_id' => $id), true);
        $this->emp_model->_primary_key = 'inbox_id';
        $updata['view_status'] = '1';
        $data['reply'] = 1;
        $this->emp_model->save($updata, $id);
        $data['subview'] = $this->load->view('employee/read_mail', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function sent() {
        $data['menu'] = array("mailbox" => 1, "sent" => 1);
        $data['title'] = "Sent Item";
        $employee_id = $this->session->userdata('employee_id');
        $data['get_sent_message'] = $this->emp_model->get_sent_message($employee_id);
        $data['subview'] = $this->load->view('employee/sent', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function read_sent_mail($id) {
        $data['menu'] = array("mailbox" => 1, "sent" => 1);
        $data['title'] = "Sent Details";
        $this->emp_model->_table_name = 'tbl_sent';
        $this->emp_model->_order_by = 'sent_id';
        $data['read_mail'] = $this->emp_model->get_by(array('sent_id' => $id), true);
        $data['subview'] = $this->load->view('employee/read_mail', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function draft() {
        $data['menu'] = array("mailbox" => 1, "draft" => 1);
        $data['title'] = "Draft";
        $employee_id = $this->session->userdata('employee_id');
        $data['draft_message'] = $this->emp_model->get_draft_message($employee_id);
        $data['subview'] = $this->load->view('employee/draft', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function trash($action = NULL) {
        $data['menu'] = array("mailbox" => 1, "trash" => 1);
        $employee_id = $this->session->userdata('employee_id');
        if ($action == 'sent') {
            $data['title'] = 'Trash Sent Item';
            $data['trash_view'] = 'sent';
            $data['get_sent_message'] = $this->emp_model->get_sent_message($employee_id, TRUE);
        } elseif ($action == 'draft') {
            $data['title'] = 'Trash Draft Item';
            $data['trash_view'] = 'draft';
            $data['draft_message'] = $this->emp_model->get_draft_message($employee_id, TRUE);
        } else {
            $data['title'] = 'Trash inbox Item';
            $data['trash_view'] = 'inbox';
            $data['get_inbox_message'] = $this->emp_model->get_inbox_message($employee_id, '', TRUE);
        }
        $data['subview'] = $this->load->view('employee/trash', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function compose($id = NULL, $reply = NULL) {
        $data['title'] = "Compose Mail";
        $data['menu'] = array("mailbox" => 1, "inbox" => 1);
        $this->emp_model->_table_name = 'tbl_employee';
        $this->emp_model->_order_by = 'employee_id';
        $data['get_employee_email'] = $this->emp_model->get_by(array('status' => '1'), FALSE);
        $data['editor'] = $this->data;
        if (!empty($reply)) {
            $data['inbox_info'] = $this->emp_model->check_by(array('inbox_id' => $id), 'tbl_inbox');
        } elseif (!empty($id)) {
            $this->emp_model->_table_name = 'tbl_draft';
            $this->emp_model->_order_by = 'draft_id';
            $data['get_draft_info'] = $this->emp_model->get_by(array('draft_id' => $id), TRUE);
        }

        $data['subview'] = $this->load->view('employee/compose_mail', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function delete_mail($action, $from_trash = NULL, $v_id = NULL) {
        // get sellected id into inbox email page
        $selected_id = $this->input->post('selected_id', TRUE);
        if (!empty($selected_id)) { // check selected message is empty or not
            foreach ($selected_id as $v_id) {
                if (!empty($from_trash)) {
                    if ($action == 'inbox') {
                        $this->emp_model->_table_name = 'tbl_inbox';
                        $this->emp_model->delete_multiple(array('inbox_id' => $v_id));
                    } elseif ($action == 'sent') {
                        $this->emp_model->_table_name = 'tbl_sent';
                        $this->emp_model->delete_multiple(array('sent_id' => $v_id));
                    } else {

                        $this->emp_model->_table_name = 'tbl_draft';
                        $this->emp_model->delete_multiple(array('draft_id' => $v_id));
                    }
                } else {
                    $value = array('deleted' => 'Yes');
                    if ($action == 'inbox') {
                        $this->emp_model->set_action(array('inbox_id' => $v_id), $value, 'tbl_inbox');
                    } elseif ($action == 'sent') {
                        $this->emp_model->set_action(array('sent_id' => $v_id), $value, 'tbl_sent');
                    } else {
                        $this->emp_model->set_action(array('draft_id' => $v_id), $value, 'tbl_draft');
                    }
                }
            }
            $type = "success";
            $message = 'Meassage Information Permanently Deleted !';
        } elseif (!empty($v_id)) {
            if ($action == 'inbox') {
                $this->emp_model->_table_name = 'tbl_inbox';
                $this->emp_model->delete_multiple(array('inbox_id' => $v_id));
            } elseif ($action == 'sent') {
                $this->emp_model->_table_name = 'tbl_sent';
                $this->emp_model->delete_multiple(array('sent_id' => $v_id));
            } else {
                $this->emp_model->_table_name = 'tbl_draft';
                $this->emp_model->delete_multiple(array('draft_id' => $v_id));
            }
            if ($action == 'inbox') {
                redirect('employee/dashboard/trash/inbox');
            } elseif ($action == 'sent') {
                redirect('employee/dashboard/trash/sent');
            } else {
                redirect('employee/dashboard/trash/draft');
            }
            $type = "success";
            $message = 'Meassage Information Successfully Deleted !';
        } else {
            $type = "error";
            $message = "Please Select a message !";
        }
        set_message($type, $message);
        if ($action == 'inbox') {
            redirect('employee/dashboard/inbox');
        } elseif ($action == 'sent') {
            redirect('employee/dashboard/sent');
        } else {
            redirect('employee/dashboard/draft');
        }
    }

    public function delete_inbox_mail($id) {
        $value = array('deleted' => 'Yes');
        $this->emp_model->set_action(array('inbox_id' => $id), $value, 'tbl_inbox');
        $type = "success";
        $message = 'Meassage Information Successfully Deleted !';
        set_message($type, $message);
        redirect('employee/dashboard/inbox');
    }

    public function send_mail($id = NULL) {

        $discard = $this->input->post('discard', TRUE);

        if (!empty($discard)) {
            redirect('employee/dashboard/inbox');
        }
        $all_email = $this->input->post('to', TRUE);
        // get all email address
        foreach ($all_email as $v_email) {
            $data = $this->emp_model->array_from_post(array('subject', 'message_body'));
            if (!empty($_FILES['attach_file']['name'])) {
                $old_path = $this->input->post('attach_file_path');
                if ($old_path) {
                    unlink($old_path);
                }
                $val = $this->emp_model->uploadAllType('attach_file');
                $val == TRUE || redirect('employee/dashboard/compose');
                // save into send table
                $data['attach_filename'] = $val['fileName'];
                $data['attach_file'] = $val['path'];
                $data['attach_file_path'] = $val['fullPath'];
                // save into inbox table
                $idata['attach_filename'] = $val['fileName'];
                $idata['attach_file'] = $val['path'];
                $idata['attach_file_path'] = $val['fullPath'];
            }
            $data['to'] = $v_email;
            /*
             * Email Configuaration 
             */
            // get company name
            $name = $this->session->userdata('email');
            $info = $data['subject'];
            // set from email
            $from = array($name, $info);
            // set sender email
            $to = $v_email;
            //set subject/+
            $subject = $data['subject'];
            $data['employee_id'] = $this->session->userdata('employee_id');
            $data['message_time'] = date('Y-m-d H:i:s');
            $draf = $this->input->post('draf', TRUE);
            if (!empty($draf)) {
                $data['to'] = serialize($all_email);

                // save into send 
                $this->emp_model->_table_name = 'tbl_draft';
                $this->emp_model->_primary_key = 'draft_id';
                $this->emp_model->save($data, $id);
                redirect('employee/dashboard/inbox');
            } else {
                // save into send 
                $this->emp_model->_table_name = 'tbl_sent';
                $this->emp_model->_primary_key = 'sent_id';
                $send_id = $this->emp_model->save($data);
                // get mail info by send id to send            
                $this->emp_model->_order_by = 'sent_id';
                $data['read_mail'] = $this->emp_model->get_by(array('sent_id' => $send_id), true);
                // set view page
                $view_page = $this->load->view('employee/read_mail', $data, TRUE);
                $this->load->library('mail');
                $send_email = $this->mail->sendEmail($from, $to, $subject, $view_page);

                // save into inbox table procees 
                $idata['to'] = $data['to'];
                $idata['from'] = $this->session->userdata('email');
                $idata['employee_id'] = $this->session->userdata('employee_id');
                $idata['subject'] = $data['subject'];
                $idata['message_body'] = $data['message_body'];
                $idata['message_time'] = date('Y-m-d H:i:s');

                // save into inbox
                $this->emp_model->_table_name = 'tbl_inbox';
                $this->emp_model->_primary_key = 'inbox_id';
                $this->emp_model->save($idata);
            }
        }
        if ($send_email) {
            $type = "success";
            $message = 'Message Information Suceessfully Send';
            set_message($type, $message);
            redirect('employee/dashboard/sent');
        } else {
            show_error($this->email->print_debugger());
        }
    }

    public function restore($action, $id) {
        $value = array('deleted' => 'No');
        if ($action == 'inbox') {
            $this->emp_model->set_action(array('inbox_id' => $id), $value, 'tbl_inbox');
        } elseif ($action == 'sent') {
            $this->emp_model->set_action(array('sent_id' => $id), $value, 'tbl_sent');
        } else {
            $this->emp_model->set_action(array('draft_id' => $id), $value, 'tbl_draft');
        }
        if ($action == 'inbox') {
            redirect('employee/dashboard/inbox');
        } elseif ($action == 'sent') {
            redirect('employee/dashboard/sent');
        } else {
            redirect('employee/dashboard/draft');
        }
    }

    /*
     * Mailbox Controllers ends ------
     */

    public function change_password() {
        $data['menu'] = array("profile" => 1, "change_password" => 1);
        $data['title'] = "Change Password";
        $data['subview'] = $this->load->view('employee/change_password', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }    

    public function check_employee_password($val) {
        $password = $this->hash($val);
        $check_dupliaction_id = $this->emp_model->check_by(array('password' => $password), 'tbl_employee_login');
        if (empty($check_dupliaction_id)) {
            $result = '<small style="padding-left:10px;color:red;font-size:10px">' . lang('password_do_not_match') . '<small>';
        } else {
            $result = NULL;
        }
        echo $result;
    }

    public function set_password() {
        $employee_login_id = $this->session->userdata('employee_login_id');
        $data['password'] = $this->hash($this->input->post('new_password'));
        $this->emp_model->_table_name = 'tbl_employee_login';
        $this->emp_model->_primary_key = 'employee_login_id';
        $this->emp_model->save($data, $employee_login_id);
        $type = "success";
        $message = lang('password_updated');
        set_message($type, $message);
        redirect('employee/dashboard/change_password'); //redirect page
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }
            
    
     public function set_language($lang) {
        $this->session->set_userdata('lang', $lang);
        redirect($_SERVER["HTTP_REFERER"]);
    }


     public function settings($id = NULL) {
        $id= $this->session->userdata('employee_id');

        $data['title'] = lang('employee_list');
        $data['page_header'] = lang('employee_page_header'); //Page header title

        $data['active'] = 1;
        $data['all_employee_info'] = $this->db->get('tbl_employee')->result();

        if (!empty($id)) {// retrive data from db by id 
            $data['active'] = 2;
            $data['employee_info'] = $this->employee_model->all_emplyee_info($id);
            $data['emp_info'] = $this->db->where('employee_id', $id)->get('tbl_employee')->row();
//            var_dump($data['employee_info']);
//            die();
            if (empty($data['employee_info'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('employee/_layout_main.php');
            }
        } else {
            $data['active'] = 1;
        }

        // retrive all data from department table
        $this->employee_model->_table_name = "tbl_department"; //table name
        $this->employee_model->_order_by = "department_id";
        $all_dept_info = $this->employee_model->get();
        // get all department info and designation info
        foreach ($all_dept_info as $v_dept_info) {
            $data['all_department_info'][$v_dept_info->department_name] = $this->employee_model->get_add_department_by_id($v_dept_info->department_id);
        }
        // retrive country
        $this->employee_model->_table_name = "countries"; //table name
        $this->employee_model->_order_by = "countryName";
        $data['all_country'] = $this->employee_model->get();


        $data['subview'] = $this->load->view('employee/settings', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }



    public function save_employee($id = NULL) {
        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start *** 
        $id= $this->session->userdata('employee_id');
        
        //input post
        $data = $this->employee_model->array_from_post(array('first_name', 'last_name','maratial_status','gender', 'nationality', 'interac','paypal','present_address', 'city', 'country_id', 'mobile', 'phone', 'email', 'employment_id', 'designations_id',
            'date_of_birth','joining_date','present_address2','middle_name','state_province_region','zip_postal','bitcoin','etherum'));
        //image upload

        if (!empty($_FILES['photo']['name'])) {
            $old_path = $this->input->post('old_path');
            if ($old_path) {
                unlink($old_path);
            }

            $val = $this->employee_model->uploadImage('photo');
            $val == TRUE || redirect('employee/dashboard/');
            $data['photo'] = $val['path'];
            $data['photo_a_path'] = $val['fullPath'];
        }

        // ************* Save into Employee Table 
        $this->employee_model->_table_name = "tbl_employee"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        if (!empty($id)) {
            $employee_id = $id;
            $data['status'] =1;
            $this->employee_model->save($data, $id);
        } else {
            $data['status'] = 1;
            $employee_id = $this->employee_model->save($data);
        }
        // save into tbl employee login 
        $this->employee_model->_table_name = "tbl_employee_login"; // table name
        $this->employee_model->_primary_key = "employee_login_id"; // $id
        // check employee login details exsist or not 
        // if existing do not save 
        // else save the login details
        $check_existing_data = $this->employee_model->check_by(array('employee_id' => $employee_id), 'tbl_employee_login');
        $ldata['employee_id'] = $employee_id;

        $ldata['activate'] = $data['status'];


        if (!empty($check_existing_data)) {
            $this->employee_model->save($ldata, $check_existing_data->employee_login_id);
        } else {
            $this->employee_model->save($ldata);
        }
        // 
        // **** Employee Personal Details,Contact Details and Official Status Save And Update End *** 
        // ** Employee Bank Information Save and Update Start  **
        $bank_data = $this->employee_model->array_from_post(array('bank_name','holder_name','bank_address','aba_check_routing_number','ach_routing_transit_number', 'wire_routing_nubmer','bank_account_number'));
        $bank_data['employee_id'] = $employee_id;
        $this->employee_model->_table_name = "tbl_employee_bank"; // table name
        $this->employee_model->_primary_key = "employee_bank_id"; // $id

        $employee_bank_id = $this->input->post('employee_bank_id', TRUE);

        if (!empty($employee_bank_id)) {
            $this->employee_model->save($bank_data, $employee_bank_id);
        } else {
            $this->employee_model->save($bank_data);
        }
        // * Employee Bank Information Save and Update End   *
        // ** Employee Document Information Save and Update Start  **
        // Resume File upload

        if (!empty($_FILES['resume']['name'])) {
            $old_path = $this->input->post('resume_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->employee_model->uploadFile('resume');
            $val == TRUE || redirect('employee/dashboard/');
            $document_data['resume_filename'] = $val['fileName'];
            $document_data['resume'] = $val['path'];
            $document_data['resume_path'] = $val['fullPath'];
        }

        // offer_letter File upload
        if (!empty($_FILES['offer_letter']['name'])) {
            $old_path = $this->input->post('offer_letter_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->employee_model->uploadFile('offer_letter');
            $val == TRUE || redirect('employee/dashboard/');
            $document_data['offer_letter_filename'] = $val['fileName'];
            $document_data['offer_letter'] = $val['path'];
            $document_data['offer_letter_path'] = $val['fullPath'];
        }
        // joining_letter File upload
        if (!empty($_FILES['joining_letter']['name'])) {
            $old_path = $this->input->post('joining_letter_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->employee_model->uploadFile('joining_letter');
            $val == TRUE || redirect('employee/dashboard/');
            $document_data['joining_letter_filename'] = $val['fileName'];
            $document_data['joining_letter'] = $val['path'];
            $document_data['joining_letter_path'] = $val['fullPath'];
        }

        // contract_paper File upload
        if (!empty($_FILES['contract_paper']['name'])) {
            $old_path = $this->input->post('contract_paper_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->employee_model->uploadFile('contract_paper');
            $val == TRUE || redirect('employee/dashboard/');
            $document_data['contract_paper_filename'] = $val['fileName'];
            $document_data['contract_paper'] = $val['path'];
            $document_data['contract_paper_path'] = $val['fullPath'];
        }
        // id_proff File upload
        if (!empty($_FILES['id_proff']['name'])) {
            $old_path = $this->input->post('id_proff_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->employee_model->uploadFile('id_proff');
            $val == TRUE || redirect('employee/dashboard/');
            $document_data['id_proff_filename'] = $val['fileName'];
            $document_data['id_proff'] = $val['path'];
            $document_data['id_proff_path'] = $val['fullPath'];
        }
        // id_proff File upload
        if (!empty($_FILES['other_document']['name'])) {
            $old_path = $this->input->post('other_document_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->employee_model->uploadFile('other_document');
            $val == TRUE || redirect('employee/dashboard/');
            $document_data['other_document_filename'] = $val['fileName'];
            $document_data['other_document'] = $val['path'];
            $document_data['other_document_path'] = $val['fullPath'];
        } else {
            
        }

        $document_data['employee_id'] = $employee_id;

        $this->employee_model->_table_name = "tbl_employee_document"; // table name
        $this->employee_model->_primary_key = "document_id"; // $id
        $document_id = $this->input->post('document_id', TRUE);
        if (!empty($document_id)) {
            $this->employee_model->save($document_data, $document_id);
        } else {
            $this->employee_model->save($document_data);
        }
        // ***Employee Document Information Save and Update End   ***
        // messages for user
        $type = "success";
        $message = lang('employee_info_saved');
        set_message($type, $message);
        redirect('employee/dashboard/'); //redirect page
    }

    public function save_team_links($id = NULL)
    {
        $data = array();
        $sum = $this->input->post('sum');
        $fb = $this->input->post('fb');
        $twiter = $this->input->post('twiter');
        $linkidn = $this->input->post('linkidn');
        $full_name = $this->input->post('full_name');
//
        $this->emp_model->_table_name = "tbl_team"; // table name
        $team_id = $this->input->post('team_id');
//        $this->employee_model->_primary_key = "team_id"; // $id

        for ($i = 0; $i < $sum; $i++) {
            $data['fb'] = $fb[$i];
            $data['twiter'] = $twiter[$i];
            $data['linkidn'] = $linkidn[$i];
            $data['full_name'] = $full_name[$i];
            if (!empty($team_id[$i])) {
                $this->emp_model->_primary_key = 'team_id';
                $this->emp_model->save($data, $team_id[$i]);
            } else {
//                var_dump ($data);
//                die();
                $data['task_contact_id'] = $id;
                $this->emp_model->save($data);

            }

        }
        redirect("employee/dashboard/view_task_contact_details/$id");
    }


    public function save_advisor_links($id = NULL)
    {
        $data = array();
        $sum = $this->input->post('sum');
        $fb = $this->input->post('fb');
        $twiter = $this->input->post('twiter');
        $linkidn = $this->input->post('linkidn');
        $full_name = $this->input->post('full_name');
//
        $this->emp_model->_table_name = "tbl_advisor"; // table name
        $team_id = $this->input->post('advisor_id');
//        $this->employee_model->_primary_key = "team_id"; // $id

        for ($i = 0; $i < $sum; $i++) {
            $data['fb'] = $fb[$i];
            $data['twiter'] = $twiter[$i];
            $data['linkidn'] = $linkidn[$i];
            $data['full_name'] = $full_name[$i];
            if (!empty($team_id[$i])) {
//
                $this->emp_model->_primary_key = 'advisor_id';
                $this->emp_model->save($data, $team_id[$i]);
            } else {
//
                $data['task_contact_id'] = $id;
                $this->emp_model->save($data);

            }

        }
        redirect("employee/dashboard/view_task_contact_details/$id");
    }

        public function save_partner_links($id = NULL){
            $data=array();
            $sum =  $this->input->post('sum');
            $fb                  = $this->input->post('fb');
            $twiter              = $this->input->post('twiter');
            $linkidn             = $this->input->post('linkidn');
            $full_name           = $this->input->post('full_name');
            $this->emp_model->_table_name = "tbl_partner"; // table name
            $team_id            = $this->input->post('partner_id');

            for($i=0;$i<$sum;$i++){
                $data['fb'] = $fb[$i];
                $data['twiter'] = $twiter[$i];
                $data['linkidn'] =$linkidn[$i];
                $data['full_name'] = $full_name[$i];
                if(!empty($team_id[$i])){

                    $this->emp_model->_primary_key = 'partner_id';
                    $this->emp_model->save($data,$team_id[$i]);
                }else{
//                var_dump ($data);
//                die();
                    $data['task_contact_id']  = $id;
                    $this->emp_model->save($data);

                }

            }
            redirect("employee/dashboard/view_task_contact_details/$id");
    }

    public function delete_team_link($id = NULL, $id2 = NULL)
    {
        $this->task_contact_model->delete_team_link(['team_id'=>$id]);
        redirect('employee/dashboard/view_task_contact_details/' . $id2. '/' . $data['active']= 4 );

    }
    public function delete_advisor_link($id = NULL, $id2 = NULL)
    {
        $this->task_contact_model->delete_advisor_link(['advisor_id'=>$id]);
        redirect('employee/dashboard/view_task_contact_details/' . $id2. '/' . $data['active'] = 4);

    }
    public function delete_partner_link($id = NULL, $id2 = NULL)
    {
        $this->task_contact_model->delete_partner_link(['partner_id'=>$id]);
        redirect('employee/dashboard/view_task_contact_details/' . $id2. '/' . $data['active'] = 4);

    }

    public function employees($id = NULL) {
        $client_id = $this->session->userdata('employee_id');

        $data['menu'] = array("employee" => 1);
        $data['title'] = lang('employee_list');
        $data['page_header'] = lang('employee_page_header'); //Page header title

        $data['active'] = 1;
        $data['all_employee_info'] = array();
        $clients_employee = $this->employee_model->get_all_clients_employee($client_id);
        foreach ($clients_employee as $client) {
            $data['all_employee_info'][] = $this->employee_model->all_employee($client->employee_id);

        }


        if (!empty($id)) {// retrive data from db by id
            $data['active'] = 2;
            $data['employee_info'] = $this->employee_model->all_emplyee_info($id);

            $data['emp_info'] = $this->db->where('employee_id', $id)->get('tbl_employee')->row();

            if (empty($data['employee_info'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('employee/dashboard/add_employee');
            }
        } else {
            $data['active'] = 1;
        }

        // retrive all data from department table
        $this->employee_model->_table_name = "tbl_department"; //table name
        $this->employee_model->_order_by = "department_id";
        $all_dept_info = $this->employee_model->get();
        // get all department info and designation info
        foreach ($all_dept_info as $v_dept_info) {
            $data['all_department_info'][$v_dept_info->department_name] = $this->employee_model->get_add_department_by_id($v_dept_info->department_id);
        }
        // retrive country
        $this->employee_model->_table_name = "countries"; //table name
        $this->employee_model->_order_by = "countryName";
        $data['all_country'] = $this->employee_model->get();




        $data['subview'] = $this->load->view('employee/employee/employee_list', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }




    public function view_employee($id = NULL) {
        $data['title'] = lang('view_employee');
        $data['page_header'] = lang('employee_page_header'); //Page header title


        if (!empty($id)) {// retrive data from db by id
            $data['employee_info'] = $this->employee_model->all_emplyee_info($id);
            if (empty($data['employee_info'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('employee/employee/employee_list');
            }
        }
        $data['subview'] = $this->load->view('employee/employee/view_employee', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }



    public function employee_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_employee_info'] = $this->employee_model->all_emplyee_info();
        $this->load->helper('dompdf');
        $view_file = $this->load->view('employee/employee/employee_list_pdf', $data, true);
        pdf_create($view_file, 'Employee List');
    }

    public function make_pdf($employee_id) {
        $data['title'] = "Employee List";
        $data['employee_info'] = $this->employee_model->all_emplyee_info($employee_id);
        $this->load->helper('dompdf');
        $view_file = $this->load->view('employee/employee/employee_view_pdf', $data, true);
        pdf_create($view_file, $data['employee_info']->first_name . ' ' . $data['employee_info']->last_name);
    }

    public function employee_task($id = NULL) {
        $data['title'] = 'Employee Task';
        $data['menu'] = array("employee_task" => 1);
        // get all employee info
        $client_id = $this->session->userdata('employee_id');
        $this->task_model->_table_name = 'tbl_employee';
        $this->task_model->_order_by = 'designations_id';
        $data['employee_info'] = $this->task_model->get_by(array('status' => 1), FALSE);
        //get all training information
        $data['all_task_info'] = $this->task_model->get_clients_all_task_info(NULL,$client_id);

        if ($id) { // retrive data from db by id
            $data['active'] = 2;
            //get all task information
            $data['task_info'] = $this->task_model->get_all_task_info($id);
        } else {
            $data['active'] = 1;
        }

        $data['editor'] = $this->data;

        $data['subview'] = $this->load->view('employee/employee_task', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function save_task($id = NULL) {

        $data = $this->task_model->array_from_post(array(
            'task_name',
            'task_description',
            'task_start_date',
            'due_date',
            'task_hour',
            'task_progress',
            'task_status'));
        $data['assigned_from'] = $this->session->userdata('employee_id');
//        var_dump($data);
//        die();
        $assigned_to = $this->input->post("assigned_to");
        foreach ($assigned_to as $assig){
            $data['assigned_to'] = $assig;
            $this->task_model->_table_name = "tbl_task"; // table name
            $this->task_model->_primary_key = "task_id"; // $id
            $this->task_model->save($data, $id);
        }
        //save data into table.


        $type = "success";
        $message = lang('save_task');
        set_message($type, $message);
        redirect('employee/dashboard/employee_task');
    }

    public function update_status($id = NULL) {

        $data = $this->task_model->array_from_post(array(
            'task_progress',
            'task_status'));


        //save data into table.
        $this->task_model->_table_name = "tbl_task"; // table name
        $this->task_model->_primary_key = "task_id"; // $id
        $this->task_model->save($data, $id);

        $type = "success";
        $message = lang('task_updated');
        set_message($type, $message);
        redirect('employee/dashboard/view_task_details/' . $id);
    }

    public function delete_task($id = NULL) {

        $this->task_model->_table_name = "tbl_task";
        $this->task_model->_primary_key = "task_id";
        $this->task_model->delete($id);

        // messages for user
        $type = "error";
        $message = lang('deleted_task');
        set_message($type, $message);

        redirect('employee/dashboard/employee_task');
    }

    public function save_task_attachment($task_attachment_id = NULL) {
        $data = $this->emp_model->array_from_post(array('title', 'task_description', 'task_id'));
        $user_type = $this->session->userdata('user_type');
        if ($user_type == 1) {
            $data['user_id'] = $this->session->userdata('employee_id');
        } else {
            $data['employee_id'] = $this->session->userdata('employee_id');
        }
        // save and update into tbl_files
        $this->emp_model->_table_name = "tbl_task_attachment"; //table name
        $this->emp_model->_primary_key = "task_attachment_id";
        if (!empty($task_contact_attachment_id)) {
            $id = $task_contact_attachment_id;
            $this->emp_model->save($data, $id);
            $msg = lang('task_file_updated');
        } else {
            $id = $this->emp_model->save($data);
            $msg = lang('task_file_added');
        }

        if (!empty($_FILES['task_files']['name']['0'])) {
            $old_path_info = $this->input->post('uploaded_path');
            if (!empty($old_path_info)) {
                foreach ($old_path_info as $old_path) {
                    unlink($old_path);
                }
            }
            $mul_val = $this->emp_model->multi_uploadAllType('task_files');

            foreach ($mul_val as $val) {
                $val == TRUE || redirect('employee/dashboard/view_task_details/3/' . $data['task_id']);
                $fdata['files'] = $val['path'];
                $fdata['file_name'] = $val['fileName'];
                $fdata['uploaded_path'] = $val['fullPath'];
                $fdata['size'] = $val['size'];
                $fdata['ext'] = $val['ext'];
                $fdata['is_image'] = $val['is_image'];
                $fdata['image_width'] = $val['image_width'];
                $fdata['image_height'] = $val['image_height'];
                $fdata['task_attachment_id'] = $id;
                $this->emp_model->_table_name = "tbl_task_uploaded_files"; // table name
                $this->emp_model->_primary_key = "uploaded_files_id"; // $id
                $this->emp_model->save($fdata);
            }
        }
        // messages for user
        $type = "success";
        $message = $msg;
        set_message($type, $message);
        redirect('employee/dashboard/view_task_details/' . $data['task_id'] . '/3');
    }
}


