
<?php include 'loginsignheader.php' ?>

    <body class="login">
        <div>
           <a class="hiddenanchor"  href="<?php echo base_url();?>/register"></a>
            <a class="hiddenanchor"  href="<?php echo base_url();?>/login"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">

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


<section class="login_content">

            <h1><a href="<?PHP echo $site_url; ?>"  target=_blank class="site_title">
            <img src="<?php echo base_url();?><?PHP echo $admin_sitelogo;?>" alt="" class="img_1x" width="184" ></a></h1>

             <form id="twofactor_from" action="<?php echo base_url();?>login/tfavalidate" method="post" role="form">                            
             <h1>Two Factor Authentication</h1>
                <div>
                <input type="text" class="form-control" id="onecode" name="onecode" placeholder="Enter code">
            </div>
            <span style="color:red;"><?php echo form_error('onecode'); ?></span>


            <div class="text-left">
                <input name="commit" value="Submit" class="btn btn-raised btn-primary wide btn-card-login-submit" data-disable-with="Login" type="submit" style="margin-left: unset;" >
            </div>

            </form>

            <div>
                            <p style="color: #dcdcdc;"><?php echo $footer_content; ?></p>
                        </div>
 </section>
 </div>

            </div>
            </div>

<!--TFA -->
    <script src="<?php echo base_url();?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="<?php echo base_url();?>pages/js/pages.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>