<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admistrator
 *
 * @author pc mart ltd
 */
class Dashboard extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index() {
        $data['title'] = lang('control_panel');
        $data['page_header'] = lang('dashboard');
        $employee_id = $this->session->userdata('employee_id');
        $data['get_result'] = $this->admin_model->get_event_by_id($employee_id);
        $data['get_holiday'] = $this->admin_model->check_holiday_by_date();
        $data['recent_application'] = $this->admin_model->get_recent_application();
        // recent notice
        $data['notice_info'] = $this->admin_model->get_all_notice();
        //total award count
        $this->admin_model->_table_name = "tbl_employee_award"; //table name
        $this->admin_model->_order_by = "employee_award_id"; // order by 
        $data['total_award'] = count($this->admin_model->get()); // get result
        //total expense count
        $this->admin_model->_table_name = "tbl_expense"; //table name
        $this->admin_model->_order_by = "expense_id"; // order by 
        $total_expense = $this->admin_model->get(); // get result

        $total = 0;
        foreach ($total_expense as $v_expense) {
            $total+=$v_expense->amount;
        }
        $data['total_expense'] = $total;
        // get inbxo message
        $ginfo = $this->session->userdata('genaral_info');
        if (!empty($ginfo)) {
            $email = $ginfo[0]->email;
            // get all inbox by email 
            $data['get_inbox_message'] = $this->admin_model->get_inbox_message($email);
        }
        // get absent employee         
        $data['absent_employee'] = $this->admin_model->get_absent_employee();

        // upcoming birthday
        $data['employee'] = $this->admin_model->get_upcoming_birthday(); // get resutl
        //total employee count
        $this->admin_model->_table_name = "tbl_employee"; //table name
        $this->admin_model->_order_by = "employee_id"; // order by
        $data['total_employee'] = count($this->admin_model->get()); // get resutl 
        //
        // active check with current month
        $data['current_month'] = date('m');

        if ($this->input->post('year', TRUE)) { // if input year 
            $data['year'] = $this->input->post('year', TRUE);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }

        // get all expense list by year and month
        $data['all_expense'] = $this->get_expense_list($data['year']);
//        echo "<pre>";
//        var_dump($data);
//        die();
        $data['subview'] = $this->load->view('admin/main_content', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function get_expense_list($year) {// this function is to create get monthy recap report 
        for ($i = 1; $i <= 12; $i++) { // query for months
            if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                $start_date = $year . "-" . '0' . $i . '-' . '01';
                $end_date = $year . "-" . '0' . $i . '-' . '31';
            } else {
                $start_date = $year . "-" . $i . '-' . '01';
                $end_date = $year . "-" . $i . '-' . '31';
            }
            $get_expense_list[$i] = $this->admin_model->get_expense_list_by_date($start_date, $end_date); // get all report by start date and in date 
        }
        return $get_expense_list; // return the result
    }

    public function set_language($lang) {
        $this->session->set_userdata('lang', $lang);
        redirect($_SERVER["HTTP_REFERER"]);
    }

}
