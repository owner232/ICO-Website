<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php $sitename=$this->sitesettingmodel->showsitesettings('site_name'); ?>
    <title><?php echo $sitename; ?></title>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
 
    <link rel="stylesheet" href="<?php echo base_url();?>/assets_admin/css/admin.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets_admin/css/table.min.css"/>
     <link rel="stylesheet" href="<?php echo base_url();?>assets_admin/css/style.css"/>
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet"> -->
         <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
   </head>
   <div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>admin">
            <?php $user=$this->sitesettingmodel->showsitesettings('admin_sitelogo'); ?>
                <img src="<?php echo base_url().$user;?>" height="50" width="100" alt="LOGO">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>admin/dashboard/profile"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="<?php echo base_url();?>admin/dashboard/password"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>admin/login/logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
            <li>
                    <a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-fw fa-user-plus"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Settings <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="">
                        <li><a href="<?php echo base_url();?>admin/dashboard/sitesetting"><i class="fa fa-globe" aria-hidden="true"></i> Site Settings</a></li>
                        <li><a href="<?php echo base_url();?>admin/payment"><i class="fa fa-money"></i> Payment</a></li>
                         <li><a href="<?php echo base_url();?>admin/bonus"><i class="fa fa-cog"></i> <?PHP echo $coinname; ?> ICO Settings</a></li>
                     <li><a href="<?php echo base_url();?>admin/history"><i class="fa fa-history" aria-hidden="true"></i> Transaction History</a></li> 
                    </ul>
                </li>
                <!--<li>
                    <a href="<?php echo base_url();?>admin/cgenealogy"><i class="fa fa-fw fa-user-plus"></i>  Genealogy</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>admin/treegenealogy"><i class="fa fa-fw fa-user-plus"></i> Tree Genealogy</a>
                </li>-->
                <!--  <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li> -->
              <!--  <li>
                    <a href="investigaciones/favoritas"><i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
                </li>
                <li>
                    <a href="sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                </li>
                <li>
                    <a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
                </li> -->
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </nav>

<body>
