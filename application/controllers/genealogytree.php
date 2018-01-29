<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_ALL);
//ini_set('error_reporting',E_ALL);
//ini_set('display_errors',1);
class genealogytree extends MX_Controller  
{

	function __construct() 
	{
		parent::__construct();

		$this->load->library('session');
			
			$this->load->model('paymentmodel');
			$this->load->model('sitesettingmodel');
			$this->load->model('treemodelgenealogy');
		    //$this->load->library('email');
            //$this->load->helper('path');
			$sess_id = $this->session->userdata('admin_id');
		   	if(empty($sess_id))
		   	{
	        	redirect(base_url().'admin/login'); 
   				exit;
		    }    				    
		}
	function treeviewgenealogy()
	{
  	//print_r($output['genealagyhierarchy'] );exit;
  	$output['genealagyhierarchy'] = $this->treemodelgenealogy->hierarchy();
  	//echo "<pre>";print_r($output['geneologyhierarchy']);exit;
	//$output['profile']=$this->profilemodel->profile();
     $this->load->view('treeviewgenealogy',$output);


	}
}