<?php

class Task_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function get_all_task_info($id = NULL) {
        $this->db->select('tbl_task.*', FALSE);
        $this->db->from('tbl_task');
        if (!empty($id)) {
            $this->db->where('tbl_task.task_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }

        return $result;
    }

    public function get_all_comment_info($id = NULL) {
        $this->db->select('tbl_task_comment.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);        
        $this->db->from('tbl_task_comment');
        $this->db->join('tbl_employee', 'tbl_task_comment.employee_id = tbl_employee.employee_id', 'left');
        $this->db->where('tbl_task_comment.task_id', $id);
        $this->db->order_by('tbl_task_comment.task_comment_id', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        
        return $result;
    }
    public function update($data, $where){

        $this->db->update('tbl_task',$data,$where );
    }


    public function update_comment($data, $where){

        $this->db->update('tbl_task_comment',$data,$where );
    }

    public function get_clients_all_task_info($id = NULL,$client_id = NULL) {

        $this->db->select('tbl_task.*', FALSE);
        $this->db->from('tbl_task');
        if (!empty($id)) {

            $this->db->where('tbl_task.task_id', $id);

            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $this->db->where('tbl_task.assigned_from', $client_id);
            $this->db->or_where('tbl_task.assigned_to', $client_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
        }

        return $result;
    }
}
