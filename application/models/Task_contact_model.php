<?php

class Task_Contact_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function get_all_task_contact_info($id = NULL) {
        $this->db->select('tbl_task_contact.*', FALSE);
        $this->db->from('tbl_task_contact');
        if (!empty($id)) {
            $this->db->where('tbl_task_contact.task_contact_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }

        return $result;
    }

    public function get_all_comment_info($id = NULL) {
        $this->db->select('tbl_task_contact_comment.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->from('tbl_task_contact_comment');
        $this->db->join('tbl_employee', 'tbl_task_contact_comment.employee_id = tbl_employee.employee_id', 'left');
        $this->db->where('tbl_task_contact_comment.task_contact_id', $id);
        $this->db->order_by('tbl_task_contact_comment.task_contact_comment_id', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();


        return $result;
    }
    public function update($data, $where){

        $this->db->update('tbl_task_contact',$data,$where );
    }


    public function update_comment($data, $where){

        $this->db->update('tbl_task_contact_comment',$data,$where );
    }

    public function delete_team_link($where){

    $this->db->delete('tbl_team',$where);
}
    public function delete_advisor_link($where){

        $this->db->delete('tbl_advisor',$where);
    }

    public function delete_partner_link($where){

        $this->db->delete('tbl_partner',$where);
    }

    public function get_all_task_team_info($id = NULL)
    {
        $this->db->select('tbl_team.*', FALSE);
        $this->db->from('tbl_team');
        $this->db->where('tbl_team.task_contact_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_all_task_advisor_info($id = NULL)
    {
        $this->db->select('tbl_advisor.*', FALSE);
        $this->db->from('tbl_advisor');
        $this->db->where('tbl_advisor.task_contact_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function get_all_task_partner_info($id = NULL)
    {
        $this->db->select('tbl_partner.*', FALSE);
        $this->db->from('tbl_partner');
        $this->db->where('tbl_partner.task_contact_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    
}
