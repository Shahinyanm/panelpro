<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Notice extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('notice_model');
        $this->load->model('user_model');

        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'asset/js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "100%",
                'height' => "200px"
            )
        );
    }

    public function index($id = NULL) {
        
        $data['title'] =  lang('all_notice'); //Page title
        $data['page_header'] = lang('notice'); //Page header title

        $this->notice_model->_table_name = 'tbl_employee';
        $this->notice_model->_order_by = 'designations_id';
        $data['all_employee_notice'] = $this->notice_model->get_by(array('status' => 1), FALSE);

        //get all notice to view in report.
        $this->notice_model->_table_name = "tbl_notice"; // table name
        $this->notice_model->_order_by = "notice_id"; // $id
        $data['all_notice'] = $this->notice_model->get();

        if ($id) {
            $data['active'] = 2;
            $this->notice_model->_table_name = "tbl_notice"; // table name
            $this->notice_model->_order_by = "notice_id"; // $id
            $data['notice'] = $this->notice_model->get_by(array('notice_id' => $id,), TRUE);

            if (empty($data['notice'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('admin/notice/create_notice');
            }
        } else {
            $data['active'] = 1;
        }
//        echo "<pre>";
//        var_dump($data['notice']);
//        die();
        $data['editor'] = $this->data;
        $data['subview'] = $this->load->view('admin/notice/create_notice', $data, TRUE);
        $this->load->view('admin/_layout_main', $data); //page load
    }

    public function save_notice($id = NULL) {

        $date = date("Y-m-d");
        $data = $this->notice_model->array_from_post(array(
            'title',
            'short_description',
            'long_description',
            'flag',
        ));

        $data['employee_id'] = $this->session->userdata('employee_id');
        $data['created_date'] = $date;

        if($this->input->post('assigned_to') !=''){
            $data['assigned_to'] = serialize($this->notice_model->array_from_post(array('assigned_to')));

        }
        $emp_ids = $this->input->post('assigned_to');
        if (!empty($id)) {
            echo $id;
            $notice  = $this->notice_model->get_by(array('notice_id' => $id,), TRUE);
            $employees = unserialize($notice->assigned_to);

            foreach ($emp_ids as $ids){
                if(!in_array($ids,$employees['assigned_to'])){
                    $result = $this->user_model->find_id(['employee_id'=>$ids]);
                    $this->mailSender($result,$result->email);
                }
            }
        } else {
            foreach ($emp_ids as $ids){
                $result = $this->user_model->find_id(['employee_id'=>$ids]);
                $this->mailSender($result,$result->email);
            }

        }
        $this->notice_model->_table_name = "tbl_notice"; // table name
        $this->notice_model->_primary_key = "notice_id"; // $id
        $this->notice_model->save($data, $id);

        // messages for user
        $type = "success";
        $message = lang('notice_saved');
        set_message($type, $message);
        redirect('admin/notice');
    }

    public function notice_details($id) {
        $this->notice_model->_table_name = "tbl_notice"; // table name
        $this->notice_model->_order_by = "notice_id"; // $id
        $data['full_notice_details'] = $this->notice_model->get_by(array('notice_id' => $id), TRUE);

        $this->notice_model->_primary_key = 'notice_id';
        $updata['view_status'] = '1';
        $this->notice_model->save($updata, $id);

        $data['modal_subview'] = $this->load->view('admin/notice/_modal_notice_details', $data, FALSE);
        $this->load->view('admin/_layout_modal_lg', $data);
    }

    public function delete_notice($id = NULL) {

        $this->notice_model->_table_name = "tbl_notice";
        $this->notice_model->_primary_key = "notice_id";
        $this->notice_model->delete($id);

        // messages for user
        $type = "error";
        $message = lang('deleted_notice');
        set_message($type, $message);

        redirect('admin/notice');
    }

    public function mailSender($result,$email){
        if(!empty($result)){
            $link = base_url()."employee/dashboard/all_notice";
            $msg = '<html><body>';
            $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $msg .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr></table>";
            $msg .= "You have a new Notice. :</strong><br> <a href='$link' > Login </a> ";
            $this->mail->send($email,'New Event',$msg);

        }
    }

}
