<?php

Class registermodel extends CI_Model {



	public function insertmember()
	{
    $secret = '6Le5YjcUAAAAAKERmVPoi1XDOuOHUrhw12PQaGw8';
    $Res = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

      $res = json_decode($Res);

      foreach ($res as $key => $value)
      {
        if($key=='success')
        {
          $resp_status1=$value;
        }
      }

      if($resp_status1='1')
      {
        //echo "<pre>";
       // print_r($this->uri->segment_array());

		 $code=$this->uri->segment(3);

        		if($code!='0' || $code!='')
            {
        		$this->db->select('*');
            $this->db->from('membertable');
            $this->db->where('member_refcode',$code);
            $this->db->where('user_type','2');
            $query2 = $this->db->get();
            $result2 = $query2->result(); 
            //echo $this->db->last_query(); exit;
            $refid=$result2[0]->member_id;
            $reference_code = $result2[0]->reference_code;

              $refcode=uniqid();
          }

          /*added by vivek starts*/
          elseif($code == '')
          {
            $this->db->select('*');
            $this->db->from('membertable');
            $this->db->where('user_type','2');
            $this->db->order_by('member_id','ASC');
            $query2 = $this->db->get();
            $result2 = $query2->result();

            $refid=$result2[0]->member_id;
            $reference_code = $result2[0]->reference_code;
          }

          /*added by vivek ends*/
       

     $refcode=uniqid();
     if($refid=='0' or $refid=='')
     {
    	 $refid='0';
      $refcode='0';
     }  
		date_default_timezone_set("Asia/Kolkata");
         $datecreated =  Date('Y-m-d h:i:s');
		 // $profileimage='assets/global/images/noimage.png';
		$email=trim($_POST['email']);

			$this->db->select('*');
            $this->db->from('membertable');
            $this->db->where('member_emailid',$email);
            $this->db->where('user_type','2');
            $query = $this->db->get();
            $randomrefcode = $this->randomrefcode();
            $result = $query->result_array(); 
      		if(count($result)>0)
      		{
      			 $this->session->set_flashdata('error-message','Emailid  is already exists');
                redirect(base_url().'register');
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
		    'referal_id'=>$refid,
        'member_refcode'=>$refcode,
        'sponsor_id'=>$reference_code,
        'reference_code' => $randomrefcode,
		    'created_on' => $datecreated,
		    
		    );

		  	if($this->db->insert('membertable', $data))
  			{ 
              $site_name = $this->settingsmodel->showsitesettings('admin_sitelogo');
              $from_email = $_POST['member_emailid'];
              $this->db->select('*');
              $this->db->from('membertable');
              $this->db->where('user_type','1');         
              $query = $this->db->get();
              $result = $query->result();
              //echo $this->db->last_query(); exit;
              $from_email=$result[0]->member_emailid; 
           


		        /*$from_email="admin@ecapitalcoin.com";*/
            $subject="Registration Successfull";
            $mailcontent="Your have register Successfully,your username:".$mailid." and password:".$_POST['password']."";
            $this->email->from($from_email, $this->settingsmodel->showsitesettings('site_name')); 
            $this->email->to($mailid);
            $this->email->subject($subject); 
            $this->email->message($mailcontent); 
        
            $this->email->send();
		     $this->session->set_flashdata('message','User registered Successfully');
			 redirect(base_url().'login');
		    }
		  else
		  {
             $this->session->set_flashdata('error-message','Try Again,Member is not registered');

			 redirect(base_url().'register');
		  }
       }
	 }

   function randomrefcode()
   {
    $randomNmbr = sprintf("%06d", mt_rand(100000, 999999));
    $this->db->select('*');
    $this->db->from('membertable');
    $this->db->where('reference_code',$randomNmbr);
    $querys = $this->db->get();
    $result1 = $querys->result();
    $totals=count($result1);
    if ($totals > 0) 
    {  
      $this->randomrefcode();
    }
    elseif($totals==0)
    {
      return $randomNmbr;
    }
   }
  }
	 

