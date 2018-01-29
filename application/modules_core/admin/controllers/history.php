<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_all);
class history extends MX_Controller  
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
			
		$output['coinname']=$this->sitesettingmodel->showsitesettings("current_currency_coin");
			
	       $output['history']=$this->paymentmodel->Transactionhistory();

            $this->load->view('transactionhistory',$output);
			
	    }
	    
}


?>