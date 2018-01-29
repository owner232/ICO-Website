
<?php include 'loginsignheader.php' ?>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
         
                    <div class="logo">
                        <h1><a href="<?php echo base_url(); ?>" target=_blank class="site_title">
                        <img src="<?php echo base_url().$site_logo;?>" alt="" class="img_1x"  ></a></h1>
                        </div>

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
  <form id="login-form" action="<?php echo base_url();?>register/insertmember/<?php echo $this->uri->segment(3);?>" onsubmit="return validateform();" method="post" role="form" style="display: block;">                            
  <h1>Register</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" name="confirm-password" id="confirm-password" onblur="myFunction()" required="" />
                            </div>

                            <div class="g-recaptcha" data-sitekey="6LeNhT4UAAAAADQpgy2ipsiEjK2oLkXtEsesTyTb" required>
                            </div>
                            <div class="text-left">
                                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                                <input name="commit" id="register-submit"  value="Register" class="btn btn-raised btn-primary wide btn-card-login-submit" data-disable-with="Signup" type="submit" style="margin-left: unset;">
                          <!--      <a class="reset_pass" href="<?php echo base_url();?>register/forget">Lost password?</a>-->
                            </div>

                            <div class="clearfix"></div>

<!--                            <div class="separator">
-->
                                <div class="text-center">
                                   <!--  <a class="btn btn-facebook">Connect with <i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-twitter">Connect with <i class="fa fa-twitter"></i></a> -->
                                </div>

                                <p class="change_link" style="margin-top: 30px;">Already have account ?
                                    <a href="<?php echo base_url();?>login" class="to_register"> Sign In! </a>
                                </p>
                                    
                             
<!--
                            </div>-->
                        </form>

                        <div>
                            <p style="color: #dcdcdc;"><?php echo $footer_content; ?></p>
                        </div>
                    </section>
                </div>

                
            </div>
        </div>
        <script type="text/javascript" language="javascript">
function validateform1(){
var captcha_response = grecaptcha.getResponse();
if(captcha_response.length == 0)
{
    // Captcha is not Passed
    return false;
}
else
{
    // Captcha is Passed
    return true;
}
}
</script>
    </body>
</html>
