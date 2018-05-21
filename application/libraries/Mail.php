<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sendEmail
 *
 * @author nayem
 */
class Mail {

    public function __construct() {

        $this->CI = &get_instance();
        $this->CI->load->library('email', 'session');
    }

    //put your code here

    public function sendEmail($from, $to, $subject, $page) {
        $this->CI->email->set_mailtype("html");
        $this->CI->email->from($from[0], $from[1]);
        $this->CI->email->to($to);
        $this->CI->email->subject($subject);
        $body = $page;
        $this->CI->email->message($body);
        $send = $this->CI->email->send();
        if ($send) {
            return $send;
        } else {
            $error = show_error($this->CI->email->print_debugger());
            return $error;
        }
    }

    function send($x, $y, $message){

        $config = array(
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.googlemail.com',
            'smtp_port'     => 587,
            'smtp_user'     => 'shahinyanm@gmail.com',
            'smtp_pass'     => '77Mherik89',
            'mailtype'      => 'html',
            'charset'       => 'iso-8859-1',
            'smtp_crypto'   => 'tls',
            'send_multipart'=> FALSE
        );

        $this->CI->load->library('email',$config);
        $this->CI->email->set_newline("\r\n");
        $this->CI->email->from('shahinyanm@gmail.com', 'Mher');
        $this->CI->email->to($x);
        $this->CI->email->subject($y);
        $this->CI->email->message($message);

        if($this->CI->email->send()){
           return true;

        }else{
            echo $this->CI->email->print_debugger();
        }
    }

}
