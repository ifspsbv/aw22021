<?php

if (!isset($_SESSION)) {
  session_start();
}

$MM_restrictGoTo = "../index.php?acessoRestrito=true";

if (!(isset($_SESSION['nome'])) )
{
  echo "<script>window.open('$MM_restrictGoTo','_self');</script>";
}


?>
