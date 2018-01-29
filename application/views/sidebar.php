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
                               <?php $user=$this->session->userdata('user_username');?>
                               <li class="welcome">welcome <?php echo $user;?>!</li>
                                    <li><a href="<?php echo base_url(); ?>welcome/index"><i class="fa fa-home"></i> Dashboard</a>
                                        </li>
                                       <!-- <li><a href="<?php echo base_url(); ?>welcome/referral"><i class="fa fa-google-wallet"></i> Wallet </a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/referral"><i class="fa fa-credit-card-alt"></i> Transaction </a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/referral"><i class="fa fa-users"></i> Team</a>
                                        </li> 
                                        <li><a href="<?php echo base_url(); ?>welcome/referral"><i class="fa fa-users"></i> Referral Link</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/refuser"><i class="fa fa-users"></i> Referral User</a>
                                        </li>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/geneology"><i class="fa fa-users"></i> Geneology</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/treeviewgeneology"><i class="fa fa-users"></i> Geneology Tree</a>
                                        </li>-->
                                        <li><a href="<?php echo base_url(); ?>welcome/deposit"><i class="fa fa-users"></i> Deposit - Step 1</a>
                                        </li>
										<li><a href="<?php echo base_url(); ?>welcome/buytoken"><i class="fa fa-users"></i> Buy <?php echo $this->session->userdata('site_name'); ?> <?PHP echo $coinname; ?> - Step 2</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/withdraw"><i class="fa fa-users"></i> Withdraw - Step 3</a>
                                        </li>
                                         

                                       <li><a href="<?php echo base_url(); ?>welcome/myprofile"><i class="fa fa-cog"></i> Profile Settings</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>welcome/changepassword"><i class="fa fa-lock"></i> Change Password</a>
                                        </li> 
                                         <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out"></i>Logout </a>
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