<?php

class User_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function all_emplyee() {
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_department.department_name', FALSE);

        $this->db->select('tbl_employee_login.employee_login_id, tbl_employee_login.activate, tbl_employee_login.user_name  ', FALSE);
        $this->db->from('tbl_employee');
        $this->db->join('tbl_department', 'tbl_employee.department_id = tbl_department.department_id', 'left');
        $this->db->join('tbl_employee_login', 'tbl_employee.employee_id  = tbl_employee_login.employee_id', 'left');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_user_roll_by_employee_id($user_id) {
        
        $this->db->select('tbl_user_role.*', FALSE);
        $this->db->select('tbl_menu.*', FALSE);
        $this->db->from('tbl_user_role');
        $this->db->join('tbl_menu','tbl_user_role.menu_id=tbl_menu.menu_id', 'left');
        $this->db->where('tbl_user_role.user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();        
        return $result;
    }

    public function get_all_tasks() {
        $this->db->select('*');
        $this->db->from('tbl_task');
        $this->db->limit('3');
        $this->db->where('seen', 0);
        $this->db->order_by("task_created_date", "DESC");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_new_user() {
        $post = new stdClass();
        $post->user_name = '';
        $post->password = '';
        $post->employee_login_id = '';
        return $post;
    }

    public function  add_new_user($table,Array $arr){
        $this->db->insert($table,$arr);
        return $this->db->insert_id();
    }

     public function find(Array $arr){
        return $this->db->get_where('tbl_employee_login',$arr)->row();
    }

    function update($where,$data){
        $this->db->update('tbl_employee_login', $data, $where ); // gives UPDATE
    }

    function update_status($where,$data){
        $this->db->update('tbl_employee', $data, $where ); // gives UPDATE
    }
}