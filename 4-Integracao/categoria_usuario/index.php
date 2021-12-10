<?php
if (isset($_SESSION)) {
    session_destroy();
}

session_start();
$mensagem = "";

require_once 'controle/UsuarioDAO.php';

$usuarioDAO = new UsuarioDAO();

if (isset($_POST['usuario']) AND isset($_POST['senha'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['senha'];

    if ($user != "" AND $pass != "") {

        $res = $usuarioDAO->fazerLogin($user, $pass);
        if ($res != null) {
            $_SESSION['nome'] = $res->uso_nome;
            $_SESSION['idUsuario'] = $res->uso_id;
            echo "<script>window.open('painel/index.php','_self');</script>";
        } else {
            $mensagem = "Usuário e/ou senha incorretos!";
        }
    } else {
        $mensagem = "Preencha os dois campos para continuar!";
    }
}

if (isset($_GET['acessoRestrito'])) {
    $mensagem = "Acesso restrito aos usuários o sistema!!!";
}
?>

<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Login do Sistema</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">

        <link href="main.css" rel="stylesheet"></head>
    <body>


        <div class="app-container app-theme-white body-tabs-shadow fixed-header">



            <div class="card w-25 align-self-center" style="margin-top: 10%;">
                <div class="card-body">
                    <h2 class="text-center">LOGIN DE SISTEMA</h2>
                    <form class="" action="index.php" method="POST">
                        <div class="form-row">                            
                            <div class="position-relative form-group">
                                <label for="usuario" class="">Login:</label>
                                <input name="usuario" id="usuario" placeholder="Escreva seu usuário" type="text" class="form-control">
                            </div>                                                     
                        </div>
                        <div class="form-row">
                            <div class="position-relative form-group">
                                <label for="senha" class="">Senha:</label>
                                <input name="senha" id="senha" placeholder="Escreva sua senha" type="password" class="form-control">
                            </div>
                        </div>
                            <button style="background-color:#7FFFD4;" class="mt-2 btn btn" type="submit">LOGIN</button>
                    </form>
                    <br />
                    <p class="text-danger text-center"><?php echo $mensagem ?></p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/scripts/main.js"></script>
    </body>
</html>

