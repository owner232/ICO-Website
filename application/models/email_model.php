<?php
/**
 * Email_model Class
 * @package Alphabettechs Pvt Ltd
 * @subpackage Bitconnect
 * @category Model
 * @author Princy
 * @version 1.0
 * @link http://alphabettechs.com/
 * 
 */
 
 class email_model extends CI_Model 
 {
	// Constructor function
	function __construct() {
		parent::__construct();
	} 	
	
	//Send email function 
	/**
	 * @access private
	 * @param array(),  
	 * @return email deliver report
	 * 
	 */
	 
	function sendMail($to = '', $from_email = '', $from_name = '', $email_template = '', $special_vars = array(), $cc = '', $bcc = '', $type = 'html' )
	{
	 	// Loads the email library
	 	$this->load->library(array('email'));
		// Email SMTP credentials
		$this->db->where('site_settingskey','smtp_host');  	
		$query = $this->db->get('site_settings');
		$row 			= 	$query->row();
		$smtp_host	=	$row->site_settingsvalue; // SMTP host URL

		$this->db->where('site_settingskey','smtp_port');  	
		$query = $this->db->get('site_settings');

		$row 			=	$query->row();	 							 
		$smtp_port	=	$row->site_settingsvalue; // SMTP port number

		$this->db->where('site_settingskey','smtp_user');  	
		$query = $this->db->get('site_settings');

		$row 			=	$query->row();	
		$smtp_user		=	$row->site_settingsvalue; // SMTP email address

		$this->db->where('site_settingskey','smtp_pass');  	
		$query = $this->db->get('site_settings');

		$row 			=	$query->row();	
		$smtp_pass		=	$row->site_settingsvalue; // SMTP password

		$this->db->where('site_settingskey','company_name');  	
		$query = $this->db->get('site_settings');

		$row 			=	$query->row();	 							 
		$companyname	=	$row->site_settingsvalue;

		$this->db->where('site_settingskey','contact_email');  	
		$query = $this->db->get('site_settings');

		$row 			=	$query->row();	 							 
		$admin_email	=	$row->site_settingsvalue;		
		
		
		if($from_email == '')
			$from_email =  $special_vars['##FROM_EMAIL##'] =  $special_vars['##ADMIN_EMAIL##'] =  $admin_email;
		if($from_name == '')
			$from_name = $companyname;		
			$special_vars['##COMPANYNAME##'] = $companyname;
		$this->email->clear();

		if ( ! empty($smtp_host) && ! empty($smtp_port) && ! empty($smtp_user) && ! empty($smtp_pass))
		{
			// Email config
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => $smtp_host,
				'smtp_port' => $smtp_port,
				'smtp_user' => trim($smtp_user),
				'smtp_pass' => trim($smtp_pass),
				'mailtype' => $type,
				'charset' => 'utf-8'
			);
		
			$config['crlf'] = "\r\n";
			$config['newline'] = "\r\n";
			$config['priority'] = 1;
			// Email config initialize
			$this->email->initialize($config);
			//$this->email->set_newline("\r\n");

    		$emailTemplate = $this->db->where('id', $email_template)->get('email_templates');
	
			if ($emailTemplate->num_rows() > 0)
			{
				$emailTemplate = $emailTemplate->row();
				// Subject
				$subject = strtr($emailTemplate->subject, $special_vars);
				// message content
				$message = strtr($emailTemplate->message, $special_vars);
			

				//Working Code
				$this->email->to($to);
        		$this->email->from($from_email,$from_name);
				if ($cc != '') {
				$this->email->cc($cc);
				}
				if ($bcc != '') {	
				$this->email->bcc($bcc);
				} 
  				$this->email->subject($subject);
  				$this->email->message($message);
				// Prepare to email send	
				//print_r($config); print_r($this->email); exit;
				if ( ! $this->email->send())
				{ 
					// Mail not sent
					echo $this->email->print_debugger();
					exit;
					return false;
				}
				else
				{
					// mail sent
					return true;
				}
        		return true;

			}
			else
			{
				exit('Email template not configured please contact support team');
			}	 
		}
		else
		{
			// Email config
			$config = array(
				'protocol' => 'sendmail',
				'smtp_host' => $smtp_host,
				'smtp_port' => $smtp_port,
				'smtp_user' => trim($smtp_user),
				'smtp_pass' => trim($smtp_pass),
				'mailtype' => $type,
				'charset' => 'utf-8'
			);
		
			$config['crlf'] = "\r\n";
			$config['newline'] = "\r\n";
			$config['priority'] = 1;
			// Email config initialize
			$this->email->initialize($config);
			//$this->email->set_newline("\r\n");

    		$emailTemplate = $this->db->where('id', $email_template)->get('email_templates');
	
			if ($emailTemplate->num_rows() > 0)
			{
				$emailTemplate = $emailTemplate->row();
				// Subject
				$subject = strtr($emailTemplate->subject, $special_vars);
				// message content
				$message = strtr($emailTemplate->message, $special_vars);
			

				//Working Code
				$this->load->library('email');
				$this->email->to($to);
        		$this->email->from($from_email,$from_name);
				if ($cc != '') {
				$this->email->cc($cc);
				}
				if ($bcc != '') {	
				$this->email->bcc($bcc);
				} 
  				$this->email->subject($subject);
  				$this->email->message($message);
				// Prepare to email send	
				//print_r($config); print_r($this->email); exit;
				if ( ! $this->email->send())
				{ 
					// Mail not sent
					$this->email->print_debugger();
					return false;
				}
				else
				{
					// mail sent
					return true;
				}
        		return true;

			}
			else
			{
				exit('Email template not configured please contact support team');
			}
		}
	
 	}
}

/**
 * End of the file email_model.php
 * Location: ./application/models/email_model.php
 */ 

?>