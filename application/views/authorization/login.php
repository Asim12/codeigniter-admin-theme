<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - DAdmin</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500"> -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/morris.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/dropzone.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/datatables.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo SURL; ?>assets/css/style.css">

    <!-- Page Level Stylesheets -->

</head>
<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Page Start -->
        <div class="m-account-w" data-bg-img="<?php echo SURL; ?>assets/img/account/download.jpeg">
            <div class="m-account">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <!-- Login Content Start -->
                        <div class="m-account--content-w" data-bg-img="<?php echo SURL; ?>assets/img/account/download.jpeg">
                            <div class="m-account--content">
                                <h2 class="h2" style="color:#2bb3c0">Don't have an account?</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <a href="#" style="background-color:#2bb3c0" class="btn btn-rounded">Register Now</a>
                            </div>
                        </div>
                        <!-- Login Content End -->
                    </div>

                    <div class="col-md-6">
                        <!-- Login Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img src="<?php echo SURL; ?>assets/img/logo.png" alt="">
                                </div>
                                <!-- Logo End -->

                                <form action="loginProcess" method="post">
                                    <label class="m-account--title">Login to your account</label>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="m-account--actions">
                                        <a href="#" class="btn-link">Forgot Password?</a>

                                        <button type="submit" class="btn btn-rounded btn-info">Login</button>
                                    </div>

                                    <div class="m-account--alt">
                                        <p><span>OR LOGIN WITH</span></p>

                                        <div class="btn-list">
                                            <a href="#" class="btn btn-rounded btn-warning">Facebook</a>
                                            <a href="#" class="btn btn-rounded btn-warning">Google</a>
                                        </div>
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy; 2018 ThemeLooks</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Page End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="<?php echo SURL; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/raphael.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/morris.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/select2.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/jquery-jvectormap.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/horizontal-timeline.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/jquery.steps.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/dropzone.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/datatables.min.js"></script>
    <script src="<?php echo SURL; ?>assets/js/main.js"></script>
    <!-- Page Level Scripts -->
</body>
</html>
