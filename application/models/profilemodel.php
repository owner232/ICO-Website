<?php

Class profilemodel extends CI_Model {

	public function profile()
	{
		$user_id=$this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_id',$user_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function updateprofile()
	{
		$user_id=$this->session->userdata('user_id');

		$mm_base = FCPATH.'uploads/userprofileimg';

		$mm_base = str_replace(DIRECTORY_SEPARATOR, '/', $mm_base.'/'); 

                       // create folder to save user media
		if (!is_dir($mm_base)) {
			if(!mkdir($mm_base, 0777, TRUE)){
				exit('Unable to create user media directory');                  
			}
		}
		$str=$_FILES['userprofileimg_file']['name'];
		$ans= explode(".",$str);

		if ($_FILES['userprofileimg_file']['name'] != '') {
        if($ans[1]=="jpg" or $ans[1]=="png")
           	{
			$getpath = './uploads/userprofileimg/';
			$filename = 'userprofileimg_file';
			$userprofileimage= 'uploads/userprofileimg/'.$user_id.$_FILES['userprofileimg_file']['name'];

			$uploadimagename=$user_id.$_FILES['userprofileimg_file']["name"];

			move_uploaded_file($_FILES['userprofileimg_file']["tmp_name"], $getpath .$uploadimagename);
         }
		}
		else
		{
			$userprofileimage=$_POST['profileimg'];
		}

		$data = array( 
			'member_name' => $_POST['username'],
			'member_phoneno' => $_POST['phoneno'],
			'member_emailid' => $_POST['email'],
			'member_address' => $_POST['address'],
			'member_zip' => $_POST['zip'],
			'member_city' => $_POST['city'],
			'member_country' => $_POST['country'],
		
			);

		//print_r($data); exit;
		$this->db->where('member_id',$user_id);
		if($this->db->update('membertable',$data))
		{
			
			$this->session->set_flashdata('message','members updated successfully');
			redirect(base_url().'welcome/myprofile');
		}
		else
		{
			$this->session->set_flashdata('error-message','members not updated  successfully');
			redirect(base_url().'welcome/myprofile');

		}

	}

	public function updatepassword()
	{
		$user_id=$this->session->userdata('user_id');

		$passd=md5($_POST['old_password']);
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_password',$passd);
		$this->db->where('member_id',$user_id);
		$this->db->where('user_type','2');
		$query = $this->db->get();
		$result = $query->result_array(); 
		if(count($result)>0)
		{
			$pass=md5($_POST['new_password']);
			$data = array( 
				'member_password' => $pass,
				
				);
			$this->db->where('member_id',$user_id);
			if($this->db->update('membertable',$data))
			{
				
				$this->session->set_flashdata('message','members updated successfully');
				redirect(base_url().'welcome/changepassword');
			}
			else
			{
				$this->session->set_flashdata('error-message','members not updated  successfully');
				redirect(base_url().'welcome/changepassword');

			}
		}
		else
		{
			$this->session->set_flashdata('error-message','Old password is wrong');
			redirect(base_url().'welcome/changepassword');
		}

	}
	function checkpassword()
	{
		$pass=md5($_POST['pass']);
		$user_id=$this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_password',$pass);
		$this->db->where('member_id',$user_id);
		$this->db->where('user_type','2');
		$query = $this->db->get();
		$result = $query->result_array(); 
		if(count($result)>0)
		{
			echo 'false';
			exit;
		}
		else
		{
			echo 'true';
			exit;	
		}
		
	}
	function showsitesettings($key)

  {


    $this->db->select('site_settingsvalue');

    $this->db->from('site_settings');
    $this->db->where('site_settingskey',$key);



    $query = $this->db->get();
    $result = $query->result();
    $ans=$result[0]->site_settingsvalue;

    return $ans;

  }
  function get_tfacode()
	{
		$sitename = $this->settingsmodel->getsitesettings('site_name');
		require_once 'GoogleAuthenticator.php';
		$ga = new PHPGangsta_GoogleAuthenticator();
		$data['secret'] = $ga->createSecret();
		$data['qrCodeUrl'] = $ga->getQRCodeGoogleUrl($sitename, $data['secret']);
		$data['oneCode'] = $ga->getCode($data['secret']);
		return $data;
	}
	 function user_check_tfa()
	{
		$customer_user_id=$this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_id',$customer_user_id);
		$query = $this->db->get();
		if($query->num_rows >= 1)
		{                   
	        $row = $query->row();			
	        return $row->randcode;			
	    } 
		else
		{     
	       	return false;		
		}
	}

	function get_secret($clientid)
	{
		$this->db->where('member_id',$clientid);
		$query = $this->db->get('membertable');
		if($query->num_rows == 1)
		{
			$row = $query->row();
			return $row->secret;
		}
	}

	function enable_tfa()
	{
		require_once 'GoogleAuthenticator.php';
		$ga = new PHPGangsta_GoogleAuthenticator();

		$customer_user_id	=	$this->session->userdata('user_id');
		$onecode = $this->input->post("one_code");
		$secret_code = $this->input->post("secret_code");
		$discrepancy = 1;
		$code = $ga->verifyCode($secret_code,$onecode,$discrepancy);
		$user_details = $this->get_userstatus($customer_user_id);
		if($user_details != "enable")
		{
			if($code==1)
			{
				$this->db->where('member_id',$customer_user_id);
				$data=array(
						'secret'  => $secret_code,
						'onecode' => $onecode,
						//'url'     => $url,
						'randcode'  => "enable"
							);
				$this->db->update('membertable',$data);
				
						    
				echo json_encode("Enable");
			}
			else
			{
				return 0;
			}
		}
		else
		{
			if($code==1)
			{
				$this->db->where('member_id',$customer_user_id);
				$data=array(
						'secret'  => $secret_code,
						'onecode' => $onecode,
						'randcode'  => "disable"
							);
				$this->db->update('membertable',$data);
				
			
				return json_encode("disable");
			}
			else
			{
				return json_encode("0");
			}
		}
	}

	function get_userstatus($user_id)
	{
		$this->db->where('member_id',$user_id);  
		$query=$this->db->get('membertable'); 
		if($query->num_rows == 1)
		{                
			$row = $query->row();			 
			return $row->randcode;
		}   
		else
		{      
			return false;		
		}
	}

	
}