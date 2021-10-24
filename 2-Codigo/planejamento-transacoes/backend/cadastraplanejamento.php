<?php
    //echo "salve";

    include 'conexao.php';

    $planejamento = $_POST['planejamento'];
    $descricaoplanejamento = $_POST['descricaoplanejamento'];

    //echo $planejamento;
    //echo $descricaoplanejamento;

    $sql = "INSERT INTO planejamentos(planejamento,descricao) VALUES('$planejamento','$descricaoplanejamento')";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"CADASTRO REALIZADO COM SUCESSO!");
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;
    $conexao=null;
?>