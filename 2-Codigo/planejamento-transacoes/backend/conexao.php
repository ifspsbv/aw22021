<?php
$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$banco      = "planejamentos_transacoes";

try{
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario,$senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "conectado";
}catch(PDOException $e){
    echo "não foi possivel conectar!". $e->getMessage();
}
?>