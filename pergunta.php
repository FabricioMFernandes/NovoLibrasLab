<?php

session_start();
function __autoload($class_name)
{
    require_once 'classes/' . $class_name . '.php';
}

if (!isset($_SESSION['user'])) {
    header('location:login.html');
}

$userlogado = new User('localhost', 'root', '', 'libraslab');
$userlogado->getUserByEmail($_SESSION['user']);
$video = new Sessao('localhost', 'root', '', 'libraslab');
$video->getVideo2($_GET['sessao']);
$nomesVideos = $video->getVideos($_GET['sessao']);
//print_r($nomesVideos);

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
    <style>
        .flip-card {
            background-color: transparent;
            width: 600px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .vira {
            transform: rotateY(180deg);
        }

        .flip-card-front {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }


    </style>


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
                    <li class="nav-item  no-arrow">
                        <a class="nav-link " href="index.php" id="userDropdown" role="button">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> HOME </span>
                        </a>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['user']; ?> </span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="deslogar.php" data-toggle="modal" data-target="#logoutModal">
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

                                <div id="content-wrapper" class="d-flex flex-column container">

                                    <div class="row">
                                        <h2 class="col-md-12 text-center" style="margin-top: 60px;margin-bottom: 60px;"
                                            id="titulo">
                                            Escolha a resposta correta para o video abaixo
                                        </h2>
                                        <div class="col-md-12">
                                            <div class="flip-card" style="margin:auto">
                                                <div class="flip-card-inner">
                                                    <div class="flip-card-front" style="padding: 0px;">
                                                        <video class="col-md-12"
                                                               controls
                                                               crossorigin
                                                               playsinline
                                                               autoplay
                                                               name="player"
                                                               style="width:600px;height:300px;padding: 0px"
                                                        >
                                                            <!-- Video files -->

                                                            <source
                                                                    src="<?php echo $video->caminho; ?>"
                                                                    type="video/mp4"
                                                                    size="1080"
                                                                    name="source"
                                                            />

                                                        </video>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <input id="resposta" hidden value="<?php echo $video->nomeVideo; ?>">

                                        <a onclick="verifica(this)" class="btn btn-facebook col-md-12  text-center"
                                           style="color:white;margin-top: 50px;margin-bottom: 10px;"
                                           id="<?php echo $nomesVideos[0][0]; ?>">
                                            <?php echo $nomesVideos[0][0]; ?>
                                        </a>
                                        <a onclick="verifica(this)" class="btn btn-google col-md-12  text-center"
                                           style="color:white;margin-top: 10px;margin-bottom: 10px;"
                                           id="<?php echo $nomesVideos[1][0]; ?>">
                                            <?php echo $nomesVideos[1][0]; ?>
                                        </a>
                                        <a onclick="verifica(this)" class="btn btn-dark col-md-12  text-center"
                                           style="color:white;margin-top: 10px;margin-bottom: 10px;"
                                           id="<?php echo $nomesVideos[2][0]; ?>">
                                            <?php echo $nomesVideos[2][0]; ?>
                                        </a>
                                        <a onclick="verifica(this)" class="btn btn-success col-md-12  text-center"
                                           style="color:white;margin-top: 10px;margin-bottom: 10px;"
                                           id="<?php echo $nomesVideos[3][0]; ?>">
                                            <?php echo $nomesVideos[3][0]; ?>
                                        </a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Realmente deseja sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Ao clicar em SAIR, sua sessão será fechada</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="scripts/deslogar.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Modal-->
        <div class="modal fade" id="certo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">RESPOSTA CERTA</h5>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="scripts/perguntas.php?sessao=<?php echo $_GET['sessao'] ?>">Continuar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Modal-->
        <div class="modal fade" id="errado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">RESPOSTA ERRADA</h5>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="scripts/perguntas.php?sessao=<?php echo $_GET['sessao'] ?>">Continuar</a>
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


        <script>
            function verifica(escolha) {
                    var resposta = document.getElementById("resposta").value;
                    if(escolha.id == resposta){
                        $('#certo').modal('show');
                    }else{
                        $('#errado').modal('show');
                    }
            }

        </script>

</body>

</html>

