<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta content="" name="description" />
         <meta content="" name="author" />

     <?php $sitename=$this->profilemodel->showsitesettings('site_name'); ?>
    <title><?php echo $sitename; ?></title>
            <!-- Favicon -->
             <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ecapital.jpg">
             <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/icon" href="./assets/images/MyneCoin_flat.png"/>
        
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo base_url(); ?>vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo base_url(); ?>vendors/iCheck/skins/square/blue.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="<?php echo base_url(); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo base_url(); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
         <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        



    </head>
	

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <?php $sitelogo=$this->profilemodel->showsitesettings('user_sitelogo'); ?>
                            <a href="<?php echo base_url(); ?>welcome" class="site_title"><img src="<?php echo base_url().$sitelogo;?>" alt="" class="img_1x" width="184" ></a>
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
                            <?php include 'sidebar.php' ?>
<!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
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
                            <h2>Live Prices</h2>
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


    <?php
    $url = base_url()."/priceticker.php?c=BTC";

          $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
        curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
        $response = curl_exec($ch);
        curl_close($ch);
				
               //$json =json_decode($response);
                // $price = round($json["ticker"]["buy"], 2);
				
				
               // $array = array();
               // foreach($json as $item) {
               //
               //     array_push($array, $item->name);
               // } 
               //

               $bit_rate = trim($response);

   $url = base_url()."/priceticker.php?c=ETH";

          $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
        curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
        $response = curl_exec($ch);
        curl_close($ch);
              // $json =json_decode($response);
                // $price = round($json["ticker"]["buy"], 2);

              

               // $array = array();
               // foreach($json as $item) {
               //
               //     array_push($array, $item->name);
               // } 


               $bit_rate1 =  trim($response);
       
          $url = "https://api.coinmarketcap.com/v1/ticker/zcash/?convert=USD";

          $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
        curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
        $response = curl_exec($ch);
        curl_close($ch);
               $json =json_decode($response);
                // $price = round($json["ticker"]["buy"], 2);

              

                $array = array();
                foreach($json as $item) {

                    array_push($array, $item->name);
                } 


               $bit_rate2 = $item->price_usd;
       
          $url = base_url()."/priceticker.php?c=LTC";

          $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
        curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
        $response = curl_exec($ch);
        curl_close($ch);
            // $json =json_encode($response);
            //  $json =json_decode($response);
            //   // $price = round($json["ticker"]["buy"], 2);
            //
            // 
            //
            //   $array = array();
            //   foreach($json as $item) {
            //
            //       array_push($array, $item->name);
            //   } 


               $bit_rate3 =  trim($response);
       
        /*added by revathyjr starts*/
                            
                            $squery = $this->db->query("SELECT * FROM site_settings WHERE site_settingskey='current_currency_coin'");
                            $sresult = $squery->result();
                            $def_currency = $sresult[0]->site_settingsvalue;

                            $query = $this->db->query("SELECT currency_rate FROM currency_settings WHERE currency_name='".$def_currency."'");
                            $result = $query->result();
                            $currency_rate = $result[0]->currency_rate;

                            $credit_query = $this->db->query("SELECT sum(btcamount) as credit_amount FROM transaction_history WHERE cash_type='BTC' AND type = '1' AND member_id='".$this->session->userdata('user_id')."' ");
                            $credit_result = $credit_query->result();
                            $credit_bal = $credit_result[0]->credit_amount;

                            $debit_query = $this->db->query("SELECT sum(btcamount) as debit_amount FROM transaction_history WHERE cash_type='BTC' AND type = '2' AND member_id='".$this->session->userdata('user_id')."' ");
                            $debit_result = $debit_query->result();
                            $debit_bal = $debit_result[0]->debit_amount;

                            $bal_amount = $credit_bal - $debit_bal;
                            //$total_myc_rate = ($bal_amount*$myc_rate)/$bit_rate;
                            $total_myc_rate = $currency_rate/$bit_rate;

                            
                            /*added by revathyjr ends*/
                            
                            
    ?>
    
                         
  <ul class="nav navbar-nav navbar-right btc">
								
                                <li> <?php echo  $def_currency; ?>=  <?php echo  number_format($total_myc_rate,8); ?> BTC</li>
                                <!-- added by revathyjr starts -->
                                <li>1 <?php echo  $def_currency; ?> =  $ <?php echo  $currency_rate; ?></li>
                                <li id="ltcprice" data-price="<?php echo  $bit_rate3; ?>"> 1 LTC = $ <?php echo  $bit_rate3; ?></li>
								<li id="ethprice" data-price="<?php echo  $bit_rate1; ?>"> 1 ETH = $ <?php echo  $bit_rate1; ?></li>
								<li id="btcprice" data-price="<?php echo  $bit_rate; ?>"> 1 BTC = $ <?php echo  $bit_rate; ?></li>
								
								<!-- added by revathyjr edited by cdl2010 ends -->
                            </ul>


                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                

