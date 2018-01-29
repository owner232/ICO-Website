<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

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
  		    $sess_id = $this->session->userdata('user_id');
		   	if(empty($sess_id))
		   	{
	        	redirect(base_url().'login'); 
   				exit;
		    }  	 			   				    
		}



	public function updateprofile()
	{

		//$this->load->view('profile'); 
		$this->profilemodel->updateprofile();

	}
	public function updatepassword()
	{
		$this->profilemodel->updatepassword();
	}
	public function checkpassword()
	{
		$this->profilemodel->checkpassword();
	}
}
