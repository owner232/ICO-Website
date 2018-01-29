<?php
//error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

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
	        $this->load->model('registermodel');
              $this->load->model('profilemodel');
              $this->load->model('settingsmodel');
             $this->load->library('email');
             $this->load->helper('path');
  		   				   				    
		}

	public function index()
	{
    /*added by revathyjr starts*/
    $output['site_key'] = $this->settingsmodel->showsitesettings('site_key');
    $output['site_logo'] = $this->settingsmodel->showsitesettings('admin_sitelogo');
    $output['footer_content'] = $this->settingsmodel->showsitesettings('footer_content');
    $this->load->view('register',$output);
    /*added by revathyjr ends*/
	}
	public function insertmember()
	{
		
		$this->registermodel->insertmember();
	}
	public function logout()
	{
		
		$this->loginmodel->logout();
	}
	public function registerref()
	{
   // $this->load->view('sign_up');
    $output['site_key'] = $this->settingsmodel->showsitesettings('site_key');
    $output['site_logo'] = $this->settingsmodel->showsitesettings('admin_sitelogo');
    $output['footer_content'] = $this->settingsmodel->showsitesettings('footer_content');
    $this->load->view('register',$output);
		/*$this->load->view('register');*/
	}
	public function forget()
	{  
		$this->load->view('forget');
	}


public function registration()
  {
    //validate input value with form validation class of codeigniter
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirmpswd', 'Password Confirmation', 'required|matches[password]');
        //$this->form_validation->set_message('is_unique', 'This %s is already exits');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('sign_up');
        }
        else
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passhash = hash('md5', $password);
            
            //md5 hashing algorithm to decode and encode input password
            //$salt       = uniqid(rand(10,10000000),true);
      $saltid     = md5($email);
      $status     = 0;
      $data = array('fname' => $fname,
              'lname' => $lname,
              'email' => $email,
              'password' => $passhash,
              'status' => $status);
      if($this->user_model->insertuser($data))
      {
        if($this->sendemail($email, $saltid))
        {
          // successfully sent mail to user email
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Please confirm your email to complete your registration.</div>');
                    redirect(base_url());
        }
        else
        {
          $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again ...</div>');
                    redirect(base_url());
                }
      }
      else
      {
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');
                    redirect(base_url());
      }
        }
  }
  function sendemail($email,$saltid){
    // configure the email setting
    require_once(APPPATH.'config/email.php');
    $currencyname = $this->settingsmodel->showsitesettings('current_currency_coin');
	
    $this->email->initialize($config);
    $url = base_url()."register/confirmation/".$saltid;
    $this->email->from($config['emailfrom'], $config['emailfromname']);
    $this->email->to($email); 
    $this->email->subject('Please Verify Your Email Address');
    $message = "<html>
					<head>
						<head></head>
							<body>
							<p>Hi,</p><p>Thanks for registering for your ".$currencyname." ICO Account!</p><br><p>Please click below link to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>".$currencyname." Team</p>
						</body>
					</html>";
    $this->email->message($message);
    return $this->email->send();
    }
    public function confirmation($key)
    {
        if($this->user_model->verifyemail($key))
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');
            redirect(base_url());
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');
            redirect(base_url());
        }
    }
	
}
