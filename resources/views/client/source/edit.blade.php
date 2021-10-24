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
                    <br /><br />
                    <!-- Start Content-->
                    <h2>Modifier la source de revenue ( <span style="color: orange;">{{$source->libelle}}</span>)</h2>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-sizes-preview">
                                                <form class="setting-form" method="POST" action="{{ route('source.update', [$source->id]) }}" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="example-input-large" class="form-label">libelle</label>
                                                        <input type="text" id="example-input-large" name="libelle" class="form-control form-control-lg  @error('libelle') is-invalid @enderror" name="libelle" value="{{$source->libelle}}">
                                                        @error('libelle')
                                                            <small class="form-alert">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-input-large" class="form-label">description</label>
                                                        <input type="text" id="example-input-large" name="description" class="form-control form-control-lg  @error('description') is-invalid @enderror" name="description" value="{{$source->description}}">
                                                        @error('description')
                                                            <small class="form-alert">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label">File input</label>
                                                        <input class="form-control" name="photo_source" type="file">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary mt-4 mb-2 btn-rounded" name="photo_source">Modifier</button>
                                                    </div>
                                                </form>
                                            </div> <!-- end preview-->


                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
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
