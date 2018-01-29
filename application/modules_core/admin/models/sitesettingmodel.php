<?php

Class sitesettingmodel extends CI_Model {

function updatesitesetting()
{
              

          $datecreated =CI_Controller::getDateTime();
          $mm_base = FCPATH.'uploads/site_logo';

          $mm_base = str_replace(DIRECTORY_SEPARATOR, '/', $mm_base.'/'); 

             // create folder to save user media
          if (!is_dir($mm_base)) {
            if(!mkdir($mm_base, 0777, TRUE)){
              exit('Unable to create user media directory');                  
            }
          }
          $str=$_FILES['adminlogo']['name'];
          $ans= explode(".",$str);
     
           if ($_FILES['adminlogo']['name'] != '') {

            $getpath = './uploads/site_logo/';
            $filename = 'adminlogo';
            $adminsitelogo= 'uploads/site_logo/'.$_FILES['adminlogo']['name'];

            $uploadadminsiteimage=$_FILES['adminlogo']["name"];

            move_uploaded_file($_FILES['adminlogo']["tmp_name"], $getpath .$uploadadminsiteimage);

          }
          else
          {
           $adminsitelogo= $_POST['adminlogoold'];
         }

         if ($_FILES['userlogo']['name'] != '') {

          $getpath = './uploads/site_logo/';
          $filename = 'userlogo';
          $usersitelogo= 'uploads/site_logo/'.$_FILES['userlogo']['name'];

          $uploadusersiteimage=$_FILES['userlogo']["name"];

          move_uploaded_file($_FILES['userlogo']["tmp_name"], $getpath .$uploadusersiteimage);

        }
        else
        {
         $usersitelogo= $_POST['userlogoold'];
       }
       $mm_base1 = FCPATH.'uploads/site_favicon';

       $mm_base1 = str_replace(DIRECTORY_SEPARATOR, '/', $mm_base1.'/'); 

             // create folder to save user media
       if (!is_dir($mm_base1)) {
        if(!mkdir($mm_base1, 0777, TRUE)){
          exit('Unable to create user media directory');                  
        }
      }
      $str1=$_FILES['fevilogo']['name'];
      $ans1= explode(".",$str1);
      if ($_FILES['fevilogo']['name'] != '') {

        $getpath = './uploads/site_favicon/';
        $filename = 'fevilogo';
        $userfevilogo= 'uploads/site_favicon/'.$_FILES['fevilogo']['name'];

        $uploadfeviimage=$_FILES['fevilogo']["name"];

        move_uploaded_file($_FILES['fevilogo']["tmp_name"], $getpath .$uploadfeviimage);

      }
      else
      {
        $userfevilogo= $_POST['fevilogoold'];
      }  





      $this->commonupdatesitesettings('site_name',$_POST['name']);
      $this->commonupdatesitesettings('site_url',$_POST['url']);
      $this->commonupdatesitesettings('admin_email',$_POST['email']);


      $this->commonupdatesitesettings('admin_sitelogo',$adminsitelogo);
      $this->commonupdatesitesettings('user_sitelogo',$usersitelogo);
      //$this->commonupdatesitesettings('favicon_logo', $userfevilogo);
      $this->commonupdatesitesettings('meta_title',$_POST['metatitle']);
      $this->commonupdatesitesettings('meta_description',$_POST['description']);
      $this->commonupdatesitesettings('meta_key',$_POST['key']);
      $this->commonupdatesitesettings('wallet_dllink',$_POST['wallet_dllink']);
      $this->commonupdatesitesettings('current_currency_coin',$_POST['coinabbr']);
      //$this->commonupdatesitesettings('copyright',$_POST['copyright']); //hide by revathyjr 
      $this->commonupdatesitesettings('footer_content',$_POST['copyright']);
     /* $this->commonupdatesitesettings('notice_content',$_POST['notice']);
      $this->commonupdatesitesettings('package_duration',$_POST['duration']);
      $this->commonupdatesitesettings('paysponsor_time',$_POST['sponsortime']);*/
      $this->commonupdatesitesettings('updated_on',$datecreated);
      $this->commonupdatesitesettings('referal_content',$_POST['referal_content']);
      
      $this->commonupdatesitesettings('token_content',$_POST['token_content']);

        

      $this->session->set_flashdata('message', 'Site Settings Updated Successfully');
      redirect('admin/dashboard/sitesetting');


    } 
    function commonupdatesitesettings($key,$value)
    {

      $this->db->select('*');

      $this->db->from('site_settings');
      $this->db->where('site_settingskey',$key);
      $query = $this->db->get();
      $result = $query->result();

      $record=count($result);
      if($record>0)
      {

       $this->db->query("update site_settings set site_settingsvalue='".$value."' where site_settingskey='".$key."'");
     }
     else{
      $data=array('site_settingskey'=>$key,
        'site_settingsvalue'=>$value,
        );

      $this->db->insert('site_settings', $data);
    }


  }

  function showsitesettings($key)

  {


    $this->db->select('site_settingsvalue');

    $this->db->from('site_settings');
    $this->db->where('site_settingskey',$key);



    $query = $this->db->get();
    $result = $query->result();
    $ans=$result[0]->site_settingsvalue;

    return $ans;

  }



}
?>