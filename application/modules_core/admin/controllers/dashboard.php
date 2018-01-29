<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(~E_NOTICE & ~E_WARNING);
ini_set("display_errors","On");
ini_set("display_startup_errors","On");
class dashboard extends MX_Controller  
{
	function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('sitesettingmodel');
		$this->load->model('dashboardmodel');
		$this->load->model('rpcwalletmodel');
		$sess_id = $this->session->userdata('admin_id');
		if(empty($sess_id))
		{
			redirect(base_url().'admin/login'); 
			exit;
		}  	  				    
	}

	function index()
	{
		$rpc = $this->dashboardmodel->getRPCdetails();
		$this->rpcwalletmodel->setcon(array('user'=>$rpc[0]->rpcuser,'pass'=>$rpc[0]->rpcpass,'host'=>$rpc[0]->rpchost,'port'=>$rpc[0]->rpcport));
		$output['icocoinbalance']= $this->rpcwalletmodel->getbalance();
		
		$output['coinname']=$this->sitesettingmodel->showsitesettings("current_currency_coin");
		$output['totalmembers']=$this->dashboardmodel->getTotalMembers();
		$output['totalmember']=$this->dashboardmodel->userscount();
		$output['newusers']=$this->dashboardmodel->newuserscount();
		$output['soldtokens']=$this->dashboardmodel->soldtokens();
		$output['availabletokens']=$this->dashboardmodel->totalavailablecoins();
		$output['currentsales']=$this->dashboardmodel->currentsales();
		$output['earnings']=$this->dashboardmodel->earnings();
		//print_r($output['totalmembers1']); exit;
		$this->load->view('dashboardview',$output);
	}

	function profile()
	{
		$output['coinname']=$this->sitesettingmodel->showsitesettings("current_currency_coin");
		$output['profile']=$this->dashboardmodel->profiledetails();
		$this->load->view('profileview',$output);
	}
	
	function updateprofile()
	{
		$this->dashboardmodel->updateprofile();
	}


	function sitesetting()
	{
		$output['coinname']=$this->sitesettingmodel->showsitesettings("current_currency_coin");

		$this->load->view('sitesettingview',$output);
	}

	function password()
	{

		$output['coinname']=$this->sitesettingmodel->showsitesettings("current_currency_coin");
		$this->load->view('password',$output);
	}
	function updatepassword()
	{
		$this->dashboardmodel->updatepassword();
	}

}


?>