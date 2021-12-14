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
                        <li class="dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#">
                                <img style="width: 60%;" class="img-fluid"
                                     src="../public/img/logo2.svg">
                            </a>                            
                        </li>
                    </ul>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Funcionalidades -->
                        <li class="nav-item dropdown no-arrow mx-1 ">
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
                        <!-- Nav Item - Dúvidas Frequentes -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#duvidas" ><!--link do "Dúvidas Frequentes"-->
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small">Dúvidas Frequentes</span>
                            </a>
                        </li>

                        <!-- Nav Item - Iniciar Sessão -->
                        <li class="nav-item dropdown no-arrow mx-1  <?php //if(usuario==logado) { echo"invisible";} ?>">
                            <a class="nav-link dropdown-toggle" href="#" ><!--link do cadastro-->
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
                <div style="width: 90%" class="container-fluid text-gray-900">
                    <div class="card shadow mb-4">
                        <!--Começo Bem-Vindo -->
                        <div class="card-header py-3">
                            <h6 class="h3 mb=4 font-weight-bold text-success text-center">Bem-Vindo ao DNHR!</h6>
                        </div>
                        <div class="card-body text-lg">
                            <p> Bem-vindo ao nosso sistema de controle financeiro! Nosso site foi construído
                                com o objetivo de ajuda-lo a registrar e planejar suas finanças de maneira dinâmica e
                                sofisticada. Tudo para que você tenha uma experiência muito melhor na hora
                                de navegar pelo site da DNHR.</p>

                            <p class="mb-0"> A nossa ideia é  oferecer um site com um design criado
                                com <span class="text-success font-weight-bold"> design agradável,eficiente,
                                    moderno</span> e, possibilitando uma incrível experiência
                                para o <span class="text-success font-weight-bold">usuário.</span></p>
                        </div>
                    </div>
                    <!--Fim Bem-Vindo -->
                    <!--Começo Funcionalidades -->
                    <div id="funcionalidades" class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="h3 mb=4 font-weight-bold text-success text-center">Funcionalidades</h6>
                        </div>
                        <div class="card-body text-lg">
                            <p>*Breve tutorial sobre o site*</p>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <!--Fim Funcionalidades-->
                    <!--Começo Sobre Nós -->
                    <div id="sobre" class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="h3 mb=4 font-weight-bold text-success text-center">Sobre Nós</h6>
                        </div>
                        <div class="card-body text-lg">
                            <p>Antes da criação do site, a equipe da DNHR estaria alicerçada em uma visão. Em 2018,
                                nós ingressávamos no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo,
                                Câmpus São João da Boa Vista.<br>
                                Ao decorrer de 4 anos, nos dedicamos a estudar o mundo
                                da tecnologia e inovação, com o objetivo de nos tornarmos técnicos na área.<br>
                                Graças ao esforço e dedicação dos colegas e professores, dos quais somos eterna
                                mente gratos, chegamos na etapa final: a consolidação do aprendizado adquirido
                                materializado em um projeto.<br>
                                O objetivo é claro: disponibilizar um site utilirário de qualidade na área de
                                finanças, contribuindo, assim, para o desenvolvimento econômico do usuário ao mesmo
                                tempo que podemos colocar nosso aprendizado à prova</p>
                        </div>
                    </div>
                    <!--Fim Sobre Nós-->
                    <div class="h5 mb-0 font-weight-bold  text-center">
                        <a href="#"  class="btn btn-success mb-2">Cadastre-se</a> <!-- link do cadastro -->
                    </div>
                    <!--Começo Duvidas Frequentes -->
                    <div id="duvidas" class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="h3 mb=4 font-weight-bold text-success text-center">Dúvidas Frequentes</h6>
                        </div>
                        <div class="card-body text-lg">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#d1" class="d-block card-header py-3" data-toggle="collapse"
                                   role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-success text-center">O DNHR vende ou compartilha dados
                                        financeiros para terceiros?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse animated--grow-in" id="d1">
                                    <div class="card-body">
                                        Não. Nosso site é um projeto sem fins lucraticos. Nosso único objetivo que é levar
                                        organização financeira às pessoas.
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#d2" class="d-block card-header py-3" data-toggle="collapse"
                                   role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-success text-center">Posso confiar meus
                                        dados cadastrais ao DNHR?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse animated--grow-in" id="d2">
                                    <div class="card-body">
                                        Sim. Fazemos uso de tecnologia para criptografia de senhas, garantindo a
                                        segurança das informações do usuário
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#d3" class="d-block card-header py-3" data-toggle="collapse"
                                   role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-success text-center">O DNHR pede por meus dados
                                        bancários?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse animated--grow-in" id="d3">
                                    <div class="card-body">
                                        Não. Todos os dados cadastrados são feitos manualmente pelo usuário.
                                        Não requisitaremos dados como conta do banco, senha de cartão, extrato
                                        bancário, etc.
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#d4" class="d-block card-header py-3" data-toggle="collapse"
                                   role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-success text-center">Tenho uma dúvida não
                                        listada aqui, o que devo fazer?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse animated--grow-in" id="d4">
                                    <div class="card-body">
                                        Nos envie um email no nosso endereço oficial para esclarecimentos diversos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fim Duvidas Frequentes -->

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