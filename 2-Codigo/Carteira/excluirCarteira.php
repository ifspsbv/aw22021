<?php

require_once 'controle/CarteiraDAO.php';

$dao = new CarteiraDAO();

$dao->excluir($_GET['id']);


header("location:carteiras.php");




?>
