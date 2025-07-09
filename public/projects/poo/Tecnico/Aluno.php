<?php

namespace MeuApp\Tecnico;

use MeuApp\Lib\Conexao;

class Aluno{

    public $id;
    public $nome;
    public $email;
    public $senha;

    # Método Construtor

    function __construct($id = null)
    {
        # Mapeamento Objeto Relacional
        # DAO - Data Access Objects
        # Active Record

        if ($id){
            $conn = new Conexao();
            $aluno = $conn->query("SELECT * FROM usuario WHERE id=$id")->fetch();
            if ($aluno){
                $this->id=$aluno['id'];
                $this->nome=$aluno['nome'];
                $this->email=$aluno['email'];
                $this->senha=$aluno['senha'];
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
}




?>