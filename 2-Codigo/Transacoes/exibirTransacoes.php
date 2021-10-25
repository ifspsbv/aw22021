<?php
require_once "controle/TransacoesDAO.php";


$dao = new TransacoesDAO();
$dados = $dao->listarTransacaoPorId($_GET['id']);

$id        = $dados['trs_id'];
$nome      = $dados['trs_nome'];
$descricao = $dados['trs_descricao'];
$valor     = $dados['trs_valor'];
$cod       = $dados['trs_cod'];

?>

<!doctype html>

    <html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="ptBR">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="css.css">
        <title>CRUD - Modelo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" /> 
    </head>                          
    <body>
        <h2>Editar Categoria</h2>        
        <form action="editarTransacoes.php" method="POST">
            <fieldset>
                <legend>Transação</legend>
                <label for="nome" class="">Nome:</label>
                 
                <input name="nome" id="nome" class="padrao" value="<?php echo $nome;?>" type="text" required>
                 
                <label for="descricao">Descrição:</label>
                 
                <textarea name="descricao" id="descricao" class="padrao"><?php echo $descricao;?></textarea>
                 
                <label for="valor" class="">Valor:</label>
                 
                <input name="valor" id="valor" class="padrao" value="<?php echo $valor;?>" type="number" min="0" max="9999999.99" step="0.01" required>
                 
                <fieldset>
                    <legend>Tipo de Valor(Cod)</legend>
                    <label for="cod" ><input type="radio" name="cod" value="Depósito" id="cod" <?php if($cod =='Depósito'){ echo "checked";} ?>>Depósito</label>
                    <br>
                    <label for="cod"><input type="radio" name="cod" value="Saque" id="cod" <?php if($cod =='Saque'){ echo "checked";} ?>>Saque</label>
                </fieldset>
                 
                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                <button type="submit" class="enviar">Editar</button>
            </fieldset>
        </form>
    </body>    
</html>
