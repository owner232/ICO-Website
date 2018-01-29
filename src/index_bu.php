<?php include 'header.php' ?>
               
                <!-- page content -->
                <div class="right_col bg_fff" role="main">
                    <!-- top tiles -->
                    <div class="row top_tiles">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats tile-white bg-blue-sky">
                                <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                                <div class="count">349</div>
                                <h3>ORDERS</h3>
                                <p>+15% From previous month</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats tile-white bg-purple">
                                <div class="icon"><i class="fa fa-comments-o"></i></div>
                                <div class="count">58,880 $</div>
                                <h3>INCOM</h3>
                                <p>+25% From previous month</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats tile-white bg-red">
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                                <div class="count">15,790</div>
                                <h3>VISITORS</h3>
                                <p>+25% From previous month</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats tile-white bg-blue">
                                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                <div class="count">3,271</div>
                                <h3>CUSTOMERS</h3>
                                <p>+15% From previous month</p>
                            </div>
                        </div>
                    </div>
                    <!-- /top tiles -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph border_box">

                                <div class="row x_title">
                                    <div class="col-md-6">
                                        <h4>Product Sales <small>daily stats...</small></h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="reportrange" class="pull-right" style="cursor: pointer; padding: 5px 10px; border: 1px solid #e7ecf1;">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="chart_plot_01" class="demo-placeholder"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mt25">
                                    <div class="animated flipInX col-md-3 col-sm-3 col-xs-12">
                                        <div>
                                            <p>Revenue <span class="font13">+ 80%</span></p>
                                            <p></p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 90%;">
                                                    <div class="progress-bar bg-purple" role="progressbar" data-transitiongoal="80" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="animated flipInX col-md-3 col-sm-3 col-xs-12">
                                        <div>
                                            <p>Tax <span class="font13">+ 20%</span></p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 90%;">
                                                    <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="20" style="width: 20%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="animated flipInX col-md-3 col-sm-3 col-xs-12">
                                        <div>
                                            <p>Shipment <span class="font13">+ 50%</span></p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 90%;">
                                                    <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="50" style="width: 50%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="animated flipInX col-md-3 col-sm-3 col-xs-12">
                                        <div>
                                            <p>Orders <span class="font13">+ 50%</span></p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 90%;">
                                                    <div class="progress-bar bg-blue-sky" role="progressbar" data-transitiongoal="50" style="width: 50%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                    <br />

                    <div class="row">


                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="x_panel tile border_box">
                                <div class="x_title">
                                    <h4>Last Orders</h4>
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
                                    <table class="table vertical-mid margin0">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Purchased</th>
                                                <th>Tracking ID</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <img src="./images/macmouse.png" alt="mac_mouse">
                                                </td>
                                                <td>mac Mouse</td>
                                                <td>22/04/2016</td>

                                                <td>38SA3C9SC</td>
                                                <td>
                                                    <span class="label label-default font-weight-100">Failed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="./images/iphone.png" alt="iPhone">
                                                </td>
                                                <td>iPhone</td>
                                                <td>15/07/2016</td>

                                                <td>78SA3C9SC</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="./images/imac.png" alt="iMac">
                                                </td>
                                                <td>iMac</td>
                                                <td>22/08/2016</td>

                                                <td>1BYC854D84</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="./images/applewatch.png" alt="apple_watch">
                                                </td>
                                                <td>apple Watch</td>
                                                <td>10/07/2016</td>


                                                <td>58BC85SD84</td>
                                                <td>
                                                    <span class="label label-warning font-weight-100">Pending</span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel tile overflow_hidden border_box">
                                <div class="x_title">
                                    <h4>Visitors Location</h4>
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
                                    <table class="" style="width:100%">
                                        <tr>
                                            <th>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                    <p class="">Country</p>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <p class="ml55procent">Orders</p>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="tile_info">
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square blue"></i>U.S.A </p>
                                                        </td>
                                                        <td>30%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square green"></i>U.K </p>
                                                        </td>
                                                        <td>20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square purple"></i>Germany </p>
                                                        </td>
                                                        <td>15%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square aero"></i>China </p>
                                                        </td>
                                                        <td>15%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square red"></i>Others </p>
                                                        </td>
                                                        <td>35%</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <canvas class="canvasDoughnut" height="214" width="214" style="margin: 15px 10px 10px 0;"></canvas>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">



                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel border_box">
                                        <div class="x_title">
                                            <h4>REGIONAL STATS</h4>
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
                                            <div class="dashboard-widget-content">
                                                <div class="col-md-4 hidden-small">
                                                    <h6 class="text-center">ORDERS IN DIFFERENT COUNTRIES</h6>
                                                    <div>
                                                        <div class="mb5"><img src="./images/usa-icon.png" width="25" alt=""/><span class="ml5">U.S.A</span></div>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="33" aria-valuenow="79" style="width:79%"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb5"><img src="./images/uk-icon.png" width="25" alt=""/><span class="ml5">U.K</span></div>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="27" aria-valuenow="79" style="width:79%"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb5"><img src="./images/canada-icon.png" width="25" alt=""/><span class="ml5">Canada</span></div>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="16" aria-valuenow="79" style="width:79%"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb5"><img src="./images/germany-icon.png" width="25" alt=""/><span class="ml5">Germany</span></div>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="11" aria-valuenow="79" style="width:79%"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb5"><img src="./images/china-icon.png" width="25" alt=""/><span class="ml5">China</span></div>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="10" aria-valuenow="79" style="width:79%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <!-- Start to do list -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel border_box">
                                        <div class="x_title">
                                            <h4>Task List</h4>
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

                                            <div class="">
                                                <ul class="to_do">
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Schedule meeting with new client</span> <span class="task_hint_blue">Success</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Create email address for new intern</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Have IT fix the network printer</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Copy backups to offsite location</span> <span class="task_hint_red">Take action</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Food truck fixie locavors mcsweeney</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Create email address for new intern</span> <span class="task_hint_yellow">Hint</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Edit the blog system</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Upload Photos and Video</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">UX design change</span><span class="task_hint_yellow">Hint</span>
                                                        </div>
                                                    </li>
                                                    <li class="border-none">
                                                        <div>
                                                            <input type="checkbox" class="flat"> <span class="ml5">Copy backups to offsite location</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End to do list -->







                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel border_box">
                                        <div class="x_title">
                                            <h4>Chat <small>Online</small></h4>
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
                                            <div class="chat-scroller" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                                                <ul class="chats">
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="images/user-card-1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Eric Smith </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="images/user-card-2.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Jessy </a>
                                                            <span class="datetime"> at 20:30 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="images/user-card-3.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Ed Staffort </a>
                                                            <span class="datetime"> at 20:30 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="images/user-card-1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Eric Smith </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="images/user-card-3.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Ed Staffort </a>
                                                            <span class="datetime"> at 20:33 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="images/user-card-1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Eric Smith </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="in">
                                                        <img class="avatar" alt="" src="images/user-card-4.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Mery Jane </a>
                                                            <span class="datetime"> at 20:40 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                    <li class="out">
                                                        <img class="avatar" alt="" src="images/user-card-1.jpg">
                                                        <div class="message">
                                                            <span class="arrow"> </span>
                                                            <a href="javascript:;" class="name"> Eric Smith </a>
                                                            <span class="datetime"> at 20:11 </span>
                                                            <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>



                                            <div class="chat-form">
                                                <div class="input-cont">
                                                    <input class="form-control" type="text" placeholder="Type a message here..."> </div>
                                                <div class="btn-cont">
                                                    <span class="arrow"> </span>
                                                    <a href="" class="btn blue icn-only">
                                                        <i class="fa fa-check icon-white"></i>
                                                    </a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel border_box">
                                <div class="x_title">
                                    <h4>Recent Activities <small>Sessions</small></h4>
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
                                    <div class="dashboard-widget-content">

                                        <ul class="list-unstyled timeline widget">
                                            <li>
                                                <div class="block">
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Create membership plan <span>assigned to a task</span></a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>10 hours ago</span> by <a>Antony Erixon</a>
                                                        </div>
                                                        <div class="excerpt">
                                                            <ul class="members">
                                                                <li>
                                                                    <img class="avatar avatar-sm" src="images/user-card-2.jpg" alt="">
                                                                </li>
                                                                <li>
                                                                    <img class="avatar avatar-sm" src="images/user-card-4.jpg" alt="">
                                                                </li>
                                                                <li>
                                                                    <img class="avatar avatar-sm" src="images/user-card-3.jpg" alt="">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block">
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Mark Fedor <span>new message</span></a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>10 hours ago</span> by <a>Mark Fedor</a>
                                                        </div>
                                                        <div class="excerpt">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block">
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Apple store <span>uploaded 2 product</span></a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>8 hours ago</span> by <a>Antony Erixon</a>
                                                        </div>
                                                        <div class="excerpt">
                                                            <ul class="members">
                                                                <li>
                                                                    <img class="" src="images/applewatch.png" alt="">
                                                                </li>
                                                                <li>
                                                                    <img class="" src="images/imac.png" alt="">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block">
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Germany orders <span>send shipment</span></a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>5 hours ago</span> by <a>Mark Fedor</a>
                                                        </div>
                                                        <div class="excerpt">
                                                            <ul class="order_list">
                                                                <li>
                                                                    <p>Mac Mouse <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Apple Watch <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Mac Mouse <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Apple Watch <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Mac Mouse <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Apple Watch <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Mac Mouse <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                                <li>
                                                                    <p>Apple Watch <span>ID #78SA3C9SC</span></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block">
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Chat room <span>invite you to chatroom "best sells"</span></a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>3 hours ago</span> by <a>Antony Erixon</a>
                                                        </div>
                                                        <div class="excerpt" style="margin-top: 7px;">
                                                            <button type="button" class="btn btn-round btn-info">Accept</button>
                                                            <button type="button" class="btn btn-round btn-default">Refuse</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <?php include 'footer.php' ?>