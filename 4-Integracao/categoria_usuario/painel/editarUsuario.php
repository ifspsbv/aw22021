<?php
//require_once "modelo/Usuario.php";
//require_once 'controle/UsuarioDAO.php';
include '../controle/UsuarioDAO.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$datanasc = $_POST['datanasc'];

$usuario = new Usuario();
$usuario->setId($id);
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setDatanasc($datanasc);


$dao = new UsuarioDAO();
$dao->editar($usuario);


header("location:usuarios.php");




?>
