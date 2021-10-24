<?php

require_once 'Conexao.php';


class CarteiraDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "carteira";
    }

    public function cadastrar($dados) {
        $this->sql = "insert into $this->tabela (ctr_cod, ctr_nome, ctr_desc, ctr_data) values (:codigo, :nome, :descricao, :data)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':codigo', $dados->getCodigo());
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':descricao', $dados->getDescricao());
        $this->resultado->bindParam(':data', $dados->getData());

        $this->resultado->execute();
    }

    public function listarTodos() {
        $this->sql = "SELECT * FROM $this->tabela";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        return $this->resultado->fetchAll();
    }

    public function listarPorId($id) {
        $this->sql = "SELECT * FROM $this->tabela where ctr_id=:id";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':id', $id);
        $this->resultado->execute();
        return $this->resultado->fetch();
    }

    public function editar($dados) {

        $this->sql = "update $this->tabela set ctr_cod=:codigo, ctr_nome=:nome, ctr_desc=:descricao, ctr_data=:data
        where ctr_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':codigo', $dados->getCodigo());
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':descricao', $dados->getDescricao());
        $this->resultado->bindParam(':data', $dados->getData());
        $this->resultado->bindParam(':id', $dados->getId());
        
        $this->resultado->execute();
    }

    public function excluir($id) {
        $this->sql = "delete from $this->tabela where ctr_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);

        $this->resultado->bindParam(':id', $id);
        
        $this->resultado->execute();
    }

}

?>
