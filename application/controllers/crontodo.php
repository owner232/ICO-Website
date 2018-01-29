<?php
class crontodo extends CI_Controller{

 function __construct()
 {
  parent::__construct();
  //load the model
   $this->load->model('cronjob_model','',TRUE);
   $this->load->library('email');
   $this->load->helper('path');
 }

 function index()
 {
  $this->cronjob_model->my_cronjob();
 }
  
 
}

?>