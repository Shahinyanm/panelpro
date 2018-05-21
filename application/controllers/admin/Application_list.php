<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Application_List extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('application_model');
        
    }

    public function index() {
        $data['title'] = lang('application_list');
        $data['page_header'] = lang('application_management');

        $data['all_application_info'] = $this->application_model->get_emp_leave_info();
        $data['subview'] = $this->load->view('admin/application/application_list', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function view_application($id) {
        $data['title'] = lang('application_list');
        $data['page_header'] = lang('application_management');

        $data['application_info'] = $this->application_model->get_emp_leave_info($id);

        // set view status by id
        $where = array('application_list_id' => $id);
        $updata['view_status'] = '1';
        $this->application_model->set_action($where, $updata, 'tbl_application_list');

        $data['subview'] = $this->load->view('admin/application/application_details', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function set_action($id) {

        $data['application_status'] = $this->input->post('application_status', TRUE);
        if (!empty($data['application_status'])) {
            $cdata['application_status'] = $data['application_status'];
        }
        $cdata['comments'] = $this->input->post('comment', TRUE);
        if ($data['application_status'] == 2) {
            $atdnc_data = $this->application_model->array_from_post(array('employee_id', 'leave_category_id', 'approve_by'));
            $leave_start_date = $this->input->post('leave_start_date', TRUE);
            $leave_end_date = $this->input->post('leave_end_date', TRUE);

            $get_dates = $this->application_model->GetDays($leave_start_date, $leave_end_date);

            foreach ($get_dates as $v_dates) {
                $this->admin_model->_table_name = 'tbl_attendance';
                $this->admin_model->_order_by = 'attendance_id';
                $check_leave_date = $this->admin_model->check_by(array('employee_id' => $atdnc_data['employee_id'], 'date_in' => $v_dates), 'tbl_attendance');
                $atdnc_data['date_in'] = $v_dates;
                $atdnc_data['date_out'] = $v_dates;
                $atdnc_data['attendance_status'] = '3';
                if (!empty($check_leave_date) && empty($check_leave_date->leave_category_id) && $check_leave_date->attendance_status == '0') {
                    $this->admin_model->_table_name = 'tbl_attendance';
                    $this->admin_model->_primary_key = "attendance_id";
                    $this->admin_model->save($atdnc_data, $check_leave_date->attendance_id);
                } elseif (empty($check_leave_date)) {
                    $this->admin_model->_table_name = 'tbl_attendance';
                    $this->admin_model->_primary_key = "attendance_id";
                    $this->admin_model->save($atdnc_data);
                }
            }
        }
        $where = array('application_list_id' => $id);
        $this->application_model->set_action($where, $cdata, 'tbl_application_list');
        
        //message for user
        $type = "success";
        $message = lang('changes_application_status');
        set_message($type, $message);
        redirect('admin/application_list'); //redirect page
    }

    public function dowload_application_file($id) {
        $appl_info = $this->application_model->check_by(array('application_list_id' => $id), 'tbl_application_list');

        $this->load->helper('download');
        if ($appl_info->upload_file) {
            $down_data = file_get_contents(base_url() . $appl_info->upload_file); // Read the file's contents               
            force_download($appl_info->filename, $down_data);
        } else {
            $type = "error";
            $message = lang('operation_failed');
            set_message($type, $message);
            redirect('admin/application_list/view_application/' . $id);
        }
    }

}
