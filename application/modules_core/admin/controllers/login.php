<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MX_Controller  
{

		function __construct() 
		{
	        parent::__construct();

	        $this->load->library('session');
			$this->load->model('loginmodel');
			$this->load->model('sitesettingmodel');
			//$this->load->library('email');	   				    
		}

		function index()
		{
			
         $output['site_name'] = $this->sitesettingmodel->showsitesettings('site_name');
		$output['footer_content'] = $this->sitesettingmodel->showsitesettings('footer_content');
		$this->load->view('loginview',$output);
					
	    }
	    function checklogin()
	    {
	    	//echo "sdh";exit;
	    	$this->loginmodel->validatelogin();
	    }
	    function logout()
		{

		 $this->loginmodel->logout();
	
		}	

}


?>