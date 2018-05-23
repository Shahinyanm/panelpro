<?php

class Admin_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function select_employee_by_department_id($department_id) {
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_department.*', FALSE);
        $this->db->from('tbl_employee');
        $this->db->join('tbl_department', 'tbl_employee.department_id = tbl_department.department_id', 'left');
        $this->db->where('tbl_employee.department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function check_atndnce_status_by_id($employee_id, $date, $department_id) {
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_department.*', FALSE);
        $this->db->from('tbl_employee');
        $this->db->join('tbl_department', 'tbl_employee.department_id = tbl_department.department_id', 'left');
        $this->db->where('tbl_employee.department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function check_holiday_by_date() {
        $this->db->select('tbl_holiday.*', FALSE);
        $this->db->from('tbl_holiday');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_event_by_id($employee_id) {
        $this->db->select('tbl_event.*', FALSE);
        $this->db->select('tbl_employee.employee_id', FALSE);
        $this->db->from('tbl_event');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_event.employee_id', 'left');
        $this->db->where('tbl_event.employee_id', $employee_id);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_all_notice() {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $this->db->limit('3');
        $this->db->where('flag', 1);
        $this->db->order_by("created_date", "DESC");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_emp_leave_info() {
        $this->db->select('tbl_application_list.*', FALSE);
        $this->db->select('tbl_employee.first_name,tbl_employee.last_name,tbl_employee.photo', FALSE);
        $this->db->from('tbl_application_list');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_application_list.employee_id', 'left');
        $this->db->where('tbl_application_list.view_status', '2');
        $this->db->where('tbl_application_list.notify_me', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_time_change_request() {
        $this->db->select('tbl_clock_history.*', FALSE);
        $this->db->select('tbl_employee.first_name,tbl_employee.last_name,tbl_employee.photo', FALSE);
        $this->db->from('tbl_clock_history');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_clock_history.employee_id', 'left');
        $this->db->where('tbl_clock_history.view_status', '2');
        $this->db->where('tbl_clock_history.notify_me', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_upcoming_birthday() {
        $this->db->select('employee_id,first_name,last_name,date_of_birth,photo');
        $this->db->from('tbl_employee');
        $this->db->order_by('date_of_birth');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_absent_employee() {
        $this->db->select('tbl_attendance.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);        
        $this->db->from('tbl_attendance');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_attendance.employee_id', 'left');        
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_menu_by_uri($uriSegment) {

        $this->db->select('tbl_menu.*', FALSE);
        $this->db->from('tbl_menu');
        $this->db->where('link', $uriSegment);
        $query_result = $this->db->get();
        $result = $query_result->row();
        if (count($result)) {
            $menuId[] = $result->menu_id;
            $menuId = $this->select_menu_by_id($result->parent, $menuId);
        } else {

            return false;
        }
        if (!empty($menuId)) {
            $lastId = end($menuId);
            $parrent = $this->select_menu_first_parent($lastId);
            array_push($menuId, $parrent->parent);
            return $menuId;
        }
    }

    public function select_menu_by_id($id, $menuId) {
        $this->db->select('tbl_menu.*', FALSE);
        $this->db->from('tbl_menu');
        $this->db->where('menu_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        if (count($result)) {
            array_push($menuId, $result->menu_id);
            if ($result->parent != 0) {
                $result = self::select_menu_by_id($result->parent, $menuId);
            }
        }
        return $menuId;
    }

    public function select_menu_first_parent($lastId) {
        $this->db->select('tbl_menu.*', FALSE);
        $this->db->from('tbl_menu');
        $this->db->where('menu_id', $lastId);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function get_expense_list_by_date($start_date, $end_date) {
        $this->db->select('tbl_expense.*', FALSE);
        $this->db->from('tbl_expense');
        $this->db->where('purchase_date >=', $start_date);
        $this->db->where('purchase_date <=', $end_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_recent_application() {
        $this->db->select('tbl_application_list.*', FALSE);
        $this->db->select('tbl_leave_category.*', FALSE);
        $this->db->select('tbl_employee.employment_id,tbl_employee.first_name,tbl_employee.last_name,tbl_employee.photo', FALSE);
        $this->db->from('tbl_application_list');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_application_list.employee_id', 'left');
        $this->db->join('tbl_leave_category', 'tbl_leave_category.leave_category_id = tbl_application_list.leave_category_id', 'left');
        $this->db->order_by('tbl_application_list.application_list_id', 'DESC');
        $this->db->limit('5');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_inbox_message($email, $flag = Null, $limit = NULL) {
        $this->db->select('*');
        $this->db->from('tbl_inbox');
        $this->db->where('from', $email);
        if (!empty($flag)) {
            $this->db->where('view_status', '2');
        }
        if (!empty($limit)) {
            $this->db->limit('10');
        }
        $this->db->order_by('message_time', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_admin_mail($where,$id = NULL) {
        $this->db->select('tbl_inbox.*', FALSE);
        $this->db->from('tbl_inbox');
        $this->db->where($where, $id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }


    public function get_my_comment_info($id = NULL)
    {
        $data = array();
        $this->db->select('tbl_task.*');
        $this->db->from('tbl_task');
        $this->db->where('tbl_task.assigned_to',$id);
        $task = $this->db->get()->result();
//        var_dump($task);
//        foreach ($task as $assigned) {
//
//            if (!empty($assigned->assigned_to)) {
//                $assigned->assigned_to = unserialize($assigned->assigned_to);
//                foreach ($assigned->assigned_to as $arr) {
//                    if (in_array($id, $arr)) {
//                        $data[] = $assigned;
//                    }
//                }
//            }
//        }
//    var_dump($data);
//        die();
        $result = array();
        $sum = null;
        foreach ($data as $comment){
//            echo $comment->task_id;
//            die();
            $this->db->select('tbl_task_comment.*', FALSE);
            $this->db->select('tbl_task.*', FALSE);
            $this->db->from('tbl_task_comment');
            $this->db->join('tbl_task', 'tbl_task_comment.task_id = tbl_task.task_id');
            $this->db->where('tbl_task.task_id', $comment->task_id);
            $this->db->where('tbl_task_comment.view_status', 2);

            $query_result = $this->db->get();
            if(!empty($query_result->result())){
                $a = $query_result->result();
                foreach ($a as $arr){

                    if ($arr->user_id != NULL){
                        $result[] = $arr;
                    }
                }
            }
        }

        return count($result);
    }


    public function get_my_contact_comment_info($id = NULL)
    {
        $data = array();
        $this->db->select('tbl_task_contact_comment.*', FALSE);
        $this->db->select('tbl_task_contact.*', FALSE);
        $this->db->from('tbl_task_contact_comment');
        $this->db->join('tbl_task_contact', 'tbl_task_contact_comment.task_contact_id = tbl_task_contact.task_contact_id');
        $this->db->where('tbl_task_contact_comment.user_id', NULL);
        $this->db->where('tbl_task_contact_comment.view_status', 2);
        $result = $this->db->get()->result();


        return count($result);
    }

}
