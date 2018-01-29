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
<form class="container-fluid" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>admin/dashboard/updatepassword">
        <div class="row">
            
            <div class="col-md-8">
            <span class="dashboard__title">Change Password Settings</span>
                <div class="form__row sm">
                    <label class="label_small">Old Password</label>
                    <input type="password" id="old_password" name="old_password" class="input-secondary" placeholder="Enter your old password" required>
                </div>
                <div class="form__row ">
                    <label class="label_small">New Password</label>
                    <input type="password" id="new_password" name="new_password" class="input-secondary"  placeholder="Enter your new password" required>
                </div>
                
                <div class="form__row ">
                    <label class="label_small">New Password Confirmation</label>
                    <input type="password" id="new_repeat_password" name="new_repeat_password" onblur="myFunction()" class="input-secondary"   placeholder="Enter your new password" required>
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

   
 <script>
function myFunction() {
    var x = document.getElementById("new_password").value;
    var y = document.getElementById("new_repeat_password").value;

    if(x!=y)
    {
        alert("password and repeatedpassword not matched");
        return false;
    }
}
</script>
   <?php include_once 'footer.php'; ?>