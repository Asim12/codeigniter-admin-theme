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
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul>
                                    <li><a href="ecommerce.html">Dashboard</a></li>
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
                            <li class="active open">
                                <a href="#">
                                    <i class="far fa-newspaper"></i>
                                    <span>UI Elements</span>
                                </a>

                                <ul>
                                    <li class="active"><a href="buttons.html">Buttons</a></li>
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
                            <h2 class="page--title h5">Buttons</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>UI Elements</span></li>
                                <li class="breadcrumb-item active"><span>Buttons</span></li>
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
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default Buttons</h3>
                            </div>

                            <div class="panel-content">
                                <p>Rounded, Radius and Disabled Buttons</p>

                                <div class="row mb-2">
                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-default">Default</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-primary">Primary</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-info">Info</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-danger">Danger</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-success">Success</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-warning">Warning</button>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col mb-3">
                                        <button class="btn btn-default">Default</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-primary">Primary</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-info">Info</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-danger">Danger</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-success">Success</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-warning">Warning</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <button class="btn btn-default" disabled>Default</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-primary" disabled>Primary</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-info" disabled>Info</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-danger" disabled>Danger</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-success" disabled>Success</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-warning" disabled>Warning</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Outline Buttons</h3>
                            </div>

                            <div class="panel-content">
                                <p>Rounded and Radius Outline Buttons</p>

                                <div class="row mb-2">
                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-outline-secondary">Default</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-outline-primary">Primary</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-outline-info">Info</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-outline-danger">Danger</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-outline-success">Success</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-rounded btn-outline-warning">Warning</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <button class="btn btn-outline-secondary">Default</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-outline-primary">Primary</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-outline-info">Info</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-outline-danger">Danger</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-outline-success">Success</button>
                                    </div>

                                    <div class="col mb-3">
                                        <button class="btn btn-outline-warning">Warning</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Button Sizes</h3>
                            </div>

                            <div class="panel-content">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-outline-secondary btn-lg mb-3">Large Button</a>
                                    <a href="#" class="btn btn-outline-secondary mb-3">Default Button</a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm mb-3">Small Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Button With Icons</h3>
                            </div>

                            <div class="panel-content">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-rounded btn-outline-secondary mb-3"><i class="fa fa-home"></i></a>

                                    <a href="#" class="btn btn-rounded btn-outline-secondary mb-3"><i class="fa fa-thumbs-up"></i> 69</a>

                                    <a href="#" class="btn btn-rounded btn-primary mb-3"><i class="fa mr-2 fa-cloud"></i> Cloud</a>

                                    <a href="#" class="btn btn-rounded btn-info mb-3"><i class="fa mr-2 fa-sync"></i> Refresh</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Button Dropdown &amp; Dropups</h3>
                            </div>

                            <div class="panel-content">
                                <div class="btn-group-list">
                                    <div class="btn-group mb-3">
                                        <button class="btn btn-rounded btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>

                                        <div class="dropdown-menu" data-x-placement="bottom-start">
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                        </div>
                                    </div>

                                    <div class="btn-group dropup mb-3">
                                        <button class="btn btn-rounded btn-info dropdown-toggle" data-toggle="dropdown">Dropup</button>

                                        <div class="dropdown-menu" data-x-placement="bottom-start">
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Split Button Dropdown and Dropups</h3>
                            </div>

                            <div class="panel-content">
                                <div class="btn-group-list">
                                    <div class="btn-group mb-3">
                                        <button class="btn btn-rounded btn-primary">Dropdown</button>
                                        <button class="btn btn-rounded btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>

                                        <div class="dropdown-menu" data-x-placement="bottom-start">
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                        </div>
                                    </div>

                                    <div class="btn-group dropup mb-3">
                                        <button class="btn btn-rounded btn-info">Dropup</button>
                                        <button class="btn btn-rounded btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>

                                        <div class="dropdown-menu" data-x-placement="bottom-start">
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                            <a href="#" class="dropdown-item">Menu Item</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Block Level Buttons</h3>
                            </div>

                            <div class="panel-content">
                                <button class="btn btn-block btn-info">Block Level Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Justified Button Groups</h3>
                            </div>

                            <div class="panel-content">
                                <div class="btn-group d-block d-sm-flex">
                                    <button class="btn btn-rounded btn-info w-100">Left</button>
                                    <button class="btn btn-rounded btn-success w-100">Middle</button>
                                    <button class="btn btn-rounded btn-primary w-100">Right</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Group Buttons</h3>
                            </div>

                            <div class="panel-content">
                                <div class="block">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-rounded btn-outline-secondary">Left</a>
                                        <a href="#" class="btn btn-rounded btn-outline-secondary">Middle</a>
                                        <a href="#" class="btn btn-rounded btn-outline-secondary">Right</a>
                                    </div>
                                </div>

                                <div class="block mt-3 pt-1">
                                    <div class="btn-group btn-group-vertical">
                                        <a href="#" class="btn btn-rounded btn-outline-secondary">Top</a>
                                        <a href="#" class="btn btn-rounded btn-outline-secondary">Middle</a>
                                        <a href="#" class="btn btn-rounded btn-outline-secondary">Bottom</a>
                                    </div>
                                </div>

                                <p class="mt-3 mb-2">Button Toolbar</p>

                                <div class="btn-toolbar">
                                    <div class="btn-group mr-2 mb-2">
                                        <a href="#" class="btn btn-rounded btn-info btn-sm">1</a>
                                        <a href="#" class="btn btn-rounded btn-info btn-sm">2</a>
                                        <a href="#" class="btn btn-rounded btn-info btn-sm">3</a>
                                        <a href="#" class="btn btn-rounded btn-info btn-sm">4</a>
                                    </div>

                                    <div class="btn-group mr-2 mb-2">
                                        <a href="#" class="btn btn-rounded btn-danger btn-sm">1</a>
                                        <a href="#" class="btn btn-rounded btn-danger btn-sm">2</a>
                                        <a href="#" class="btn btn-rounded btn-danger btn-sm">3</a>
                                        <a href="#" class="btn btn-rounded btn-danger btn-sm">4</a>
                                    </div>

                                    <div class="btn-group mb-2">
                                        <a href="#" class="btn btn-rounded btn-warning btn-sm">1</a>
                                    </div>
                                </div>

                                <p class="mt-3 mb-2">Checkbox Button Group</p>

                                <div class="btn-group btn-group-toggle d-block d-sm-flex" data-toggle="buttons">
                                    <label class="btn btn-rounded btn-info btn-sm active">
                                        <input type="checkbox" checked> Checkbox 1
                                    </label>

                                    <label class="btn btn-rounded btn-info btn-sm active">
                                        <input type="checkbox" checked> Checkbox 2
                                    </label>

                                    <label class="btn btn-rounded btn-info btn-sm">
                                        <input type="checkbox"> Checkbox 3
                                    </label>
                                </div>

                                <p class="mt-2 mb-2">Radio Button Group</p>

                                <div class="btn-group btn-group-toggle d-block d-sm-flex" data-toggle="buttons">
                                    <label class="btn btn-rounded btn-outline-info btn-sm">
                                        <input type="radio" name="options"> Checkbox 1
                                    </label>

                                    <label class="btn btn-rounded btn-outline-info btn-sm active">
                                        <input type="radio" name="options" checked> Checkbox 2
                                    </label>

                                    <label class="btn btn-rounded btn-outline-info btn-sm">
                                        <input type="radio" name="options"> Checkbox 3
                                    </label>
                                </div>

                                <p class="mt-2 mb-2">Nested Button Groups</p>

                                <div class="btn-group flex-wrap">
                                    <button class="btn btn-rounded btn-outline-secondary btn-sm">1</button>
                                    <button class="btn btn-rounded btn-outline-secondary btn-sm">2</button>
                                    <button class="btn btn-rounded btn-outline-secondary btn-sm">3</button>
                                    <button class="btn btn-rounded btn-outline-secondary btn-sm">4</button>

                                    <div class="btn-group">
                                        <button class="btn btn-rounded btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                        
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Dropdown Link</a>
                                            <a href="#" class="dropdown-item">Dropdown Link</a>
                                        </div>
                                    </div>
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
