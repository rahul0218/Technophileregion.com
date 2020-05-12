

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/quicksand.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/fontawesome.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/animate.min.css">
    <!--Map-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/jquery-jvectormap-2.0.2.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/calendar/bootstrap_calendar.css">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Admin</title>
  </head>
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->
    <!--Header-->
    <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> <span class="small">Admin</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button" class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">1</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                            <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-danger">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown" aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="<?php echo base_url('assets/admin/img/user.png');?>" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>User</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="<?php echo base_url('assets/admin/img/user.png');?>" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>User</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="<?php echo base_url('assets/admin/img/user.png');?>" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>User</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                            </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url('assets/admin/img/user.png');?>" alt="Adam" class="rounded-circle" width="40px" height="40px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-book pr-2"></i> Projects</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="<?php echo base_url('assets/admin/img/user.png');?>" alt="" class="rounded-circle" />
                        <p><strong>Admin</strong></p>
                        <span class="text-primary small"><strong>Admin</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Dashboard <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Default</a></li>
                                    <li class="child"><a href="index2.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Analytics</a></li>
                                    <li class="child"><a href="index3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ecommerce</a></li>
                                    <li class="child"><a href="index4.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                </ul>
                            </li>
                            </li>
                            <li class="parent">
                                <a href="widgets.html" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">Widget </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">UI Elements <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ul_element">
                                    <li class="child"><a href="accordion.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Accordions</a></li>
                                    <li class="child"><a href="buttons.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Buttons</a></li>
                                    <li class="child"><a href="badges.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Badges</a></li>
                                    <li class="child"><a href="breadcrumb.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Breadcrumbs</a></li>
                                    <li class="child"><a href="cards.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cards</a></li>
                                    <li class="child"><a href="icons.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Icons</a></li>
                                    <li class="child"><a href="modal.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Modals</a></li>
                                    <li class="child"><a href="notification.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Notification</a></li>
                                    <li class="child"><a href="progressbar.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Progressbar</a></li>
                                    <li class="child"><a href="sweetalert.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Sweet alert</a></li>
                                    <li class="child"><a href="tabs.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Tabs</a></li>
                                    <li class="child"><a href="tooltip-popover.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Tooltip and Popovers</a></li>
                                    <li class="child"><a href="typography.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Typography</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('form_element'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Form Elements <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="form_element">
                                    <li class="child"><a href="form-general.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Basic Elements</a></li>
                                    <li class="child"><a href="form-advanced.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Advanced Elements</a></li>
                                    <li class="child"><a href="form-validation.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Validation</a></li>
                                    <li class="child"><a href="form-wizard.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Form Wizard</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('editors'); return false" class=""><i class="fa fa-pencil-square-o mr-3"></i>
                                    <span class="none">Text Editors <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="editors">
                                    <li class="child"><a href="ckeditor-classic.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ckeditor classic</a></li>
                                    <li class="child"><a href="ckeditor-inline.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ckeditor inline</a></li>
                                    <li class="child"><a href="ckeditor-document.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ckeditor document</a></li>
                                    <li class="child"><a href="summernote.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Summernote editor</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Tables <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="tables">
                                    <li class="child"><a href="basic-tables.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Basic Tables</a></li>
                                    <li class="child"><a href="datatable.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Datatables</a></li>
                                    <li class="child"><a href="jsgrid-table.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> JSGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('charts'); return false" class=""><i class="fa fa-pie-chart mr-3"></i>
                                    <span class="none">Charts <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="charts">
                                    <li class="child"><a href="chart.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chart JS</a></li>
                                    <li class="child"><a href="chartist.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chartist JS</a></li>
                                    <li class="child"><a href="echarts.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Echarts JS</a></li>
                                    <li class="child"><a href="flot.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Flot JS</a></li>
                                    <li class="child"><a href="morris.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Morris JS</a></li>
                                    <li class="child"><a href="nvd3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> NVD3 JS</a></li>
                                    <li class="child"><a href="sparkline.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Sparkline JS</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="icons.html" class=""><i class="fa fa-toggle-on mr-3"></i>
                                    <span class="none">Icons</span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ecommerce'); return false" class=""><i class="fa fa-shopping-cart mr-3"></i>
                                    <span class="none">Ecommerce <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ecommerce">
                                    <li class="child"><a href="products.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> ProductList</a></li>
                                    <li class="child"><a href="product-detail.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> ProductDetail</a></li>
                                    <li class="child"><a href="orders.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> OrderList</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('maps'); return false" class=""><i class="fa fa-map mr-3"></i>
                                    <span class="none">Maps <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="maps">
                                    <li class="child"><a href="jvector-maps.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Jvector Maps</a></li>
                                    <li class="child"><a href="google-maps.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Google Maps</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('pages'); return false" class=""><i class="fa fa-file mr-3"></i>
                                    <span class="none">Pages <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="pages">
                                    <li class="child"><a href="email-inbox.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Email-Inbox</a></li>
                                    <li class="child"><a href="email.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Email-Compose</a></li>
                                    <li class="child"><a href="login.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Login</a></li>
                                    <li class="child"><a href="register.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Signup</a></li>
                                    <li class="child"><a href="lockscreen.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Lock Screen</a></li>
                                    <li class="child"><a href="forgot-password.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Forgot Password</a></li>
                                    <li class="child"><a href="profile.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Profile</a></li>
                                    <li class="child"><a href="gallery.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Gallery</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                    <li class="child"><a href="search-result.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Search</a></li>
                                    <li class="child"><a href="pricing.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Pricing</a></li>
                                    <li class="child"><a href="blank.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Blank Page</a></li>
                                    <li class="child"><a href="error-404.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 404</a></li>
                                    <li class="child"><a href="error-500.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 500</a></li>
                                    <li class="child"><a href="error-504.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 504</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="fullcalendar.html" class=""><i class="fa fa-calendar-o mr-3"> </i>
                                    <span class="none">Full Calendar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->