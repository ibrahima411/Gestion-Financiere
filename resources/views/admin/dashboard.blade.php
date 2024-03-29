<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/codefox/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 14:42:08 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Codefox - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap select pluings -->
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

        <!-- c3 plugin css -->
        <link rel="stylesheet" type="text/css" href="assets/libs/c3/c3.min.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-settings-outline"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="text-muted">There are new settings available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>


                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-bell-outline"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="text-muted">There are 2 new updates available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user
                                        <small class="text-muted">You have 10 unread messages</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">Codefox</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-light">C</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-dark">Codefox</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">C</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li class="dropdown d-none d-lg-block ">
                        <div class="lang-option">
                            <select class="selectpicker form-control" title="" data-width="110px">
                                <option> English </option>
                                <option> French </option>
                                <option> Germany </option>
                                <option> Spanish</option>
                            </select>
                        </div>

                    </li>

                </ul>
            </div>
            <!-- end Topbar -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="index.html">
                                    <i class="fe-airplay"></i>
                                    <span class="badge badge-success badge-pill float-right">1</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> UI Kit </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notifications.html">Notification</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a>
                                    <li><a href="ui-video.html">Embed Video</a>
                                    <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-box"></i>
                                    <span> Icons </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-colored.html">Colored Icons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-feather.html">Feather Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-pie-chart"></i>
                                    <span> Graphs </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-flot.html">Flot Charts</a></li>
                                    <li><a href="charts-morris.html">Morris Charts</a></li>
                                    <li><a href="charts-google.html">Google Charts</a></li>
                                    <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="charts-c3.html">C3 Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-disc"></i>
                                    <span class="badge badge-primary badge-pill float-right">9</span>
                                    <span> Forms </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                                    <li><a href="form-uploads.html">File Upload</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-grid"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="menu-title mt-2">More</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-target"></i>
                                    <span> Admin UI </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="admin-grid.html">Grid</a></li>
                                    <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="admin-widgets.html">Widgets</a></li>
                                    <li><a href="admin-nestable.html">Nestable List</a></li>
                                    <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                    <li><a href="admin-ratings.html">Ratings</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html">
                                    <i class="fe-calendar"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-map"></i>
                                    <span> Maps </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-layout"></i>
                                    <span> Layouts </span>
                                    <span class="badge badge-purple badge-pill float-right">New</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="layouts-horizontal.html">Horizontal</a>
                                    </li>
                                    <li>
                                        <a href="layouts-dark-sidebar.html">Dark Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="layouts-small-sidebar.html">Small Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a>
                                    </li>
                                    <li>
                                        <a href="layouts-boxed.html">Boxed Layout</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-logout.html">Logout</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-folder-plus"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="extras-about.html">About Us</a></li>
                                    <li><a href="extras-contact.html">Contact</a></li>
                                    <li><a href="extras-members.html">Members</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-plus-square"></i>
                                    <span> Multi Level </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 1.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="javascript: void(0);">Level 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Level 2.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Codefox</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Welcome John !</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card widget-box-two bg-purple">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body wigdet-two-content">
                                                <p class="m-0 text-uppercase text-white" title="Statistics">Statistics</p>
                                                <h2 class="text-white"><span data-plugin="counterup">65841</span> <i class="mdi mdi-arrow-up text-white font-22"></i></h2>
                                                <p class="text-white m-0"><b>10%</b> From previous period</p>
                                            </div>
                                            <div class="avatar-lg rounded-circle bg-soft-light ml-2 align-self-center">
                                                <i class="mdi mdi-chart-line font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card widget-box-two bg-info">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body wigdet-two-content">
                                                <p class="m-0 text-white text-uppercase" title="User Today">User Today</p>
                                                <h2 class="text-white"><span data-plugin="counterup">52142</span> <i class="mdi mdi-arrow-up text-white font-22"></i></h2>
                                                <p class="text-white m-0"><b>5.6%</b> From previous period</p>
                                            </div>
                                            <div class="avatar-lg rounded-circle bg-soft-light ml-2 align-self-center">
                                                <i class="mdi mdi-access-point-network  font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card widget-box-two bg-pink">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body wigdet-two-content">
                                                <p class="m-0 text-uppercase text-white" title="Request Per Minute">Request Per Minute</p>
                                                <h2 class="text-white"><span data-plugin="counterup">2365</span> <i class="mdi mdi-arrow-up text-white font-22"></i></h2>
                                                <p class="text-white m-0"><b>7.02%</b> From previous period</p>
                                            </div>
                                            <div class="avatar-lg rounded-circle bg-soft-light ml-2 align-self-center">
                                                <i class="mdi mdi-timetable font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card widget-box-two bg-success">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body wigdet-two-content">
                                                <p class="m-0 text-white text-uppercase" title="New Downloads">New Downloads</p>
                                                <h2 class="text-white"><span data-plugin="counterup">854</span> <i class="mdi mdi-arrow-up text-white font-22"></i></h2>
                                                <p class="text-white m-0"><b>9.9%</b> From previous period</p>
                                            </div>
                                            <div class="avatar-lg rounded-circle bg-soft-light ml-2 align-self-center">
                                                <i class="mdi mdi-cloud-download font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Last 30 days statistics</h4>

                                        <div dir="ltr">
                                            <div id="donut-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Total Revenue share</h4>
                                        <div dir="ltr">
                                            <div id="combine-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Total Revenue share</h4>
                                        <div dir="ltr">
                                            <div id="roated-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Recent Projects</h4>

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Project Name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Codefox Admin v1</td>
                                                        <td>01/01/2017</td>
                                                        <td>26/04/2017</td>
                                                        <td><span class="badge badge-info">Released</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Codefox Frontend v1</td>
                                                        <td>01/01/2017</td>
                                                        <td>26/04/2017</td>
                                                        <td><span class="badge badge-success">Released</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Codefox Admin v1.1</td>
                                                        <td>01/05/2017</td>
                                                        <td>10/05/2017</td>
                                                        <td><span class="badge badge-pink">Pending</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Codefox Frontend v1.1</td>
                                                        <td>01/01/2017</td>
                                                        <td>31/05/2017</td>
                                                        <td><span class="badge badge-purple">Work in Progress</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Codefox Admin v1.3</td>
                                                        <td>01/01/2017</td>
                                                        <td>31/05/2017</td>
                                                        <td><span class="badge badge-warning">Coming soon</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Codefox Admin v1</td>
                                                        <td>01/01/2017</td>
                                                        <td>26/04/2017</td>
                                                        <td><span class="badge badge-info">Released</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Codefox Frontend v1</td>
                                                        <td>01/01/2017</td>
                                                        <td>26/04/2017</td>
                                                        <td><span class="badge badge-success">Released</span></td>
                                                        <td>Coderthemes</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card widget-box-three">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="bg-icon avatar-lg text-center bg-light rounded-circle">
                                                        <i class="fe-database h2 text-muted m-0 avatar-title"></i>
                                                    </div>
                                                    <div class="media-body text-right ml-2">
                                                        <p class="text-uppercase">Statistics</p>
                                                        <h2 class="mb-0"><span data-plugin="counterup">2,562</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card widget-box-three">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="bg-icon avatar-lg text-center bg-light rounded-circle">
                                                        <i class="fe-briefcase h2 text-muted m-0 avatar-title"></i>
                                                    </div>
                                                    <div class="media-body text-right ml-2">
                                                        <p class="text-uppercase">User Today</p>
                                                        <h2 class="mb-0"><span data-plugin="counterup">8,542</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card widget-box-three">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="bg-icon avatar-lg text-center bg-light rounded-circle">
                                                        <i class="fe-download h2 text-muted m-0 avatar-title"></i>
                                                    </div>
                                                    <div class="media-body text-right ml-2">
                                                        <p class="text-uppercase">Request Per Minute</p>
                                                        <h2 class="mb-0"><span data-plugin="counterup">6,254</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card widget-box-three">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="bg-icon avatar-lg text-center bg-light rounded-circle">
                                                        <i class="fe-bar-chart-2 h2 text-muted m-0 avatar-title"></i>
                                                    </div>
                                                    <div class="media-body text-right ml-2">
                                                        <p class="text-uppercase">New Downloads</p>
                                                        <h2 class="mb-0"><span data-plugin="counterup">7,524</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card widget-user">
                                            <div class="card-body">
                                                <img src="assets/images/users/avatar-3.jpg" class="img-fluid d-block rounded-circle avatar-md" alt="user">
                                                <div class="wid-u-info">
                                                    <h5 class="mt-3 mb-1">Chadengle</h5>
                                                    <p class="text-muted mb-0">coderthemes@gmail.com</p>
                                                    <div class="user-position">
                                                        <span class="text-warning">Admin</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="card widget-user">
                                            <div class="card-body">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid d-block rounded-circle avatar-md" alt="user">
                                                <div class="wid-u-info">
                                                    <h5 class="mt-3 mb-1">Michael Zenaty</h5>
                                                    <p class="text-muted mb-0">coderthemes@gmail.com</p>
                                                    <div class="user-position">
                                                        <span class="text-info">User</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2016 - 2020 &copy; Codefox theme by <a href="#">Coderthemes</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

                <!-- Right Sidebar -->
                <div class="right-bar">
                    <div class="rightbar-title">
                        <a href="javascript:void(0);" class="right-bar-toggle float-right">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <h5 class="m-0 text-white">Theme Customizer</h5>
                    </div>
                    <div class="slimscroll-menu">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, layout, etc.
                            </div>
                            <div class="mb-2">
                                <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="custom-control custom-switch mb-3">
                                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                            </div>

                            <div class="mb-2">
                                <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="custom-control custom-switch mb-3">
                                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css"
                                    data-appStyle="assets/css/app-dark.min.css" />
                                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                            </div>

                            <div class="mb-2">
                                <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="custom-control custom-switch mb-3">
                                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                            </div>

                            <div class="mb-2">
                                <img src="assets/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="custom-control custom-switch mb-5">
                                <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css"
                                    data-appStyle="assets/css/app-dark-rtl.min.css" />
                                <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                            </div>

                            <a href="https://wrapbootstrap.com/theme/codefox-admin-dashboard-template-WB0X27670?ref=coderthemes" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                        </div>
                    </div> <!-- end slimscroll-menu-->
                </div>
                <!-- /Right-bar -->

                <!-- Right bar overlay-->
                <div class="rightbar-overlay"></div>

                <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
                    <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
                </a>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Bootstrap select plugin -->
        <script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>

        <!-- plugins -->
        <script src="assets/libs/c3/c3.min.js"></script>
        <script src="assets/libs/d3/d3.min.js"></script>

        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/codefox/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 14:42:08 GMT -->
</html>
