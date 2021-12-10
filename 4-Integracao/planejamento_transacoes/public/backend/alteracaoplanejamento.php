<?php
    // echo "big day";
    include "conexao.php";
    $id = $_POST['id'];
    $alteracaoDescricao = $_POST['alteracaoDescricao'];
    $alteracaoPlanejamento = $_POST['alteracaoPlanejamento'];
    $alteracaoData = $_POST['alteracaoData'];
    $alteracaoValor = $_POST['alteracaoValor'];

    // echo $alteracaoValor;

    // echo $alteracaoPlanejameto;
    // echo $alteracaoDescricao;

    $sql = "UPDATE planejamentos SET nome='$alteracaoPlanejamento', descricao='$alteracaoDescricao', data='$alteracaoData', valor='$alteracaoValor' WHERE id=$id";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"DESCRIÇÃO ALTERADA!");

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
    $conexao=null;
?>