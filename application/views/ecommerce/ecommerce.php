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
                <a href="index.html" class="logo">
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
                <form action="search-results.html">
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
                        <a href="mailbox_inbox.html" class="nav-link">
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
                            <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
                            <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
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
                    <a href="profile.html">
                        <img src="<?php echo SURL;?>assets/img/avatars/01_80x80.png" alt="" class="rounded-circle">
                    </a>
                </div>

                <div class="profile--name">
                    <a href="profile.html" class="btn-link">Henry Foster</a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link" title="User Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lock-screen.html" class="nav-link" title="Lock Screen">
                                <i class="fa fa-lock"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailbox_inbox.html" class="nav-link" title="Messages">
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
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="active open">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul>
                                    <li class="active"><a href="ecommerce.html">Dashboard</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="products-edit.html">Edit Products</a></li>
                                    <li><a href="orders.html">Orders</a></li>
                                    <li><a href="order-view.html">Order View</a></li>
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
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="page-light.html">Page Light</a></li>
                                    <li><a href="sidebar-light.html">Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th-list"></i>
                                    <span>Footers</span>
                                </a>

                                <ul>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                    <li><a href="footer-transparent.html">Footer Transparent</a></li>
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
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="ui-slider.html">UI Slider</a></li>
                                    <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-wpforms"></i>
                                    <span>Form</span>
                                </a>

                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="dropzone.html">Dropzone</a></li>
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
                                    <li><a href="mailbox_inbox.html">Inbox</a></li>
                                    <li><a href="mailbox_compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <i class="far fa-comments"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="contacts.html">
                                    <i class="far fa-address-book"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="notes.html">
                                    <i class="far fa-sticky-note"></i>
                                    <span>Notes</span>
                                </a>
                            </li>
                            <li>
                                <a href="todo-list.html">
                                    <i class="fa fa-tasks"></i>
                                    <span>Todo List</span>
                                </a>
                            </li>
                            <li>
                                <a href="search-results.html">
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
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
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
                            <h2 class="page--title h5">E-Commerce Dashboard</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><span>Ecommerce</span></li>
                                <li class="breadcrumb-item active"><span>Dashboard</span></li>
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
                <div class="row gutter-20">
                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel text-white bg-blue">
                                <div class="miniStats--header" data-overlay="0.1">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#fff">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>

                                    <p class="miniStats--label text-blue bg-white">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-user text-white"></i>

                                    <p class="miniStats--caption">Monthly</p>
                                    <h3 class="miniStats--title h4 text-white">New Users</h3>
                                    <p class="miniStats--num">13,450</p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel text-white bg-orange">
                                <div class="miniStats--header" data-overlay="0.1">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#fff">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-orange bg-white">
                                        <i class="fa fa-level-down-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-ticket-alt text-white"></i>

                                    <p class="miniStats--caption">Monthly</p>
                                    <h3 class="miniStats--title h4 text-white">Tickets Answered</h3>
                                    <p class="miniStats--num">450</p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel text-white bg-green">
                                <div class="miniStats--header" data-overlay="0.1">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#fff">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-green bg-white">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-white"></i>

                                    <p class="miniStats--caption">Monthly</p>
                                    <h3 class="miniStats--title h4 text-white">Projects Launched</h3>
                                    <p class="miniStats--num">3,130,300</p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Product Sales</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-chart">
                                <!-- Morris Area Chart 03 Start -->
                                <div id="morrisAreaChart03" class="chart--body area--chart style--2"></div>
                                <!-- Morris Area Chart 03 End -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Market Trends</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">This Week</a></li>
                                        <li><a href="#">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-chart">
                                <!-- Morris Area Chart 02 Start -->
                                <div id="morrisAreaChart02" class="chart--body area--chart style--1"></div>
                                <!-- Morris Area Chart 02 End -->

                                <div class="chart--stats style--2">
                                    <ul class="nav">
                                        <li>
                                            <p class="amount">$56,700</p>
                                            <p data-overlay="1 blue"><span class="label">TOTAL EQUITY</span></p>
                                        </li>
                                        <li>
                                            <p class="amount">$4,000</p>
                                            <p data-overlay="1 red"><span class="label">TOTAL DEBT</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sales Progress</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">This Week</a></li>
                                        <li><a href="#">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-chart">
                                <!-- Morris Line Chart 01 Start -->
                                <div id="morrisLineChart01" class="chart--body line--chart style--1"></div>
                                <!-- Morris Line Chart 01 End -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Monthly Traffic</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-chart">
                                <!-- Morris Line Chart 02 Start -->
                                <div id="morrisLineChart02" class="chart--body line--chart style--2"></div>
                                <!-- Morris Line Chart 02 End -->

                                <div class="chart--stats style--3">
                                    <ul class="nav">
                                        <li>
                                            <p data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">0,5,9,7,12,15,12,5</p>
                                            
                                            <p><span class="label">Total Visitors</span></p>
                                            <p class="amount">12,202</p>
                                        </li>
                                        <li>
                                            <p data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">0,15,12,5,5,9,7,12</p>
                                            
                                            <p><span class="label">Total Sales</span></p>
                                            <p class="amount">25,051</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="panel">
                            <div class="weather--panel text-white bg-blue">
                                <div class="weather--title">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Dhaka, Bangladesh</span>
                                </div>

                                <div class="weather--info">
                                    <i class="wi wi-rain-wind"></i>
                                    <span>33°C</span>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="weather--panel text-white bg-orange">
                                <div class="weather--title">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Melbourne, Autoria</span>
                                </div>

                                <div class="weather--info">
                                    <i class="wi wi-hot"></i>
                                    <span>35°C</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <select name="filter" data-trigger="selectmenu" data-minimum-results-for-search="-1">
                                        <option value="top-search">Recent Orders</option>
                                        <option value="average-search">Latest Orders</option>
                                    </select>
                                </h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table style--2">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product ID</th>
                                                <th>Customer Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Tracking No.</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table Row Start -->
                                            <tr>
                                                <td><img src="<?php echo SURL;?>assets/img/products/thumb-01.jpg" alt=""></td>
                                                <td>3BSD59</td>
                                                <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                                <td>$99</td>
                                                <td>2</td>
                                                <td><span class="text-muted">#BG6R9853lP</span></td>
                                                <td><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <!-- Table Row End -->

                                            <!-- Table Row Start -->
                                            <tr>
                                                <td><img src="<?php echo SURL;?>assets/img/products/thumb-02.jpg" alt=""></td>
                                                <td>3BSD59</td>
                                                <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                                <td>$99</td>
                                                <td>2</td>
                                                <td><span class="text-muted">#BG6R9853lP</span></td>
                                                <td><span class="label label-warning">Due</span></td>
                                            </tr>
                                            <!-- Table Row End -->

                                            <!-- Table Row Start -->
                                            <tr>
                                                <td><img src="<?php echo SURL;?>assets/img/products/thumb-03.jpg" alt=""></td>
                                                <td>3BSD59</td>
                                                <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                                <td>$99</td>
                                                <td>2</td>
                                                <td><span class="text-muted">#BG6R9853lP</span></td>
                                                <td><span class="label label-info">Rejected</span></td>
                                            </tr>
                                            <!-- Table Row End -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">To-Do List</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="todo--panel">
                                <form action="#">
                                    <ul class="list-group" data-trigger="scrollbar">
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="todo_id" value="1" class="todo--input" checked>
                                                <span class="todo--text">Schedule Meeting</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="todo_id" value="2" class="todo--input">
                                                <span class="todo--text">Call Clients To Follow-Up</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="todo_id" value="3" class="todo--input" checked>
                                                <span class="todo--text">Book Flight For Holiday</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="todo_id" value="4" class="todo--input">
                                                <span class="todo--text">Forward Important Tasks</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="todo--label">
                                                <input type="checkbox" name="todo_id" value="6" class="todo--input">
                                                <span class="todo--text">Important Tasks</span>
                                            </label>

                                            <a href="#" class="todo--remove">&times;</a>
                                        </li>
                                    </ul>

                                    <div class="input-group">
                                        <input type="text" name="todo" placeholder="Add New Task" class="form-control" autocomplete="off" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn-link">+</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Overall Rating</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-chart">
                                <div class="chart--body line--chart style--4" data-trigger="sparklineChart01">10,15,15,20,18,20,18,22</div>

                                <div class="chart--stats style--4">
                                    <ul class="nav">
                                        <li>
                                            <span class="text">The product is awesome</span>
                                            <span class="stat">20%</span>
                                        </li>
                                        <li>
                                            <span class="text">I am so pleased</span>
                                            <span class="stat">40%</span>
                                        </li>
                                        <li>
                                            <span class="text">The product is really good</span>
                                            <span class="stat">20%</span>
                                        </li>
                                        <li>
                                            <span class="text">The product is awesome</span>
                                            <span class="stat">60%</span>
                                        </li>
                                        <li>
                                            <span class="text">I am so surprised</span>
                                            <span class="stat">20%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Events Timeline</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="cd-horizontal-timeline">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li><a href="#0" data-date="10/11/2014" class="older-event">Meeting</a></li>
                                                    <li><a href="#0" data-date="16/11/2014" class="selected">New Project</a></li>
                                                    <li><a href="#0" data-date="06/12/2014">Party</a></li>
                                                    <li><a href="#0" data-date="06/01/2015">Dinner</a></li>
                                                </ol>

                                                <span class="filling-line"></span>
                                            </div>
                                        </div>

                                        <ul class="cd-timeline-navigation">
                                            <li><a href="#0" class="prev inactive"><i class="fa fa-angle-left"></i></a></li>
                                            <li><a href="#0" class="next"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="events-content">
                                        <ol>
                                            <li data-date="10/11/2014">
                                                <div class="title">
                                                    <h2 class="h4">Meeting</h2>
                                                </div>

                                                <div class="subtitle">
                                                    <p>10 November 2014, 7:45 PM</p>
                                                </div>

                                                <div class="desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                                </div>
                                            </li>

                                            <li data-date="16/11/2014" class="selected">
                                                <div class="title">
                                                    <h2 class="h4">New Project Lauched</h2>
                                                </div>

                                                <div class="subtitle">
                                                    <p>16 November 2014, 7:45 PM</p>
                                                </div>

                                                <div class="desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                                </div>
                                            </li>
                                            
                                            <li data-date="06/12/2014">
                                                <div class="title">
                                                    <h2 class="h4">Party</h2>
                                                </div>

                                                <div class="subtitle">
                                                    <p>06 December 2014, 7:45 PM</p>
                                                </div>

                                                <div class="desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                                </div>
                                            </li>
                                            
                                            <li data-date="06/01/2015">
                                                <div class="title">
                                                    <h2 class="h4">Dinner</h2>
                                                </div>

                                                <div class="subtitle">
                                                    <p>06 January 2015, 7:45 PM</p>
                                                </div>

                                                <div class="desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Total Overdue</h3>

                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-chart">
                                <div class="chart--title text-blue">
                                    <h2 class="h2">$14,200,000</h2>
                                </div>

                                <!-- Morris Line Chart 03 Start -->
                                <div id="morrisLineChart03" class="chart--body line--chart style--3"></div>
                                <!-- Morris Line Chart 03 End -->

                                <div class="chart--action">
                                    <a href="#" class="btn-link">Export PDF <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
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
