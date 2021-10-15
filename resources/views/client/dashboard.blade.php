@extends('client.layouts.guest')
    @section('content')
    <!-- header -->

    <!-- sidebar -->

                <!-- Begin page -->
                <div id="wrapper">


                    <!-- Topbar Start -->
                    @include('client.layouts.header')
                    <!-- end Topbar -->


                    <!-- ========== Left Sidebar Start ========== -->
                    @include('client.layouts.siderbar')
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
                                            <h4 class="page-title">Welcome John !ww</h4>
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
                        @include('client.layouts.footer')
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
    @endsection

