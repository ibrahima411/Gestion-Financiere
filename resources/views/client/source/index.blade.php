@extends('layouts.guest')
    @section('content')
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.siderbar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->

                    @include('layouts.header')
                    <!-- end Topbar -->

                    <br />
                            <div class="text-xl-end mt-xl-0 mt-2" style="text-align: right;">
                                <a type="button" href="{{route('source.create')}}" class="btn btn-danger mb-2 me-2"><span class="mdi mdi-currency-usd"></span>Nouvelle Source</a>
                                {{-- <button type="button" class="btn btn-light mb-2">Export</button> --}}
                            </div>
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($source as $source)
                                <div class="col-md-4 col-xxl-3">
                                    <!-- project card -->
                                    <div class="card d-block">
                                        <!-- project-thumbnail -->
                                        <img class="card-img-top" @if($source->photo_source == null) src="assets/images/projects/project-1.jpg" @else src="{{asset($source->photo_source)}}" @endif>
                                        <div class="card-img-overlay">
                                            <div class="badge bg-secondary text-light p-1">Ongoing</div>
                                        </div>

                                        <div class="card-body position-relative">
                                            <!-- project title-->
                                            <h4 class="mt-0">
                                                <a href="apps-projects-details.html" class="text-title">{{$source->libelle}}</a>
                                            </h4>

                                            <!-- project detail-->
                                            <p class="mb-3" style="text-align: right;">
                                                <span class="pe-2 text-nowrap">
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                </span>
                                                <span class=" pe-2 text-nowrap">
                                                    <a href="{{route('source.edit', [$source->id])}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                </span>
                                                <span class="pe-2 text-nowrap">
                                                <a href="" class="action-icon" > <i class="mdi mdi-delete"></i></a>
                                                </span>
                                            </p>
                                            <div class="mb-3" id="tooltip-container4">
                                                <a href="" title="Mat Helme" class="d-inline-block">
                                                    50000 FCFA
                                                </a>
                                            </div>

                                            <!-- project progress-->
                                            <p class="mb-2 fw-bold">Progress <span class="float-end">45%</span></p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            @endforeach
                        </div>
                    </div>

                    <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar="">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1">

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>


                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                        <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>

    @endsection
