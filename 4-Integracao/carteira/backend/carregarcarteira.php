<?php
    include 'conexao.php';

    $sql = "SELECT * FROM carteira";

    $resultado = $conexao->query($sql);
    
    if($resultado->rowCount() > 0){
        $dados = $resultado->fetchAll();
        $json = json_encode($dados);
    }else{
        $retorno = array("RETORNO" => "ERRO","MENSAGEM" =>"Registros não encontrados!");
        $json = json_encode($retorno);
    }
    echo $json;
    $conexao=null;
?>



