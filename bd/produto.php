<?php


class Produto {
    private $conexao;

    public function __construct(){
        try{
        $this->conexao = new PDO("mysql:dbname=testes;host=localhost","root","");
        }catch(PDOException $e){
            echo("Erro:". $e->getMessage(). "<br/>");
            die;
        }
    }

    public function PegarDados(){
        return $this->conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ExcluirDados($id){
        return $this->conexao->query("DELETE FROM produtos WHERE id = $id");
    }

    public function EditarDados($id, $nome, $descricao, $preco){
        return $this->conexao->query("UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id = '$id' ");
    }

    public function CadastrarDados($nome, $descricao, $preco){
        return $this->conexao->query("INSERT INTO produtos(nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')");
    }

    public function Id($id){
        return $this->conexao->query("SELECT * FROM produtos WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    }



}
?>