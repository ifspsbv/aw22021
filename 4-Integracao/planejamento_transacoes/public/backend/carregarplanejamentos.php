<?php
    //echo "deu certo";

    include 'conexao.php';

    $sql = "SELECT * FROM planejamentos WHERE identificador=2";

    $resultado = $conexao->query($sql);
    if($resultado->rowCount() > 0){
        $dados = $resultado->fetchAll();
        $json = json_encode($dados);
    }else{
        $retorno = array("RETORNO" => "ERRO","MENSAGEM" =>"REGISTROS NÃO ENCONTRADOS!");
        $json = json_encode($retorno);
    }
    echo $json;
    $conexao=null;

?>