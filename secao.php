<?php

session_start();
function __autoload($class_name)
{
    require_once 'classes/' . $class_name . '.php';
}

$userlogado = new User('localhost', 'root', '', 'libraslab');
$userlogado->getUserByEmail($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>LibrasLab</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/demo.css">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input name="pesquisa" type="text" class="form-control bg-light border-0 small"
                               placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input name="pesquisa" type="text" class="form-control bg-light border-0 small"
                                           placeholder="Pesquisar..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $userlogado->nome; ?> </span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configurações
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-xl-9 col-md-12 mb-12" style="margin: auto">
                        <div style="padding-top: 0px;" class="card border-left-primary shadow h-100 ">
                            <div >
                                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                                    id="accordionSidebar">

                                    <!-- Sidebar - Brand -->
                                    <a class="sidebar-brand d-flex align-items-center justify-content-center"
                                       href="index.html">
                                        <div class="sidebar-brand-text mx-3">Nivel 1</div>
                                    </a>

                                    <!-- Divider -->
                                    <hr class="sidebar-divider my-0">

                                    <!-- Nav Item - Dashboard -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="fas fa-fw fa-tachometer-alt"></i>
                                            <span>Dashboard</span></a>
                                    </li>

                                    <!-- Divider -->
                                    <hr class="sidebar-divider">





                                    <!-- Sidebar Toggler (Sidebar) -->
                                    <div class="text-center d-none d-md-inline">
                                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                    </div>

                                </ul>
                            </div>
                            <div id="container">
                                <div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--paused plyr--stopped plyr--fullscreen-enabled plyr--captions-active plyr--captions-enabled plyr__poster-enabled"><div class="plyr__controls"><button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play, View From A Blue Moon"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__tooltip">Pause</span><span class="label--not-pressed plyr__tooltip">Play</span></button><div class="plyr__controls__item plyr__progress__container"><div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="183.125333" aria-valuenow="0" id="plyr-seek-5458" style="--value:0%;" aria-valuetext="00:00 of 03:03" seek-value="21.84189659889218"><progress class="plyr__progress__buffer" min="0" max="100" value="25.9669152383193" role="progressbar" aria-hidden="true">% buffered</progress><span class="plyr__tooltip" style="left: 19.1505%;" hidden="">00:35</span><div class="plyr__preview-thumb" style="left: 0.5px;"><div class="plyr__preview-thumb__image-container" style="height: 115px; width: 204px;"><img src="https://cdn.plyr.io/static/demo/thumbs/100p-00001.jpg" data-index="39" data-filename="100p-00001.jpg" style="height: 804px; width: 1432px; left: -818.8px; top: -575px;"></div><div class="plyr__preview-thumb__time-container"><span>00:39</span></div></div></div></div><div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">-03:03</div><div class="plyr__controls__item plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-muted"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-volume"></use></svg><span class="label--pressed plyr__tooltip">Unmute</span><span class="label--not-pressed plyr__tooltip">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-5458" style="--value:100%;" aria-valuetext="100.0%"></div><button class="plyr__controls__item plyr__control plyr__control--pressed" type="button" data-plyr="captions"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__tooltip">Disable captions</span><span class="label--not-pressed plyr__tooltip">Enable captions</span></button><div class="plyr__controls__item plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-5458" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg role="presentation" focusable="false"><use xlink:href="#plyr-settings"></use></svg><span class="plyr__tooltip">Settings</span></button><div class="plyr__menu__container" id="plyr-settings-5458" hidden=""><div><div id="plyr-settings-5458-home"><div role="menu"><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Captions<span class="plyr__menu__value">English</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Quality<span class="plyr__menu__value">576p</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span></button></div></div><div id="plyr-settings-5458-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="-1"><span>Disabled</span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="0"><span>English<span class="plyr__menu__value"><span class="plyr__badge">EN</span></span></span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1"><span>Français<span class="plyr__menu__value"><span class="plyr__badge">FR</span></span></span></button></div></div><div id="plyr-settings-5458-quality" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1080"><span>1080p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="720"><span>720p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="576"><span>576p<span class="plyr__menu__value"><span class="plyr__badge">SD</span></span></span></button></div></div><div id="plyr-settings-5458-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__tooltip">Exit fullscreen</span><span class="label--not-pressed plyr__tooltip">Enter fullscreen</span></button></div><div class="plyr__video-wrapper"><video crossorigin="" playsinline="" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4">
                                            <!-- Video files -->
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

                                            <!-- Caption files -->
                                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default="">
                                            <tprack kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

                                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> MIT License| Fabrício 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.plyr.io/3.5.6/demo.js" crossorigin="anonymous"></script>

</body>

</html>

