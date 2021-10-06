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
                            
                            <!-- HOME -->
                            <li class="parent">
                                <a href="#" class=""><i class="fab fa-dashcube fa-fw"></i>
                                    <span class="none">Dashboard</span>
                                </a>
                            </li>

                            <!-- ADMINISTRACIÓN -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('administracion'); return false" class=""><i
                                class="fas fa-briefcase fa-fw"> </i>
                                    <span class="none">Administración<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="administracion">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-users-cog"></i>  Nueva categoría</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-truck"></i>  Nuevo proveedor</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-user"></i>  Nuevo usuario</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-child"></i>  Nuevo cliente</a></li>
                                </ul>
                            </li>

                            <!-- PRODUCTOS -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('productos'); return false" class=""><i
                                class="fas fa-boxes fa-fw"> </i>
                                    <span class="none">Productos<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="productos">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-box fa-fw"></i>  Nueva producto</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-boxes fa-fw"></i>  Productos en almacén</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-hand-holding-usd"></i>  Lo más vendido</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-tags"></i>  Productos por categoría</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-history fa-fw"></i>  Productos por vencimiento</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-business-time"></i>  Productos en stock mínimo</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-search fa-fw"></i>  Buscar productos</a></li>
                                    
                                </ul>
                            </li>

                            <!-- COMPRAS -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('compras'); return false" class=""><i
                                class="fas fa-shopping-basket fa-fw"> </i>
                                    <span class="none">Compras<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="compras">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-shopping-cart"></i>  Nueva compra</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-shopping-bag"></i>  Compras realizadas</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-search fa-fw"></i>  Buscar Compra</a></li>
                                </ul>
                            </li>

                            <!-- VENTAS -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ventas'); return false" class=""><i class="fas fa-hand-holding-usd"></i>
                                    <span class="none">Ventas<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ventas">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-cart-plus fa-fw"></i>  Nueva venta</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-parachute-box fa-fw"></i>  Venta por mayoreo</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-coins fa-fw"></i>  Ventas ralizadas</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fab fa-creative-commons-nc fa-fw"></i>  Ventas pendientes</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-search-dollar"></i>  Buscar venta (Fecha)</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-search-dollar"></i>  Buscar venta (Código)</a></li>
                                    
                                </ul>
                            </li>

                            <!-- DEVOLUCIONES -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('devoluciones'); return false" class=""><i class="fas fa-truck-loading fa-fw"></i>
                                    <span class="none">Devoluciones<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="devoluciones">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-people-carry fa-fw"></i>  Devoluciones realizadas</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-dolly-flatbed fa-fw"></i>  Buscar devoluciones</a></li>
                                </ul>
                            </li>

                            <!-- KARDEX -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('kardex'); return false" class=""><i class="far fa-file-alt"></i>
                                    <span class="none">Kardex<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="kardex">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-pallet fa-fw"></i>  Kardex general</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-search fa-fw"></i>  Buscar kardex</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-luggage-cart fa-fw"></i>  Kardex por producto</a></li>
                                </ul>
                            </li>


                            <!-- REPORTES -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('reportes'); return false" class=""><i class="far fa-file-pdf"></i>
                                    <span class="none">Reportes<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="reportes">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-hand-holding-usd fa-fw"></i>  Reportes de ventas</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-box-open fa-fw"></i>  Reportes de inventario</a></li>
                                </ul>
                            </li>

                            <!-- CONFIGURACIONES -->
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('configuraciones'); return false" class=""><i class="fas fa-cogs fa-fw"></i>
                                    <span class="none">Configuraciones<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="configuraciones">
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-store-alt fa-fw"></i>  Datos de la empresa</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fas fa-sync fa-fw"></i>  Actualizar cuenta</a></li>
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                @yield('contenido')
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