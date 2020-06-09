
<?php
session_start();

if (isset($_SESSION['usu'])) {

 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Sistema - Thakhi Pedidos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="Assets/images/favicon-thakhi.png">

        <!-- App css -->
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.php" class="logo">
                            <span>
                                <img src="Assets/images/logo-thakhi-sm.png" alt="logo-small" class="logo-sm">
                            </span>
                            <span>
                                <img src="Assets/images/logo-letra.png" alt="logo-large" class="logo-lg">
                            </span>
                        </a>
                    </div>
                    <!--end logo-->
                    <!-- Navbar -->
                    <nav class="navbar-custom">
                        <ul class="list-unstyled topbar-nav float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                        Notificaciones (18)
                                    </h6>
                                    <div class="slimscroll notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details">La orden Nº 0023 fue entregado con éxito.<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details">Nuevo mensaje recibido<small class="text-muted">You have 87 unread messages</small></p>
                                        </a>
                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                        Ver todo <i class="fi-arrow-right"></i>
                                    </a>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="Assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" />
                                    <span class="ml-1 nav-user-name hidden-sm"><?php echo $_SESSION['usu']; ?>  <i class="mdi mdi-chevron-down"></i> </span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Perfil</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Configuraciones</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Bloquear pantalla</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="Models/ModelUsuarios/CerrarSesion.php"><i class="dripicons-exit text-muted mr-2"></i> Cerrar sesión</a>
                                </div>
                            </li>
                        </ul><!--end topbar-nav-->

                        <ul class="list-unstyled topbar-nav mb-0">
                            <li>
                                <button class="button-menu-mobile nav-link waves-effect waves-light">
                                    <i class="dripicons-menu nav-icon"></i>
                                </button>
                            </li>                            
                        </ul>
                    </nav>
                    <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
              <div class="main-icon-menu">
                  <nav class="nav">
                    <!--Inicia Menu Dashboard -->
                      <a href="#Dashboard" class="nav-link active" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Dashboard">
                          <svg class="nav-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                  <path d="M184,448h48c4.4,0,8-3.6,8-8V72c0-4.4-3.6-8-8-8h-48c-4.4,0-8,3.6-8,8v368C176,444.4,179.6,448,184,448z"/>
                                  <path class="svg-primary" d="M88,448H136c4.4,0,8-3.6,8-8V296c0-4.4-3.6-8-8-8H88c-4.4,0-8,3.6-8,8V440C80,444.4,83.6,448,88,448z"/>
                                  <path class="svg-primary" d="M280.1,448h47.8c4.5,0,8.1-3.6,8.1-8.1V232.1c0-4.5-3.6-8.1-8.1-8.1h-47.8c-4.5,0-8.1,3.6-8.1,8.1v207.8
                                      C272,444.4,275.6,448,280.1,448z"/>
                                  <path d="M368,136.1v303.8c0,4.5,3.6,8.1,8.1,8.1h47.8c4.5,0,8.1-3.6,8.1-8.1V136.1c0-4.5-3.6-8.1-8.1-8.1h-47.8
                                      C371.6,128,368,131.6,368,136.1z"/>
                              </g>
                          </svg>
                      </a><!--Termina Menu Dashboard -->
                      <a href="#Ordenes" class="nav-link" d activeata-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Entregas">
                          <svg class="nav-svg" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
                                  <ellipse class="svg-primary" transform="matrix(0.9998 -1.842767e-02 1.842767e-02 0.9998 -7.7858 3.0205)" cx="160" cy="424" rx="24" ry="24"/>
                                  <ellipse class="svg-primary" transform="matrix(2.381651e-02 -0.9997 0.9997 2.381651e-02 -48.5107 798.282)" cx="384.5" cy="424" rx="24" ry="24"/>
                                  <path d="M463.8,132.2c-0.7-2.4-2.8-4-5.2-4.2L132.9,96.5c-2.8-0.3-6.2-2.1-7.5-4.7c-3.8-7.1-6.2-11.1-12.2-18.6
                                      c-7.7-9.4-22.2-9.1-48.8-9.3c-9-0.1-16.3,5.2-16.3,14.1c0,8.7,6.9,14.1,15.6,14.1c8.7,0,21.3,0.5,26,1.9c4.7,1.4,8.5,9.1,9.9,15.8
                                      c0,0.1,0,0.2,0.1,0.3c0.2,1.2,2,10.2,2,10.3l40,211.6c2.4,14.5,7.3,26.5,14.5,35.7c8.4,10.8,19.5,16.2,32.9,16.2h236.6
                                      c7.6,0,14.1-5.8,14.4-13.4c0.4-8-6-14.6-14-14.6H189h-0.1c-2,0-4.9,0-8.3-2.8c-3.5-3-8.3-9.9-11.5-26l-4.3-23.7
                                      c0-0.3,0.1-0.5,0.4-0.6l277.7-47c2.6-0.4,4.6-2.5,4.9-5.2l16-115.8C464,134,464,133.1,463.8,132.2z"/>
                              </g>
                          </svg>
                      </a> <!--Termina Menu Ordenes -->
                      <!--Inicia Menu Mantenimiento -->
                      <a href="#Mantenimiento" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Mantenimiento">
                          <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="svg-primary" d="M256 32C132.288 32 32 132.288 32 256s100.288 224 224 224 224-100.288 224-224S379.712 32 256 32zm135.765 359.765C355.5 428.028 307.285 448 256 448s-99.5-19.972-135.765-56.235C83.972 355.5 64 307.285 64 256s19.972-99.5 56.235-135.765C156.5 83.972 204.715 64 256 64s99.5 19.972 135.765 56.235C428.028 156.5 448 204.715 448 256s-19.972 99.5-56.235 135.765z"/>
                              <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"/>
                          </svg>
                      </a><!--Termina Menu Mantenimiento -->
                  </nav><!--end nav-->
              <!--php include("Plantilla/Nav.php");-->
                  <!--end nav-->
              </div><!--end main-icon-menu-->

              <div class="main-menu-inner">

                  <div class="menu-body slimscroll">
                    <!--Inicia SubMenu Dashboard -->
                      <div id="Dashboard" class="main-icon-menu-pane active">
                          <div class="title-box">
                              <h6 class="menu-title">Dashboard</h6>
                          </div>
                          <ul class="nav">
                              <li class="nav-item"><a class="nav-link" href="index.php"><i class="dripicons-meter"></i>Dashboard</a></li>
                              <li class="nav-item"><a class="nav-link" href="index.php"><i class="dripicons-document"></i>Reportes</a></li>
                          </ul>
                      </div><!--Termina SubMenu Dashboard -->
                      <!--Inicia SubMenu Entregas -->
                      <div id="Ordenes" class="main-icon-menu-pane">
                          <div class="title-box">
                              <h6 class="menu-title">Entregas</h6>
                          </div>
                          <ul class="nav">
                              <li class="nav-item"><a class="nav-link" href="Views/admClsMonitorear/admFrmListar.php"><i class="mdi mdi-google-maps"></i>Monitorear</a></li>
                              <li class="nav-item"><a class="nav-link" href="Views/admClsEntrega/admFrmListar.php"><i class="mdi mdi-package-variant"></i>Entregas</a></li>
                              <li class="nav-item"><a class="nav-link" href="Views/admClsCalificar/admFrmListar.php"><i class="mdi mdi-star-half"></i>Calificar Conductor</a></li>
                          </ul>
                      </div><!--Termina SubMenu Entregas -->
                      <!--Inicia SubMenu Mantenimiento -->
                      <div id="Mantenimiento" class="main-icon-menu-pane">
                          <div class="title-box">
                              <h6 class="menu-title">Mantenimiento</h6>
                          </div>
                          <ul class="nav in mm-show">
                            <li class="nav-item"><a class="nav-link" href="Views/admClsVehiculo/admFrmListar.php"><i class="mdi mdi-car-multiple"></i>Vehículos</a></li>
                            <li class="nav-item"><a class="nav-link" href="Views/admClsConductor/admFrmListar.php"><i class="mdi mdi-google-street-view"></i>Conductores</a></li>
                            <li class="nav-item"><a class="nav-link" href="Views/admClsVehiculoConductor/admFrmListar.php"><i class="mdi mdi-train-car"></i>Vehículo - Conductor</a></li>
                            <li class="nav-item"><a class="nav-link" href="Views/admClsCliente/admFrmListar.php"><i class="mdi mdi-account-multiple"></i>Clientes</a></li>
                            <li class="nav-item"><a class="nav-link" href="Views/admClsUsuario/admFrmListar.php"><i class="dripicons-user-group"></i>Usuarios</a></li>
                          </ul>
                      </div><!--Inicia SubMenu Mantenimiento -->
                  </div><!--end menu-body-->
              </div><!-- end main-menu-inner-->
            </div>
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Thakhi</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Mantenimiento</a></li>
                                        <li class="breadcrumb-item active">Clientes</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Clientes</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0">Audience Overview</h4>
                                                        <div class="">
                                                            <div id="ana_dash_1" class="apex-charts"></div>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <h4 class="header-title mt-0 mb-3">Live Visits Our New Site</h4>
                                                                <div id="circlechart" class="apex-charts"></div>
                                                            </div><!--end col-->
                                                            <div class="col-lg-6">
                                                                <h4 class="header-title mt-0 mb-3">Traffic Sources</h4>
                                                                <div class="traffic-card">
                                                                    <h3>80</h3>
                                                                    <h5>Right Now</h5>
                                                                </div>
                                                                <div class="progress mb-4">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">17%</div>
                                                                </div>
                                                                <ul class="list-unstyled url-list mb-0">
                                                                    <li>
                                                                        <i class="mdi mdi-circle-medium text-primary"></i>
                                                                        <span>Organic</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="mdi mdi-circle-medium text-secondary"></i>
                                                                        <span>Direct</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="mdi mdi-circle-medium text-warning"></i>
                                                                        <span>Campaign</span>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body mb-0">
                                                        <div class="row">
                                                            <div class="col-8 align-self-center">
                                                                <div class="impressions-data">
                                                                    <h4 class="mt-0 header-title">Impressions</h4>
                                                                    <h2 class="mt-0">140k <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>21%</span></h2>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                    <div class="card-body overflow-hidden p-0">
                                                        <div class="d-flex mb-0 h-100">
                                                            <div class="w-100">
                                                                <div class="apexchart-wrapper">
                                                                    <div id="dash_spark_1" class="chart-gutters"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end card-body-->
                                                  </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0">Sessions Device</h4>
                                                        <div id="ana_device" class="apex-charts"></div>
                                                        <div class="table-responsive mt-4">
                                                            <table class="table mb-0">
                                                                <thead class="thead-light">
                                                                <tr>
                                                                    <th>Device</th>
                                                                    <th>Sassions</th>
                                                                    <th>Day</th>
                                                                    <th>Week</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Dasktops</th>
                                                                    <td>1843</td>
                                                                    <td>-3</td>
                                                                    <td>-12</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tablets</th>
                                                                    <td>2543</td>
                                                                    <td>-5</td>
                                                                    <td>-2</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mobiles</th>
                                                                    <td>3654</td>
                                                                    <td>-5</td>
                                                                    <td>-6</td>
                                                                </tr>

                                                                </tbody>
                                                            </table><!--end /table-->
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <div class="card report-card">
                                                    <div class="card-body">
                                                        <div class="float-right">
                                                            <i class="dripicons-user-group report-main-icon"></i>
                                                        </div>
                                                        <span class="badge badge-danger">Sessions</span>
                                                        <h3 class="my-3">24k</h3>
                                                        <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>New Sessions Today</p>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!--end col-->
                                            <div class="col-md-3">
                                                <div class="card report-card">
                                                    <div class="card-body">
                                                        <div class="float-right">
                                                            <i class="dripicons-clock report-main-icon"></i>
                                                        </div>
                                                        <span class="badge badge-secondary">Avg.Sessions</span>
                                                        <h3 class="my-3">00:18</h3>
                                                        <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i class="mdi mdi-trending-down"></i>1.5%</span> Weekly Avg.Sessions</p>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!--end col-->
                                            <div class="col-md-3">
                                                <div class="card report-card">
                                                    <div class="card-body">
                                                        <div class="float-right">
                                                            <i class="dripicons-meter report-main-icon"></i>
                                                        </div>
                                                        <span class="badge badge-warning">Bounce Rate</span>
                                                        <h3 class="my-3">$2400</h3>
                                                        <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!--end col-->
                                            <div class="col-md-3">
                                                <div class="card report-card">
                                                    <div class="card-body">
                                                        <div class="float-right">
                                                            <i class="dripicons-wallet report-main-icon"></i>
                                                        </div>
                                                        <span class="badge badge-success">Goal Completions</span>
                                                        <h3 class="my-3">85000</h3>
                                                        <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!--end col-->
                                        </div><!--end row-->





                </div><!-- container -->

                <?php include "Views/Template/footer.php" ;?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="Assets/js/jquery.min.js"></script>
        <script src="Assets/js/bootstrap.bundle.min.js"></script>
        <script src="Assets/js/metisMenu.min.js"></script>
        <script src="Assets/js/waves.min.js"></script>
        <script src="Assets/js/jquery.slimscroll.min.js"></script>

        <!-- google maps api -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <!-- Gmaps file -->
        <script src="Assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="Assets/pages/jquery.gmaps.init.js"></script>

        <script src="Assets/plugins/apexcharts/apexcharts.min.js"></script>
                <script src="Assets/pages/jquery.analytics_dashboard.init.js"></script>

        <!-- App js -->
        <script src="Assets/js/app.js"></script>

    </body>
</html>


<script type="text/javascript">


</script>

<?php
	}else
	{
	header("location:login.php");
	}
 ?>
