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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/morris.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/dropzone.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/datatables.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo SURL;?>assets/css/style.css">

    <!-- Page Level Stylesheets -->

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.php" class="logo">
                    <img src="<?php echo SURL;?>assets/img/logo.png" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->

            <!-- Navbar Search Start -->
            <div class="navbar--search">
                <form action="search-results.php">
                    <input type="search" name="search" class="form-control" placeholder="Search Something..." required>
                    <button class="btn-link"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Search End -->

            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-bell"></i>
                            <span class="badge text-white bg-blue">7</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="mailbox_inbox.php" class="nav-link">
                            <i class="fa fa-envelope"></i>
                            <span class="badge text-white bg-blue">4</span>
                        </a>
                    </li>

                    <!-- Nav Language Start -->
                    <li class="nav-item dropdown nav-language">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="<?php echo SURL;?>assets/img/flags/us.png" alt="">
                            <span>English</span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="">
                                    <img src="<?php echo SURL;?>assets/img/flags/de.png" alt="">
                                    <span>German</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo SURL;?>assets/img/flags/fr.png" alt="">
                                    <span>French</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo SURL;?>assets/img/flags/us.png" alt="">
                                    <span>English</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav Language End -->

                    <!-- Nav User Start -->
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="<?php echo SURL;?>assets/img/avatars/01_80x80.png" alt="" class="rounded-circle">
                            <span>Henry Foster</span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><i class="far fa-user"></i>Profile</a></li>
                            <li><a href="mailbox_inbox.php"><i class="far fa-envelope"></i>Inbox</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="lock-screen.php"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                    <!-- Nav User End -->
                </ul>
            </div>
        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="profile.php">
                        <img src="<?php echo SURL;?>assets/img/avatars/01_80x80.png" alt="" class="rounded-circle">
                    </a>
                </div>

                <div class="profile--name">
                    <a href="profile.php" class="btn-link">Henry Foster</a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link" title="User Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lock-screen.php" class="nav-link" title="Lock Screen">
                                <i class="fa fa-lock"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailbox_inbox.php" class="nav-link" title="Messages">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="Logout">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul>
                                    <li><a href="ecommerce.php">Dashboard</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="products-edit.php">Edit Products</a></li>
                                    <li><a href="orders.php">Orders</a></li>
                                    <li><a href="order-view.php">Order View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Layouts</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i>
                                    <span>Page Layouts</span>
                                </a>

                                <ul>
                                    <li><a href="blank.php">Blank Page</a></li>
                                    <li><a href="page-light.php">Page Light</a></li>
                                    <li><a href="sidebar-light.php">Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li class="active open">
                                <a href="#">
                                    <i class="fa fa-th-list"></i>
                                    <span>Footers</span>
                                </a>

                                <ul>
                                    <li><a href="footer-light.php">Footer Light</a></li>
                                    <li><a href="footer-dark.php">Footer Dark</a></li>
                                    <li class="active"><a href="footer-transparent.php">Footer Transparent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Components</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-newspaper"></i>
                                    <span>UI Elements</span>
                                </a>

                                <ul>
                                    <li><a href="buttons.php">Buttons</a></li>
                                    <li><a href="pagination.php">Pagination</a></li>
                                    <li><a href="progress-bars.php">Progress Bars</a></li>
                                    <li><a href="tabs-accordions.php">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.php">Modals</a></li>
                                    <li><a href="ui-slider.php">UI Slider</a></li>
                                    <li><a href="sweet-alerts.php">Sweet Alerts</a></li>
                                    <li><a href="timeline.php">Timeline</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-wpforms"></i>
                                    <span>Form</span>
                                </a>

                                <ul>
                                    <li><a href="form-elements.php">Form Elements</a></li>
                                    <li><a href="form-wizard.php">Form Wizard</a></li>
                                    <li><a href="dropzone.php">Dropzone</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Apps and Charts</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-envelope"></i>
                                    <span>Mailbox</span>
                                </a>

                                <ul>
                                    <li><a href="mailbox_inbox.php">Inbox</a></li>
                                    <li><a href="mailbox_compose.php">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.php">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <i class="far fa-comments"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="contacts.php">
                                    <i class="far fa-address-book"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="notes.php">
                                    <i class="far fa-sticky-note"></i>
                                    <span>Notes</span>
                                </a>
                            </li>
                            <li>
                                <a href="todo-list.php">
                                    <i class="fa fa-tasks"></i>
                                    <span>Todo List</span>
                                </a>
                            </li>
                            <li>
                                <a href="search-results.php">
                                    <i class="fa fa-search"></i>
                                    <span>Search Results</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Extra</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span>Extra Pages</span>
                                </a>

                                <ul>
                                    <li><a href="pricing-tables.php">Pricing Tables</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="invoice.php">Invoice</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="forgot-password.php">Forgot Password</a></li>
                                    <li><a href="lock-screen.php">Lock Screen</a></li>
                                    <li><a href="404.php">404 Error</a></li>
                                    <li><a href="500.php">500 Error</a></li>
                                    <li><a href="maintenance.php">Maintenance</a></li>
                                    <li><a href="coming-soon.php">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Navigation End -->

            <!-- Sidebar Widgets Start -->
            <div class="sidebar--widgets">
                <div class="widget">
                    <h3 class="h6 widget--title">Information Summary</h3>

                    <!-- Summary Widget Start -->
                    <div class="summary--widget">
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Daily Traffic</p>
                            <p class="summary--stats">307.512</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">Average Usage</p>
                            <p class="summary--stats">2,371,527</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Disk Usage</p>
                            <p class="summary--stats">37.5%</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">CPU Usage</p>
                            <p class="summary--stats">37.05-32</p>
                        </div>
                        
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Memory Usage</p>
                            <p class="summary--stats">37.05%</p>
                        </div>
                    </div>
                    <!-- Summary Widget End -->
                </div>
            </div>
            <!-- Sidebar Widgets End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Footer Light</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Page Layouts</span></li>
                                <li class="breadcrumb-item active"><span>Footer Light</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <!-- Summary Widget Start -->
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>

                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                            <!-- Summary Widget End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel Title Here</h3>

                        <div class="dropdown">
                            <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>

                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="far fa-circle"></i>Panel Option 1</a></li>
                                <li><a href="#"><i class="far fa-circle"></i>Panel Option 2</a></li>
                                <li><a href="#"><i class="far fa-circle"></i>Panel Option 3</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-content">
                        <p>Panel Content Here</p>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-transparent">
                <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="<?php echo SURL;?>assets/js/jquery.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/raphael.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/morris.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/select2.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/jquery-jvectormap.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/horizontal-timeline.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/jquery.steps.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/dropzone.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/datatables.min.js"></script>
    <script src="<?php echo SURL;?>assets/js/main.js"></script>

    <!-- Page Level Scripts -->

</body>
</html>
