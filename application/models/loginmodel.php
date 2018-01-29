<?php

Class loginmodel extends CI_Model {



	public function validatelogin()
	{
		 /*$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
  	//echo $recaptchaResponse; exit;
  $userIp=$this->input->ip_address();
    
  $secret='6Le5YjcUAAAAAKERmVPoi1XDOuOHUrhw12PQaGw8';
  
  $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
  //print_r($url); exit;
 $response = $this->curl->simple_get($url);
 //print_r($response); exit;
  $status= json_decode($response, true);

  if($status['success']){ */ 
		/*$user=$_POST['username'];
		$pass=md5($_POST['password']);
		//$ip=$_SERVER['SERVER_ADDR'];

		$this->db->select('*');
		$this->db->from('membertable');
		$this->db->where('member_emailid',$user);
		$this->db->where('member_password',$pass);
		$this->db->where('user_type','2');
		$query = $this->db->get();
		$result = $query->result();
	    $this->db->last_query();
		$id=$result[0]->member_id;
		$name=$result[0]->member_name;
		if(count($result)!='0')
		{
		    
		   
			 $this->session->set_userdata('user_id',$id);
			 $this->session->set_userdata('user_username',$name);
			 redirect(base_url().'welcome');
		}
		else
		{
             $this->session->set_flashdata('error-message','Invalid Login');

			 redirect(base_url().'login');
		//}
       }*/
	 }
	 public	function logout()
	 {
	 	    date_default_timezone_set("Asia/Kolkata");
            $datecreated =  Date('Y-m-d h:i:s');
 	       
			$user_id=$this->session->userdata('user_id');


			$this->session->sess_destroy();


		    $this->session->set_flashdata('message','Logged out Successfully');

			redirect(base_url().'login');
	 }
	 function check_email($email)
        {
                $this->db->select('member_emailid');
                $this->db->from('membertable');
                $this->db->where('member_emailid', $email);
                $this->db->limit(1);

                $query = $this->db->get();
               //echo $this->last_query(); exit;
                if($query->num_rows() == 1)
                {
                        return TRUE;
                }
                else
                {
                        return FALSE;
                }
        }

        function reset($new, $id)
        {
                $data = array(
                        'member_password'=> $new
                        );
                $this->db->where('member_emailid', $id);
                $query = $this->db->update('membertable', $data);

                if($query)
                {
                        return TRUE;
                }
                else
                {
                        return FALSE;
                }
        }

        function get_data($table,$where,$select=FALSE,$order = FALSE,$limit=FALSE,$join=FALSE,$type,$wherenot='',$field='',$wherein='',$priority='',$priority_type='')
    {
        if(!empty($select))
        {
            $this->db->select($select,FALSE);    
        }
        if(!empty($join))
        {
            $this->db->from($join[0]);
            $this->db->join($join[1],$join[2]);
        }
        if(!empty($where))
        {
            $this->db->where($where);
        }
        if(!empty($wherein))
        {
            $this->db->where_in($wherein);
        }
        if(!empty($wherenot))
        {
            $this->db->where_not_in($wherenot);
        }
        if(!empty($order) && $order != '')
        {
            if(is_array($order)){
                if(count($order)==2)
                $this->db->order_by($order[0], $order[1]);
                else if(count($order)==1){
                if(isset($order[0]))
                $this->db->order_by($order[0]);
                else{
                    foreach($order as $orderkey=>$orderval){
                      $this->db->order_by($orderkey, $orderval);
                    }
                 }
               }
            }else
            $this->db->order_by($order);
        }
        if(!empty($priority))
        {       
            if(!empty($priority_type)){
            $this->db->order_by($priority,$priority_type);
            }else{
                $this->db->order_by($priority,'ASC');
            }
        }
        if(!empty($limit))
        {
            $this->db->limit($limit[0],$limit[1]);
        }

        $query = $this->db->get($table);
        if($query->num_rows() >= 1)
        {   

            if($type == 'result')
            {
                return $query->result();
            } 
            else if($type == 'result_array')
            {
                return $query->result_array();
            } 
            else if($type == 'row_array')
            {
                return $query->row_array();
            } 
            else if($type == 'row')
            {
                if($field != '')
                {
                    $row    =   $query->row();
                    return $row->$field;
                }else{
                    return $query->row();
                }
            }    
            else if($type == 'count')
            {
                return $query->num_rows();
            }        
        }  
        else
        {    
            return false;        
        }
    }
}
