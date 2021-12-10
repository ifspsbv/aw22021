<?php

$logoutGoTo = "../index.php";

if (!isset($_SESSION)) {
  session_start();
}


$_SESSION['nome'] = NULL;
unset($_SESSION['nome']);
session_unset();

if ($logoutGoTo != "")
	header("Location: $logoutGoTo");


?>
