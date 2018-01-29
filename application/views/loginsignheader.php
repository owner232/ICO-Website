<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php $sitename=$this->settingsmodel->showsitesettings('site_name'); ?>
    <title><?php echo $sitename; ?></title>       
     <!-- Favicon -->
     <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ecapital.jpg">
        <!-- <link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>images/favicon.ico"/> -->
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo base_url(); ?>vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
  

