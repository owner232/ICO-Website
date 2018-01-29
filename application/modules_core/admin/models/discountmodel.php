<?php

Class discountmodel extends CI_Model {

	function discountdetails()
  {
     $this->db->select('*');
     $this->db->from('discount_settings');
    
     $query = $this->db->get();
     $result = $query->result();
     return $result;

  }
	function edituser()
	{
		$id=$this->uri->segment(4);
  //$user_id=$this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_id',$id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		

	}

	public function updateuser()
	{
		$user_id=$this->uri->segment(4);
		

		$data = array( 
			'member_name' => $_POST['username'],
			'member_phoneno' => $_POST['phoneno'],
			'member_emailid' => $_POST['email'],
			
			);
		$this->db->where('member_id',$user_id);
		if($this->db->update('membertable',$data))
		{
			
			$this->session->set_flashdata('message','members updated successfully');
			redirect(base_url().'admin/user/edituser/'.$user_id);
		}
		else
		{
			$this->session->set_flashdata('error-message','members not updated  successfully');
			redirect(base_url().'admin/user/edituser/'.$user_id);

		}

	}
	function active()
	{
		$user_id=$this->uri->segment(4);
		$data = array( 
			'discount_status' => '1',
			);
		$this->db->where('discount_id',$user_id);
		if($this->db->update('discount_settings',$data))
		{
			
			$this->session->set_flashdata('message','discount updated successfully');
			redirect(base_url().'admin/discount');
		}
		else
		{
			$this->session->set_flashdata('error-message','discount not updated  successfully');
			redirect(base_url().'admin/discount');

		}
		

	}
	function suspend()
	{
		$user_id=$this->uri->segment(4);
		$data = array( 
			'discount_status' => '0',
			);
		$this->db->where('discount_id',$user_id);
		if($this->db->update('discount_settings',$data))
		{
			
			$this->session->set_flashdata('message','discount updated successfully');
			redirect(base_url().'admin/discount');
		}
		else
		{
			$this->session->set_flashdata('error-message','discount not updated  successfully');
			redirect(base_url().'admin/discount');

		}
		

		

	}
	

}
?>