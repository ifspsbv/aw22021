<?php
require_once "modelo/Carteira.php";
require_once 'controle/CarteiraDAO.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

$carteira = new Carteira();
$carteira->setId($id);
$carteira->setCodigo($codigo);
$carteira->setNome($nome);
$carteira->setDescricao($descricao);
$carteira->setData($data);

$dao = new CarteiraDAO();
$dao->editar($carteira);


header("location:carteiras.php");




?>