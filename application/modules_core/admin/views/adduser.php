<?php include_once 'header.php'; ?>
<div id="page-wrapper">
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
<form class="container-fluid" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>admin/user/insertmember">
        <div class="row">
            
            <div class="col-md-8">
            <span class="dashboard__title">Add New user</span>
                <div class="form__row sm">
                    <label class="label_small">Name</label>
                    <input type="text" name="username" class="input-secondary" value="" placeholder="Enter your name">
                </div>
                <div class="form__row ">
                    <label class="label_small">Mobile</label>
                    <input type="text" name="phoneno" class="input-secondary" value="" placeholder="Enter your mobile no">
                </div>
                
                <div class="form__row ">
                    <label class="label_small">E-mail</label>
                    <input type="email" name="email" class="input-secondary" value=""  placeholder="Enter your emailid">
                </div>
                 <div class="form__row ">
                    <label class="label_small">Password</label>
                    <input type="password" name="password" class="input-secondary" value=""  placeholder="Enter your password">
                </div>
               
                <div class="form__row">
                     <div class="controls col-md-8 ">
                        <input type="submit" name="submit" value="Save Change" class="btn btn-accent small btnChange_js btn_change_password" id="submit-id-signup" />
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

   
   <?php include_once 'footer.php'; ?>