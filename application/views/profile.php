  <?php include 'header.php' ?>

<!-- breadcrumb -->
                <div class="breadcrumb_content">
                    <div class="breadcrumb_text"><h3>Profile</h3>
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
<form class="form-horizontal" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>profile/updateprofile">
       <h4>Personal Information</h4>
<fieldset>
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileFirstName">User Name</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileFirstName"  name="username" value="<?php echo $profile[0]->member_name;?>"placeholder="Username">
    </div>
</div>
<!-- <div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileLastName">Last Name</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileLastName" name="username" value="<?php echo $profile[0]->member_name;?>" placeholder="Smith">
    </div>
</div> -->
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileEmail">Email</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileEmail" name="email" value="<?php echo $profile[0]->member_emailid;?>" placeholder="Email Address" required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profilePhone">Mobile </label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profilePhone"  name="phoneno" value="<?php echo $profile[0]->member_phoneno;?>"placeholder="Mobile Number">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileAddress">Address</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileAddress"  name="address" value="<?php echo $profile[0]->member_address;?>"placeholder="Enter Address">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileZip">Zip</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileZip"  name="zip" value="<?php echo $profile[0]->member_zip;?>"placeholder="Enter Zip Code">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileCity">City</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileCity"  name="city" value="<?php echo $profile[0]->member_city;?>"placeholder="Enter City">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="profileCountry">Country</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="profileCountry"  name="country" value="<?php echo $profile[0]->member_country;?>"placeholder="Enter Country">
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
</div>

</div>
</div>
</div>

 

 <?php include 'footer.php' ?>
