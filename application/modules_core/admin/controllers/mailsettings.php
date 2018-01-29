
<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mailsettings extends MX_Controller  
{

	function __construct() 
	{
		parent::__construct();

		$this->load->library('session');

		$this->load->model('mailsettingsmodel');
		$sess_id = $this->session->userdata('admin_id');
		   	/*if(empty($sess_id))
		   	{
	        	redirect(base_url().'admin/login'); 
   				exit;
   			}   */ 				    
   		}

   		function index()
   		{
   			
   			$output['template']=$this->mailsettingsmodel->viewmailtemplate();
   			$this->load->view('mailsettingsview',$output);

   		}
         function editmailtemplate()
         {
            if(isset($_POST['send']))
            {
               $this->mailsettingsmodel->updatemailtemplate();
            }
            $output['mail']=$this->mailsettingsmodel->editmailtemplate();
         
            $this->load->view('editmailtemplateview',$output);

         }
         function deletemailtemplate()
         {
          $this->mailsettingsmodel->deletemailtemplate();
       }
    }
    ?>