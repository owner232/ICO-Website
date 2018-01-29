<?php

Class usermodel extends CI_Model {

	function insertmember()
	{
		date_default_timezone_set("Asia/Kolkata");
		$datecreated =  Date('Y-m-d h:i:s');
		
		$email=trim($_POST['email']);
		$refcode=uniqid();
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_emailid',$email);
		$this->db->where('user_type','2');
		$query = $this->db->get();
		$result = $query->result_array(); 
		if(count($result)>0)
		{
			$this->session->set_flashdata('error-message','Emailid  is already exists');
			redirect(base_url().'admin/user');
			exit;
		}
		else
		{
			$mailid=$email;

		}
		$data = array( 
			'member_name'  =>$_POST['username'],
			'member_emailid' =>$mailid,
			'member_password' => md5($_POST['password']),
			'member_status' => '1',
			'user_type'=>'2',
			'member_phoneno' => $_POST['phoneno'],
			'member_refcode'=>$refcode,
			'created_on' => $datecreated,

			);

		if($this->db->insert('membertable', $data))
		{

			$this->session->set_flashdata('message','Member registered Successfully');

			redirect(base_url().'admin/user');
		}
		else
		{
			$this->session->set_flashdata('error-message','Try Again,Member is not registered');

			redirect(base_url().'admin/user');
		}

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
			'member_status' => '1',
			);
		$this->db->where('member_id',$user_id);
		if($this->db->update('membertable',$data))
		{
			
			$this->session->set_flashdata('message','members updated successfully');
			redirect(base_url().'admin/dashboard');
		}
		else
		{
			$this->session->set_flashdata('error-message','members not updated  successfully');
			redirect(base_url().'admin/dashboard');

		}
		

	}
	function suspend()
	{
		$user_id=$this->uri->segment(4);
		$data = array( 
			'member_status' => '0',
			);
		$this->db->where('member_id',$user_id);
		if($this->db->update('membertable',$data))
		{
			
			$this->session->set_flashdata('message','members updated successfully');
			redirect(base_url().'admin/dashboard');
		}
		else
		{
			$this->session->set_flashdata('error-message','members not updated  successfully');
			redirect(base_url().'admin/dashboard');

		}
		

		

	}
	function delete()
	{
		$tid=$this->uri->segment(4);
		$this->db->where('member_id',$tid);


		if($this->db->delete('membertable'))
		{

			$this->session->set_flashdata('message', 'members deleted successfully');
			redirect(base_url().'admin/dashboard');
		}

		else
		{



			$this->session->set_flashdata('error-message', 'Error In Deleting The members');
			redirect(base_url().'admin/dashboard'); 
		}
	}

}
?>