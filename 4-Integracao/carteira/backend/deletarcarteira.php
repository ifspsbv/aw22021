<?php
    include "conexao.php";

    $id = $_POST['id'];

    $sql = "DELETE FROM carteira WHERE ctr_id=$id ";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"CARTEIRA DELETADA!");

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
    $conexao=null;
?>