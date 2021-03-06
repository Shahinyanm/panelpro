<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of emp_model
 *
 * @author nayem
 */
class Emp_Model extends MY_Model
{

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function all_emplyee_info($id = NULL)
    {
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_employee_bank.*', FALSE);
        $this->db->select('tbl_employee_document.*', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->select('tbl_department.department_name', FALSE);
        $this->db->select('countries.countryName', FALSE);
        $this->db->from('tbl_employee');
        $this->db->join('tbl_employee_bank', 'tbl_employee_bank.employee_id = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_employee_document', 'tbl_employee_document.employee_id  = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id  = tbl_employee.designations_id', 'left');
        $this->db->join('tbl_department', 'tbl_department.department_id  = tbl_designations.department_id', 'left');
        $this->db->join('countries', 'countries.idCountry  = tbl_employee.country_id', 'left');
        if (!empty($id)) {
            $this->db->where('tbl_employee.employee_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        if (!empty($id)) {
            $this->db->select('tbl_employee.nationality', FALSE);
            $this->db->select('countries.countryName', FALSE);
            $this->db->from('tbl_employee');
            $this->db->join('countries', 'countries.idCountry  =  tbl_employee.nationality ', 'left');
            $query_nationality = $this->db->get();
            $nationality = $query_nationality->row();
            if (!empty($nationality)) {
                $result->nationality = $nationality->countryName;
            }
        }

        return $result;
    }

    public function get_all_notice($limit = NULL)
    {
        $data = array();
        $id = $this->session->userdata('employee_id');

        $this->db->select('tbl_notice.*', FALSE);
        $this->db->from('tbl_notice');
        if (!empty($limit)) {
            $this->db->limit('5');
        }
        $this->db->where('flag', 1);
        $this->db->order_by("notice_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();

        foreach ($result as $assigned) {
            if (!empty($assigned->assigned_to)) {
                $assigned->assigned_to = unserialize($assigned->assigned_to);
                foreach ($assigned->assigned_to as $arr) {
                    if (in_array($id, $arr)) {
                        $data[] = $assigned;
                    }

                }
            } else {

                $data[] = $assigned;

            }
        }
        return $data;
    }

    public function get_all_events()
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('tbl_holiday');
        $this->db->limit('7');
        $this->db->order_by("start_date", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        $id = $this->session->userdata('employee_id');
        foreach ($result as $assigned) {
            if (!empty($assigned->assigned_to)) {
                $assigned->assigned_to = unserialize($assigned->assigned_to);
                foreach ($assigned->assigned_to as $arr) {
                    if (in_array($id, $arr)) {
                        $data[] = $assigned;
                    }

                }
            } else {

                $data[] = $assigned;

            }
        }
        return $data;
    }

    public function get_all_awards($id = NULL)
    {
        $this->db->select('tbl_employee_award.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->select('tbl_department.department_name', FALSE);
        $this->db->from('tbl_employee_award');
        $this->db->join('tbl_employee', 'tbl_employee_award.employee_id  = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id  = tbl_employee.designations_id', 'left');
        $this->db->join('tbl_department', 'tbl_department.department_id  = tbl_designations.department_id', 'left');
        $this->db->order_by("award_date", "desc");
        if (!empty($id)) {
            $this->db->where('tbl_employee_award.employee_award_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }

        return $result;
    }

    public function get_all_leave_applied($employee_id)
    {
        $this->db->select('tbl_application_list.*', FALSE);
        $this->db->select('tbl_leave_category.*', FALSE);
        $this->db->from('tbl_application_list');
        $this->db->join('tbl_leave_category', 'tbl_leave_category.leave_category_id  = tbl_application_list.leave_category_id', 'left');
        $this->db->where('tbl_application_list.employee_id', $employee_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_total_attendace_by_date($start_date, $end_date, $employee_id)
    {

        $this->db->select('tbl_attendance.*', FALSE);
        $this->db->from('tbl_attendance');
        $this->db->where('employee_id', $employee_id);
        $this->db->where('date_in >=', $start_date);
        $this->db->where('date_in <=', $end_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_public_holiday($start_date, $end_date)
    {
        $this->db->select('tbl_holiday.*', FALSE);
        $this->db->from('tbl_holiday');
        $this->db->where('start_date >=', $start_date);
        $this->db->where('end_date <=', $end_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_mytime_info($attendance_id = NULL, $clock_id = NULL)
    {

        $this->db->select('tbl_attendance.*', FALSE);
        $this->db->select('tbl_clock.*', FALSE);
        $this->db->from('tbl_attendance');
        $this->db->join('tbl_clock', 'tbl_clock.attendance_id  = tbl_attendance.attendance_id', 'left');
        if (!empty($attendance_id)) {
            $this->db->where('tbl_attendance.attendance_id', $attendance_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        if (!empty($clock_id)) {
            $this->db->where('tbl_clock.clock_id', $clock_id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        }

        return $result;
    }

    public function get_upcoming_birthday()
    {
        $this->db->select('employee_id,first_name,last_name,date_of_birth,photo');
        $this->db->from('tbl_employee');
        $this->db->order_by('date_of_birth');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_inbox_message($email, $flag = NULL, $del_info = NULL, $limit = NULL)
    {

        $this->db->select('*');
        $this->db->from('tbl_inbox');
//
        if (!empty($del_info)) {
            $this->db->where('deleted', 'Yes');
        } else {
            $this->db->where('deleted', 'No');
        }
        if (!empty($flag)) {
            $this->db->where('view_status', '2');
        }
        if (!empty($limit)) {
            $this->db->limit('10');
        }
        $this->db->where('to', $email);
        $this->db->order_by('message_time', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
//
        return $result;
    }

    public function get_sent_message($employee_id, $del_info = NULL)
    {
        $this->db->select('*');
        $this->db->from('tbl_sent');
        $this->db->where('employee_id', $employee_id);
        if (!empty($del_info)) {
            $this->db->where('deleted', 'Yes');
        } else {
            $this->db->where('deleted', 'No');
        }
        $this->db->order_by('message_time', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_draft_message($employee_id, $del_info = NULL)
    {
        $this->db->select('*');
        $this->db->from('tbl_draft');
        if (!empty($del_info)) {
            $this->db->where('deleted', 'Yes');
        } else {
            $this->db->where('deleted', 'No');
        }
        $this->db->where('employee_id', $employee_id);

        $this->db->order_by('message_time', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_salary_payment_info($salary_payment_id, $result = NULL)
    {

        $this->db->select('tbl_salary_payment.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->select('tbl_department.department_name', FALSE);
        $this->db->from('tbl_salary_payment');
        $this->db->join('tbl_employee', 'tbl_salary_payment.employee_id = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id  = tbl_employee.designations_id', 'left');
        $this->db->join('tbl_department', 'tbl_department.department_id  = tbl_designations.department_id', 'left');
        $this->db->where("tbl_salary_payment.salary_payment_id", $salary_payment_id);
        $query_result = $this->db->get();
        if (!empty($result)) {
            $result = $query_result->result();
        } else {
            $result = $query_result->row();
        }

        return $result;
    }

    public function get_all_task_info($id = NULL)
    {
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

     public function get_all_task_contact_info($id = NULL)
    {
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
    public function get_new_task($where, $id = NULL)
    {
        $this->db->select('tbl_task.*', FALSE);
        $this->db->from('tbl_task');
        $this->db->where($where);
        $this->db->where('assigned_to', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();



        return $result;
    }

public function get_new_task_contact($where, $id = NULL)
    {
        $this->db->select('tbl_task_contact.*', FALSE);
        $this->db->from('tbl_task_contact');
        $this->db->where($where);
        $this->db->where('assigned_to', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();



        return $result;
    }


    public function get_my_awards($where, $id = NULL)
    {
        $this->db->select('tbl_employee_award.*', FALSE);
        $this->db->from('tbl_employee_award');
        $this->db->where($where, $id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_my_mail($where, $id = NULL)
    {
        $this->db->select('tbl_inbox.*', FALSE);
        $this->db->from('tbl_inbox');
        $this->db->where($where, $id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_my_notice($where, $id = NULL)
    {
        $data = [];

        $this->db->select('tbl_notice.*', FALSE);
        $this->db->from('tbl_notice');
        $this->db->where($where);
        $query_result = $this->db->get();
        $result = $query_result->result();

        foreach ($result as $assigned) {
            if (!empty($assigned->assigned_to)) {
                $assigned->assigned_to = unserialize($assigned->assigned_to);
                foreach ($assigned->assigned_to as $arr) {
                    if (in_array($id, $arr)) {
                        $data[] = $assigned;
                    }

                }
            } else {
                $data[] = $assigned;
            }
            return $data;
        }

    }

    public function get_my_event($where, $id = NULL)
    {
        $data = array();
        $this->db->select('tbl_holiday.*', FALSE);
        $data = [];
        $this->db->from('tbl_holiday');
        $this->db->where($where);
        $query_result = $this->db->get();
        $result = $query_result->result();

        foreach ($result as $assigned) {
            if (!empty($assigned->assigned_to)) {
                $assigned->assigned_to = unserialize($assigned->assigned_to);
                foreach ($assigned->assigned_to as $arr) {
                    if (in_array($id, $arr)) {
                        $data[] = $assigned;
                    }

                }
            } else {
                $data[] = $assigned;
            }

        }
        return $data;
    }

    public function get_time_change_request()
    {
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

//    public function get_my_taks($where,$id = NULL) {
//        $this->db->select('tbl_task.*', FALSE);
//        $this->db->from('tbl_task');
//        $this->db->where($where, $id);
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//
//        return $result;
//    }


    public function get_all_comment_info($id = NULL)
    {
        $this->db->select('tbl_task_comment.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_task.*', FALSE);

        $this->db->from('tbl_task_comment');
        $this->db->join('tbl_employee', 'tbl_task_comment.employee_id = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_task', 'tbl_task_comment.task_id = tbl_task.task_id', 'left');

        $this->db->where('tbl_task_comment.task_id', $id);
        $this->db->order_by('tbl_task_comment.task_comment_id', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
  public function get_all_contact_comment_info($id = NULL)
    {
        $this->db->select('tbl_task_contact_comment.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_task_contact.*', FALSE);

        $this->db->from('tbl_task_contact_comment');
        $this->db->join('tbl_employee', 'tbl_task_contact_comment.employee_id = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_task_contact', 'tbl_task_contact_comment.task_contact_id = tbl_task_contact.task_contact_id', 'left');

        $this->db->where('tbl_task_contact_comment.task_contact_id', $id);
        $this->db->order_by('tbl_task_contact_comment.task_contact_comment_id', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_my_contact_comment_info($id = NULL)
    {


        $data = array();
        $this->db->select('tbl_task_contact.*');
        $this->db->from('tbl_task_contact');
        $this->db->where('tbl_task_contact.assigned_to',$id);
        $task = $this->db->get()->result();
        $result = array();
        $sum = null;
        foreach ($task as $comment){

            $this->db->select('tbl_task_contact_comment.*', FALSE);
            $this->db->select('tbl_task_contact.*', FALSE);
            $this->db->from('tbl_task_contact_comment');
            $this->db->join('tbl_task_contact', 'tbl_task_contact_comment.task_contact_id = tbl_task_contact.task_contact_id');
            $this->db->where('tbl_task_contact.task_contact_id', $comment->task_contact_id);
            $this->db->where('tbl_task_contact_comment.view_status', 2);

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

  public function get_my_comment_info($id = NULL)
    {
        $this->db->select('tbl_task.*');
        $this->db->from('tbl_task');
        $this->db->where('tbl_task.assigned_to',$id);
        $task = $this->db->get()->result();

        $result = array();
        $sum = null;
        foreach ($task as $comment){

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
