<?php

class Transacoes {

    private $id;
    private $nome;
    private $descricao;
    private $valor;
    private $cod;

    public function __construct() {
        
    }

    function getTrsId() {
        return $this->id;
    }
    function setTrsId($id) {
        $this->id = $id;
    }

    function getTrsNome() {
        return $this->nome;
    }
    function setTrsNome($nome) {
        $this->nome = $nome;
    }

    function getTrsDescricao() {
        return $this->descricao;
    }
    function setTrsDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function getTrsValor() {
        return $this->valor;
    }
    function setTrsValor($valor) {
        $this->valor = $valor;
    }

    function getTrsCod() {
        return $this->cod;
    }
    function setTrsCod($cod) {
        $this->cod = $cod;
    }
}
?>

