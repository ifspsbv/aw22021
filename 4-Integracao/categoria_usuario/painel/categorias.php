<?php
include '../controle/CategoriaDAO.php';
$dao = new CategoriaDAO();
$dados = $dao->listarTodos();

session_start();
?>

<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categorias</title>

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

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-2"><img src="../public/img/logo2.svg" class="logotipo" alt="logotipo DNHR"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">
                    <i class="fas fa-wallet"></i>
                    <span>Cartegorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">
                    <i class="fas fa-wallet"></i>
                    <span>Usuários</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboards</span></a>
            </li>            

            <!-- Divider -->
            <hr class="sidebar-divider">

            
           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                     <ul class="navbar-nav">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="exibirUsuario.php?id=<?php echo $_SESSION['idUsuario']; ?>" >
                                <div><p>Usuário: <span> <?php echo $_SESSION['nome']; ?> </span></p>                            
                                </div>
                            </a>                            
                        </li>
                    </ul>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Question -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-question fa-fw"></i>
                                <!-- Counter - Question -->
                            </a>
                        </li>

                        <!-- Nav Item - Logout -->
                        <li class="nav-item dropdown no-arrow mx-1">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">    
                        <h2>Nova Categoria</h2>
                    </div>
                        <form action="cadastrarCategoria.php" method="POST">
                            <label for="nome" class="">Nome:</label>
                            <br />
                            <input name="nome" id="nome" class="form-control" placeholder="Escreva o nome da categoria" type="text">
                            <br />
                            <label for="descricao">Descrição:</label>
                            <br />
                            <textarea name="descricao" class="form-control" id="descricao" placeholder="Escreva a descricao"></textarea>
                            <br />
                            <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
                        </form>
                    </div>
        
        
        <?php if (count($dados) < 1) { ?>
            <h3>Não existem registros cadastrados</h3>
        <?php } else {  ?>
            <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h3>Categorias Cadastradas</h3>
                    </div>
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Nome</th>
                                <th>Comentário</th>
                                <th colspan="2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dados as $dado) { ?>
                            <tr>
                                <td><?php echo $dado['cat_id']; ?></td>
                                <td><?php echo $dado['cat_nome']; ?></td>
                                <td><?php echo $dado['cat_descricao']; ?></td>
                                <td>
                                    
                                    <a href='exibirCategoria.php?id=<?php echo $dado['cat_id']; ?>' type="">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <a href='excluirCategoria.php?id=<?php echo $dado['cat_id']; ?>'>
                                        Excluir
                                    </a>
                                </td> 
                                
                            </tr>
                            <?php } ?>    
                        </tbody>
                    </table> 
            </div>
        <?php } ?>  
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
                <div class="modal-body">Selecione "Logout" se deseja realmente sair.</div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-secondary" href="logout.php">Logout</a>
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
