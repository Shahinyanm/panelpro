<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MY_Controller {
    public $_table_name;
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index() {
        $this->load->view('register');
    }

    public function registration(){
       $this->_table_name = 'tbl_employee_login';
        $email 				= $this->input->post('email');
        $password 			= $this->input->post('password');
        $passconf 	        = $this->input->post('confirm_password');

        $this->form_validation->set_rules('password', 'Password','required|matches[confirm_password]', array(
            'required'			=> 	"%s line is empty",
            'atches[password]'	=>	"%s do'nt confirm",

        ));;

        $this->form_validation->set_rules('confirm_password', 'PasswordConfirm','required|matches[password]', array(
            'required'			=> 	"%s line is empty",
            'matches[password]'	=>	"%s do'nt confirm",

        ));;
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_employee_login.user_name]', array(
            'required'			=> 	"%s line is empty",
            'valid_email'		=>	"%s is not valid",
            'is_unique'         =>  "%s is not unique"

        ));;

        if ($this->form_validation->run()==false){

            $this->load->view('register',['msg'=>"error "]);

        }else{
            $employee_id =  $this->user_model->add_new_user('tbl_employee', ['email'=> $email, 'employment_id'=>'employee','status'=> 0]);

            $tmp = [

                'password'	    =>	$this->hash($password),
                'user_name'	    =>	$email,
                'employee_id'   => $employee_id,
            ];

            $this->user_model->add_new_user($this->_table_name,$tmp);
            $this->load->view('register',['message'=> "We have sent you confirmation email"]);

            $result = $this->user_model->find(['user_name'=>$email]);
            if(!empty($result)){
                $from = "shahinyanm@gmail.com";
                $token = md5($result->employee_login_id.$result->user_name);
                $link = base_url()."register/activate/".$result->employee_login_id."/".$token;
                $msg = '<html><body>';
                $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                $msg .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
                $msg .= "<tr><td><strong>URL To Activate (main):</strong> </td><td> <a href='$link' > Click Here </a> To activate your profile</td></tr>";
               $mail = $this->mail->send($email,'activate your profile',$msg);
               if($mail){
                   $this->session->set_flashdata('msgMail','We sent you an email to verify your Email address');
                   redirect("login");
               }
            }
        }
    }

    public function activate($id,$token){

         $result = $this->user_model->find(['employee_login_id'=>$id]);
         if(!empty($result)){

             if(md5($result->employee_login_id.$result->user_name) == $token){

                 $data  = ['activate'=> 1];
                 $where = ['employee_login_id'=>$id];
                 $this->user_model->update($where,$data);

                 $data  = ['status'=> 1];
                 $where = ['email'=>$result->user_name];
                 $this->user_model->update_status($where,$data);
                 $this->session->set_flashdata('msg','You have already activated');
                 redirect("login");
             }
         }else{

             show_404();
         }


    }

    public function verify($id,$token){

        $result = $this->user_model->find(['employee_login_id'=>$id]);
        if(!empty($result)){
            if(md5($result->employee_login_id.$result->user_name) == $token){
                $this->load->view('login');
            }
        }else{
            show_404();
        }
    }

     public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }
}
