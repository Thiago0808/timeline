<?php

namespace Blog\Classes;

class Usuario{

    public $id;
    public $nome;
    public $email;
    public $senha;

    function __construct($id=null)
    {
        if ($id){
            $conn = new Conexao();
            $usuario = $conn->query("SELECT * FROM usuario WHERE id=$id")->fetch();
            if ($usuario){
                $this->id=$usuario['id'];
                $this->nome=$usuario['nome'];
                $this->email=$usuario['email'];
                $this->senha=$usuario['senha'];
            } 
            else{
                die ('Registro não Encontrado');
            }
        }
    }

    function salvar(){
        $conn = new Conexao();
        $this->senha = password_hash($this->senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$this->nome', '$this->email', '$this->senha' )";
        $r = $conn->query($sql);
        if ($r){
            $this->id =  $conn ->lastInsertId();
        }
        return $r;
    }

    function atualizar(){
            $conn = new Conexao();
            $this->senha = password_hash($this->senha, PASSWORD_BCRYPT);
            return $conn->query("UPDATE `usuario` SET `nome`='$this->nome',`email`='$this->email',`senha`='$this->senha' WHERE id=$this->id")->fetch();
    }

    function deletar(){
            $conn = new Conexao();
            return $conn->query("DELETE FROM usuario WHERE id=$this->id")->fetch();
    }


    function buscarPorEmail($email)
    {
            $conn = new Conexao();
            $usuario = $conn->query("SELECT * FROM usuario WHERE email='$email' ")->fetch();
            if ($usuario){
                $this->id=$usuario['id'];
                $this->nome=$usuario['nome'];
                $this->email=$usuario['email'];
                $this->senha=$usuario['senha'];
                return $usuario['id'];
            } 
            else{
                return false;
            }

    }
}

?>