<?php

class settingsmodel extends CI_Model
{
   function showsitesettings($site_settingskey)
   {
      $this->db->select('*');
      $this->db->from('site_settings');
      $this->db->where('site_settingskey',$site_settingskey);
      $query = $this->db->get();
      $result = $query->result();
      $site_settingsvalue = $result[0]->site_settingsvalue;

      return $site_settingsvalue;
   }

   function setsessiondatas()
   {
      $this->db->select('*');
      $this->db->from('site_settings');
      $query = $this->db->get();
      $result = $query->result();

      for($i=0;$i<count($result);$i++)
      {
         $site_settingskey = $result[$i]->site_settingskey;
         $site_settingsvalue = $result[$i]->site_settingsvalue;

         $this->session->set_userdata($site_settingskey,$site_settingsvalue);
      }
      //echo "<pre>";print_r($this->session->all_userdata());exit;
      return true;
   }

   /*function getheadercontent()
   {
         $output.='
         <div class="nav_menu">
            <nav>
               <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
               </div>
               <div class="today">
                  <h2>Today Currency</h2>
               </div>';

                            
         $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=USD";

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


         $bit_rate = $item->price_usd;

         $url = "https://api.coinmarketcap.com/v1/ticker/ethereum/?convert=USD";

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


         $bit_rate1 = $item->price_usd;

         $url = "https://api.coinmarketcap.com/v1/ticker/zcash/?convert=USD";

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
         foreach($json as $item) 
         {
            array_push($array, $item->name);
         } 

         $bit_rate2 = $item->price_usd;

         $url = "https://api.coinmarketcap.com/v1/ticker/litecoin/?convert=USD";

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
         foreach($json as $item) 
         {
            array_push($array, $item->name);
         } 

         $bit_rate3 = $item->price_usd;

         added by revathyjr starts
         $query = $this->db->query("SELECT currency_rate FROM currency_settings WHERE currency_name='MYC'");
         $result = $query->result();
         $myc_rate = $result[0]->currency_rate;


         $credit_query = $this->db->query("SELECT sum(btcamount) as credit_amount FROM transaction_history WHERE cash_type='BTC' AND type = '1' AND member_id='".$this->session->userdata('user_id')."' ");
         $credit_result = $credit_query->result();
         $credit_bal = $credit_result[0]->credit_amount;

         $debit_query = $this->db->query("SELECT sum(btcamount) as debit_amount FROM transaction_history WHERE cash_type='BTC' AND type = '2' AND member_id='".$this->session->userdata('user_id')."' ");
         $debit_result = $debit_query->result();
         $debit_bal = $credit_result[0]->debit_amount;

         $bal_amount = $credit_bal - $debit_bal;
         $total_myc_rate = ($bal_amount*$myc_rate)/$bit_rate;
         added by revathyjr ends

         $output.='<ul class="nav navbar-nav navbar-right btc">
         <li> MYC=  $ '.$total_myc_rate.'USD</li>
         <!-- added by revathyjr starts -->
         <li>1 MYC =  $ '.$myc_rate.' ?>USD</li>
         <li> 1 BTC = '.$bit_rate.'</li>
         <!-- added by revathyjr ends -->
         </ul>


         </nav>
         </div>';

         echo $output;
   }*/
   function getsitesettings($key)
   {
     
      $where = array('site_settingskey'=>$key);
      $result = $this->common_model->getTableData('site_settings',$where)->row();
 
      $sitesettings_value = $result->site_settingsvalue;
  
      return $sitesettings_value;
   }

   function getmetacontent($key)
   {
      $where = array('page_name'=>$key);
      $result = $this->common_model->getTableData('meta_content',$where)->row();

      return $result;
   }
}
?>