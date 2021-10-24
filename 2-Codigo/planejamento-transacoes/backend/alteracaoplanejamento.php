<?php
    // echo "big day";
    include "conexao.php";
    $id = $_POST['id'];
    $alteracaoDescricao = $_POST['alteracaoDescricao'];
    $alteracaoPlanejameto = $_POST['alteracaoPlanejameto'];

    // echo $alteracaoPlanejameto;
    // echo $alteracaoDescricao;

    $sql = "UPDATE planejamentos SET planejamento='$alteracaoPlanejameto', descricao='$alteracaoDescricao' WHERE id=$id";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"DESCRIÇÃO ALTERADA!");

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
    $conexao=null;
?>