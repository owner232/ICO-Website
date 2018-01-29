<?php include 'loginsignheader.php' ?>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <h1><a href="index.html" class="site_title"><i class="fa fa-adjust"></i> <span class="logo-f">Alte<span class="logo-s">na</span></span></a></h1>
                        <form>
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div class="text-left">
                                <a class="btn btn-default submit" href="index.html">Log in</a>
                                <a class="reset_pass" href="#">Lost password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="text-center">
                                    <a class="btn btn-facebook">Connect with <i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-twitter">Connect with <i class="fa fa-twitter"></i></a>
                                </div>

                                <p class="change_link" style="margin-top: 30px;">Don't have an account yet? 
                                    <a href="#signup" class="to_register"> Sign Up! </a>
                                </p>

                            </div>
                        </form>

                        <div>
                            <p style="color: #999;">© 2017 All Rights Reserved. Admin Template</p>
                        </div>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <h1><a href="index.html" class="site_title"><i class="fa fa-adjust"></i> <span class="logo-f">Alte<span class="logo-s">na</span></span></a></h1>
                        <form>
                            <h1>Sign Up</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
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
