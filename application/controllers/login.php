<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_ALL);


class login extends CI_Controller  
{
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
	        $this->load->model('loginmodel');
    		$this->load->model('profilemodel');

    		/*added by revathyjr starts*/
			$this->load->model('paymentdetailsmodel');
    		$this->load->model('settingsmodel');
    		/*added by revathyjr ends*/

    		$this->load->library('form_validation');
	        $this->load->library('email');
             $this->load->helper('path');
  		   				   				    
		}

	public function index()
	{
		/*added by revathyjr starts*/
         $output['total']=$this->paymentdetailsmodel->totalcoins();  
        $output['currency_coin'] = $this->settingsmodel->showsitesettings('current_currency_coin');   
		$output['site_key'] = $this->settingsmodel->showsitesettings('site_key');
		$output['site_logo'] = $this->settingsmodel->showsitesettings('admin_sitelogo');
		$output['footer_content'] = $this->settingsmodel->showsitesettings('footer_content');
		$this->load->view('logins',$output);
		/*added by revathyjr ends*/
	}
	public function checklogin()
	{
		
		//$this->loginmodel->validatelogin();

		$secret='6LfywDYUAAAAADCbZCrZ8mZjfZpw0yC0r0axpxHV';

				if($secret != '')
				{
					$recaptchaResponse = $_POST['g-recaptcha-response'];
					$userIp=$_SERVER['REMOTE_ADDR'];

					$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."";
					$response = file_get_contents($url);
					$status= json_decode($response, true);
				
					
		$user=$_POST['username'];
        $pass=md5($_POST['password']);
        //$ip=$_SERVER['SERVER_ADDR'];

        $this->db->select('*');
        $this->db->from('membertable');
        $this->db->where('member_emailid',$user);
        $this->db->where('member_password',$pass);
        $this->db->where('user_type','2');
        $query = $this->db->get();
        $result = $query->result();
       
        $id=$result[0]->member_id;
        $name=$result[0]->member_name;
        $randcode = $result[0]->randcode;
        //print_r($this->db->last_query()); exit;
        if(count($result)!='0')
        {
            
        	if($randcode=='enable')
        	{
				//output
				
				$output['site_logo'] = $this->settingsmodel->showsitesettings('site_url');
				$output['site_logo'] = $this->settingsmodel->showsitesettings('admin_sitelogo');
				
        		$this->session->set_userdata('tfa_user_id',$id);
            	$this->session->set_userdata('tfa_user_username',$name);
            	$this->load->view('tfalogin',$output);
        	}
        	else
        	{
        		$this->session->set_userdata('user_id',$id);
            	$this->session->set_userdata('user_username',$name);
            	redirect(base_url().'welcome');
        	}      
           
             
        }
        else
        {
            $this->session->set_flashdata('error-message','Invalid Login');

            redirect(base_url().'login');
        }
    }
	}

	public function tfavalidate()
	{
		$user_id = $this->session->userdata('tfa_user_id');
		$user_name = $this->session->userdata('tfa_user_username');

		$secret = $this->loginmodel->get_data('membertable',array('member_id'=>$user_id),'','','','','row','','secret');

		$onecode = $this->input->post('onecode');

		$this->form_validation->set_rules('onecode', 'onecode', 'trim|required|regex_match[/^[0-9]{6}$/]');
		if($this->form_validation->run() === FALSE)
        {

            $this->load->view('tfalogin');
        }
        else
        {
        	require_once 'GoogleAuthenticator.php';
	    	$ga = new PHPGangsta_GoogleAuthenticator();
	    	if($ga->verifyCode($secret, $onecode, 3))
			{
				$this->session->set_userdata('user_id',$user_id);
            	$this->session->set_userdata('user_username',$user_name);
            	redirect(base_url().'welcome');
			}
			else
			{
				$this->session->set_flashdata('error-message','Invalid TFA Please Try Again');

            	redirect(base_url().'login');
			}
        }
	}
	public function logout()
	{
		
		$this->loginmodel->logout();
	}


	public function forgotpassword()
	{
        $output['currency_coin'] = $this->settingsmodel->showsitesettings('current_currency_coin'); 
		$output['site_logo'] = $this->settingsmodel->showsitesettings('admin_sitelogo');
		$output['profile']=$this->profilemodel->profile();
		$output['footer_content'] = $this->settingsmodel->showsitesettings('footer_content');
		$this->load->view('forgotpassword', $output);
	}
	

	public function validateforgotpassword()
        {	
				
				$siteurl = $this->settingsmodel->showsitesettings('site_url'); 
				$coinname = $this->settingsmodel->showsitesettings('current_currency_coin'); 
				$siteurl = str_replace("http://","",str_replace("https://","",$siteurl));
				
				
                $this->form_validation->set_rules('email', 'Email', 'trim|required|callback_email_check');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('forgotpassword');
                }
                else
                {
                	$email = $this->input->post('email');	
                	$new = $this->generate_password(6);
                    $query = $this->loginmodel->reset(md5($new), $email);

                    if($query)
                    {
                        $this->load->library('email');

                        $this->email->from($coinname.'team@'.$siteurl, $coinname.' Team');
                        $this->email->to($email);     
                        $this->email->subject('Password reset');
                        $this->email->message('Thank you for contacting! <br>Here is your new password to login: '. $new);  
                        if($this->email->send())
                        {
	                        $this->session->set_flashdata('message','Mail Sent.');

	                        //redirect('login', 'refresh');
	                        redirect(base_url('login','refresh'));
	                    }
	                    else
	                    {
	                    	$this->session->set_flashdata('error-message','Mail not Sent.');
	                    	//redirect('login/forgotpassword','refresh');
	                    	redirect(base_url('login/forgotpassword','refresh'));
	                    }

                    }
                    else
                    {
                        $this->session->set_flashdata('email not in the database');
                    }
                }
        }


        public function generate_password( $length = 8 ) 
        {		
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $password = substr( str_shuffle( $chars ), 0, $length );
                return $password;
                
        }

    function email_check($email)
    {

    	$output = $this->loginmodel->check_email($email);
    	if($output)
    	{
    		return TRUE;
    	}
    	else
    	{
    		$this->form_validation->set_message('email_check', 'Please enter a valid email.');
    		return FALSE;
    	}
    }
	
}
