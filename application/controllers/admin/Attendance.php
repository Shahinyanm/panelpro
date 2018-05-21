<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Attendance extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('attendance_model');
    }

    public function overtime($overtime_id = NULL) {
        $data['title'] = lang('overtime_details');
        $data['page_header'] = lang('overtime_management');

        // active check with current month
        $data['current_month'] = date('m');
        $data['active'] = 1;

        if ($this->input->post('year', TRUE)) { // if input year 
            $data['year'] = $this->input->post('year', TRUE);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }

        // retrive all data from department table
        $this->attendance_model->_table_name = "tbl_department"; //table name
        $this->attendance_model->_order_by = "department_id";
        $all_dept_info = $this->attendance_model->get();
        // get all department info and designation info
        foreach ($all_dept_info as $v_dept_info) {
            $data['all_department_info'][$v_dept_info->department_name] = $this->attendance_model->get_designation_by_dept_id($v_dept_info->department_id);
        }

        if (!empty($overtime_id)) {
            $data['active'] = 2;
            // get designation id by employee id            
            $data['overtime_info'] = $this->attendance_model->get_overtime_info_by_emp_id($overtime_id);
            // get all employee info by designation id
            $this->attendance_model->_table_name = 'tbl_employee';
            $this->attendance_model->_order_by = 'designations_id';
            $data['employee_info'] = $this->attendance_model->get_by(array('designations_id' => $data['overtime_info']->designations_id), FALSE);
        }
        // get all expense list by year and month
        $data['all_overtime_info'] = $this->get_overtime_info($data['year']);

        $data['subview'] = $this->load->view('admin/attendance/overtime', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function get_overtime_info($year, $month = NULL) {// this function is to create get monthy recap report 
        if (!empty($month)) {
            if ($month >= 1 && $month <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                $start_date = $year . "-" . '0' . $month . '-' . '01';
                $end_date = $year . "-" . '0' . $month . '-' . '31';
            } else {
                $start_date = $year . "-" . $month . '-' . '01';
                $end_date = $year . "-" . $month . '-' . '31';
            }
            $get_expense_list = $this->attendance_model->get_overtime_info_by_date($start_date, $end_date); // get all report by start date and in date 
        } else {
            for ($i = 1; $i <= 12; $i++) { // query for months
                if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                    $start_date = $year . "-" . '0' . $i . '-' . '01';
                    $end_date = $year . "-" . '0' . $i . '-' . '31';
                } else {
                    $start_date = $year . "-" . $i . '-' . '01';
                    $end_date = $year . "-" . $i . '-' . '31';
                }
                $get_expense_list[$i] = $this->attendance_model->get_overtime_info_by_date($start_date, $end_date); // get all report by start date and in date 
            }
        }
        return $get_expense_list; // return the result
    }

    public function overtime_report_pdf($year, $month) {
        $data['overtime_info'] = $this->get_overtime_info($year, $month);
        $month_name = date('F', strtotime($year . '-' . $month)); // get full name of month by date query                
        $data['monthyaer'] = $month_name . '  ' . $year;

        $this->load->helper('dompdf');
        $viewfile = $this->load->view('admin/attendance/overtime_report_pdf', $data, TRUE);
        pdf_create($viewfile, 'Overtime Report  - ' . $data['monthyaer']);
    }

    public function save_overtime($id = NULL) {
        $data = $this->attendance_model->array_from_post(array('employee_id', 'overtime_date', 'overtime_hours'));
        // check existing data by employee id and date
        $where = array('employee_id' => $data['employee_id'], 'overtime_date' => $data['overtime_date']);
        // duplicate value check in DB
        if (!empty($id)) { // if id exist in db update data
            $overtime_id = array('overtime_id !=' => $id);
        } else { // if id is not exist then set id as null
            $overtime_id = null;
        }
        $check_existing_data = $this->attendance_model->check_update('tbl_overtime', $where, $overtime_id);
        if (!empty($check_existing_data)) {
            $type = "error";
            $message = lang('overtime_already_exist');
        } else {
            $this->attendance_model->_table_name = "tbl_overtime"; //table name
            $this->attendance_model->_primary_key = "overtime_id";
            $this->attendance_model->save($data, $id);
            $type = "success";
            $message = lang('overtime_saved');
        }
        set_message($type, $message);
        redirect('admin/attendance/overtime'); //redirect page
    }

    public function delete_overtime($id) {
        $this->attendance_model->_table_name = "tbl_overtime"; //table name
        $this->attendance_model->_primary_key = "overtime_id";
        $this->attendance_model->delete($id);
        $type = "success";
        $message = lang('overtime_deleted');
        set_message($type, $message);
        redirect('admin/attendance/overtime'); //redirect page
    }

    public function timechange_request() {
        $data['title'] = lang('time_changes_request');
        $data['page_header'] = lang('attendance_management');

        $data['all_clock_history'] = $this->attendance_model->get_all_clock_history();
        $data['subview'] = $this->load->view('admin/attendance/list_all_request', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function view_timerequest($clock_history_id) {
        $data['title'] = lang('view_time_change_request');
        $data['page_header'] = lang('attendance_management');
        $this->attendance_model->_table_name = "tbl_clock_history"; //table name
        $this->attendance_model->_primary_key = 'clock_history_id';
        $updata['view_status'] = '1';
        $this->attendance_model->save($updata, $clock_history_id);
        $data['clock_history'] = $this->attendance_model->get_all_clock_history($clock_history_id);
        $data['subview'] = $this->load->view('admin/attendance/request_details', $data, FALSE);
        $this->load->view('admin/_layout_modal_lg', $data);
    }

    public function set_time_status($history_id) {
        // get input status 
        // if status == 1 its pending 
        // if status == 2 its accept  and set timein/timeout into tbl_clock
        // and 3 == reject
        $status = $this->input->post('status', TRUE);
        if ($status == 2) {
            $clock_id = $this->input->post('clock_id', TRUE);
            $clockin_time = $this->input->post('clockin_time', TRUE);
            if (!empty($clockin_time)) {
                $data['clockin_time'] = $clockin_time;
            }
            $clockout_time = $this->input->post('clockout_time', TRUE);
            if (!empty($clockout_time)) {
                $data['clockout_time'] = $clockout_time;
            }
            $this->attendance_model->_table_name = 'tbl_clock';
            $this->attendance_model->_primary_key = 'clock_id';
            $this->attendance_model->save($data, $clock_id);
            $adata['status'] = $status;

            $this->attendance_model->_table_name = 'tbl_clock_history';
            $this->attendance_model->_primary_key = 'clock_history_id';
            $this->attendance_model->save($adata, $history_id);

            $type = "success";
            $message = lang('time_change_accept');
        } else {
            $data['status'] = $status;
            $this->attendance_model->_table_name = 'tbl_clock_history';
            $this->attendance_model->_primary_key = 'clock_history_id';
            $this->attendance_model->save($data, $history_id);

            $type = "error";
            $message = lang('time_change_decline');
        }

        set_message($type, $message);
        redirect('admin/attendance/timechange_request'); //redirect page
    }

    public function attendance_report() {
        $data['title'] = lang('attendance_report');
        $data['page_header'] = lang('attendance_management');

        $this->attendance_model->_table_name = "tbl_department"; //table name
        $this->attendance_model->_order_by = "department_id";
        $data['all_department'] = $this->attendance_model->get();
        $data['subview'] = $this->load->view('admin/attendance/attendance_report', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function get_report() {
        $department_id = $this->input->post('department_id', TRUE);
        $date = $this->input->post('date', TRUE);

        $month = date('n', strtotime($date));
        $year = date('Y', strtotime($date));
        $num = cal_days_in_month(CAL_GREGORIAN, $month, $year);


        $data['employee_info'] = $this->attendance_model->get_employee_id_by_dept_id($department_id);

        $holidays = $this->global_model->get_holidays(); //tbl working Days Holiday

        if ($month >= 1 && $month <= 9) {
            $yymm = $year . '-' . '0' . $month;
        } else {
            $yymm = $year . '-' . $month;
        }

        $public_holiday = $this->global_model->get_public_holidays($yymm);

        //tbl a_calendar Days Holiday        
        if (!empty($public_holiday)) {
            foreach ($public_holiday as $p_holiday) {
                $p_hday = $this->attendance_model->GetDays($p_holiday->start_date, $p_holiday->end_date);
            }
        }

        foreach ($data['employee_info'] as $sl => $v_employee) {
            $key = 1;
            $x = 0;
            for ($i = 1; $i <= $num; $i++) {

                if ($i >= 1 && $i <= 9) {
                    $sdate = $yymm . '-' . '0' . $i;
                } else {
                    $sdate = $yymm . '-' . $i;
                }
                $day_name = date('l', strtotime("+$x days", strtotime($year . '-' . $month . '-' . $key)));

                $data['week_info'][date('W', strtotime($sdate))][$sdate] = $sdate;

                // get leave info
                if (!empty($holidays)) {
                    foreach ($holidays as $v_holiday) {
                        if ($v_holiday->day == $day_name) {
                            $flag = 'H';
                        }
                    }
                }
                if (!empty($p_hday)) {
                    foreach ($p_hday as $v_hday) {
                        if ($v_hday == $sdate) {
                            $flag = 'H';
                        }
                    }
                }
                if (!empty($flag)) {
                    $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->employee_id] = $this->attendance_model->attendance_report_by_empid($v_employee->employee_id, $sdate, $flag);
                } else {
                    $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->employee_id] = $this->attendance_model->attendance_report_by_empid($v_employee->employee_id, $sdate);
                }
                $key++;
                $flag = '';
            }
        }

        $data['title'] = lang('attendance_report');
        $data['page_header'] = lang('attendance_management');
        $this->attendance_model->_table_name = "tbl_department"; //table name
        $this->attendance_model->_order_by = "department_id";
        $data['all_department'] = $this->attendance_model->get();
        $data['department_id'] = $this->input->post('department_id', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $where = array('department_id' => $department_id);
        $data['dept_name'] = $this->attendance_model->check_by($where, 'tbl_department');

        $data['month'] = date('F-Y', strtotime($yymm));
        $data['subview'] = $this->load->view('admin/attendance/attendance_report', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function create_pdf($department_id, $date) {

        $month = date('n', strtotime($date));
        $year = date('Y', strtotime($date));
        $num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $data['employee_info'] = $this->attendance_model->get_employee_id_by_dept_id($department_id);
        $day = date('d', strtotime($date));

        for ($i = 1; $i <= $num; $i++) {
            $data['dateSl'][] = $i;
        }
        $holidays = $this->global_model->get_holidays(); //tbl working Days Holiday
        if ($month >= 1 && $month <= 9) {
            $yymm = $year . '-' . '0' . $month;
        } else {
            $yymm = $year . '-' . $month;
        }
        $public_holiday = $this->global_model->get_public_holidays($yymm);

        //tbl a_calendar Days Holiday        
        if (!empty($public_holiday)) {
            foreach ($public_holiday as $p_holiday) {
                $p_hday = $this->attendance_model->GetDays($p_holiday->start_date, $p_holiday->end_date);
            }
        }
        foreach ($data['employee_info'] as $sl => $v_employee) {
            $key = 1;
            $x = 0;
            for ($i = 1; $i <= $num; $i++) {

                if ($i >= 1 && $i <= 9) {
                    $sdate = $yymm . '-' . '0' . $i;
                } else {
                    $sdate = $yymm . '-' . $i;
                }
                $day_name = date('l', strtotime("+$x days", strtotime($year . '-' . $month . '-' . $key)));

                $data['week_info'][date('W', strtotime($sdate))][$sdate] = $sdate;

                // get leave info
                if (!empty($holidays)) {
                    foreach ($holidays as $v_holiday) {
                        if ($v_holiday->day == $day_name) {
                            $flag = 'H';
                        }
                    }
                }
                if (!empty($p_hday)) {
                    foreach ($p_hday as $v_hday) {
                        if ($v_hday == $sdate) {
                            $flag = 'H';
                        }
                    }
                }
                if (!empty($flag)) {
                    $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->employee_id] = $this->attendance_model->attendance_report_by_empid($v_employee->employee_id, $sdate, $flag);
                } else {
                    $data['attendace_info'][date('W', strtotime($sdate))][$sdate][$v_employee->employee_id] = $this->attendance_model->attendance_report_by_empid($v_employee->employee_id, $sdate);
                }
                $key++;
                $flag = '';
            }
        }
        $where = array('department_id' => $department_id);
        $data['dept_name'] = $this->attendance_model->check_by($where, 'tbl_department');
        $data['date'] = date('F-Y', strtotime($yymm));
        $this->load->helper('dompdf');

        $view_file = $this->load->view('admin/attendance/attendance_report_pdf', $data, true);
        pdf_create($view_file, date('F-Y', strtotime($yymm)));
    }

}
