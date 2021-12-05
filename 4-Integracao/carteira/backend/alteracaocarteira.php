<?php
    include "conexao.php";
    
    $id = $_POST['id'];
    $alteracaoCarteira = $_POST['alteracaoCarteira'];
    $alteracaoDescricao = $_POST['alteracaoDescricao'];

    $sql = "UPDATE carteira SET ctr_nome='$alteracaoCarteira', ctr_desc='$alteracaoDescricao' WHERE ctr_id=$id";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"Dado(s) alterado(s) com sucesso!");

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
    $conexao=null;
?>