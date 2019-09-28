<?php

session_start();
function __autoload($class_name)
{
    require_once 'classes/' . $class_name . '.php';
}

if(isset($_SESSION['user'])){
    header('location:login.html');
}

$userlogado = new User('localhost', 'root', '', 'libraslab');
$userlogado->getUserByEmail($_SESSION['user']);
$sessoes = new Sessao('localhost', 'root', '', 'libraslab');
$sessoes->getAllBySessao($_GET['sessao']);
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




                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">




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

                    <div class="col-xl-9 col-md-12 mb-12 " style="margin: auto">
                        <div style="padding: 0px;" class="card border-left-primary shadow h-100 ">
                            <div style="margin: 0px;" id="wrapper">
                                <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion"
                                    id="accordionSidebar">

                                    <!-- Sidebar - Brand -->
                                    <a class="sidebar-brand d-flex align-items-center justify-content-center"
                                       >
                                        <div class="sidebar-brand-text mx-3">Seção <?php echo $_GET['sessao']; ?></div>
                                    </a>

                                    <!-- Divider -->
                                    <hr class="sidebar-divider my-0">

                                    <!-- Nav Item - Dashboard -->
                                    <?php foreach ($sessoes->videos as $sessao): ?>
                                        <li class="nav-item">
                                            <div class="nav-link" id="<?php echo $sessao[0]; ?>"
                                                 onclick="setVideo(this)">
                                                <input type="text" id="nome<?php echo $sessao[0]; ?>" name="name" hidden
                                                       value="<?php echo $sessao[1]; ?>">
                                                <input type="text" name="id" hidden value="<?php echo $sessao[0]; ?>">
                                                <input type="text" id="url<?php echo $sessao[0]; ?>" name="url" hidden
                                                       value="<?php echo $sessao[2]; ?>">
                                                <span><?php echo $sessao[1]; ?></span></div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- Divider -->
                                    <hr class="sidebar-divider">




                                </ul>
                                <div id="content-wrapper" class="d-flex flex-column container">
                                    <div class="row">
                                        <h2 class="col-md-12 text-center" style="margin-top: 60px;margin-bottom: 60px;" id="titulo">

                                        </h2>
                                        <div class="col-md-12" >
                                            <video class="col-md-12"
                                                   controls
                                                   crossorigin
                                                   playsinline
                                                   name="player"
                                                   hidden
                                            >
                                                <!-- Video files -->

                                                <source

                                                        type="video/mp4"
                                                        size="1080"
                                                        name="source"
                                                />

                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

        <script>
            function setVideo(div) {
                var nome = document.getElementById("nome"+div.id).value;
                var url = document.getElementById("url"+div.id).value;
                var divnome = document.getElementById("titulo");
                var video = document.getElementsByTagName('video')[0];
                var sources = video.getElementsByTagName('source');
                sources[0].src = url;
                video.hidden = false;
                video.load();
                divnome.innerText = nome;
            }
        </script>

</body>

</html>

