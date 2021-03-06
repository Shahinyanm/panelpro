<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employee
 *
 * @author Ashraf
 */
class Employee extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employee_model');
        $this->load->model('stage_model');
        $this->load->model('status_model');
    }

    public function employees($id = NULL) {
        $data['title'] = lang('clients_list');
        $data['page_header'] = lang('employee_page_header'); //Page header title

        $data['active'] = 1;
        $data['all_employee_info'] = $this->db->where('employment_id !=', 'advance')->where('deleted', '0')->get('tbl_employee')->result();

        if (!empty($id)) {// retrive data from db by id
            $data['active'] = 2;
            $data['employee_info'] = $this->employee_model->all_emplyee_info($id);

            $data['emp_info'] = $this->db->where('employee_id', $id)->get('tbl_employee')->row();

            if (empty($data['employee_info'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('admin/employee/add_employee');
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

        //check employee status
        $this->status_model->_table_name = 'tbl_employee_status';
//        $this->status_model->get_by();
        $data['employee_status_info'] =  $this->status_model->get();


        $data['subview'] = $this->load->view('admin/employee/employee_list', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function deleted_employees($id = NULL) {
        $data['title'] = lang('clients_list');
        $data['page_header'] = lang('employee_page_header'); //Page header title

        $data['active'] = 1;
        $data['all_employee_info'] = $this->db->where('deleted', '1')->get('tbl_employee')->result();
//        echo "<pre>";
//        var_dump($data['all_employee_info']);
//
//        die();

        if (!empty($id)) {// retrive data from db by id
            $data['active'] = 2;
            $data['employee_info'] = $this->employee_model->all_emplyee_info($id);

            $data['emp_info'] = $this->db->where('employee_id', $id)->get('tbl_employee')->row();

            if (empty($data['employee_info'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('admin/employee/add_employee');
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




        $data['subview'] = $this->load->view('admin/employee/deleted_employee_list', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function save_employee($id = NULL) {
                // **** Employee Personal Details,Contact Details and Official Status Save And Update Start ***
                //input post
                $data = $this->employee_model->array_from_post(array('first_name', 'last_name','maratial_status','date_of_birth','gender', 'present_address','nationality', 'city', 'country_id', 'mobile', 'phone', 'email', 'employment_id',
                    'designations_id', 'joining_date','present_address2','middle_name','state_province_region','zip_postal'));

                //set date of new mobile
                $mobile = $this->employee_model->check_by(array('mobile' => $this->input->post('mobile'),'employee_id'=>$id), 'tbl_employee');
                if(!$mobile->mobile){
                    $data['mobile_time'] = date("Y-m-d H:i:s");;
                }

                //image upload
                if (!empty($_FILES['photo']['name'])) {
                    $old_path = $this->input->post('old_path');
                    if ($old_path) {
                        unlink($old_path);
                    }

            $val = $this->employee_model->uploadImage('photo');
            $val == TRUE || redirect('admin/employee/employees');
            $data['photo'] = $val['path'];
            $data['photo_a_path'] = $val['fullPath'];
        }

        // ************* Save into Employee Table 
        $this->employee_model->_table_name = "tbl_employee"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        if (!empty($id)) {
            $employee_id = $id;
            $data['status'] = $this->input->post('status', TRUE);
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
//        $ldata['user_name'] = $data['employment_id'];
//        $ldata['password'] = $this->hash('employee');
        if($data['status']==''){
            $ldata['activate'] = 1;
        }else{
            $ldata['activate'] = $data['status'];
        }
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
            $val == TRUE || redirect('admin/employee/employees');
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
            $val == TRUE || redirect('admin/employee/employees');
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
            $val == TRUE || redirect('admin/employee/employees');
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
            $val == TRUE || redirect('admin/employee/employees');
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
            $val == TRUE || redirect('admin/employee/employees');
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
            $val == TRUE || redirect('admin/employee/employees');
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

        $type = "success";
        $message = lang('employee_info_saved');
        set_message($type, $message);

        redirect('admin/employee/employees'); //redirect page
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

    public function delete_employee($id) {
        // ************* Delete into Employee Table 
        $this->employee_model->_table_name = "tbl_employee"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        $this->employee_model->save(array('deleted'=> 1,'status'=>0), $id);
        // delete into tbl bank 
//        $bank_info = $this->employee_model->check_by(array('employee_id' => $id), 'tbl_employee_bank');
//        $this->employee_model->_table_name = "tbl_employee_bank"; // table name
//        $this->employee_model->_primary_key = "employee_bank_id"; // $id
//        $this->employee_model->delete($bank_info->employee_bank_id);

        // delete into tbl employee document
//        $doc_id = $this->employee_model->check_by(array('employee_id' => $id), 'tbl_employee_document');
//        $this->employee_model->_table_name = "tbl_employee_document"; // table name
//        $this->employee_model->_primary_key = "document_id"; // $id
//        $this->employee_model->delete($doc_id->document_id);

//         delete into tbl employee login
        $this->employee_model->_table_name = "tbl_employee_login"; // table name
        $this->employee_model->_order_by = "employee_id"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        $login_id = $this->employee_model->get_by(array('employee_id' => $id), TRUE);
//        var_dump($login_id);
//        die();
        $this->employee_model->save(array('activate'=>0),$login_id->employee_id);

        // delete into tbl_assign_item
//        $this->employee_model->_table_name = "tbl_assign_item"; // table name
//        $this->employee_model->_order_by = "employee_id"; // table name
//        $this->employee_model->_primary_key = "assign_item_id"; // $id
//        $assign_item_id = $this->employee_model->get_by(array('employee_id' => $id), TRUE);
//        $this->employee_model->delete($assign_item_id->assign_item_id);

        // messages for user
        $type = "success";
        $message = lang('employee_info_deleted');
        set_message($type, $message);
        redirect('admin/employee/employees'); //redirect page
    }

    public function restore_employee($id) {
        // ************* Restore into Employee Table
        $this->employee_model->_table_name = "tbl_employee"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        $this->employee_model->save(array('deleted'=> 0,'status'=>1), $id);

        //restore employee info
        $this->employee_model->_table_name = "tbl_employee_login"; // table name
        $this->employee_model->_order_by = "employee_id"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        $login_id = $this->employee_model->get_by(array('employee_id' => $id), TRUE);

        $this->employee_model->save(array('activate'=>1),$login_id->employee_id);
        // messages for user
        $type = "success";
        $message = lang('employee_info_restored');
        set_message($type, $message);
        redirect('admin/employee/deleted_employees'); //redirect page
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
                redirect('admin/employee/employee_list');
            }
        }
        $data['all_stages_info']= $this->stage_model->all_stage_info();
        $data['stages_info']= $this->stage_model->employee_stage($id);
        $data['subview'] = $this->load->view('admin/employee/view_employee', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function employee_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_employee_info'] = $this->employee_model->all_emplyee_info();
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/employee/employee_list_pdf', $data, true);
        pdf_create($view_file, 'Employee List');
    }

    public function make_pdf($employee_id) {
        $data['title'] = "Employee List";
        $data['employee_info'] = $this->employee_model->all_emplyee_info($employee_id);
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/employee/employee_view_pdf', $data, true);
        pdf_create($view_file, $data['employee_info']->first_name . ' ' . $data['employee_info']->last_name);
    }

    public function clients($id = NULL, $flag = NULL) {
        $data['title'] = lang('clients');
        $data['page_header'] = lang('employee_page_header'); //Page header title
        $data['active'] = 1;
        $data['all_employee_info'] = $this->db->where('employment_id','advance')->where('deleted','0')->get('tbl_employee')->result();
        $data['all_employee'] =array();
//        echo $id;
//        echo $flag;
//        die();
        if (!empty($id)) {// retrive data from db by id
            if(!empty($flag)){
                $data['active'] = 3;
                $data['employee_info'] = $this->employee_model->all_emplyee_info($id);
                $data['clients_employee'] = $this->employee_model->get_all_clients_employee($id);

                $data['emp_info'] = $this->employee_model->all_employee($id);
                 $isEmployee= $this->employee_model->all_employee();

                foreach($isEmployee as $is){
                    if (!in_array($is, $data['clients_employee']) && $is->employment_id != 'advance'){
                        $data['all_employee'][]=$is;

                    }
                }
            }else{
                $data['active'] = 2;
                $data['employee_info'] = $this->employee_model->all_emplyee_info($id);

                $data['emp_info'] = $this->db->where('employee_id', $id)->get('tbl_employee')->row();

                if (empty($data['employee_info'])) {
                    $type = "error";
                    $message = lang('no_record_found');
                    set_message($type, $message);
                    redirect('admin/employee/add_employee');
                }
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

        $data['subview'] = $this->load->view('admin/employee/clients_list', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function view_clients($id = NULL) {
        $data['title'] = lang('view_clients');
        $data['page_header'] = lang('employee_page_header'); //Page header title
        $data['active'] = 1;

        if (!empty($id)) {// retrive data from db by id
            $data['employee_info'] = $this->employee_model->all_emplyee_info($id);
            if (empty($data['employee_info'])) {
                $type = "error";
                $message = lang('no_record_found');
                set_message($type, $message);
                redirect('admin/employee/clients_list');
            }
        }
        $data['subview'] = $this->load->view('admin/employee/view_clients', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


    public function delete_clients_employee($employee,$client){
//    echo $client
        if(!empty($client) && !empty($employee)){

            $this->employee_model->_table_name = "tbl_clients_employee"; // table name
            $this->employee_model->delete_multiple(['clients_id'=>$client, 'employee_id'=>$employee]);


        }

        $type = "success";
        $message = lang('employee_info_deleted');
        set_message($type, $message);
        redirect('admin/employee/clients/'.$client.'/add'); //redirect page
    }


    public function save_clients_employee($id = NULL) {

        $employers = $this->input->post("employers");
        foreach ($employers as $employee){
            $data['employee_id'] = $employee;
            $data['clients_id'] = $id;
            $this->employee_model->_table_name = "tbl_clients_employee"; // table name
//            $this->employee_model->_primary_key = "clients_id"; // $id
//            var_dump($data);
//            die();
            $this->employee_model->save($data);
        }

        $data['active'] = 3;

        $type = "success";
        $message = lang('save_task');
        set_message($type, $message);
        redirect('admin/employee/clients/'.$id.'/add'); //redirect page
    }


    public function save_client($id = NULL)
    {
        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start ***
        //input post
        $data = $this->employee_model->array_from_post(array('email'));
        $result = $this->user_model->find(['user_name'=>$this->input->post('email')]);
        // ************* Save into Employee Table
        if(!$result){
        $this->employee_model->_table_name = "tbl_employee"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        $data['status'] = 1;
        $data['employment_id'] = 'advance';
        $employee_id = $this->employee_model->save($data);

        // save into tbl employee login
        $this->employee_model->_table_name = "tbl_employee_login"; // table name
        $this->employee_model->_primary_key = "employee_login_id"; // $id
        // check employee login details exsist or not
        // if existing do not save
        // else save the login details
        $check_existing_data = $this->employee_model->check_by(array('employee_id' => $employee_id), 'tbl_employee_login');
        $ldata['employee_id'] = $employee_id;
        $ldata['user_name'] = $this->input->post('email');
        $ldata['password'] = $this->hash($this->input->post('password'));

        if ($data['status'] == '') {
            $ldata['activate'] = 1;
        } else {
            $ldata['activate'] = $data['status'];
        }

        if (!empty($check_existing_data)) {
            $this->employee_model->save($ldata, $check_existing_data->employee_login_id);
        } else {
            $this->employee_model->save($ldata);
        }
        $type = "success";
        $message = lang('employee_info_saved');
        set_message($type, $message);

        redirect('admin/employee/clients'); //redirect page
        }else{
            $type = "success";
            $message = lang('error_user_name');
            set_message($type, $message);
            redirect('admin/employee/clients'); //redirect page
        }
    }
    public function delete_client($id) {
        // ************* Delete into Employee Table
        $this->employee_model->_table_name = "tbl_employee"; // table name
        $this->employee_model->_primary_key = "employee_id"; // $id
        $this->employee_model->save(array('deleted'=> 1,'status'=>0), $id);
//        // delete into tbl bank
//        $bank_info = $this->employee_model->check_by(array('employee_id' => $id), 'tbl_employee_bank');
//        $this->employee_model->_table_name = "tbl_employee_bank"; // table name
//        $this->employee_model->_primary_key = "employee_bank_id"; // $id
//        $this->employee_model->delete($bank_info->employee_bank_id);
//
//        // delete into tbl employee document
//        $doc_id = $this->employee_model->check_by(array('employee_id' => $id), 'tbl_employee_document');
//        $this->employee_model->_table_name = "tbl_employee_document"; // table name
//        $this->employee_model->_primary_key = "document_id"; // $id
//        $this->employee_model->delete($doc_id->document_id);
//
//        // delete into tbl employee login
//        $this->employee_model->_table_name = "tbl_employee_login"; // table name
//        $this->employee_model->_order_by = "employee_id"; // table name
//        $this->employee_model->_primary_key = "employee_login_id"; // $id
//        $login_id = $this->employee_model->get_by(array('employee_id' => $id), TRUE);
//        $this->employee_model->delete($login_id->employee_login_id);
//
//        // delete into tbl_assign_item
//        $this->employee_model->_table_name = "tbl_assign_item"; // table name
//        $this->employee_model->_order_by = "employee_id"; // table name
//        $this->employee_model->_primary_key = "assign_item_id"; // $id
//        $assign_item_id = $this->employee_model->get_by(array('employee_id' => $id), TRUE);
//        $this->employee_model->delete($assign_item_id->assign_item_id);

        // messages for user
        $type = "success";
        $message = lang('employee_info_deleted');
        set_message($type, $message);
        redirect('admin/employee/clients'); //redirect page
    }

    public function stages($id= NULL){
        $data['title'] = lang('employment_stages');
        $data['page_header'] = lang('employment_stages'); //Page header title
        if($id){
            $data['active'] = 2;
            $data['stage_info']= $this->stage_model->all_stage_info($id);
        }else{
            $data['active'] = 1;
        }
        $data['all_stage_info'] = $this->stage_model->all_stage_info();

        $data['subview'] = $this->load->view('admin/employee/stages_list', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


    public function save_stages($id = NULL) {
        //input post
        $data = $this->stage_model->array_from_post(array('name', 'description'));
        if($this->input->post('status')=='on') {

            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }

        // ************* Save into Stage Table
        $this->stage_model->_table_name = "tbl_stage"; // table name
        $this->stage_model->_primary_key = "stage_id"; // $id
        if (!empty($id)) {
            $this->stage_model->save($data, $id);
        } else {
            $this->stage_model->save($data);
        }

        $type = "success";
        $message = lang('stages_saved');
        set_message($type, $message);

        redirect('admin/employee/stages'); //redirect page
    }

    public function change_stage_status(){
        $status = $this->input->post('status');
        $stage = $this->stage_model->employee_stage(array('stage_id'=>$this->input->post('id')),$this->input->post('employee_id'));
        $this->stage_model->_table_name ='tbl_employee_stages';
        $this->stage_model->_primary_key =$this->input->post('employee_id');
        if(!empty($stage)){

            $this->stage_model->update(array('status'=>$this->input->post('status')),array('stage_id'=>$this->input->post('id'),'employee_id'=>$this->input->post('employee_id')));
        }else{
            $this->stage_model->save(array('status'=>$this->input->post('status'),'stage_id'=>$this->input->post('id'),'employee_id'=>$this->input->post('employee_id')));

        }

        echo json_encode($status);

    }

    public function delete_stage($id= NULL){
        $this->employee_model->_table_name = "tbl_stage"; // table name
        $this->employee_model->_primary_key = "stage_id"; // $id
        $this->employee_model->delete($id);

        $this->employee_model->_table_name = "tbl_employee_stages"; // table name
        $this->employee_model->_primary_key = "stage_id"; // $id
        $this->employee_model->delete($id);

        $type = "success";
        $message = lang('stages_deleted');
        set_message($type, $message);
        redirect('admin/employee/stages'); //redirect page
    }

}
