<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="assets/css/quicksand.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="assets/css/chartist.min.css">
    <!--Map-->
    <link rel="stylesheet" href="assets/css/jquery-jvectormap-2.0.2.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="assets/js/calendar/bootstrap_calendar.css">
    <!--Nice select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Sleek Admin</title>
</head>

<body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->

    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">

            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
                <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> Sleek<span
                                class="small">admin</span></a></h3>
                </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">

                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button"
                                class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">5</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                            <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-danger">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown"
                                aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg"
                                            width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg"
                                            width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg"
                                            width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                            </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/img/profile.jpg" alt="Adam" class="rounded-circle" width="40px"
                                    height="40px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-book pr-2"></i> Projects</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Jonathan Clarke</strong></p>
                        <span class="text-primary small"><strong>UI/UX Designer</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i
                                        class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Dashboard <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Default</a></li>
                                    <li class="child"><a href="index2.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Analytics</a></li>
                                    <li class="child"><a href="index3.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Ecommerce</a></li>
                                    <li class="child"><a href="index4.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                </ul>
                            </li>
                            </li>
                            <li class="parent">
                                <a href="widgets.html" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">Widget </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><i
                                        class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">UI Elements <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ul_element">
                                    <li class="child"><a href="accordion.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Accordions</a></li>
                                    <li class="child"><a href="buttons.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Buttons</a></li>
                                    <li class="child"><a href="badges.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Badges</a></li>
                                    <li class="child"><a href="breadcrumb.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Breadcrumbs</a></li>
                                    <li class="child"><a href="cards.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Cards</a></li>
                                    <li class="child"><a href="icons.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Icons</a></li>
                                    <li class="child"><a href="modal.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Modals</a></li>
                                    <li class="child"><a href="notification.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Notification</a></li>
                                    <li class="child"><a href="progressbar.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Progressbar</a></li>
                                    <li class="child"><a href="sweetalert.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Sweet alert</a></li>
                                    <li class="child"><a href="tabs.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Tabs</a></li>
                                    <li class="child"><a href="tooltip-popover.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Tooltip and Popovers</a></li>
                                    <li class="child"><a href="typography.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Typography</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('form_element'); return false" class=""><i
                                        class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Form Elements <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="form_element">
                                    <li class="child"><a href="form-general.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Basic Elements</a></li>
                                    <li class="child"><a href="form-advanced.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Advanced Elements</a></li>
                                    <li class="child"><a href="form-validation.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Validation</a></li>
                                    <li class="child"><a href="form-wizard.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Form Wizard</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('editors'); return false" class=""><i
                                        class="fa fa-pencil-square-o mr-3"></i>
                                    <span class="none">Text Editors <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="editors">
                                    <li class="child"><a href="ckeditor-classic.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Ckeditor classic</a></li>
                                    <li class="child"><a href="ckeditor-inline.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Ckeditor inline</a></li>
                                    <li class="child"><a href="ckeditor-document.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Ckeditor document</a></li>
                                    <li class="child"><a href="summernote.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Summernote editor</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables'); return false" class=""><i
                                        class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Tables <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="tables">
                                    <li class="child"><a href="basic-tables.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Basic Tables</a></li>
                                    <li class="child"><a href="datatable.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Datatables</a></li>
                                    <li class="child"><a href="jsgrid-table.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> JSGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('charts'); return false" class=""><i
                                        class="fa fa-pie-chart mr-3"></i>
                                    <span class="none">Charts <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="charts">
                                    <li class="child"><a href="chart.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Chart JS</a></li>
                                    <li class="child"><a href="chartist.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Chartist JS</a></li>
                                    <li class="child"><a href="echarts.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Echarts JS</a></li>
                                    <li class="child"><a href="flot.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Flot JS</a></li>
                                    <li class="child"><a href="morris.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Morris JS</a></li>
                                    <li class="child"><a href="nvd3.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> NVD3 JS</a></li>
                                    <li class="child"><a href="sparkline.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Sparkline JS</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="icons.html" class=""><i class="fa fa-toggle-on mr-3"></i>
                                    <span class="none">Icons</span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ecommerce'); return false" class=""><i
                                        class="fa fa-shopping-cart mr-3"></i>
                                    <span class="none">Ecommerce <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ecommerce">
                                    <li class="child"><a href="products.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> ProductList</a></li>
                                    <li class="child"><a href="product-detail.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> ProductDetail</a></li>
                                    <li class="child"><a href="orders.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> OrderList</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('maps'); return false" class=""><i
                                        class="fa fa-map mr-3"></i>
                                    <span class="none">Maps <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="maps">
                                    <li class="child"><a href="jvector-maps.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Jvector Maps</a></li>
                                    <li class="child"><a href="google-maps.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Google Maps</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('pages'); return false" class=""><i
                                        class="fa fa-file mr-3"></i>
                                    <span class="none">Pages <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="pages">
                                    <li class="child"><a href="email-inbox.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Email-Inbox</a></li>
                                    <li class="child"><a href="email.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Email-Compose</a></li>
                                    <li class="child"><a href="login.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Login</a></li>
                                    <li class="child"><a href="register.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Signup</a></li>
                                    <li class="child"><a href="lockscreen.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Lock Screen</a></li>
                                    <li class="child"><a href="forgot-password.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Forgot Password</a></li>
                                    <li class="child"><a href="profile.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Profile</a></li>
                                    <li class="child"><a href="gallery.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Gallery</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                    <li class="child"><a href="search-result.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Search</a></li>
                                    <li class="child"><a href="pricing.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Pricing</a></li>
                                    <li class="child"><a href="blank.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Blank Page</a></li>
                                    <li class="child"><a href="error-404.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Error 404</a></li>
                                    <li class="child"><a href="error-500.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Error 500</a></li>
                                    <li class="child"><a href="error-504.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Error 504</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="fullcalendar.html" class=""><i class="fa fa-calendar-o mr-3"> </i>
                                    <span class="none">Full Calendar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-3"><strong>Dashboard</strong></h5>

                <!--Dashboard widget-->
                <div class="mt-1 mb-3 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-theme">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>$300k</strong></h3>
                                        <p><small class="text-muted bc-description">Total Revenue</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-danger">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>3.1M</strong></h3>
                                        <p><small class="text-muted bc-description">Customers</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-theme border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-white">
                                        <i class="fa fa-tags text-theme"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>1022</strong></h3>
                                        <p><small class="bc-description text-white">Total Products</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->

                <div class="row mt-3">
                    <div class="col-sm-6">
                        <!--Jvector world map-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">World Market</h6>
                            <hr>

                            <div id="worldMarket" style="width: 100%; height: 350px"></div>

                        </div>
                        <!--/Jvector world map-->

                    </div>


                    <div class="col-sm-6">
                        <!--Revenue Graph-->
                        <div class="mt-1 mb-3 button-container bg-white border shadow-sm p-3">
                            <h6 class="mb-3">Revenue vs Cost Graph</h6>
                            <hr>

                            <div class="ct-chart" id="costRevenue" style="height: 350px;"></div>

                        </div>
                        <!--/Revenue Graph-->
                    </div>
                </div>

                <!--Chart Section-->
                <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                    <h6>Analytics overview</h6>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-4 ol-12">
                            <h1 class="text-success">1560</h1>
                            <h5>Customers</h5>
                        </div>
                        <div class="col-sm-4 ol-12 text-center">
                            <h1 class="text-theme">1300</h1>
                            <h5>Orders</h5>
                        </div>
                        <div class="col-sm-4 ol-12 text-right">
                            <h1 class="text-danger">$5545</h1>
                            <h5>Revenue</h5>
                        </div>
                    </div>

                    <canvas id="orderRevenue" class="orderRevenue pt-1" height="100px"></canvas>
                </div>
                <!--Chart Section-->

                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">

                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2">
                                <h6 class="mb-4 bc-header">Order listing</h6>
                            </div>
                            <div class="col-sm-4 text-right pb-3">
                                <button type="button" class="btn btn-danger icon-round shadow pull-right">
                                    <i class="fas fa-trash"></i>
                                </button>

                                <div class="pull-right mr-3 btn-order-bulk">
                                    <select class="shadow bg-secondary bulk-actions">
                                        <option data-display="<span class='text-white'><b>Bulk status</b></span>">Status
                                            options</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Cancelled</option>
                                        <option value="4">Delivered</option>
                                    </select>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="table-responsive product-list">

                            <table class="table table-bordered table-striped mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;" class="p-0 pr-4 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="orderAll">
                                                    <label for="orderAll"></label>
                                                </span>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Order date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#13</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order2">
                                                    <label for="order2"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#14</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order3">
                                                    <label for="order3"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#15</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order4">
                                                    <label for="order4"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#16</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order5">
                                                    <label for="order5"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#17</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order6">
                                                    <label for="order6"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#18</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order7">
                                                    <label for="order7"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#19</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                            </table>

                            <div class="text-right">
                                <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View full
                                    orders</button>
                            </div>
                        </div>
                    </div>
                    <!--/Order Listing-->

                    <!--Order Info Modal-->
                    <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="row">Item</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">Red Shoes</td>
                                                <td>2</td>
                                                <td>$400</td>
                                                <td>$800</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Blue shirt</td>
                                                <td>1</td>
                                                <td>$400</td>
                                                <td>$400</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Knickers</td>
                                                <td>3</td>
                                                <td>$300</td>
                                                <td>$900</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Info Modal-->

                    <!--Order Update Modal-->
                    <div class="modal fade" id="orderUpdate" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="row">Item</th>
                                                <th class="order-qty-head">Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">01</td>
                                                <td scope="row" class="align-middle">Red Shoes</td>
                                                <td class="text-center align-middle"><input type="text" value="2"
                                                        class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$800</td>
                                                <td style="width: 120px;" class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i
                                                            class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">02</td>
                                                <td class="align-middle" scope="row">Blue shirt</td>
                                                <td class="text-center align-middle"><input type="text" value="1"
                                                        class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i
                                                            class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">03</td>
                                                <td class="align-middle" scope="row">Knickers</td>
                                                <td class="text-center align-middle"><input type="text" value="3"
                                                        class="order-qty"></td>
                                                <td class="align-middle">$300</td>
                                                <td class="align-middle">$900</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i
                                                            class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Update Modal-->
                </div>

                <!--Footer-->
                <div class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
                        <span>&copy; All rights reserved 2019 designed by <a class="text-theme"
                                href="#">A-Fusion</a></span>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div>
                </div>
                <!--Footer-->

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <script src="assets/js/sweetalert.js"></script>
    <!--Progressbar JS-->
    <script src="assets/js/progressbar.min.js"></script>
    <!--Flot.JS-->
    <script src="assets/js/charts/jquery.flot.min.js"></script>
    <script src="assets/js/charts/jquery.flot.pie.min.js"></script>
    <script src="assets/js/charts/jquery.flot.categories.min.js"></script>
    <script src="assets/js/charts/jquery.flot.stack.min.js"></script>
    <!--Chart JS-->
    <script src="assets/js/charts/chart.min.js"></script>
    <!--Chartist JS-->
    <script src="assets/js/charts/chartist.min.js"></script>
    <script src="assets/js/charts/chartist-data.js"></script>
    <script src="assets/js/charts/demo.js"></script>
    <!--Maps-->
    <script src="assets/js/maps/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/maps/jvector-maps.js"></script>
    <!--Bootstrap Calendar JS-->
    <script src="assets/js/calendar/bootstrap_calendar.js"></script>
    <script src="assets/js/calendar/demo.js"></script>
    <!--Nice select-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>
    <!--Custom Js Script-->
    <script>
        //Nice select
        $('.bulk-actions').niceSelect();
    </script>
</body>

</html>