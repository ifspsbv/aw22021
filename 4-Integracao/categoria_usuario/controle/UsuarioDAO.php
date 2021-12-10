<?php


require_once 'Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProjetoPDS/modelo/Usuario.php';

class UsuarioDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "usuario";
    }

    public function cadastrar($dados) {
        $this->sql = "insert into $this->tabela (uso_nome, uso_email, uso_senha, uso_datanasc) values (:nome,:email, MD5(:senha), :datanasc)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':email', $dados->getEmail());
        $this->resultado->bindParam(':senha', $dados->getSenha());
        $this->resultado->bindParam(':datanasc', $dados->getDatanasc());
        
        $this->resultado->execute();
    }

    public function fazerLogin($user, $pass) {
        $this->sql = "select * from $this->tabela where uso_email='$user' and uso_senha=MD5('$pass')";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        $resultado = $this->resultado->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }
    
    public function listarTodos() {
        $this->sql = "SELECT * FROM $this->tabela";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        return $this->resultado->fetchAll();
    }

    public function listarPorId($id) {       
        $this->sql = "SELECT * FROM $this->tabela where uso_id=:id";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':id', $id);
        $this->resultado->execute();   
        return $this->resultado->fetch();
    }

    public function editar($dados) {

        $this->sql = "update $this->tabela set uso_nome=:nome,uso_email=:email, uso_senha=:senha, uso_datanasc=:datanasc
        where uso_id=:id";


        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':email', $dados->getEmail());
        $this->resultado->bindParam(':senha', $dados->getSenha());
        $this->resultado->bindParam(':datanasc', $dados->getDatanasc());
        $this->resultado->bindParam(':id', $dados->getId());
        
        $this->resultado->execute();
    }

    public function excluir($id) {
        $this->sql = "delete from $this->tabela where uso_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);

        $this->resultado->bindParam(':id', $id);
        
        $this->resultado->execute();
    }

}

?>
