<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DNHR</title>

    <!-- Custom fonts for this template-->
    <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../public/css/sb-admin-2.css" rel="stylesheet">

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



                    <ul class="navbar-nav">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#">
                                <img class="img-profile rounded-circle"
                                     src="../public/img/logo2.svg">
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small">DNHR</span>
                            </a>                            
                        </li>
                    </ul>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Funcionalidades -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#funcionalidades">
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small">Funcionalidades</span>
                            </a>
                        </li>

                        <!-- Nav Item - Sobre Nós -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#sobre"><!--link do "sobre nós"-->
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small">Sobre Nós</span>
                            </a>
                        </li>

                        <!-- Nav Item - Iniciar Sessão -->
                        <li class="nav-item dropdown no-arrow mx-1  <?php //if(usuario==logado) { echo"invisible";} ?>">
                            <a class="nav-link dropdown-toggle" href="#"><!--link do cadastro-->
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small">Iniciar Sessão</span>
                            </a>
                        </li>
                        <!-- Nav Item - Logout-->
                        <li class="nav-item dropdown no-arrow mx-1  <?php //if(usuario=!logado) { echo"invisible";}?>">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-fw"></i>
                                <!-- Counter - Logout -->
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1 class="h3 mb-4 text-gray-800 text-center">Bem Vindo Ao DNHR!</h1>
                    <p>*texto de boas vindas*</p>
                    <h1 id="funcionalidades" class="h3 mb-4 text-gray-800 text-center">Funcionalidades</h1>
                    <p>*Breve tutorial sobre o site*</p>
                    <h1 id="sobre" class="h3 mb-4 text-gray-800 text-center">Sobre Nós</h1>
                    <p>*texto sobre nós*</p>
                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">
                        <a href="#"  class="btn btn-success mb-2">Cadastre-se</a> <!-- link do cadastro -->
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; DNHR</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" se deseja realmente sair.</div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-secondary" href="login.html">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../public/js/sb-admin-2.js"></script>

</body>

</html>