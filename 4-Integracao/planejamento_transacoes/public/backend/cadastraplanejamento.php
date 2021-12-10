<?php
    //echo "salve";

    include 'conexao.php';

    $planejamento = $_POST['planejamento'];
    $descricaoplanejamento = $_POST['descricaoplanejamento'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    //echo $planejamento;
    //echo $descricaoplanejamento;

    $sql = "INSERT INTO planejamentos(nome,descricao,data,valor,identificador) VALUES('$planejamento','$descricaoplanejamento','$data','$valor','$tipo')";

    $comando = $conexao->prepare($sql);
    $conexao->beginTransaction();
    $comando->execute();
    $conexao->commit();

    $retorno = array("RETORNO"=>"SUCESSO","MENSAGEM"=>"CADASTRO REALIZADO COM SUCESSO!");
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;
    $conexao=null;
?>