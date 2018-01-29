<?php

Class geneology extends CI_Model {

    function hierarchy()
    {
        $member_id = $this->session->userdata('member_id');
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('sponsor_id',$member_id);
        $this->db->where('user_type','2');
        $query = $this->db->get();

      //  echo $this->db->last_query();exit;
        $result = $query->result();
        $sponsor_id=$result[0]->reference_code;
        return $result;

    }
}
?>