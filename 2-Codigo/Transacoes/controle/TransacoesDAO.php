<?php

require_once 'Conexao.php';


class TransacoesDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "transacoes";
    }

    public function cadastrarTransacao($dados)
    {
        $this->sql = "insert into $this->tabela (trs_nome, trs_descricao, trs_valor, trs_cod) values (:nome,:descricao,:valor,:cod)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getTrsNome());
        $this->resultado->bindParam(':descricao', $dados->getTrsDescricao());
        $this->resultado->bindParam(':valor', $dados->getTrsValor());
        $this->resultado->bindParam(':cod', $dados->getTrsCod());

        $this->resultado->execute();
    }


    public function listarTransacaoTodos() {
        $this->sql = "SELECT * FROM $this->tabela";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        return $this->resultado->fetchAll();
    }

    public function listarTransacaoPorId($id) {
        $this->sql = "SELECT * FROM $this->tabela where trs_id=:id";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':id', $id);
        $this->resultado->execute();
        return $this->resultado->fetch();
    }

    public function editarTransacao($dados) {

        $this->sql = "update $this->tabela set trs_nome=:nome, trs_descricao=:descricao, trs_valor=:valor, trs_cod=:cod where trs_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getTrsNome());
        $this->resultado->bindParam(':descricao', $dados->getTrsDescricao());
        $this->resultado->bindParam(':valor', $dados->getTrsValor());
        $this->resultado->bindParam(':cod', $dados->getTrsCod());
        $this->resultado->bindParam(':id', $dados->getTrsId());

        $this->resultado->execute();
    }

    public function excluirTransacao($id) {
        $this->sql = "delete from $this->tabela where trs_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);

        $this->resultado->bindParam(':id', $id);
        
        $this->resultado->execute();
    }

}

?>
