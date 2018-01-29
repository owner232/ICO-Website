<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_all);
class user extends MX_Controller  
{

	function __construct() 
	{
		parent::__construct();

		$this->load->library('session');

			$this->load->model('usermodel');
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

		$this->load->view('adduser');

	}
	function insertmember()
	{

		$this->usermodel->insertmember();
	}
     function edituser()
	{
        
		$this->load->view('useredit');

	}
	function updateuser()
	{
        
        $this->usermodel->updateuser();

	}
	function active()
	{
        
        $this->usermodel->active();

	}
	function suspend()
	{
        
        $this->usermodel->suspend();

	}
	function delete()
	{
        
        $this->usermodel->delete();

	}
}


?>