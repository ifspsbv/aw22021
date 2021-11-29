<?php
    // echo "big day";
    include "conexao.php";
    $id = $_POST['id'];
    $alteracaoCarteira = $_POST['alteracaoCarteira'];
    $alteracaoDescricao = $_POST['alteracaoDescricao'];
    $alteracaoData = $_POST['alteracaoData'];
    echo $id;
    echo $alteracaoCarteira;
    echo $alteracaoDescricao;
    echo $alteracaoData;


    $sql = "UPDATE carteira SET ctr_nome='$alteracaoCarteira', ctr_desc='$alteracaoDescricao', ctr_data='$alteracaoData' WHERE ctr_id=$id";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"DESCRIÇÃO ALTERADA!");

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
    $conexao=null;
?>