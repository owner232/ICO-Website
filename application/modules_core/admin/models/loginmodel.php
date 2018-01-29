<?php

Class loginmodel extends CI_Model {



	public function validatelogin()
	{

		$user=$_POST['username'];
		$pass=md5($_POST['password']);
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_name',$user);
		$this->db->where('member_password',$pass);
	    $this->db->where('user_type','1');
		$query = $this->db->get();
		$result = $query->result();
		$id=$result[0]->member_id;
		$name=$result[0]->member_name;
		if(count($result)!='0')
		{
		   

			 $this->session->set_userdata('admin_id',$id);
			 $this->session->set_userdata('admin_username',$name);
			 redirect(base_url().'admin/dashboard');
		}
		else
		{
              $this->session->set_flashdata('error-message','Invalid Login');
			 redirect(base_url().'admin/login');
		}

	 }
	 public	function logout()
	 {
 	         date_default_timezone_set("Asia/Kolkata");
            $datecreated =  Date('Y-m-d h:i:s');
 	       
			$user_id=$this->session->userdata('admin_id');


			$this->session->sess_destroy();


		    $this->session->set_flashdata('message','Logged out Successfully');

			redirect(base_url().'admin/login');

 	       
	 }

	 

}
?>