<?php

require_once 'controle/TransacoesDAO.php';

$dao = new TransacoesDAO();

$dao->excluirTransacao($_GET['id']);


header("location:transacoes.php");




?>
