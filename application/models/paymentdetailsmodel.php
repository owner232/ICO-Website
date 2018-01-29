<?php

Class paymentdetailsmodel extends CI_Model {

     
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
   function showpointsbtc()
  {
    $this->db->select('*');
    $this->db->from('coin_pointssettings');
    $this->db->where('coin_id','1');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointsltc()
  {
    $this->db->select('*');
    $this->db->from('coin_pointssettings');
    $this->db->where('coin_id','2');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointseth()
  {
    $this->db->select('*');
    $this->db->from('coin_pointssettings');
    $this->db->where('coin_id','3');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointszec()
  {
    $this->db->select('*');
    $this->db->from('coin_pointssettings');
    $this->db->where('coin_id','4');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
    function showpointsbts()
  {
    $this->db->select('*');
    $this->db->from('coin_pointssettings');
    $this->db->where('coin_id','5');
    $query = $this->db->get();
    $result = $query->result();
    return $result;

    }
  function showinvestbtc()
  {
    
    $this->db->select('SUM(btcamount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','BTC');
  
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }

    function showinvestltc()
  {
    
    $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','LTC');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }
    function showinvesteth()
  {
    $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','ETH');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }
    function showinvestzec()
  {
    $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','ZEC');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }
    function showdepbtc()
  {
    $this->db->select('SUM(deposit_amount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','BTC');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }

    function showdepltc()
  {
    $this->db->select('SUM(deposit_amount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','LTC');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }
    function showdepeth()
  {
    $this->db->select('SUM(deposit_amount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','ETH');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }
    function showdepzec()
  {
    $this->db->select('SUM(deposit_amount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','ZEC');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;

    }
    function checkpayment()
    {

      #require_once(APPPATH.'libraries/bitcoin/bp_lib.php');
      require_once(APPPATH.'libraries/bitcoin/coinpayments.inc.php');
      date_default_timezone_set("Asia/Kolkata");
         $datecreated =  Date('Y-m-d h:i:s');
      $this->db->select('*');
        $this->db->from('paymentgateway_settings');
        $this->db->where('mode_id','1');
        $query = $this->db->get();
        $result = $query->result();
       $btc_publickey=$result[0]->public_key;
        //$result[0]->public_key;
      $btc_privatekey=$result[0]->private_key;
      //$result[0]->private_key;
        $userid=$this->session->userdata('user_id');
       
        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('member_id',$userid);
        $query1 = $this->db->get();
        $result1 = $query1->result();
        $member_email=$result1[0]->member_emailid;
        $user_id=$this->session->userdata('user_id');
        $username=$this->session->userdata('user_username');
		
		//get total amount of BTC
		 $this->db->select('SUM(btcamount) as amount');
                        $this->db->from('transaction_history');
                        $this->db->where('cash_type','BTC');
                        $this->db->where('payment_status',2);
                         $this->db->where('type',1);
                        $query = $this->db->get();
                        $result = $query->result();
                        $btcpoints=$result[0]->amount;
						
    $this->db->select('SUM(btcamount) as amount');
                        $this->db->from('transaction_history');
                        $this->db->where('cash_type','LTC');
                        $this->db->where('payment_status',2);
                         $this->db->where('type',1);
                        $query = $this->db->get();
                        $result = $query->result();
                        $ltcpoints=$result[0]->amount;
						
						
    $this->db->select('SUM(btcamount) as amount');
                        $this->db->from('transaction_history');
                        $this->db->where('cash_type','ETH');
                        $this->db->where('payment_status',2);
                         $this->db->where('type',1);
                        $query = $this->db->get();
                        $result = $query->result();
                        $ethpoints=$result[0]->amount;
		
		$arr = array("LTC","ETH","BTC");
		foreach($arr as $coin){
		
			$url = base_url()."/priceticker.php?c=$coin&p=BTC";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
			$response = curl_exec($ch);
			curl_close($ch);
			switch($coin){
				case 'LTC':
					$ltcrate = $response;
					$ltcpoints = $ltcpoints * $response;
				break;
				case 'ETH':
					$ethrate = $response;
					$ethpoints = $ethpoints * $response;
				break;
				case 'BTC':
					$btcrate = $response;
				break;
				default:
					$div = 0;
				break;
			}					
		}
		
		foreach($arr as $coin){
		
			$url = base_url()."/priceticker.php?c=$coin&p=USD";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
			$response = curl_exec($ch);
			curl_close($ch);
			switch($coin){
				case 'LTC':
					$ltcusdrate = $response;
				break;
				case 'ETH':
					$ethusdrate = $response;
				break;
				case 'BTC':
					$btcusdrate = $response;
				break;
			}					
		}
		
		
		
		$totalbtcdep = str_replace(",","",number_format(($ltcpoints + $ethpoints + $btcpoints),8));
		switch(strtoupper(trim($_POST['cointype']))){
				case 'LTC':
						$newdepo = number_format(($_POST['amount'] / $ltcusdrate) * $ltcrate,8);
				break;
				case 'ETH':
						$newdepo = number_format(($_POST['amount'] / $ethusdrate) * $ethrate,8);
				break;
				case 'BTC':
						$newdepo = number_format(($_POST['amount'] / $btcusdrate) * $btcrate,8);
				break;
			}	
		
		//get limit
		
		$this->db->select('*');
		$this->db->from('tokensettings');
		$this->db->where('token_id','4');
		$query = $this->db->get();
		$result = $query->result();
		$btclimit = $result[0]->token_value;
		
		// the new depo list
		if(($totalbtcdep+$newdepo)>$btclimit){
			//error
			$output.=' <div class="col-md-12 col-sm-12 qr_blk">
					  <h2>Deposit Error</h2>
			<div class="qr_img">
			</div>
				<div class="qr_cont">
					<p>We can no longer accept Deposit as of this time. we might have reach the maximum BTC Deposit Limit. Please try again in smaller value.</p>
				</div>
			</div>
			';
			echo $output;
			die();
		}
		
		//end
        
      $amount=$_POST['amount']; 
        $ac_currency="USD";
        // $id=$_GET['id'];
         $id=$this->uri->segment(3);

           if($id=='1')
           {
             $sel_coin="BTC";
           }
           elseif($id=='2')
           {
            $sel_coin="LTC";
			$getp="price_ltd";
           }
            elseif($id=='3')
           {
            $sel_coin="ETH";
			$getp="price_eth";
           }
           elseif($id=='4')
           {
            $sel_coin="ZEC";
           }
           elseif($id=='5')
           {
            $sel_coin="BTS";
           }
           $this->db->select('*');
           $this->db->from('currency_settings');
           $this->db->where('currency_id',$id);
           $query1 = $this->db->get();
           $result1 = $query1->result();
          // $points=$result1[0]->currency_rate;
           $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=$sel_coin";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
			$response = curl_exec($ch);
			curl_close($ch);
			$json =json_encode($response);
			$json =json_decode($response);
			$array = array();
			foreach($json as $item) {

				array_push($array, $item->name);
			} 

			$points = $item->price_usd;
			switch($sel_coin){
				case 'LTC':
					$points = $item->price_usd/$item->price_ltc;
				break;
				case 'ETH':
					$points = $item->price_usd/$item->price_eth;
				break;
				default:
					$div = 0;
				break;
			}
         
            $cps = new CoinPaymentsAPI();
      $cps->Setup($btc_privatekey,$btc_publickey);


      //$result = $cps->CreateTransactionSimple($username,$member_email,$amount,$ac_currency,$sel_coin);
      $result = $cps->CreateTransactionSimple($username,$member_email,$amount,$sel_coin,$sel_coin);
        


          if ($result['error'] == 'ok') {

           $eamount=$result['result']['amount'];
			
			$ecashamount = $points * $eamount;

             $data = array( 
        'transaction_id'=>$result['result']['txn_id'],
        'member_id' => $user_id,    
        'cash_type'  =>$sel_coin,
        'deposit_amount' =>$ecashamount,
        'btcamount'=>$eamount,
        'ecashcoin' => $ecashamount,
        'created_on' => $datecreated,
        'payment_status'=>'1',
        'type'  => '1',
        
        );
        $this->db->insert('transaction_history', $data);



    
            $le = php_sapi_name() == 'cli' ? "\n" : '<br />';

            $trans_id=$result['result']['txn_id'];

            $address=$result['result']['address'];
              $btcamount=$result['result']['amount'];
               $qrcode=$result['result']['qrcode_url'];
               $url=$result['result']['status_url'];
              // print_r($result);
                //redirect($url);
         $output.=' <div class="col-md-12 col-sm-12 qr_blk">
          <h2>Payment</h2>
<div class="qr_img">
<img src="'.$qrcode.'" alt="qr code"><a href="http://www.qrcode-generator.de" border="0" style="cursor:default" rel="nofollow"></a>
</div>
    <div class="qr_cont">
        <div class="inp_box">
        <label>'.$sel_coin.' Amount</label>
        <input type="text" name="btcamt" value="'.$btcamount.'" class="btcamt" disabled>
        </div>
        <div class="inp_box">
        <label>'.$sel_coin.' Address</label>
        <input type="text" name="address" value="'.$address.'" class="name" disabled>
        </div>
        <div class="inp_box">
        <label>Transaction ID</label>
        <input type="text" name="id" class="id" value="'.$trans_id.'" disabled>
        </div>
    </div>
</div>
';
        
            echo $output;

            } 
            else
            {
          $output['error']=$result['error']; 
            }
        }
   function totalecoincash()
  {
    $user_id=$this->session->userdata('user_id');
    $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
    $this->db->where('member_id',$user_id);
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;
    }
     function totalinvestor()
  {
   
    $this->db->select('COUNT(member_id) as total');
    $this->db->from('membertable');
    $query = $this->db->get();
    $result = $query->result();
    //print_r($result);
    $points=$result[0]->total;
    return $points;

    }
    function totalecoin()
  {
   
    $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
   
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
     return $points;
    

    }
    function mailid()
  {
    $userid=$this->session->userdata('user_id');
    $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('member_id',$userid);
        $query1 = $this->db->get();
        $result1 = $query1->result();
      
       $email=$result1[0]->member_emailid;
        return $email; 
   }




    
     function getcurrencydetails()
    {
      
       //$this->db->select('history_id');
       $this->db->select('DISTINCT(cash_type)');
       $this->db->from('transaction_history');
             
       $query1 = $this->db->get();
        $result1 = $query1->result();
        return $result1; 

    }





  function currency()
    {
          $query =$this->db->get('currency_settings');
          if($query->num_rows() >= 1)
          {
          return $qry=$query->result();
          }
          else
          {
          return false;
          } 
    }



  function getvalue()
  {
    $userid=$this->session->userdata('user_id');
    $output='';
    $cash_type= $_POST['cashtype'];
    $this->db->select('SUM(btcamount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('type', '1');
    $this->db->where('payment_status','2');
    $query = $this->db->get();

    $result = $query->result();
    $points=$result[0]->amount;

    $this->db->select('SUM(btcamount) as total');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('type', '2');
    $query1 = $this->db->get();
    

    $result1 = $query1->result();
    $points1 =$result1[0]->total;
   
  $totalbalanceamt = $points-$points1;
  if ($totalbalanceamt < 0)
    {
     $totalbalance="0";
     }
     else
     {
         
      $totalbalance = $points-$points1;
     }
 $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=$cash_type";

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
                            curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
                            $response = curl_exec($ch);
                            curl_close($ch);
                            $json =json_encode($response);
                            $json =json_decode($response);
                // $price = round($json["ticker"]["buy"], 2);

                            

                            $array = array();
                            foreach($json as $item) {

                                array_push($array, $item->name);
                            } 
							
			switch($cash_type){
				case 'LTC':
					$bit_rate = $item->price_usd/$item->price_ltc;
				break;
				case 'ETH':
					$bit_rate = $item->price_usd/$item->price_eth;
				break;
				default:
                    $bit_rate = $item->price_usd;
				break;
			}
         

           $check= round($totalbalance  *  $bit_rate,8);           

   $curdate=date('Y-m-d');
    $this->db->select('*');
    $this->db->from('tokensettings');
    $this->db->where('token_id','1');
    $query = $this->db->get();
    $result1   = $query->result();
    $rate=$result1[0]->token_value;


    $output='<div id="form-token-input-amount" class="col-md-12 col-sm-12 col-xs-12 amnt">
      <div class="input-group input-amount">
       
               <label>Wallet Balance(USD)</label>

      <input  class="input-number coin-amount" id="coins1" name="coins1" type="number" value="'.$check.'" disabled>
      <input type="hidden" id="min" name="min" value="0">
      <input type="hidden" id="max" name="max" value="'.$check.'">
      <input type="hidden" id="maxsiltoxcoin" name="maxsiltoxcoin" value="'.$check.'">
            <input type="hidden" name="cashtype" id="cashtype" value="'.$cash_type.'">
       
      </div>
    </div>';
     echo $output;


    

    }
//check sales offer

function gettokenvalue()
{

                            
                            
 $amount= $_POST['amount'] ;  
 $cashtype= $_POST['cashtype'];  

 $curdate=date('Y-m-d');

 $this->db->select('*');
 $this->db->from('bonus_settings');
 $this->db->where('starting_date <= ',$curdate );
 $this->db->where('ending_date >= ', $curdate ); 
 
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();
if(count($result1)>0)
{
 $name=$result1[0]->bonus_name;  
 $currency_value=$result1[0]->bonus_points;
 $limit=$result1[0]->tokenlimit;
 $tokenid=$result1[0]->bonus_id;
 $sold=$result1[0]->soldtoken;
 $tot = $amount/$currency_value;
 
 $totaloftoken= round($tot);
 $balancetot=$totaloftoken * $currency_value;
 $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=$cashtype";

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
                            curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
                            $response = curl_exec($ch);
                            curl_close($ch);
                            $json =json_encode($response);
                            $json =json_decode($response);
                // $price = round($json["ticker"]["buy"], 2);

                            

                            $array = array();
                            foreach($json as $item) {

                                array_push($array, $item->name);
                            } 

			switch($cashtype){
				case 'LTC':
					$bit_rate = $item->price_usd/$item->price_ltc;
				break;
				case 'ETH':
					$bit_rate = $item->price_usd/$item->price_eth;
				break;
				default:
                            $bit_rate = $item->price_usd;
				break;
			}
			
           $checkbtc= round($balancetot  /  $bit_rate,8);      
 
 $checklimit=$limit-$sold;
 //update history
 if($checklimit > 0){
 $datecreated =  Date('Y-m-d h:i:s');

 $userid=$this->session->userdata('user_id');
 $data = array( 
        'member_id' => $userid,    
        'cash_type'  =>$cashtype,
        'ecashcoin' =>$amount,
        'deposit_amount' =>$balancetot,
        'btcamount'=>$checkbtc,
        'created_on' => $datecreated,
        'token' => $totaloftoken,
        'type' => '2',
        'payment_status'=>'4',
        'tokentype'=>$tokenid
        );

        $this->db->insert('transaction_history', $data);
       
    $this->db->set('soldtoken','soldtoken +'.$totaloftoken.'',FALSE);
    $this->db->where('bonus_id',$tokenid);
    $this->db->update('bonus_settings');
    echo "yes";
  }
  //echo "notokens";
}
else
{
 echo "no";
}

 }

//ends


  function getRPCdetails(){
	$this->db->select('*');
    $this->db->from('coin_rpcsetting');
    $this->db->where('cid','1');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }


function tokenvalue()
{

  
  $curdate=date('Y-m-d');

 $this->db->select('*');
 $this->db->from('bonus_settings');
 
 $this->db->where('starting_date <= ',$curdate );
 $this->db->where('ending_date >= ', $curdate ); 
 
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();
 $tokenid=$result1[0]->bonus_id;    

$this->db->cache_off();
   $userid=$this->session->userdata('user_id');
    $this->db->select('SUM(token) as amount');
    $this->db->from('transaction_history');
    $this->db->where('tokentype',$tokenid);
    $this->db->where('member_id',$userid);
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
	
   $userid=$this->session->userdata('user_id');
    $this->db->select('SUM(token) as amount');
    $this->db->from('transaction_history');
    $this->db->where('member_id',$userid);
    $this->db->where('payment_status','6');
    $query = $this->db->get();
    $result = $query->result();
    $points2=$result[0]->amount;
	
$this->db->cache_on();
    return $points-$points2;
  
}



function tokenvalue_fixed()
{

  
  $curdate=date('Y-m-d');

 $this->db->select('*');
 $this->db->from('bonus_settings');
 
 $this->db->where('starting_date <= ',$curdate );
 $this->db->where('ending_date >= ', $curdate ); 
 
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();
 $tokenid=$result1[0]->bonus_id;    
$this->db->cache_off();
   $userid=$this->session->userdata('user_id');
    $this->db->select('SUM(token) as amount');
    $this->db->from('transaction_history');
    $this->db->where('tokentype',$tokenid);
    $this->db->where('member_id',$userid);
    $this->db->where('payment_status','4');
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
	
   $userid=$this->session->userdata('user_id');
    $this->db->select('SUM(token) as amount');
    $this->db->from('transaction_history');
    $this->db->where('member_id',$userid);
    $this->db->where('payment_status','6');
    $query = $this->db->get();
    $result = $query->result();
    $points2=$result[0]->amount;
	
	$this->db->cache_on();
    return $points-$points2;
  
}







function getcredits()
{
   $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type','BTC');
  
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
    return $points;
}


function referral()
{
$userid=$this->session->userdata('user_id');
    $this->db->select('COUNT(*) as ref');
    $this->db->from('membertable');
    $this->db->where('referal_id',$userid);
    $query = $this->db->get();
  // echo $this->db->last_query(); exit;
    $result = $query->result();
    $points=$result[0]->ref;
    return $points;
}


function getuserbalance()
{

  $userid=$this->session->userdata('user_id');   
     $cash_type="BTC";

   $this->db->select('SUM(ecashcoin) as amount1');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('type',"1");
    $this->db->where('payment_status','2');
    $this->db->where('member_id',$userid);
    $query1 = $this->db->get();
    $result1 = $query1->result();
    $points1=$result1[0]->amount1;


    $this->db->select('SUM(ecashcoin) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('type', '2');
    $query = $this->db->get();

    $result = $query->result();
    $points=$result[0]->amount;
    $balance=$points1-$points;
    if ($balance < 0)
    {
     $balanceamt="0";
     }
     else
     {
      $balanceamt=$points1-$points;
     }
    return $balanceamt; 
}

function gettokenavaliable()
{

$curdate=date('Y-m-d');

 $this->db->select('*');
 $this->db->from('bonus_settings');
 
 $this->db->where('starting_date <= ',$curdate );
 $this->db->where('ending_date >= ', $curdate ); 
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();
 $tokenid=$result1[0]->bonus_id;    
 $limit=$result1[0]->tokenlimit;
 $sold=$result1[0]->soldtoken;

$userid=$this->session->userdata('user_id');
    $this->db->select('SUM(token) as amount');
    $this->db->from('transaction_history');
    $this->db->where('tokentype',$tokenid);
    $this->db->where('member_id',$userid);
    $query = $this->db->get();
    $result = $query->result();
    $points=$result[0]->amount;
   // return $points;

      $overallbalance = $limit-$sold; 
    return $overallbalance; 


}



function gen_random_string($length=16)
 {
    $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//length:36
    $final_rand='';
    for($i=0;$i<$length; $i++)
    {
      $final_rand .= $chars[ rand(0,strlen($chars)-1)];
   
    }
    return $final_rand;
 }


function transcations()
{
 
    $userid=$this->session->userdata('user_id');   
  
    $this->db->select('*');    
    $this->db->from('transaction_history');
    $this->db->where('member_id',$userid);
    $this->db->order_by('history_id','DESC');  
    $this->db->limit('10');
    $query1 = $this->db->get();
    $result1 = $query1->result();
    return $result1; 
}

function withdrawaltranscations()
{
 
    $userid=$this->session->userdata('user_id');   
  
    $this->db->select('*');    
    $this->db->from('withdrawal_history');
    $this->db->where('userid',$userid);
    $this->db->order_by('timestamp','DESC');  
    $this->db->limit('10');
    $query1 = $this->db->get();
    $result1 = $query1->result();
    return $result1; 
}

function currentsales()
{

  $curdate=date('Y-m-d');

 $this->db->select('*');
 $this->db->from('bonus_settings');
 
 $this->db->where('starting_date <= ',$curdate );
 $this->db->where('ending_date >= ', $curdate ); 
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();exit;
if(count($result1)>0)
{
 
 $output['name']=$result1[0]->bonus_name;  
 $output['currency_value']=$result1[0]->bonus_points;
 $output['limit']=$result1[0]->tokenlimit;


}
else
{
  
  $output['name']="no sales";  
 $output['currency_value']="0";
 $output['limit']="not available";

}
return $output;
}

function btc()
  {
    $this->db->select('*');
    $this->db->from('currency_settings');
    $this->db->where('currency_id','1');
    $query = $this->db->get();
   // echo $this->db->last_query(); exit;
    $result = $query->result();
    return $result[0]->currency_rate;

    }
function soldtokens()
{

$curdate=date('Y-m-d');

 $this->db->select('*');
 $this->db->from('bonus_settings');
 
 $this->db->where('starting_date <= ',$curdate );
 $this->db->where('ending_date >= ', $curdate ); 
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();
 $tokenid=$result1[0]->bonus_id;    
 $limit=$result1[0]->tokenlimit;
 $sold=$result1[0]->soldtoken;
 return $sold; 


}
function totalcoins()
{
    $this->db->select('SUM(tokenlimit) as amount');
                        $this->db->from('bonus_settings');
                       
                        $query = $this->db->get();
                        $result = $query->result();
                        $points=$result[0]->amount;
                        $this->db->select('SUM(soldtoken) as amount');
                        $this->db->from('bonus_settings');
                        
                        $query = $this->db->get();
                        $result1 = $query->result();
                        $points1=$result1[0]->amount;
                        $total= $points-$points1;
                        return $total;
}
function soldpertokens()
{

 $curdate=date('Y-m-d');
 $this->db->select('SUM(soldtoken) as amount');
 $this->db->from('bonus_settings');
 $query = $this->db->get();
 $result1 = $query->result();
 //echo $this->db->last_query();

 $sold=$result1[0]->amount;
 return $sold; 


}
function btcbalance()
{
     $userid=$this->session->userdata('user_id');   
     $cash_type="BTC";

    $this->db->select('SUM(btcamount) as amount1');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('type',"1");
    $this->db->where('payment_status','2');
    $this->db->where('member_id',$userid);
    $query1 = $this->db->get();
    $result1 = $query1->result();
    $points1=$result1[0]->amount1;


    $this->db->select('SUM(btcamount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('type', '2');
    $query = $this->db->get();

    $result = $query->result();
    $points=$result[0]->amount;
    $balance=$points1-$points;
    if ($balance < 0)
    {
     $balanceamt="0";
     }
     else
     {
      $balanceamt=$points1-$points;
     }
    return $balanceamt; 
}
function ethbalance()
{
     $userid=$this->session->userdata('user_id');   
     $cash_type="ETH";

    $this->db->select('SUM(btcamount) as amount1');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('type',"1");
    $this->db->where('payment_status','2');
    $this->db->where('member_id',$userid);
    $query1 = $this->db->get();
    $result1 = $query1->result();
    $points1=$result1[0]->amount1;


    $this->db->select('SUM(btcamount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('type', '2');
    $query = $this->db->get();

    $result = $query->result();
    $points=$result[0]->amount;
    $balance=$points1-$points;
    if ($balance < 0)
    {
     $balanceamt="0";
     }
     else
     {
      $balanceamt=$points1-$points;
     }
    return $balanceamt; 
}
function ltcbalance()
{
     $userid=$this->session->userdata('user_id');   
     $cash_type="LTC";

    $this->db->select('SUM(btcamount) as amount1');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('type',"1");
    $this->db->where('payment_status','2');
    $this->db->where('member_id',$userid);
    $query1 = $this->db->get();
    $result1 = $query1->result();
    $points1=$result1[0]->amount1;


    $this->db->select('SUM(btcamount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('type', '2');
    $query = $this->db->get();

    $result = $query->result();
    $points=$result[0]->amount;
    $balance=$points1-$points;
    if ($balance < 0)
    {
     $balanceamt="0";
     }
     else
     {
      $balanceamt=$points1-$points;
     }
    return $balanceamt; 
}
function checkvolume()
{
     $userid=$this->session->userdata('user_id');   
     $cash_type="BTC";

    $this->db->select('*');
    $this->db->from('transaction_history');
    $this->db->where('cash_type',$cash_type);
    $this->db->where('member_id',$userid);
    $this->db->where('payment_status', '4');
    $query = $this->db->get();

    $result = $query->result();
   // echo count($result);
    
    if (count($result)==0)
    {
     echo "no";
     }
     else
     {
      echo "yes";
     }
  
}

  function usertotaldeposits($member_id)
  {
    $this->db->select('SUM(btcamount) as amount');
    $this->db->from('transaction_history');
    $this->db->where('type','1');
    $this->db->where('member_id',$member_id);
    $this->db->where('payment_status', '2');
    $query = $this->db->get();

    $result = $query->result();
    $amount = $result->amount;
    if($amount=='' || $amount=='NULL')
    {
      $totalamount = '0';
    }
    else
    {
      $totalamount = $amount;
    }
    return $totalamount;
  }
}
