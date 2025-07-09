<?php
#actions/categoria_salvar.php
require '../includes/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if ($conexao->query("INSERT INTO categoria (nome) VALUES ('$nome')")){
    //DeuCerto
}
else{
    //Nãu deu certo'
}
#redireciona
header('Location: ../index.php?page=categorias');








?>