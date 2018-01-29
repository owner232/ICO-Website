<?php //include 'header.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>SILTOXOCOIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles1.css">


</head>
<body class="auth">

<div class="outer-wrap">
  <div class="wrap">
    <div class="card login-card">
  <div class="card-content text-left">
   <?php
        if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <?php  echo $this->session->flashdata('message'); ?>
          </div>
       
        <?php } ?>
         <?php
        if ($this->session->flashdata('error-message')) { ?>
        <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <?php  echo $this->session->flashdata('error-message'); ?>
          </div>
       
        <?php } ?>
    <h4 class="title">Sign in</h4>
    <br>
   <form id="login-form" action="<?php echo base_url();?>login/checklogin" method="post" role="form" style="display: block;">
      <br>
      
      <div class="form-group label-floating">
        <label class="control-label required" for="user_email">Email</label>
        <input type="text" name="username" id="username" tabindex="1" class="form-control"  value="" required>
        <span class="text-danger"></span>
        <span class="text-danger"></span>
        <span class="material-input"></span>
        <span class="material-input"></span></div>
      <div class="form-group label-floating">
        <label class="control-label required" for="user_password">Password</label>
        <input type="password" name="password" id="password" tabindex="2" class="form-control"  required>
        <span class="material-input"></span>
        <span class="material-input"></span>
      </div>
      <div class="text-center">
        <p>Forgot password <a href="<?php echo base_url();?>register/forget">Remind</a></p>
        <p><a href="<?php echo base_url();?>/forget">Didn't receive confirmation instructions?</a></p>
      </div>
      <div class="form-group login_btn">
        <input name="commit" value="Login" class="btn btn-raised btn-primary wide btn-card-login-submit" data-disable-with="Login" type="submit">
      </div>
        <div class="down-box">
          No account? <a href="<?php echo base_url();?>register">Sign Up</a>
        </div>
</form>  </div>
</div>

  </div>
</div>

  
</body>
