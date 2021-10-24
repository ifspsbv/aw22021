<?php
require_once "modelo/Carteira.php";
require_once "controle/CarteiraDAO.php";

$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

$carteira = new Carteira();
$carteira->setCodigo($codigo);
$carteira->setNome($nome);
$carteira->setDescricao($descricao);
$carteira->setData($data);

$dao = new CarteiraDAO();
$dao->cadastrar($carteira);


header("location:carteiras.php");




?>