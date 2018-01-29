<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_all);
class payment extends MX_Controller  
{

		function __construct() 
		{
	        parent::__construct();

	        $this->load->library('session');
			
			$this->load->model('paymentmodel');
			$this->load->model('sitesettingmodel');
			   // $this->load->library('email');
            //$this->load->helper('path');
			$sess_id = $this->session->userdata('admin_id');
		   	if(empty($sess_id))
		   	{
	        	redirect(base_url().'admin/login'); 
   				exit;
		    }    				    
		}

		function index()
		{
			
			$output['payment']=$this->paymentmodel->showpaymentsettings();
			$output['rpcset']=$this->paymentmodel->showrpcsettings();
			$output['btclimit']=$this->paymentmodel->showbtclimitsettings();
			$output['coinname']=$this->sitesettingmodel->showsitesettings("current_currency_coin");

			//
			$output['btc']=$this->paymentmodel->showpointsbtc();
			//print_r($output['btc']);exit;
	        $output['ltc']=$this->paymentmodel->showpointsltc();
	        $output['eth']=$this->paymentmodel->showpointseth();
	        $output['xrp']=$this->paymentmodel->showpointsxrp();
	        $output['token']=$this->paymentmodel->showpointstoken();
	        $output['tokenpoints']=$this->paymentmodel->showtokenpoints();
	        $output['totaltoken']=$this->paymentmodel->showtotaltoken();
	        /*added by revathyjr starts*/
	       /* $output['getcurrencysettings'] = $this->paymentmodel->getcurrencysettings();
	        $output['gettokensettings'] = $this->paymentmodel->gettokensettings();*/
	        $output['site_name'] = $this->sitesettingmodel->showsitesettings('site_name');
	        /*added by revathyjr ends*/

            $this->load->view('paymentgatewaysetting',$output);
			
	    }
	   function insertpaymentsettings()
		{
			
			$output['user']=$this->paymentmodel->insertpaymentsettings();
		
			
	    }
       /*function deleteuser()
       {
       	 $this->usersmodel->deleteuser();
       }
       function packagepurchasesusers()
       {

       		$ci = get_instance(); // CI_Loader instance
	        $defaults_sitesettings= $ci->config->item('defaults');
	        $output['currency_symbol']  =$defaults_sitesettings['currency']['symbol'];
	
	
			$output['mergerecords']=$this->usersmodel->getPendingAssignUsers();

			$output['assigneduser']=$this->usersmodel->getPackageAssignedUsers();

	
            $this->load->view('packagepurchasedusersview',$output);
       }

        function getassignsponsor()
	    {

	    	$user_id=$this->uri->segment(4); // n=1 for controller, n=2 for method, etc
	    	$package_id=end($this->uri->segment_array());

	    	$output['userdetails']=$this->usersmodel->getUserDetails($user_id);
	    	$output['packagedetails']=$this->usersmodel->getPackageDetails($package_id);


            $output['assignsponsor']=$this->usersmodel->getAssignSponsor();


           $this->load->view('assignsponsorview',$output);
	    }

	    function updatesponsor()
	    {
	    
	    	 $this->usersmodel->updatesponsor();

	    }

	    function activatepackageuser()
	    {
	    	 $this->usersmodel->activatepackageuser();

	    }
	    function adduser()
		{
		     if(isset($_POST['send']))
			{
				$this->usersmodel->insertmemberdetails();
			}
			$output['package']=$this->usersmodel->packagelist();
			$this->load->view('adduserview',$output);
			
	    }*/

}


?>