<?php

/**
 * Description of training
 *
 * @author Ashraf
 */
class Task extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('task_model');
        $this->load->model('user_model');
        $this->load->model('task_contact_model');
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'asset/js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "80%",
                'height' => "200px"
            )
        );
    }

    public function all_task($id = NULL) {
        $data['title'] = lang('all_task');
        $data['page_header'] = lang('task_management');

        // get all employee info 
        $this->task_model->_table_name = 'tbl_employee';
        $this->task_model->_order_by = 'designations_id';
        $data['employee_info'] = $this->task_model->get_by(array('status' => 1), FALSE);
        //get all training information
        $data['all_task_info'] = $this->task_model->get_all_task_info();



        if ($id) { // retrive data from db by id
            $data['active'] = 2;
            //get all task information
            $data['task_info'] = $this->task_model->get_all_task_info($id);
        } else {
            $data['active'] = 1;
        }

        $data['editor'] = $this->data;
        $data['subview'] = $this->load->view('admin/task/tasks', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function all_task_contact($id = NULL) {
        $data['title'] = lang('all_task_contact');
        $data['page_header'] = lang('task_contact_management');

        // get all employee info
        $this->task_contact_model->_table_name = 'tbl_employee';
        $this->task_contact_model->_order_by = 'designations_id';
        $data['employee_info'] = $this->task_contact_model->get_by(array('status' => 1), FALSE);
        //get all training information
        $data['all_task_contact_info'] = $this->task_contact_model->get_all_task_contact_info();

        $data['all_task_contact_info'] = $this->task_contact_model->get_all_task_contact_info();
        $data['all_task_contact_info'] = $this->task_contact_model->get_all_task_contact_info();


        if ($id) { // retrive data from db by id
            $data['active'] = 2;
            //get all task information
            $data['task_info'] = $this->task_contact_model->get_all_task_contact_info($id);
        } else {
            $data['active'] = 1;
        }

        $data['editor'] = $this->data;
        $data['subview'] = $this->load->view('admin/task/tasks_contact', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
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
        //sending mail to all employees, whom send the task
        $assigned_to = $this->input->post("assigned_to");
        $this->task_model->_table_name = 'tbl_task';
        if ($id) {
            $tasks = $this->task_model->get_by(array('task_id' => $id,), FALSE);


            foreach ($assigned_to as $ids){
                if($ids == $tasks->assigned_to){
                    $result = $this->user_model->find_id(['employee_id'=>$ids]);
                    $this->mailSender($result,$result->email);
                }
            }
        } else {
            $emails = array();
            foreach ($assigned_to as $ids){
                $result = $this->user_model->find_id(['employee_id'=>$ids]);
                $emails[]=$result->email;
            }
            $this->mailSender($result,$emails);

        }
        foreach ($assigned_to as $assig){
            $data['assigned_to'] = $assig;
            $this->task_model->_table_name = "tbl_task"; // table name
            $this->task_model->_primary_key = "task_id"; // $id
            $this->task_model->save($data, $id);
        }
//        $data['assigned_to'] = serialize($this->task_model->array_from_post(array('assigned_to')));


        //save data into table.


        $type = "success";
        $message = lang('save_task');
        set_message($type, $message);
        redirect('admin/task/all_task');
    }

    public function save_task_contact($id = NULL) {

        $data = $this->task_contact_model->array_from_post(array(
            'task_contact_start_date',
            'due_date',
            'task_contact_hour',
            'task_contact_progress',
            'task_contact_status',
            'web',
            'project_name',
            'project_details'));

        $assigned_to = $this->input->post("assigned_to");
        foreach ($assigned_to as $assig){
            $data['assigned_to'] = $assig;
            $this->task_contact_model->_table_name = "tbl_task_contact"; // table name
            $this->task_contact_model->_primary_key = "task_contact_id"; // $id
            $this->task_contact_model->save($data, $id);
        }
        //save data into table.


        $type = "success";
        $message = lang('save_task');
        set_message($type, $message);
        redirect('admin/task/all_task_contact');
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
        redirect('admin/task/view_task_details/' . $id);
    }


    public function update_project_status($id = NULL) {

        $data = $this->task_contact_model->array_from_post(array(
            'task_contact_progress',
            'task_contact_status'));


        //save data into table.
        $this->task_contact_model->_table_name = "tbl_task_contact"; // table name
        $this->task_contact_model->_primary_key = "task_contact_id"; // $id
        $this->task_contact_model->save($data, $id);

        $type = "success";
        $message = lang('task_updated');
        set_message($type, $message);
        redirect('admin/task/view_task_contact_details/' . $id);
    }

    public function update_contact_status($id = NULL) {

        $data = $this->task_contact__model->array_from_post(array(
            'task_progress',
            'task_status'));

        //save data into table.
        $this->task_model->_table_name = "tbl_task_contact_"; // table name
        $this->task_model->_primary_key = "task_contact__id"; // $id
        $this->task_model->save($data, $id);

        $type = "success";
        $message = lang('task_updated');
        set_message($type, $message);
        redirect('admin/task/view_task_contact_details/' . $id);
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
        $this->task_model->_table_name = "tbl_task_comment"; // table name
        $this->task_model->_primary_key = "task_comment_id"; // $id
        $this->task_model->save($data);

        $type = "success";
        $message = lang('task_comment_save');
        set_message($type, $message);
        redirect('admin/task/view_task_details/' . $data['task_id'] . '/' . $data['active'] = 2);
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
        $this->task_contact_model->_table_name = "tbl_task_contact_comment"; // table name
        $this->task_contact_model->_primary_key = "task_contact_comment_id"; // $id
        $this->task_contact_model->save($data);
        
        $type = "success";
        $message = lang('task_comment_save');
        set_message($type, $message);
        redirect('admin/task/view_task_contact_details/' . $data['task_contact_id'] . '/' . $data['active'] = 2);
    }

    public function save_task_attachment($task_attachment_id = NULL) {
        $data = $this->task_model->array_from_post(array('title', 'description', 'task_id'));
        $user_type = $this->session->userdata('user_type');
        if ($user_type == 1) {
            $data['user_id'] = $this->session->userdata('employee_id');
        } else {
            $data['employee_id'] = $this->session->userdata('employee_id');
        }
        // save and update into tbl_files
        $this->task_model->_table_name = "tbl_task_attachment"; //table name
        $this->task_model->_primary_key = "task_attachment_id";
        if (!empty($task_attachment_id)) {
            $id = $task_attachment_id;
            $this->task_model->save($data, $id);
            $msg = lang('task_file_updated');
        } else {
            $id = $this->task_model->save($data);
            $msg = lang('task_file_added');
        }

        if (!empty($_FILES['task_files']['name']['0'])) {
            $old_path_info = $this->input->post('uploaded_path');
            if (!empty($old_path_info)) {
                foreach ($old_path_info as $old_path) {
                    unlink($old_path);
                }
            }
            $mul_val = $this->task_model->multi_uploadAllType('task_files');

            foreach ($mul_val as $val) {
                $val == TRUE || redirect('admin/task/view_task_details/3/' . $data['task_id']);
                $fdata['files'] = $val['path'];
                $fdata['file_name'] = $val['fileName'];
                $fdata['uploaded_path'] = $val['fullPath'];
                $fdata['size'] = $val['size'];
                $fdata['ext'] = $val['ext'];
                $fdata['is_image'] = $val['is_image'];
                $fdata['image_width'] = $val['image_width'];
                $fdata['image_height'] = $val['image_height'];
                $fdata['task_attachment_id'] = $id;
                $this->task_model->_table_name = "tbl_task_uploaded_files"; // table name
                $this->task_model->_primary_key = "uploaded_files_id"; // $id
                $this->task_model->save($fdata);
            }
        }
        // messages for user
        $type = "success";
        $message = $msg;
        set_message($type, $message);
        redirect('admin/task/view_task_details/' . $data['task_id'] . '/3');
    }

    public function save_task_contact_attachment($task_contact_attachment_id = NULL) {
        $data = $this->task_contact_model->array_from_post(array('title', 'description', 'task_contact_id'));
        $user_type = $this->session->userdata('user_type');
        if ($user_type == 1) {
            $data['user_id'] = $this->session->userdata('employee_id');
        } else {
            $data['employee_id'] = $this->session->userdata('employee_id');
        }
        // save and update into tbl_files
        $this->task_contact_model->_table_name = "tbl_task_contact_attachment"; //table name
        $this->task_contact_model->_primary_key = "task_contact_attachment_id";
        if (!empty($task_contact_attachment_id)) {
            $id = $task_contact_attachment_id;
            $this->task_contact_model->save($data, $id);
            $msg = lang('task_file_updated');
        } else {
            $id = $this->task_contact_model->save($data);
            $msg = lang('task_file_added');
        }

        if (!empty($_FILES['task_files']['name']['0'])) {
            $old_path_info = $this->input->post('uploaded_path');
            if (!empty($old_path_info)) {
                foreach ($old_path_info as $old_path) {
                    unlink($old_path);
                }
            }
            $mul_val = $this->task_contact_model->multi_uploadAllType('task_files');

            foreach ($mul_val as $val) {
                $val == TRUE || redirect('admin/task/view_task_contact_details/3/' . $data['task_contact_id']);
                $fdata['files'] = $val['path'];
                $fdata['file_name'] = $val['fileName'];
                $fdata['uploaded_path'] = $val['fullPath'];
                $fdata['size'] = $val['size'];
                $fdata['ext'] = $val['ext'];
                $fdata['is_image'] = $val['is_image'];
                $fdata['image_width'] = $val['image_width'];
                $fdata['image_height'] = $val['image_height'];
                $fdata['task_attachment_id'] = $id;
                $this->task_contact_model->_table_name = "tbl_task_contact_uploaded_files"; // table name
                $this->task_contact_model->_primary_key = "uploaded_files_id"; // $id
                $this->task_contact_model->save($fdata);
            }
        }
        // messages for user
        $type = "success";
        $message = $msg;
        set_message($type, $message);
        redirect('admin/task/view_task_contact_details/' . $data['task_contact_id'] . '/3');
    }

    public function view_task_details($id, $active = NULL) {
        $data['title'] = lang('task_details');
        $data['page_header'] = lang('task_management');

        //get all task information
        $data['task_details'] = $this->task_model->get_all_task_info($id);
        //get all comments info

        $data['comment_details'] = $this->task_model->get_all_comment_info($id);

        $this->task_model->_table_name = "tbl_task_attachment"; //table name
        $this->task_model->_order_by = "task_id";
        $data['files_info'] = $this->task_model->get_by(array('task_id' => $id), FALSE);

        foreach ($data['files_info'] as $key => $v_files) {
            $this->task_model->_table_name = "tbl_task_uploaded_files"; //table name
            $this->task_model->_order_by = "task_attachment_id";
            $data['project_files_info'][$key] = $this->task_model->get_by(array('task_attachment_id' => $v_files->task_attachment_id), FALSE);
        }


        if ($active == 2) {
            $data['active'] = 2;
        } elseif ($active == 3) {
            $data['active'] = 3;
        } else {
            $data['active'] = 1;
        }
        $arr = ['view_status'=>1];
        $where = ['task_id'=>$id,
            'employee_id !='=> '(Null)'];
        $this->task_model->update_comment($arr, $where);
        $data['subview'] = $this->load->view('admin/task/view_task', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


    public function view_task_contact_details($id, $active = NULL) {
        $data['title'] = lang('task_details');
        $data['page_header'] = lang('task_contact_management');

        //get all task information
        $data['task_details'] = $this->task_contact_model->get_all_task_contact_info($id);

        //get all comments info
        $data['task_team_details'] = $this->task_contact_model->get_all_task_team_info($id);
        //get all comments info
        $data['task_advisor_details'] = $this->task_contact_model->get_all_task_advisor_info($id);
        //get all comments info
        $data['task_partner_details'] = $this->task_contact_model->get_all_task_partner_info($id);
        //get all comments info
        // var_dump($data['task_details']);
        // die();
        $data['comment_details'] = $this->task_contact_model->get_all_comment_info($id);
        // var_dump($data['comment_details']);
        // die();
        $this->task_contact_model->_table_name = "tbl_task_contact_attachment"; //table name
        $this->task_contact_model->_order_by = "task_contact_id";
        $data['files_info'] = $this->task_contact_model->get_by(array('task_contact_id' => $id), FALSE);

        foreach ($data['files_info'] as $key => $v_files) {
            $this->task_contact_model->_table_name = "tbl_task_uploaded_files"; //table name
            $this->task_contact_model->_order_by = "task_contact_attachment_id";
            $data['project_files_info'][$key] = $this->task_contact_model->get_by(array('task_contact_attachment_id' => $v_files->task_contact_attachment_id), FALSE);
        }


        if ($active == 2) {
            $data['active'] = 2;
        } elseif ($active == 3) {
            $data['active'] = 3;
         } elseif ($active == 4) {
            $data['active'] = 4;
        }else {
            $data['active'] = 1;
        }

        $arr = ['view_status'=>1];
        $where = ['task_contact_id'=>$id,
            'employee_id !=' => '(Null)'];
        $this->task_contact_model->update_comment($arr, $where);

        $data['subview'] = $this->load->view('admin/task/view_task_contact', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function download_files($task_id, $uploaded_files_id) {
        $this->load->helper('download');
        $uploaded_files_info = $this->task_model->check_by(array('uploaded_files_id' => $uploaded_files_id), 'tbl_task_uploaded_files');

        if ($uploaded_files_info->uploaded_path) {
            $data = file_get_contents($uploaded_files_info->uploaded_path); // Read the file's contents            
            force_download($uploaded_files_info->file_name, $data);
        } else {
            $type = "error";
            $message = lang('operation_failed');
            set_message($type, $message);
            redirect('admin/task/view_task_details/' . $task_id . '/3');
        }
    }

    public function contact_download_files($task_id, $uploaded_files_id) {
        $this->load->helper('download');
        $uploaded_files_info = $this->task_contact_model->check_by(array('contact_uploaded_files_id' => $uploaded_files_id), 'tbl_task_contact_uploaded_files');

        if ($uploaded_files_info->uploaded_path) {
            $data = file_get_contents($uploaded_files_info->uploaded_path); // Read the file's contents
            force_download($uploaded_files_info->file_name, $data);
        } else {
            $type = "error";
            $message = lang('operation_failed');
            set_message($type, $message);
            redirect('admin/task/view_task_contact_details/' . $task_id . '/3');
        }
    }

    public function delete_task($id = NULL) {

    $this->task_model->_table_name = "tbl_task";
    $this->task_model->_primary_key = "task_id";
    $this->task_model->delete($id);

    // messages for user
    $type = "error";
    $message = lang('deleted_task');
    set_message($type, $message);

    redirect('admin/task/all_task');
}
    public function delete_task_contact($id = NULL) {

        $this->task_contact_model->_table_name = "tbl_task_contact";
        $this->task_contact_model->_primary_key = "task_contact_id";
        $this->task_contact_model->delete($id);

        // messages for user
        $type = "error";
        $message = lang('deleted_task');
        set_message($type, $message);

        redirect('admin/task/all_task_contact');
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
        $this->task_contact_model->_table_name = "tbl_team"; // table name
        $team_id = $this->input->post('team_id');
//        $this->employee_model->_primary_key = "team_id"; // $id

        for ($i = 0; $i < $sum; $i++) {
            $data['fb'] = $fb[$i];
            $data['twiter'] = $twiter[$i];
            $data['linkidn'] = $linkidn[$i];
            $data['full_name'] = $full_name[$i];
            if (!empty($team_id[$i])) {
                $this->task_contact_model->_primary_key = 'team_id';
                $this->task_contact_model->save($data, $team_id[$i]);
            } else {
//                var_dump ($data);
//                die();
                $data['task_contact_id'] = $id;
                $this->task_contact_model->save($data);

            }

        }
        redirect('admin/task/view_task_contact_details/' . $id. '/' . $data['active'] = 4);
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
        $this->task_contact_model->_table_name = "tbl_advisor"; // table name
        $team_id = $this->input->post('advisor_id');
//        $this->employee_model->_primary_key = "team_id"; // $id

        for ($i = 0; $i < $sum; $i++) {
            $data['fb'] = $fb[$i];
            $data['twiter'] = $twiter[$i];
            $data['linkidn'] = $linkidn[$i];
            $data['full_name'] = $full_name[$i];
            if (!empty($team_id[$i])) {
//
                $this->task_contact_model->_primary_key = 'advisor_id';
                $this->task_contact_model->save($data, $team_id[$i]);
            } else {
//
                $data['task_contact_id'] = $id;
                $this->task_contact_model->save($data);

            }

        }
        redirect('admin/task/view_task_contact_details/' . $id. '/' . $data['active'] = 4);
    }

    public function save_partner_links($id = NULL){
        $data=array();
        $sum =  $this->input->post('sum');
        $fb                  = $this->input->post('fb');
        $twiter              = $this->input->post('twiter');
        $linkidn             = $this->input->post('linkidn');
        $full_name           = $this->input->post('full_name');
        $this->task_contact_model->_table_name = "tbl_partner"; // table name
        $team_id            = $this->input->post('partner_id');

        for($i=0;$i<$sum;$i++){
            $data['fb'] = $fb[$i];
            $data['twiter'] = $twiter[$i];
            $data['linkidn'] =$linkidn[$i];
            $data['full_name'] = $full_name[$i];
            if(!empty($team_id[$i])){

                $this->task_contact_model->_primary_key = 'partner_id';
                $this->task_contact_model->save($data,$team_id[$i]);
            }else{

                $data['task_contact_id']  = $id;
                $this->task_contact_model->save($data);

            }

        }
        redirect('admin/task/view_task_contact_details/' . $id. '/' . $data['active'] = 4);
    }

    public function delete_team_link($id = NULL, $id2 = NULL)
    {
        $this->task_contact_model->delete_team_link(['team_id'=>$id]);
        redirect('admin/task/view_task_contact_details/' . $id2. '/' . $data['active']= 4 );

    }
    public function delete_advisor_link($id = NULL, $id2 = NULL)
    {
        $this->task_contact_model->delete_advisor_link(['advisor_id'=>$id]);
        redirect('admin/task/view_task_contact_details/' . $id2. '/' . $data['active'] = 4);

    }
    public function delete_partner_link($id = NULL, $id2 = NULL)
    {
        $this->task_contact_model->delete_partner_link(['partner_id'=>$id]);
        redirect('admin/task/view_task_contact_details/' . $id2. '/' . $data['active'] = 4);

    }


    public function mailSender($result,$email){
        if(!empty($result)){
            $link = base_url()."employee/dashboard/my_task";
            $msg = '<html><body>';
            $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $msg .= "You have a new Task. :</strong><br> <a href='$link' > Login </a> ";
            $this->mail->send($email,'New Task',$msg);

        }
    }

}
