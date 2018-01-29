<?php

Class bonusmodel extends CI_Model {

	function bonusdetails()
  {
     $this->db->select('*');
     $this->db->from('bonus_settings');
    
     $query = $this->db->get();
     $result = $query->result();
     return $result;

  }
	function editbonus()
	{
		$id=$this->uri->segment(4);
  //$user_id=$this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('bonus_settings');
		$this->db->where('bonus_id',$id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		

	}

	public function updatebonus()
	{
		 $user_id=$this->uri->segment(4);
		

		$data = array( 
			'bonus_name' => $_POST['bonusname'],
			'starting_date' => $_POST['sdate'],
			'ending_date' => $_POST['edate'],
			'bonus_points' => $_POST['bonuspoints'],
			'tokenlimit' => $_POST['limit'],
			);
		$this->db->where('bonus_id',$user_id);
		if($this->db->update('bonus_settings',$data))
		{
			echo 
			$this->session->set_flashdata('message','Bonus updated successfully');
			redirect(base_url().'admin/bonus');
		}
		else
		{
			$this->session->set_flashdata('error-message','Bonus not updated  successfully');
			redirect(base_url().'admin/bonus');

		}

	}
	function active()
	{
		$user_id=$this->uri->segment(4);
		$data = array( 
			'bonus_status' => '1',
			);
		$this->db->where('bonus_id',$user_id);
		if($this->db->update('bonus_settings',$data))
		{
			
			$this->session->set_flashdata('message','bonus updated successfully');
			redirect(base_url().'admin/bonus');
		}
		else
		{
			$this->session->set_flashdata('error-message','bonus not updated  successfully');
			redirect(base_url().'admin/bonus');

		}
		

	}
	function suspend()
	{
		$user_id=$this->uri->segment(4);
		$data = array( 
			'bonus_status' => '0',
			);
		$this->db->where('bonus_id',$user_id);
		if($this->db->update('bonus_settings',$data))
		{
			
			$this->session->set_flashdata('message','bonus updated successfully');
			redirect(base_url().'admin/bonus');
		}
		else
		{
			$this->session->set_flashdata('error-message','bonus not updated  successfully');
			redirect(base_url().'admin/bonus');

		}
		

		

	}
	

}
?>