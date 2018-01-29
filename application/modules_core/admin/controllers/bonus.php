<?php 
error_reporting(E_ALL);
ini_set("display_errors","On");
ini_set("display_starter_errors","On");
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_all);
class bonus extends MX_Controller  
{

		function __construct() 
		{
	        parent::__construct();

	        $this->load->library('session');
			
			$this->load->model('bonusmodel');
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
			
			
	       $output['bonus']=$this->bonusmodel->bonusdetails();
		   $output['coinname'] = $this->sitesettingmodel->showsitesettings('current_currency_coin');

            $this->load->view('bonus',$output);
			
	    }
	    function editbonus()
		{
			
			
	      $output['bonus']=$this->bonusmodel->editbonus();
	      //print_r($output['bonus']);exit;

            $this->load->view('editbonus',$output);
			
	    }
	    function updatebonus()
		{
		   $this->bonusmodel->updatebonus();
	      
	    }
	   function active()
		{
			
			$this->bonusmodel->active();
		
			
	    }
       function suspend()
		{
			
			$this->bonusmodel->suspend();
		
			
	    }

}


?>