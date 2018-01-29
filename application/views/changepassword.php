  <?php include 'header.php' ?>

<!-- breadcrumb -->
                <div class="breadcrumb_content">
                    <div class="breadcrumb_text"><h3>Change Password
</h3>
                    </div>
                </div>
                <!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
<div class="row top_tiles">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 referral prof">
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

<div class="profile">
<form class="form-horizontal" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>profile/updatepassword">
<fieldset>
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileNewPassword">Old Password</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="password" class="form-control"  id="old_password" name="old_password" onblur="checkpassword()">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileNewPassword">New Password</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="password" class="form-control"  id="new_password" name="new_password" >
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="password" class="form-control" id="new_repeat_password" name="new_repeat_password" onblur="myFunction()">
    </div>
</div>

</fieldset>

  

<div class="panel-footer bg-none">
<div class="row">
    <div class="col-md-9 col-md-offset-3">
         <input name="submit" value="Submit" class="btn btn-primary" data-disable-with="Submit" type="submit" style="margin-left: unset;">
<!--         <button type="reset" class="btn btn-default">Reset</button>
 -->    </div>
</div>
</div>

</form>
<!-- google authenticator start -->



<!-- end -->
</div>

</div>
<section class="content col-md-12">

        <div class="breadcrumb_content ab">
        <div class="breadcrumb_text txt"><h3>Two Factor Authentication
        </h3>
        </div>
        </div>

                <div class="right_col bg_fff ab" role="main">
<div class="row top_tiles">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 referral prof">

<div class="profile">

<img src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2F<?PHP echo $coinname; ?>ICO%3Fsecret%3D<?PHP echo $secret_code; ?>">

<form class="form-horizontal bv-form" name="activate_form" id="activate_form" method="post" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
    <center> <span id="success_Msg" style="color:green;"></span></center>
    <center> <span id="error_Msg" style="color:red;"></span></center>

    <fieldset style="margin-top: 25px;">

      <div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label txt" for="profileNewPassword">Authentication key</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="secret_code" name="secret_code" style="cursor:disabled;" placeholder="" value="<?PHP echo $secret_code; ?>" readonly="">
    </div>
</div>

 <div class="form-group has-feedback">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label txt" for="profileNewPassword">Authentication code</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input placeholder="" class="form-control" type="text" id="one_code" name="one_code" required="" data-bv-field="one_code"><i class="form-control-feedback" data-bv-icon-for="one_code" style="display: none;"></i>
    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="one_code" data-bv-result="NOT_VALIDATED" style="display: none;">Activate Code is required</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="one_code" data-bv-result="NOT_VALIDATED" style="display: none;">Activate Code Must be 6 digits</small></div>
</div>

    </fieldset>

    <div class="panel-footer bg-none">
<div class="row">
    <div class="col-md-9 col-md-offset-3">
        <button class="btn btn-primary btn-small m-b-5" type="submit" id="enable_tfa" name="enable_tfa" style="margin-left: unset;"><span class="bold">                    Disable
                    </span>
                    </button>
                    <button class="btn  btn-success  btn-sm m-t-10" style="
    margin-left: 10px;
">Enable</button>
<!--         <button type="reset" class="btn btn-default">Reset</button>
 -->    </div>
</div>
</div>


</form>

<!-- end -->

</div>

</div>
</div>
</div>
                <!-- /breadcrumb -->



</section>

</div>
</div>

 

 <?php include 'footer.php' ?>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" defer></script>

    <script type="text/javascript">
      var base_url='<?php echo base_url(); ?>';
    </script>

    <script src="<?php echo base_url();?>assets/js/common.js" defer></script>
