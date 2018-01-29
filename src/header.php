<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hextra | dashboard</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="./images/favicon.ico"/>
        
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/square/blue.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        
        <!-- Custom Theme Style -->
        <link href="./css/custom.min.css" rel="stylesheet">
         <link href="./css/styles.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112379082-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112379082-2');
</script>

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-adjust"></i> <span class="logo-f">HEXTRA</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu quick search -->
                        <!--<div class="profile clearfix">
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <div class="input-group sidemenu-search-div">
                                    <input type="text" class="form-control side-menu-search" placeholder="Search...">
                                    <span class="input-group-btn" style="">
                                        <a href="javascript:;" class="btn submit sidemenu-search-icon">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                        </div>-->
                        <!-- /menu quick search -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <!--<h3>General</h3>-->
                                <!--<ul class="nav side-menu">
                                    <li>
                                        <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="index.html">Dashboard 1</a></li>
                                            <li><a href="dashboard_2.html">Dashboard 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form_general.html">General</a></li>
                                            <li><a href="form_advanced.html">Advanced Components</a></li>
                                            <li><a href="form_validation.html">Validation</a></li>
                                            <li><a href="form_wizards.html">Wizard</a></li>
                                            <li><a href="form_upload.html">Upload</a></li>
                                            <li><a href="form_cropping.html">Cropping</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="ui_general.html">General</a></li>
                                            <li><a href="buttons.html">Buttons</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="calendar.html">Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Tables</a></li>
                                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Charts <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="chartjs.html">Chart JS</a></li>
                                            <li><a href="morisjs.html">Moris JS</a></li>
                                            <li><a href="echarts.html">ECharts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="maps.html"><i class="fa fa-map-o" aria-hidden="true"></i> Maps</a>
                                    </li>
                                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="blank_page.html">Blank Page</a></li>
                                            <li><a href="blank_light_page.html">Blank Light Page</a></li>
                                            <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                            <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                </ul>-->

                                <ul class="nav side-menu">
                                    <li><a href="index.php"><i class="fa fa-home"></i> Initial Coin Offering (ICO)</a>
                                        </li>
                                        <li><a><i class="fa fa-google-wallet"></i> Wallet </a>
                                        </li>
                                        <li><a><i class="fa fa-credit-card-alt"></i> Transaction </a>
                                        </li>
                                        <li><a><i class="fa fa-users"></i> Team</a>
                                        </li>
                                        <li><a href="referral.php"><i class="fa fa-users"></i> Referral Link</a>
                                        </li>
                                        <li><a><i class="fa fa-users"></i> Deposit</a>
                                        </li>
                                         <li><a href="buy_prg.php"><i class="fa fa-users"></i> Buy PRG Tokens</a>
                                        </li>

                                        <li><a><i class="fa fa-cog"></i> Setting</a>
                                        </li>
                                         <li><a><i class="fa fa-lock"></i> Security</a>
                                        </li>
                                         <li><a><i class="fa fa-sign-out"></i> Logout</a>
                                        </li>
                                </ul>


                            </div>
                            <!--<div class="menu_section">
                                <h3>Extra</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="messages.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Messages </a>
                                    </li>
                                    <li><a><i class="fa fa-tasks" aria-hidden="true"></i> Task Manager <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="task_list.html">Task List</a></li>
                                            <li><a href="task_detailed.html">Task View</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-laptop"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="page_404.html">404 Error</a></li>
                                            <li><a href="page_500.html">500 Error</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="login.html">Login Page</a></li>
                                            <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                            <li><a href="contacts.html">Contacts</a></li>
                                            <li><a href="profile.html">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-shopping-cart" aria-hidden="true"></i> E-commerce <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="product_list.html">Product List</a></li>
                                            <li><a href="product_edit.html">Product Edit</a></li>
                                            <li><a href="orders.html">Order List</a></li>
                                            <li><a href="order_view.html">Order View</a></li>
                                            <li><a href="customers.html">Customers</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#level1_1">Level One</a>
                                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                                                    </li>
                                                    <li><a href="#level2_1">Level Two</a>
                                                    </li>
                                                    <li><a href="#level2_2">Level Two</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#level1_2">Level One</a>
                                            </li>
                                        </ul>
                                    </li>                  
                                </ul>
                            </div>-->

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a href="../documentation/index.html" data-toggle="tooltip" data-placement="top" title="Documentation">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen" onclick="toggleFullScreen();">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="today">
                            <h2>Today Currency</h2>
                            </div>

                            <!--<ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/user-card-1.jpg" alt=""><span class="top_menu_user_name">Eric Smith</span>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right profile-dropdown">
                                        <li><a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                                        <li><a href="task_list.html"><i class="fa fa-list-ul" aria-hidden="true"></i><span class="badge bg-green pull-right">5</span>Tasks</a></li>
                                        <li><a href="messages.html"><i class="fa fa fa-envelope-o" aria-hidden="true"></i>Messages</a></li>
                                        <li class="top-menu-border-top"><a href="login.html"><i class="fa fa-sign-out"></i>Log Out</a></li>
                                    </ul>
                                </li>



                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>

                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li class="msg_list_menu">
                                            <a>
                                                <div>
                                                    <span class="image"><img src="images/user-card-3.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span class="name">Ed Stafford</span><br/>
                                                        <span class="time">Just Now</span>
                                                    </span>
                                                    <span class="message">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="image"><img src="images/user-card-2.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span class="name">Jessy</span><br/>
                                                        <span class="time">5 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...
                                                    </span>
                                                </div>
                                            </a>                                                
                                            <a>
                                                <div>
                                                    <span class="image"><img src="images/user-card-4.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span class="name">Mary Jane</span><br/>
                                                        <span class="time">2 hrs</span>
                                                    </span>
                                                    <span class="message">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="image"><img src="images/user-card-3.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span class="name">Ed Stafford</span><br/>
                                                        <span class="time">7 hrs</span>
                                                    </span>
                                                    <span class="message">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="image"><img src="images/user-card-2.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span class="name">Jessy</span><br/>
                                                        <span class="time">2 days ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...
                                                    </span>
                                                </div>
                                            </a>                                                
                                            <a>
                                                <div>
                                                    <span class="image"><img src="images/user-card-4.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span class="name">Mary Jane</span><br/>
                                                        <span class="time">3 days ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...
                                                    </span>
                                                </div>
                                            </a>   
                                        </li>

                                        <li class="see_more_menu">
                                            <div class="msg">
                                                <p><span>You have</span> 6 new 
                                                    <span>Messages</span>
                                                </p>
                                            </div>
                                            <div class="view_more">
                                                <a href="#">
                                                    <span>View All</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="badge bg-green">5</span>
                                    </a>

                                    <ul id="menu2" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li class="msg_list_menu notification_menu">
                                            <a>
                                                <div>
                                                    <span class="notify bg-red">
                                                        <i class="fa fa-cart-plus"></i>
                                                    </span>
                                                    <span>
                                                        <span>order #24779627 has been placed</span><br/>
                                                        <span class="time">Just Now</span>
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="notify bg-blue">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <span>
                                                        <span>Event started</span><br/>
                                                        <span class="time">5 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="notify bg-green">
                                                        <i class="fa fa-user-plus"></i>
                                                    </span>
                                                    <span>
                                                        <span>New user registered</span><br/>
                                                        <span class="time">2 hrs ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="notify bg-orange">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span>
                                                    <span>
                                                        <span>monthly salary was paid</span><br/>
                                                        <span class="time">5 hrs ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="notify bg-red">
                                                        <i class="fa fa-cart-plus"></i>
                                                    </span>
                                                    <span>
                                                        <span>order #24779627 has been placed</span><br/>
                                                        <span class="time">Just Now</span>
                                                    </span>
                                                </div>
                                            </a>
                                            <a>
                                                <div>
                                                    <span class="notify bg-blue">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <span>
                                                        <span>Event started</span><br/>
                                                        <span class="time">5 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="see_more_menu">
                                            <div class="msg">
                                                <p>12 pending
                                                    <span>notifications</span>
                                                </p>
                                            </div>
                                            <div class="view_more">
                                                <a href="#">
                                                    <span>View All</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>-->

                            <ul class="nav navbar-nav navbar-right btc">
                            <li>1 HXT = BTC 0.00021789</li>
                            <li>1 HXT = BTC 0.00021789</li>
                            <li>1 BTC = USD 4360.00000000</li>
                            </ul>


                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                