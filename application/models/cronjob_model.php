<?php

class cronjob_model extends CI_Model
{
 function __construct()
 {
  parent::__construct();    
}

function my_cronjob(){

//require_once(APPPATH.'libraries/bitcoin/bp_lib.php');
      require_once(APPPATH.'libraries/bitcoin/coinpayments.inc.php');
      date_default_timezone_set("Asia/Kolkata");
         $datecreated =  Date('Y-m-d h:i:s');
      $this->db->select('*');
        $this->db->from('paymentgateway_settings');
        $this->db->where('mode_id','1');
        $query = $this->db->get();
        $result = $query->result();
        $btc_publickey=$result[0]->public_key;
      $btc_privatekey=$result[0]->private_key;

    $this->db->select('*');
    $this->db->from('transaction_history');
    $this->db->where('payment_status','1');
    $query = $this->db->get();
    $result = $query->result();
	echo "<pre>";
  print_r($result);
            $cps = new CoinPaymentsAPI();
      $cps->Setup($btc_privatekey,$btc_publickey);
   
  foreach ($result as $key => $value) {
    $currenttime=date('Y-m-d H:i:s');
   $transaction_id=$value->transaction_id;
   $tid=$value->history_id;
   $res = $cps->get_tx_info($transaction_id);

 $err= $res['error'];
  if($err=='ok')
  {
  echo $res['result']['status'];
  if($res['result']['status']==-1)
  {
 $data=array(
     'payment_status' =>'3',
              );
    $this->db->where('history_id',$tid);
    $this->db->update('transaction_history',$data);

  } 
  elseif($res['result']['status']==100)
  {
       
  $data=array(
     'payment_status' =>'2',
              );
    $this->db->where('history_id',$tid);
    $this->db->update('transaction_history',$data);
  }
  }

   } 
  echo 'cron executed';

}
}

?>