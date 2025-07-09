<?php

namespace MeuApp\Superior;


class Aluno{

    public $id;
    public $nome;
    public $email;
    public $senha;
    
    # Método Construtor

    function __construct($nome)
    {
        $this->nome = $nome;
        echo "<p>Sou um aluno do superior, meu nome é $this->nome</p>";
    }
}




?>