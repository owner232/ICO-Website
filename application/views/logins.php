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
                        <h1><a href="<?php echo base_url();?>"  target=_blank class="site_title"><img src="<?php echo base_url().$site_logo;?>" alt="" class="img_1x" width="250" ></a></h1>
						<br>
						
						<div align="center">
						
						
                <div class="tile-stats tile-white bg-blue" align="center">
                     <div class="icon3"><i class="fa fa-usd"></i></div>
                    <div class="count"><h5 class="heading">Available <?PHP echo $currency_coin; ?> for Purchase</h5></div>
                    <h3><?php echo number_format($total)." ".$currency_coin; ?></h3><br><br>

                </div>
						
						



 <form id="login-form" action="<?php echo base_url();?>login/checklogin" method="post" role="form" onsubmit="return validateform();">                            
 <h1>Login</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Email" name="username" id="username" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password"  name="password" id="password" required="" />
                            </div>
                            
                            <div class="g-recaptcha" data-sitekey="6LeNhT4UAAAAADQpgy2ipsiEjK2oLkXtEsesTyTb" required>
                            </div>
                            
                            <div class="text-left">
                                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                                <input name="commit" value="Login" class="btn btn-raised btn-primary wide btn-card-login-submit" data-disable-with="Login" type="submit" style="margin-left: unset;" >
                                <!-- <a class="reset_pass" href="<?php echo base_url();?>register/forget">Lost password?</a> -->
                            </div>

                            <div class="clearfix"></div>
                         

                           <!-- <div class="separator">-->

                                <div class="text-center">
                                    <!-- <a class="btn btn-facebook">Connect with <i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-twitter">Connect with <i class="fa fa-twitter"></i></a> -->
                                </div>

                                <p class="change_link" style="margin-top: 30px;">Don't have an account yet? 
                                    <a href="<?php echo base_url();?>register" class="to_register"> Sign Up! </a>
                                </p>
                                <p class="change_link" style="margin-top: 30px;">Forgot Password? 
                                    <a href="<?php echo base_url();?>login/forgotpassword" class="to_register"> Click here </a>
                                </p>

<!--                            </div>
-->                        </form></div>

                        <div>
                            <p style="color: #dcdcdc;"><?php echo $footer_content; ?></p>
                        </div>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <h1><a href="index.html" class="site_title"><i class="fa fa-adjust"></i> <span class="logo-f">Alte<span class="logo-s">na</span></span></a></h1>
                        <form>
                            <h1>Sign Up</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Emailid" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already have account ?
                                    <a href="#signin" class="to_register"> Sign In! </a>
                                </p>
                            </div>
                        </form>
                        <div>
                            <p style="color: #999;">© 2017 All Rights Reserved. Admin Template</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>


<script type="text/javascript" language="javascript">
/*function validateform(){
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
}*/
</script>
	

