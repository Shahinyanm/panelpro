<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Stage_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;



    public function all_stage_info($id = NULL) {
        $this->db->select('tbl_stage.*', FALSE);
        $this->db->from('tbl_stage');

        if (!empty($id)) {
            $this->db->where('tbl_stage.stage_id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result();
        }
        return $result;
    }



}
