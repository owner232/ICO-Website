<?php

Class userdetailsmodel extends CI_Model {

    

    function getdetails()
    {

    	

 		$member_id = end($this->uri->segment_array()); 
  		//$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('member_id',$member_id);
        $query = $this->db->get();
        $result = $query->result();

        return $result;


        /*$member_name=$result[0]->member_name;
        $member_emailid =$result[0]->member_emailid;
        $created_on =  $result[0]->created_on;*/
    }
}

    ?>