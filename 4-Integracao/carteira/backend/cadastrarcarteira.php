<?php
    include 'conexao.php';
    // echo ""aaaaa";
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];

    // echo $nome;
    // echo $descricao;
    // echo $data;

    $sql = "INSERT INTO carteira(ctr_nome,ctr_desc,ctr_data) VALUES('$nome','$descricao','$data')";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"CARTEIRA CADASTRADA COM SUCESSO!");
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;
    $conexao=null;
?>