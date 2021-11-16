<?php
include 'controle/TransacoesDAO.php';
$dao = new TransacoesDAO();
$dados = $dao->listarTransacaoTodos();


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
    <body>
        <h2>Nova Transação</h2>
        <form action="cadastrarTransacoes.php" method="POST">
            <fieldset>
                <legend>Transação</legend>
                <label for="nome" class="">Nome:</label>
                 
                <input name="nome" id="nome" class="padrao" placeholder="Dê um nome para sua Transação (obrigatório)" type="text" required>
                 
                <label for="descricao">Descrição:</label>
                 
                <textarea name="descricao" id="descricao" class="padrao" placeholder="Descrição (opicional)"></textarea>
                 
                <label for="valor" class="">Valor:</label>
                 
                <input name="valor" id="valor" class="padrao" placeholder="Valor (obrigatório)" type="number" min="0" max="9999999.99" step="0.01" required>
                 
                <fieldset>
                    <legend>Tipo de Valor(Cod)</legend>
                    <label for="cod" ><input type="radio" name="cod" value="D" id="cod">Depósito</label>
                    <br>
                    <label for="cod"><input type="radio" name="cod" value="S" id="cod">Saque</label>
                </fieldset>
                 
                <button type="submit" class="enviar">Cadastrar</button>
            </fieldset>
        </form>
        

        <?php if (count($dados) < 1) { ?>
            <h3>Não existem transações cadastradas</h3>
        <?php } else {  ?>
            <h3>Transações Cadastradas</h3>
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Cod</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach ($dados as $dado) { ?>
                    <tr>
                        <td><?php echo $dado['trs_id']; ?></td>
                        <td><?php echo $dado['trs_nome']; ?></td>
                        <td><?php echo $dado['trs_descricao']; ?></td>
                        <td><?php echo $dado['trs_valor']; ?></td>
                        <td><?php echo $dado['trs_cod']; ?></td>
                        <td>
                            <a href='exibirTransacoes.php?id=<?php echo $dado['trs_id'];?>'>
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href='excluirTransacoes.php?id=<?php echo $dado ['trs_id'];?>'>
                                Excluir
                            </a>
                        </td>                         
                    </tr>
                    <?php } ?>    
                </tbody>
            </table>            
        <?php } ?>  
    </body>               
</html>
