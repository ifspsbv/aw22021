<?php
    // echo "aaaaaa";
    include "conexao.php";

    $id = $_POST['id'];

    $sql = "DELETE FROM planejamentos WHERE id=$id ";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"DESCRIÇÃO ALTERADA!");

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
    $conexao=null;
?>