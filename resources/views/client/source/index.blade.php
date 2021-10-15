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
                                <div class="col-lg-12 sticky-top">
                                    <br />
                                    <br />
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table m-0">
                                                    <thead class="bg-success text-white">
                                                        <tr>
                                                            <th>PHOTO</th>
                                                            <th>ID</th>
                                                            <th>LIBELLE</th>
                                                            <th>DESCRIPTION</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>Otto</td>
                                                            <td>
                                                                <a style="text-align: left; color:green;" class="center"><i class="fas fa-edit" style="font-size:20px;"></i></a>
                                                                <a ><i class="fas fa-edit" style="font-size:20px; text-align: right; color:red;"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end page title -->


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

