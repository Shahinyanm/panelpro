<?php

// session_start();

/**
 * Description of MY_Controller
 *
 * @author Trescoder
 */
class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('admin_model');
        $this->load->model('emp_model');
        $this->load->model('user_model');
        $this->load->model('global_model');


        $lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");
        $this->lang->load($lang, $lang);

        $uri1 = $this->uri->segment(1);
        $uri2 = $this->uri->segment(2);
        $uri3 = $this->uri->segment(3);
        if ($uri3) {
            $uri3 = '/' . $uri3;
        }
        $uriSegment = $uri1 . '/' . $uri2 . $uri3;
        $menu_uri['menu_active_id'] = $this->admin_model->select_menu_by_uri($uriSegment);
        $menu_uri['menu_active_id'] == false || $this->session->set_userdata($menu_uri);

// Login check
//        $exception_uris = array(
//            'login',
//            'login/index/1',
//            'login/index/2',
//            'login/logout'
//        );
//        if (in_array(uri_string(), $exception_uris) == FALSE) {
//            if ($this->login_model->loggedin() == FALSE) {
//                redirect('login');
//            }
//        }

        // check notififation status by where
        $where = array('notify_me' => '1', 'view_status' => '2');

        // check email notification status
        $wheremail =  array('notify_me' => '1', 'view_status' => '2','to' => $this->session->userdata('email'));
        $this->admin_model->_table_name = 'tbl_inbox';
        $this->admin_model->_order_by = 'inbox_id';
        $data['total_email_notification'] = count($this->admin_model->get_admin_mail($wheremail));
        $data['email_notification'] = $this->admin_model->get_admin_mail($wheremail);


        // check notice notification status
        $this->admin_model->_table_name = 'tbl_notice';
        $this->admin_model->_order_by = 'notice_id';
        $data['total_notice_notification'] = count($this->admin_model->get_by($where, FALSE));
        $data['notice_notification'] = $this->admin_model->get_by($where, FALSE);


        //check comment of from admin status
        $this->admin_model->_table_name = 'tbl_task_comment';
        $this->admin_model->_order_by = 'task_comment_id';
        $data['total_comment_request'] = $this->admin_model->get_my_comment_info();
        $data['comment_request'] = $this->admin_model->get_my_comment_info();
//

        //check contact comment of from admin status
        $this->admin_model->_table_name = 'tbl_task_contact_comment';
        $this->admin_model->_order_by = 'task_contact_comment_id';
        $data['total_contact_comment_request'] = $this->admin_model->get_my_contact_comment_info();
        $data['contact_comment_request'] = $this->admin_model->get_my_contact_comment_info();

        // check leave notification status
        $this->admin_model->_table_name = 'tbl_application_list';
        $this->admin_model->_order_by = 'application_list_id';
        $data['total_leave_notifation'] = count($this->admin_model->get_by($where, FALSE));
        $data['leave_notification'] = $this->admin_model->get_emp_leave_info();

        // check leave notification status
        $this->admin_model->_table_name = 'tbl_clock_history';
        $this->admin_model->_order_by = 'clock_history_id';
        $data['total_time_change_request'] = count($this->admin_model->get_by($where, FALSE));
        $data['time_change_request'] = $this->admin_model->get_time_change_request();

        // check employee leave notification status
        $this->emp_model->_table_name = 'tbl_clock_history';
        $this->emp_model->_order_by = 'clock_history_id';
        $data['total_user_time_change_request'] = count($this->emp_model->get_by($where, FALSE));
        $data['user_time_change_request'] = $this->emp_model->get_time_change_request();

        // check employee notice notification status
        $this->emp_model->_table_name = 'tbl_notice';
        $this->emp_model->_order_by = 'notice_id';
        $data['total_user_notice_notification'] = count($this->emp_model->get_my_notice($where, $this->session->userdata('employee_id')));
        $data['user_notice_notification'] = $this->emp_model->get_my_notice($where,$this->session->userdata('employee_id'));


        // check employee events notification status
        $this->emp_model->_table_name = 'tbl_holiday';
        $this->emp_model->_order_by = 'event_id';
        $data['total_user_events_notification'] = count($this->emp_model->get_my_event($where, $this->session->userdata('employee_id')));
        $data['user_events_notification'] = $this->emp_model->get_my_event($where,$this->session->userdata('employee_id'));

        //check task status
        $this->user_model->_table_name = 'tbl_task';
        $this->user_model->_order_by = 'task_id';
        $data['total_task_request'] = count($this->emp_model->get_new_task($where, $this->session->userdata('employee_id')));
        $data['task_request'] = $this->emp_model->get_new_task($where, $this->session->userdata('employee_id'));

        //check task status
        $this->user_model->_table_name = 'tbl_task_contact';
        $this->user_model->_order_by = 'task_contact_id';
        $data['total_task_contact_request'] = count($this->emp_model->get_new_task_contact($where, $this->session->userdata('employee_id')));
        $data['task_contact_request'] = $this->emp_model->get_new_task_contact($where, $this->session->userdata('employee_id'));



        //check comment of from admin status
        $this->emp_model->_table_name = 'tbl_task_comment';
        $this->emp_model->_order_by = 'task_comment_id';
        $data['total_comment_request'] = $this->emp_model->get_my_comment_info($this->session->userdata('employee_id'));
        $data['comment_request'] = $this->emp_model->get_my_comment_info($this->session->userdata('employee_id'));

         //check contact comment of from admin status
        $this->emp_model->_table_name = 'tbl_task_contact_comment';
        $this->emp_model->_order_by = 'task_contact_comment_id';
        $data['total_contact_comment_request'] = $this->emp_model->get_my_contact_comment_info($this->session->userdata('employee_id'));
        $data['contact_comment_request'] = $this->emp_model->get_my_contact_comment_info($this->session->userdata('employee_id'));

        
        // check employee email notification status
        $this->emp_model->_table_name = 'tbl_inbox';
        $this->emp_model->_order_by = 'inbox_id';
        $data['total_user_email_notification'] = count($this->emp_model->get_my_mail($wheremail));
        $data['user_email_notification'] = $this->emp_model->get_my_mail($wheremail );
//        echo "<pre>";
//        var_dump($data['email_notification']);
//        die();

        //check award
        $where2 =  array('notify_me' => '1', 'view_status' => '2','employee_id' =>$this->session->userdata('employee_id'));
        $data['total_award_request'] = count($this->emp_model->get_my_awards($where2));
        $data['task_award'] = $this->emp_model->get_my_awards($where2);
//        echo $this->session->userdata('employee_id');
//        $arr = $this->emp_model->get_my_awards($where, $this->session->userdata('employee_id'));
//        var_dump($arr);
//        die();

        //check event
        $data['total_event_request'] = count($this->emp_model->get_all_events());
        $data['task_event'] = $this->emp_model->get_all_events();


        // set all data into session 
        $_SESSION['notify'] = $data;

        // get all general settings info
        $this->admin_model->_table_name = "tbl_gsettings"; //table name
        $this->admin_model->_order_by = "id_gsettings";
        $info['genaral_info'] = $this->admin_model->get();

        date_default_timezone_set($info['genaral_info'][0]->timezone_name);

        $this->session->set_userdata($info);

        // get all attendance by date        
        $this->admin_model->_table_name = 'tbl_employee';
        $this->admin_model->_order_by = 'employee_id';
        $all_employee_info = $this->admin_model->get_by(array('status' => '1'), FALSE);
        foreach ($all_employee_info as $v_employee) {
//             set timezone to user timezone

            $date = date('Y-m-d', time());

            // get office houre info
            $this->admin_model->_table_name = 'tbl_working_hours';
            $this->admin_model->_order_by = 'working_hours_id';
            $working_hours_info = $this->admin_model->get_by(array('working_hours_id' => '1'), TRUE);
            if (!empty($working_hours_info)) {
                // get all attendance by date        
                $this->admin_model->_table_name = 'tbl_attendance';
                $this->admin_model->_order_by = 'attendance_id';
                $all_attendance_info = $this->admin_model->get_by(array('employee_id' => $v_employee->employee_id, 'date_in' => $date), FALSE);
                // get working holliday
                $holidays = $this->global_model->get_holidays(); //tbl working Days Holiday            
                $day_name = date("l", strtotime(date('Y-m-d')));

                if (!empty($holidays)) {
                    foreach ($holidays as $v_holiday) {
                        if ($v_holiday->day == $day_name) {
                            $yes_holiday[] = $day_name;
                        }
                    }
                }

                // get public holiday
                $public_holiday = $this->admin_model->check_by(array('start_date' => date('Y-m-d')), 'tbl_holiday');

                // auto update data after office hourse start +3 hourse
                $start_time = $working_hours_info->start_hours;
                $reload_time = strtotime("+3 hours", strtotime($start_time));
                $reload_time = date("H:i:s", $reload_time);
                $now = date('H:i:00', time());

                if (empty($public_holiday) || empty($yes_holiday)) {

                    if ($reload_time <= $now) {

                        if (!empty($all_attendance_info)) {
                            
                        } else {
                            // get leave info
                            $atdnc_data['employee_id'] = $v_employee->employee_id;
                            $atdnc_data['date_in'] = $date;
                            $atdnc_data['date_out'] = $date;
                            $atdnc_data['attendance_status'] = 0;
                            $this->admin_model->_table_name = 'tbl_attendance';
                            $this->admin_model->_primary_key = "attendance_id";
                            $this->admin_model->save($atdnc_data);
                        }
                    }
                }
            }
        }
    }

}
