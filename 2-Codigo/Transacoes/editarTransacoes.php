<?php
require_once "modelo/Transacoes.php";
require_once 'controle/TransacoesDAO.php';


$id        = $_POST['id'];
$nome      = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor     = $_POST['valor'];
$cod       = $_POST['cod'];

$transacoes = new Transacoes();
$transacoes->setTrsId($id);
$transacoes->setTrsNome($nome);
$transacoes->setTrsDescricao($descricao);
$transacoes->setTrsValor($valor);
$transacoes->setTrsCod($cod);

$dao = new TransacoesDAO();
$dao->editarTransacao($transacoes);


header("location:transacoes.php");
?>
