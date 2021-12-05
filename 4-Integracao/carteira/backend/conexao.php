<?php
$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$banco      = "carteira";

try{
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario,$senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "não foi possível conectar!". $e->getMessage();
}
?>