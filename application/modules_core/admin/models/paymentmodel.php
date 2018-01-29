<?php

Class paymentmodel extends CI_Model {

	function insertpaymentsettings()
	{

		$data = array( 
            //'username'  =>'coin payment',
			'public_key' => $_POST['public'],
			'private_key' => $_POST['private'],

			);
		$this->db->where('mode_id','1');
		$this->db->update('paymentgateway_settings',$data);

		$data22 = array( 
            //'username'  =>'coin payment',
			'rpchost' => $_POST['rpchost'],
			'rpcport' => $_POST['rpcport'],
			'rpcuser' => $_POST['rpcuser'],
			'rpcpass' => $_POST['rpcpass'],

			);
		$this->db->where('cid','1');
		$this->db->update('coin_rpcsetting',$data22);


        $datas5=array(

            'token_value'     =>$_POST['tokenpoints'], 
            //'coin_address'    =>$_POST['btsaddress']
            );
        $this->db->where('token_id','2');
        $this->db->update('tokensettings',$datas5); 
		
        $datas6=array(

            'token_value'     =>$_POST['btcdepositlimit'], 
            //'coin_address'    =>$_POST['btsaddress']
            );
        $this->db->where('token_id','4');
        $this->db->update('tokensettings',$datas6); 
       
		$datas=array(

			'currency_rate'     =>$_POST['btc'], 
			//'coin_address'    =>$_POST['btcaddress']
			);
		$this->db->where('currency_id','1');
		$this->db->update('currency_settings',$datas);  
		
		 $this->session->set_flashdata('message','Settings added successfully');
	     redirect(base_url().'admin/payment');
	}
	function showpaymentsettings()
	 {
    $this->db->select('*');
    $this->db->from('paymentgateway_settings');
    $this->db->where('mode_id','1');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

   }
	function showrpcsettings()
	 {
    $this->db->select('*');
    $this->db->from('coin_rpcsetting');
    $this->db->where('cid','1');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

   }
	function showbtclimitsettings()
	 {
    $this->db->select('*');
    $this->db->from('tokensettings');
    $this->db->where('token_id','4');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

   }
   function showpointsbtc()
	{
    $this->db->select('*');
    $this->db->from('currency_settings');
    $this->db->where('currency_id','1');
    $query = $this->db->get();
   // echo $this->db->last_query(); exit;
    $result = $query->result();
    return $result;

    }
    function showpointsltc()
	{
    $this->db->select('*');
    $this->db->from('currency_settings');
    $this->db->where('currency_id','2');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointseth()
	{
    $this->db->select('*');
    $this->db->from('currency_settings');
    $this->db->where('currency_id','4');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointsxrp()
	{
    $this->db->select('*');
    $this->db->from('currency_settings');
    $this->db->where('currency_id','3');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointstoken()
	{
    $this->db->select('*');
    $this->db->from('tokensettings');
    $this->db->where('token_id','1');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
   
    function showtokenpoints()
    {
    $this->db->select('*');
    $this->db->from('tokensettings');
    $this->db->where('token_id','2');
    $query = $this->db->get();
    $result = $query->result();
    return $result;


    }
    
    function showtotaltoken()
    {
    $this->db->select('*');
    $this->db->from('tokensettings');
    $this->db->where('token_id','3');
    $query = $this->db->get();
    $result = $query->result();
    return $result;


    }
    function Transactionhistory()
    {
    $this->db->select('*');
    $this->db->from('transaction_history');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
    function username($id)
    {
    $this->db->select('*');
    $this->db->from('membertable');
    $this->db->where('member_id',$id);
    $query = $this->db->get();
    $result = $query->result();
    $name=$result[0]->member_name;
    return $name;
    }

    /*added by revathyjr starts*/
    function getcurrencysettings()
    {
        $this->db->select('*');
        $this->db->from('currency_settings');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function gettokensettings()
    {
        $this->db->select('*');
        $this->db->from('tokensettings');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /*added by revathyjr ends*/

}
?>