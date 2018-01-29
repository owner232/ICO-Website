<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sitesettings extends MX_Controller  
{

		function __construct() 
		{
	        parent::__construct();

	        $this->load->library('session');
			
			$this->load->model('sitesettingmodel');
			$sess_id = $this->session->userdata('admin_id');
		   	if(empty($sess_id))
		   	{
	        	redirect(base_url().'admin/login'); 
   				exit;
		    }    				    
		}

		function index()
		{
			$output['site']=$this->sitesettingmodel->showsitesettings();
             $this->load->view('sitesettingsview',$output);
					
	    }
	    function updatesitesetting()
	    {
	    	//print_r($_POST);exit;
	    	$this->sitesettingmodel->updatesitesetting();
	    }



	   

}


?>