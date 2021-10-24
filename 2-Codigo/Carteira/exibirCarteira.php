<?php
require_once "controle/CarteiraDAO.php";

$dao = new CarteiraDAO();
$dados = $dao->listarPorId($_GET['id']);

$id        = $dados['ctr_id'];
$codigo    = $dados['ctr_cod'];
$nome      = $dados['ctr_nome'];
$descricao = $dados['ctr_desc'];
$data      = $dados['ctr_data'];

?>

<!doctype html>

    <html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="ptBR">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>CRUD - Carteira</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" /> 
    </head>                          
    <body>
        <h2>Editar Carteira</h2>        
        <form action="editarCarteira.php" method="POST">

            <label for="codigo">Codigo:</label><br/>
            <input name="codigo" id="codigo" placeholder="Insira o código da carteira" type="text" value="<?php echo $codigo;?>"/><br/>
            
            <label for="nome">Nome:</label><br/>
            <input name="nome" id="nome" placeholder="Insira o nome da carteira" type="text" value="<?php echo $nome;?>"/><br/>
            
            <label for="descricao">Descrição:</label><br/>            
            <textarea name="descricao" id="descricao" placeholder="Escreva a descrição da carteira"><?php echo $descricao;?></textarea><br/>
            
            <label for="data">Data:</label><br/>
            <input name="data" id="data" placeholder="Insira a data da carteira" type="date" value="<?php echo $data;?>"/><br/>

            <input type="hidden" name="id" value="<?php echo $id;?>"/>

            <button type="submit">Editar</button>
        </form>
    </body>    
</html>