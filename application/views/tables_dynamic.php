<?php include 'header.php' ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-adjust"></i> <span class="logo-f">Alte<span class="logo-s">na</span></span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu quick search -->
                        <div class="profile clearfix">
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
                        </div>
                        <!-- /menu quick search -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
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
                                </ul>
                            </div>
                            <div class="menu_section">
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
                            </div>

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

                            <ul class="nav navbar-nav navbar-right">
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
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- breadcrumb -->
                <div class="breadcrumb_content">
                    <div class="breadcrumb_text"><a href="#">Table</a> / Table Dynamic
                    </div>
                </div>
                <!-- /breadcrumb -->
                <!-- page content -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>DataTables jQuery Plugin</h3>
                                <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</p>
                                <p>For more info click to link <a class="blue" href="http://datatables.net/" target="_blank">official documentation</a></p>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h4>Basic Example</h4>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>52</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>60</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h4>Checking Rows</h4>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox"  class="flat check-all"></th>
                                                    <th>Order ID</th>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>1</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>2</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>3</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>4</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>5</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>6</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>7</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>8</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>9</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"  class="flat" name="table_records"></td>
                                                    <td>10</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h4>Button Example</h4>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>52</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>60</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h4>Responsive example</h4>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap w100proc">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Product Name</th>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>52</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td>Mac Mouse</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>5</td>
                                                    <td>$270</td>
                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td>iPhone</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$600</td>
                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td>iMac</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>2</td>
                                                    <td>$3080</td>
                                                </tr>
                                                <tr>
                                                    <td>60</td>
                                                    <td>Apple Watch</td>
                                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</td>
                                                    <td>1</td>
                                                    <td>$350</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h4>Editable table</h4>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable" role="grid">
                                            <thead>
                                                <tr>
                                                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 263px;"> First Name </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label=" Full Name : activate to sort column ascending" style="width: 292px;"> Last Name </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label=" Points : activate to sort column ascending" style="width: 192px;"> Email </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label=" Notes : activate to sort column ascending" style="width: 201px;"> User Type </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label=" Edit : activate to sort column ascending" style="width: 148px;"> Edit </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label=" Delete : activate to sort column ascending" style="width: 195px;"> Delete </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="sorting_1"> Ed </td>
                                                    <td> Staffort </td>
                                                    <td> edstaf@gmail.com </td>
                                                    <td class="center"> Elite </td>
                                                    <td>
                                                        <a class="edit btn btn-default btn-xs" href="javascript:;" title="Edit"> <i class="fa fa-pencil"></i> </a>
                                                    </td>
                                                    <td>
                                                        <a class="delete btn btn-default btn-xs" href="javascript:;" title="Delete"> <i class="fa fa-trash-o"></i> </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1"> Eric </td>
                                                    <td> Smith </td>
                                                    <td> eric@gmail.com </td>
                                                    <td class="center"> Power Elite </td>
                                                    <td>
                                                        <a class="edit btn btn-default btn-xs" href="javascript:;" title="Edit"> <i class="fa fa-pencil"></i> </a>
                                                    </td>
                                                    <td>
                                                        <a class="delete btn btn-default btn-xs" href="javascript:;" title="Delete"> <i class="fa fa-trash-o"></i> </a>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1"> Jessy </td>
                                                    <td> Nilson </td>
                                                    <td> jnilson@yahoo.com </td>
                                                    <td class="center"> Admin </td>
                                                    <td>
                                                        <a class="edit btn btn-default btn-xs" href="javascript:;" title="Edit"> <i class="fa fa-pencil"></i> </a>
                                                    </td>
                                                    <td>
                                                        <a class="delete btn btn-default btn-xs" href="javascript:;" title="Delete"> <i class="fa fa-trash-o"></i> </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1"> Mery </td>
                                                    <td> Jane </td>
                                                    <td> janeMar@hotmail.com </td>
                                                    <td class="center"> Trial </td>
                                                    <td>
                                                        <a class="edit btn btn-default btn-xs" href="javascript:;" title="Edit"> <i class="fa fa-pencil"></i> </a>
                                                    </td>
                                                    <td>
                                                        <a class="delete btn btn-default btn-xs" href="javascript:;" title="Delete"> <i class="fa fa-trash-o"></i> </a>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1"> Bob </td>
                                                    <td> Jackson </td>
                                                    <td> bobyjack@gmail.com </td>
                                                    <td class="center"> Elite </td>
                                                    <td>
                                                        <a class="edit btn btn-default btn-xs" href="javascript:;" title="Edit"> <i class="fa fa-pencil"></i> </a>
                                                    </td>
                                                    <td>
                                                        <a class="delete btn btn-default btn-xs" href="javascript:;" title="Delete"> <i class="fa fa-trash-o"></i> </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        © 2017 Altena Template by <a href="https://lifeinsys.com">LifeInSYS</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url(); ?>vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    </body>
</html>