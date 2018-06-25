<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Status_model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;


    public function change_status(){

    }

    public function add_employee($data,$id=NULL){
            // Insert
            if ($id === NULL) {
                !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;

                $this->db->set($data);
                $this->db->insert($this->_table_name);
                $id = $this->db->insert_id();
            }
            // Update
            else {

                $filter = $this->_primary_filter;
                $id = $filter($id);
                $this->db->set($data);
                $this->db->where($this->_primary_key, $id);
                $this->db->update($this->_table_name);

            }

            return $id;
        }



}
