<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/codefox/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 14:49:57 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Login | Codefox - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap select pluings -->
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    </head>

    <body class="authentication-bg">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div>

                            <div class="text-center authentication-logo mb-4">
                                <a href="index.html" class="logo-dark">
                                    <span><img src="assets/images/logo-dark.png" alt="" height="30"></span>
                                </a>
                                <a href="index.html" class="logo-light">
                                    <span><img src="assets/images/logo-light.png" alt="" height="30"></span>
                                </a>
                            </div>

                            <form action="#">

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>

                                <a href="page-recoverpw.html" class="text-muted float-right">Forgot your password?</a>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="form-group text-center mb-3">
                                    <button class="btn btn-primary btn-lg width-lg btn-rounded" type="submit"> Sign In </button>
                                </div>

                            </form>

                        </div>
                        <!-- end card -->

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark ml-1">Sign Up</a></p>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Bootstrap select plugin -->
        <script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/codefox/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 14:49:59 GMT -->
</html>
