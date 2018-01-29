<!DOCTYPE html>
<html lang="en">
<head>
  <title>MYNECOIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
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
                  
    <h4 class="title">Sign up</h4>
    <br>
  <!--   <form class="new_user" id="new_user" action="/users/sign_in" accept-charset="UTF-8" method="post"><input name="utf8" value="✓" type="hidden"><input name="authenticity_token" value="fVR51QzIEp9lpq/P/JFDnNYxijUkCX8CqznsdB6zTOo5cA63JOunqAx6MoMgF8cEVl/+XTMVCjAAN21weXOO8g==" type="hidden"> -->
  <form id="login-form" action="<?php echo base_url();?>register/insertmember/<?php echo $this->uri->segment(3);?>" onsubmit="return myFunction()"method="post" role="form" style="display: block;">
      <br>

        <div class="form-group label-floating">
        <label class="control-label required" for="user_email">Username</label>
   <input type="text" name="username" id="username" tabindex="1" class="form-control"  value="" required>
        <span class="text-danger"></span>
        <span class="text-danger"></span>
        <span class="material-input"></span>
        <span class="material-input"></span></div>
      
      <div class="form-group label-floating">
        <label class="control-label required" for="user_email">Email</label>
  <input type="email" name="email" id="email" tabindex="1" class="form-control"  value="" required>
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
      <div class="form-group label-floating">
  <label class="control-label required" for="user_password1">Password Confirmation</label>
  <input type="password" name="confirm-password" id="confirm-password" onblur="myFunction()" tabindex="2" class="form-control"  required>
       </div>

      <div class="form-group">
      <div class="checkbox">
        <label for="user_registration_agreement">
          <input name="" value="0" type="hidden"><input value="1" name="user[registration_agreement]" id="user_registration_agreement" type="checkbox"><span class="checkbox-material"><span class="check"></span></span> I agree with <a target="_blank" href="https://paragoncoin.com/storage/ParagonCoin_Terms_of_Use.pdf">Terms of Services</a>
</label>      </div>
    </div>
      <div class="form-group login_btn">
        <input name="commit" id="register-submit"  value="Continue" class="btn btn-raised btn-primary wide btn-card-login-submit" data-disable-with="Continue" type="submit">
      </div>
        <div class="down-box">
          Have an account? <a href="<?php echo base_url();?>/login">Sign in</a>
        </div>
</form>  
</div>
</div>

  </div>
</div>

  
</body>


 <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script>
function myFunction() {
    var x = document.getElementById("confirm-password").value;
    var y = document.getElementById("password").value;

    if(x!=y)
    {
        alert("password and confirmpassword no matched");
        return false;
    }
}
</script>


  <script type="text/javascript">
            $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
</script>
       
</html>