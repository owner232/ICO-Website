<?php

Class dashboardmodel extends CI_Model {


  function getTotalMembers()
  {
     $this->db->select('*');
     $this->db->from('membertable');
     $this->db->where('user_type','2');
     $query = $this->db->get();
     $result = $query->result();
     return $result;

  }

  function getRPCdetails(){
	$this->db->select('*');
    $this->db->from('coin_rpcsetting');
    $this->db->where('cid','1');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  function profiledetails()
  {
     $this->db->select('*');
     $this->db->from('membertable');
     $this->db->where('member_id','1');
     $this->db->where('user_type','1');
     $query = $this->db->get();
     $result = $query->result();
     return $result;

  }

  function userscount()
{
  $this->db->where('member_status','1');        
  $query = $this->db->get('membertable');
  if($query->num_rows() >= 1)
  {
    $cnt = $query->num_rows();      
  }   
  else
  {
    $cnt = 0;
  }   
  return  $cnt;      
} 

function newuserscount()
{
  $curdate = date("Y-m-d");
  $this->db->where('created_on',$curdate);        
  $this->db->where('member_status','1');        
  $query = $this->db->get('membertable');
  if($query->num_rows() >= 1)
  {
    $cnt = $query->num_rows();      
  }   
  else
  {
    $cnt = 0;
  }   
  return $cnt;      
} 
   public function updateprofile()
  {
    $user_id=$this->session->userdata('admin_id');

    $mm_base = FCPATH.'uploads/userprofileimg';

    $mm_base = str_replace(DIRECTORY_SEPARATOR, '/', $mm_base.'/'); 

                       // create folder to save user media
    if (!is_dir($mm_base)) {
      if(!mkdir($mm_base, 0777, TRUE)){
        exit('Unable to create user media directory');                  
      }
    }
    $str=$_FILES['adminprofileimg_file']['name'];
    $ans= explode(".",$str);

    if ($_FILES['adminprofileimg_file']['name'] != '') {
        if($ans[1]=="jpg" or $ans[1]=="png")
            {
      $getpath = './uploads/userprofileimg/';
      $filename = 'userprofileimg_file';
      $userprofileimage= 'uploads/userprofileimg/'.$user_id.$_FILES['adminprofileimg_file']['name'];

      $uploadimagename=$user_id.$_FILES['adminprofileimg_file']["name"];

      move_uploaded_file($_FILES['adminprofileimg_file']["tmp_name"], $getpath .$uploadimagename);
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
      'profileimage' =>$userprofileimage,
      
      );
    $this->db->where('member_id',$user_id);
    if($this->db->update('membertable',$data))
    {
      
      $this->session->set_flashdata('message','members updated successfully');
      redirect(base_url().'admin/dashboard/profile');
    }
    else
    {
      $this->session->set_flashdata('error-message','members not updated  successfully');
      redirect(base_url().'admin/dashboard/profile');

    }

  }
public function updatepassword()
  {
    $user_id=$this->session->userdata('admin_id');

    $passd=md5($_POST['old_password']);
    $this->db->select('*');
    $this->db->from('membertable');
    $this->db->where('member_password',$passd);
    $this->db->where('member_id',$user_id);
    $this->db->where('user_type','1');
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
        redirect(base_url().'admin/dashboard/password');
      }
      else
      {
        $this->session->set_flashdata('error-message','members not updated  successfully');
        redirect(base_url().'admin/dashboard/password');

      }
    }
    else
    {
      $this->session->set_flashdata('error-message','Old password is wrong');
      redirect(base_url().'admin/dashboard/password');
    }

  }
 function viewtokens($id)
 {
   $this->db->select('SUM(token) as amount');
    $this->db->from('transaction_history');
    $this->db->where('member_id',$id);
    $query = $this->db->get();
    $result = $query->result();
    $tokens=$result[0]->amount;
    return $tokens;
 }
 function soldtokens()
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
function totalavailablecoins()
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
 
 $sale=$result1[0]->bonus_name;  
 /*$output['currency_value']=$result1[0]->bonus_points;
 $output['limit']=$result1[0]->tokenlimit;
*/

}
return $sale;
}
function earnings()
{
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
		
		$arr = array("LTC","ETH");
		
		foreach($arr as $coin){
		
			//$url = "https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=$coin";
			$url = "ico.unifiedsociety.org/priceticker.php?c=$coin&p=BTC";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
			$response = curl_exec($ch);
			//curl_close($ch);
			//$json =json_encode($response);
			//$json =json_decode($response);
			//$array = array();
			//foreach($json as $item) {
            //
			//	array_push($array, $item->name);
			//} 

			switch($coin){
				case 'LTC':
					$ltcpoints = $ltcpoints * $response;
				break;
				case 'ETH':
					$ethpoints = $ethpoints * $response;
				break;
				default:
					$div = 0;
				break;
			}					
		}
                        
                        return $btcpoints+$ltcpoints+$ethpoints;
}
function viewbalance($id)
{
    $this->db->select('SUM(btcamount) as amount');
                        $this->db->from('transaction_history');
                        $this->db->where('payment_status',2);
                        $this->db->where('type',1);
                         $this->db->where('member_id',$id);
                        $query = $this->db->get();
                        $result = $query->result();
                        $points=$result[0]->amount;
                        
                        return $points;
}
function viewbtcbalance($id)
{
    $this->db->select('SUM(btcamount) as amount');
                        $this->db->from('transaction_history');
                        $this->db->where('payment_status',2);
                        $this->db->where('type',1);
                         $this->db->where('member_id',$id);
                        $query = $this->db->get();
                        $result = $query->result();
                        $points1=$result[0]->amount;
                        $this->db->select('SUM(btcamount) as amount');
                         $this->db->from('transaction_history');
                        $this->db->where('type',2);
                         $this->db->where('member_id',$id);
                        $query = $this->db->get();
                        $result1 = $query->result();
                        $points2=$result1[0]->amount;
                        $points=$points1-$points2;
                        return $points;
}
}
?>