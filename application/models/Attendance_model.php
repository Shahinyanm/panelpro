<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of attendance_model
 *
 * @author NaYeM
 */
class Attendance_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function get_employee_id_by_dept_id($department_id) {
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->select('tbl_department.*', FALSE);
        $this->db->from('tbl_employee');
        $this->db->join('tbl_designations', 'tbl_designations.designations_id = tbl_employee.designations_id', 'left');
        $this->db->join('tbl_department', 'tbl_department.department_id = tbl_designations.department_id', 'left');
        $this->db->where('tbl_department.department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function get_designation_by_dept_id($department_id) {
        $this->db->select('tbl_designations.*', FALSE);
        $this->db->select('tbl_department.*', FALSE);
        $this->db->from('tbl_designations');
        $this->db->join('tbl_department', 'tbl_department.department_id = tbl_designations.department_id', 'left');
        $this->db->where('tbl_department.department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function attendance_report_by_empid($employee_id = null, $sdate = null, $flag = NULL, $leave = NULL) {

        $this->db->select('tbl_attendance.*', FALSE);
        $this->db->select('tbl_clock.*', FALSE);
        $this->db->select('tbl_employee.first_name, tbl_employee.last_name ', FALSE);
        $this->db->from('tbl_attendance');
        $this->db->join('tbl_clock', 'tbl_clock.attendance_id  = tbl_attendance.attendance_id', 'left');
        $this->db->join('tbl_employee', 'tbl_attendance.employee_id  = tbl_employee.employee_id', 'left');

        $this->db->where('tbl_attendance.employee_id', $employee_id);
        $this->db->where('tbl_attendance.date_in', $sdate);
        //$this->db->where('tbl_attendance.date_out <=', $sdate);

        $query_result = $this->db->get();
        $result = $query_result->result();

        if (empty($result)) {
            echo $leave;
            //$val['attendance_status'] = $leave;
            $val['attendance_status'] = $flag;
            $val['date'] = $sdate;
            $result[] = (object) $val;
        } else {
            if ($result[0]->attendance_status == 0) {
                if ($flag == 'H') {
                    $result[0]->attendance_status = 'H';
                }
            }
        }


        return $result;
    }

    public function get_all_clock_history($clock_history_id = null) {

        $this->db->select('tbl_clock.*', FALSE);
        $this->db->select('tbl_clock_history.*', FALSE);
        $this->db->select('tbl_employee.first_name, tbl_employee.last_name,tbl_employee.employment_id ', FALSE);
        $this->db->from('tbl_clock_history');
        $this->db->join('tbl_employee', 'tbl_clock_history.employee_id  = tbl_employee.employee_id', 'left');
        $this->db->join('tbl_clock', 'tbl_clock_history.clock_id  = tbl_clock.clock_id', 'left');
        if (!empty($clock_history_id)) {
            $this->db->where('tbl_clock_history.clock_history_id', $clock_history_id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $this->db->order_by('tbl_clock_history.clock_history_id', "DESC");
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }

    public function get_overtime_info_by_date($start_date, $end_date) {
        $this->db->select('tbl_overtime.*', FALSE);
        $this->db->select('tbl_employee.first_name,tbl_employee.last_name', FALSE);
        $this->db->from('tbl_overtime');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_overtime.employee_id', 'left');
        $this->db->where('tbl_overtime.overtime_date >=', $start_date);
        $this->db->where('tbl_overtime.overtime_date <=', $end_date);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function get_overtime_info_by_emp_id($overtime_id) {

        $this->db->select('tbl_overtime.*', FALSE);
        $this->db->select('tbl_employee.*', FALSE);
        $this->db->from('tbl_overtime');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_overtime.employee_id', 'left');
        $this->db->where('tbl_overtime.overtime_id', $overtime_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

}
