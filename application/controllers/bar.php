<?php
class bar extends CI_Controller{

 function __construct()
 {
  parent::__construct();
  //load the model
   $this->load->model('barmodel','',TRUE);
   
 }

 function index()
 {
  $this->barmodel->viewbar();
 }
  
 
}

?>