<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(E_ALL);
//ini_set('error_reporting',E_ALL);
 //ini_set('display_errors',1);
class welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('profilemodel');
		$this->load->model('paymentdetailsmodel');
		$this->load->model('settingsmodel');
		$this->load->model('refusermodel');
		$this->load->model('treemodelgenealogy');
		$this->load->model('userdetailsmodel');
		$this->load->model('common_model');
		$this->load->model('rpcwalletmodel');
		$sess_id = $this->session->userdata('user_id');
		if(empty($sess_id))
		{
			redirect(base_url().'login'); 
			exit;
		}  	 			   				    
	}

	public function index()
	{
		$output['payment']=$this->paymentdetailsmodel->showpaymentsettings();
        $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');   
			//
		$output['btc']=$this->paymentdetailsmodel->showpointsbtc();
		$output['list'] = $this->paymentdetailsmodel->currency();
		$output['gettokenvalue'] = $this->paymentdetailsmodel->tokenvalue();
		$output['referral'] = $this->paymentdetailsmodel->referral();
		$output['bal'] = $this->paymentdetailsmodel->getuserbalance();
	   $output['currency'] = $this->paymentdetailsmodel->getcurrencydetails();
    	$output['gettokenavaliable'] = $this->paymentdetailsmodel->gettokenavaliable();
		//print_r($output['currency']); exit;
		$output['ltc']=$this->paymentdetailsmodel->showpointsltc();
		$output['eth']=$this->paymentdetailsmodel->showpointseth();
		$output['zec']=$this->paymentdetailsmodel->showpointszec();
		$output['bts']=$this->paymentdetailsmodel->showpointsbts();
		$output['btccount']=$this->paymentdetailsmodel->showinvestbtc();
		$output['ltccount']=$this->paymentdetailsmodel->showinvestltc();
		$output['ethcount']=$this->paymentdetailsmodel->showinvesteth();
		$output['zeccount']=$this->paymentdetailsmodel->showinvestzec();
		$output['btcdeposit']=$this->paymentdetailsmodel->showdepbtc();
		$output['ltcdeposit']=$this->paymentdetailsmodel->showdepltc();
		$output['ethdeposit']=$this->paymentdetailsmodel->showdepeth();
		$output['zecdeposit']=$this->paymentdetailsmodel->showdepzec();
		$output['totalinvestor']=$this->paymentdetailsmodel->totalinvestor();
		$output['total']=$this->paymentdetailsmodel->totalecoin();
		$output['profile']=$this->profilemodel->profile();
		$output['history']=$this->paymentdetailsmodel->transcations(); 
        $output['current']=$this->paymentdetailsmodel->currentsales(); 
        $output['myc']=$this->paymentdetailsmodel->btc();
          $output['sold']=$this->paymentdetailsmodel->soldpertokens();
         $output['total']=$this->paymentdetailsmodel->totalcoins();  
           $output['btcbalance']=$this->paymentdetailsmodel->btcbalance(); 
           $output['ltcbalance']=$this->paymentdetailsmodel->ltcbalance(); 
           $output['ethbalance']=$this->paymentdetailsmodel->ethbalance(); 
           //print_r($output['btcbalance']);exit;
        /*added by revathyjr starts*/
        $output['token_content'] = $this->settingsmodel->showsitesettings('token_content');
        $output['footer_content'] = $this->settingsmodel->showsitesettings('footer_content'); 
        $output['currency_coin'] = $this->settingsmodel->showsitesettings('current_currency_coin');   
        /*added by revathyjr ends*/
		$this->load->view('index',$output);
	}

	function referral()
	{
  	/*added by revathyjr starts*/
        $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');   
  	$output['referal_content'] = $this->settingsmodel->showsitesettings('referal_content');
  	/*added by revathyjr ends*/
	$output['profile']=$this->profilemodel->profile();

     $this->load->view('referral',$output);


	}

	function buytoken()
	{
  //echo "Asaasassaas"; exit;
       $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
        $output['list'] = $this->paymentdetailsmodel->currency();
		$output['gettokenvalue'] = $this->paymentdetailsmodel->tokenvalue();
		//print_r($output['list']); exit;
	   $output['current']=$this->paymentdetailsmodel->currentsales(); 
	   $output['currency'] = $this->paymentdetailsmodel->getcurrencydetails();
	   /*added by revathyjr starts*/
	   $output['currency_coin'] = $this->settingsmodel->showsitesettings('current_currency_coin');
	   /*added by revathyjr ends*/

     $this->load->view('buy_prg',$output);


	}

	
	function withdraw(){
       $output['walleturl'] = $this->settingsmodel->showsitesettings('wallet_dllink');
       $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
		$output['gettokenvalue'] = $this->paymentdetailsmodel->tokenvalue();
		$output['withdrawhistory'] = $this->paymentdetailsmodel->withdrawaltranscations();
		//
		$this->load->view('withdraw',$output);
	}
	
	function withdrawtoken(){
       $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
		$userid=$this->session->userdata('user_id');
		//get user token balance
        $coinname = $this->settingsmodel->showsitesettings('current_currency_coin');
		$rpc = $this->paymentdetailsmodel->getRPCdetails();
		$gettokenvalue = $this->paymentdetailsmodel->tokenvalue();
		if($_POST['icocoinamount']<=$gettokenvalue && is_numeric($_POST['icocoinamount'])){
			//add to database that the user withdrawn.
			//send coin to wallet.
				$this->rpcwalletmodel->setcon(array('user'=>$rpc[0]->rpcuser,'pass'=>$rpc[0]->rpcpass,'host'=>$rpc[0]->rpchost,'port'=>$rpc[0]->rpcport));
				$txid = $this->rpcwalletmodel->sendto($_POST['icocoinaddress'],$_POST['icocoinamount']);
				
				if($txid){
					//save to database
					$time = time();
					$datecreated = date("Y-m-d",$time);
			   $data = array( 
					'transaction_id'=>$txid,
					'member_id' => $userid,    
					'cash_type'  =>$coinname,
					'deposit_amount' =>"0",
					'btcamount'=>"0",
					'ecashcoin' => "0",
					'created_on' => $datecreated,
					'tokentype'=>0,
					'token'=>$_POST['icocoinamount'],
					'payment_status'=>'6',
					'type'  => '3',
				
				);
				$this->db->insert('transaction_history', $data);
				
			   $data = array( 
					'userid' => $userid,    
					'address'  =>$_POST['icocoinaddress'],
					'amount' =>$_POST['icocoinamount'],
					'txid'=>$txid,
					'timestamp' => $time,
					'status' => 1,
				
				);
				$this->db->insert('withdrawal_history', $data);
					$output['witherror'] = "<p class='green'><b>You have successfully withdrawn your $coinname.</b></p>";
				
				}else{
					$output['witherror'] = "<p class='red'><b>Coins has not been withdrawn.</b></p>";
				}
		}else{
			//dont have enough token to withdraw.
			$output['witherror'] = "<p class='red'><b>You don't have enough token to withdraw.</b></p>";
		}
		
		$output['gettokenvalue'] = $this->paymentdetailsmodel->tokenvalue();
		$output['withdrawhistory'] = $this->paymentdetailsmodel->withdrawaltranscations();
		
		$this->load->view('withdraw',$output);
		
	}
	
	function addpromocode()
	{




	}
	function refuser()
	{
       $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
 		 $output['referalusers']=$this->refusermodel->getreferalusers();
		/*$output['totalmembers']=$this->refusermodel->getTotalMembers();
		$output['totalmember']=$this->refusermodel->userscount();
		$output['newusers']=$this->refusermodel->newuserscount();
		$output['soldtokens']=$this->refusermodel->soldtokens();
		$output['availabletokens']=$this->refusermodel->totalavailablecoins();
		$output['currentsales']=$this->refusermodel->currentsales();
		$output['earnings']=$this->refusermodel->earnings();*/
		//print_r($output['totalmembers1']); exit;
		$this->load->view('refuser',$output);


	}

	function deposit()
	{
	$output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');

     $this->load->view('deposit',$output);


	}
	public function myprofile()
	{
       $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
		$output['profile']=$this->profilemodel->profile();
	//	$output['pass']=$this->profilemodel->updatepassword();
		//print_r($output['profile']); exit;
		$this->load->view('profile',$output);
		//$this->load->view('myprofile',$output);
	}
	public function changepassword()
	{
        $output['coinname'] = strtolower(trim($this->settingsmodel->showsitesettings('current_currency_coin')));
		$id=$this->session->userdata('user_id');
		$this->db->where('member_id',$id);
	 	$usermal=$this->db->get('membertable')->row();
	 	$output['member_name']=$usermal->member_name;
	 	

		 $user_result = $this->profilemodel->user_check_tfa(); 

		$user_secret = $this->profilemodel->get_secret($id); 

		$output['tfa_select'] = $user_result;
		//print_r($data['tfa_select']); exit;
		if($user_result=="enable" || $user_secret!="")
		{
			$secret_code = $user_secret; 
			$output['secret_code'] = $secret_code;
			//print_r($data['secret_code']); exit;
			require_once 'GoogleAuthenticator.php';
	        $ga = new PHPGangsta_GoogleAuthenticator();
			$output['tfa_url'] = $ga->getQRCodeGoogleUrl($sitename, $secret_code);

		}
		else
		{
			 $result 				= 	$this->profilemodel->get_tfacode();
			 //print_r($result);


			 if($result)
			 {
				$output['secret_code'] 	= 	$result['secret'];
				$output['onecode'] 		= 	$result['oneCode'];
				$output['tfa_url']     		= 	$result['qrCodeUrl'];
			 }
			 else
			 {
				$output['secret_code'] 	= 	"";
				$output['onecode'] 		= 	"";
				$output['tfa_url']     		= 	"";
			 }
		}
		$output['profile']=$this->profilemodel->profile();
		
		//print_r($data['url'] );exit;
		$this->load->view('changepassword', $output);
		//$this->load->view('changepassword');
		
	}
	public function enable_tfa()
	{
		echo $result = $this->profilemodel->enable_tfa();
	}

	public function membership()
	{
       $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
		$output['profile']=$this->profilemodel->profile();
		$this->load->view('dashboard',$output);

		//$this->load->view('membership',$output);
		
	}
	public function checkpayment()
	{
		
		$this->paymentdetailsmodel->checkpayment();
		
	}

public function getcurrency($id) {

   $output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
   $currency['list'] = $this->paymentdetailsmodel->getcurrency($id);
  // print_r($currency['list']); exit;
   $this->load->view('dashboard', $output);
}


	 public function distribution()
	 {
 $this->paymentdetailsmodel->getcredits();

      $this->load->view('dashboard');

	 }


function currency()
{
	$result = $this->paymentdetailsmodel->currency();
	
	$optieon ="<option>Select</option>";
	
	foreach ($result as $values)
	{
	  $option .=  "<option  value=".$values->coin_id.">".$values->coin_name."</option>";	
	}
	echo  $option;
}

function cashtype()
{
 
 $this->paymentdetailsmodel->getvalue();


}


function gettokenvalue()
{

 echo $this->paymentdetailsmodel->gettokenvalue();
//echo $sample; exit;
}

function newvalue()
{
$this->paymentdetailsmodel->gettokenvalue();
//echo $sample; 
}


function checkvolume()
{

 $this->paymentdetailsmodel->checkvolume();
//echo $sample; exit;
}

	function geneology()
	{
  	$output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
  	$output['geneologyhierarchy'] = $this->refusermodel->hierarchy();
  	//echo "<pre>";print_r($output['geneologyhierarchy']);exit;
	//$output['profile']=$this->profilemodel->profile();
     $this->load->view('geneology',$output);


	}

	function treeviewgeneology()
	{
  	$output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
  	$output['genealagyhierarchy'] = $this->treemodelgenealogy->hierarchy();
  	//echo "<pre>";print_r($output['geneologyhierarchy']);exit;
	//$output['profile']=$this->profilemodel->profile();
     $this->load->view('treeviewgenealogy',$output);


	}
	function userdetails()
	{
		$output['coinname'] = $this->settingsmodel->showsitesettings('current_currency_coin');
  	$output['userdetail']=$this->userdetailsmodel->getdetails();
     $this->load->view('userdetails', $output);


	}
	

}
