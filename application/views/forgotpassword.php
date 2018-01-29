
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
                        <h1><a href="<?php echo base_url();?>"  target=_blank class="site_title"><img src="<?php echo base_url().$site_logo;?>" alt="" class="img_1x" width="150" ></a></h1>
 <form id="login-form" action="<?php echo base_url();?>login/validateforgotpassword" method="post" role="form" onsubmit="return validateform();">                             
 <h1>Reset Password</h1>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="" />
                            </div><span style="color:red;"><?php echo form_error('email'); ?></span>
                           
                            <div class="text-left">
                               
                                <input name="commit" value="Click" class="btn btn-raised btn-primary wide btn-card-login-submit" data-disable-with="Login" type="submit" style="margin-left: unset;" >
                              
                            </div>

                            <div class="clearfix"></div>
                         

                                <div class="text-center">
                                   
                                </div>

                                <p class="change_link" style="margin-top: 30px;">Click here to Sign In? 
                                    <a href="<?php echo base_url();?>login" class="to_register"> Sign In </a>
                                </p>


                      </form>

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
                            <p style="color: #dcdcdc;"><?php echo $footer_content; ?></p>
                        </div>
                    </section>
                    </div>
                    </div>
                    </div>
                    </body>
</html>