<?php
include 'controle/CarteiraDAO.php';
$dao = new CarteiraDAO();
$dados = $dao->listarTodos();

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
    <body>
        <h2>Nova Carteira</h2>
        <form action="cadastrarCarteira.php" method="POST">

            <label for="codigo">Codigo:</label><br/>
            <input name="codigo" id="codigo" placeholder="Insira o código da carteira" type="text"/><br/>
            
            <label for="nome">Nome:</label><br/>
            <input name="nome" id="nome" placeholder="Insira o nome da carteira" type="text"/><br/>
            
            <label for="descricao">Descrição:</label><br/>            
            <textarea name="descricao" id="descricao" placeholder="Escreva a descrição da carteira"></textarea><br/>
            
            <label for="data">Data:</label><br/>
            <input name="data" id="data" placeholder="Insira a data da carteira" type="date"/><br/>
          
            <button type="submit">Cadastrar</button>
        </form>

        <?php if (count($dados) < 1) { ?>
            <h3>Não existem registros cadastrados</h3>
        <?php } else {  ?>
            <h3>Categorias Cadastradas</h3>
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Data</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) { ?>
                    <tr>
                        <td><?php echo $dado['ctr_id']; ?></td>
                        <td><?php echo $dado['ctr_cod']; ?></td>
                        <td><?php echo $dado['ctr_nome']; ?></td>
                        <td><?php echo $dado['ctr_desc']; ?></td>
                        <td><?php echo $dado['ctr_data']; ?></td>
                        <td>
                            <a href='exibirCategoria.php?id=<?php echo $dado['ctr_id']; ?>'>
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href='excluirCategoria.php?id=<?php echo $dado['ctr_id']; ?>'>
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