<?php
    include 'conexao.php';
    
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO carteira(ctr_nome,ctr_desc) VALUES('$nome','$descricao')";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"Carteira cadastrada com sucesso!");
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;
    $conexao=null;
?>