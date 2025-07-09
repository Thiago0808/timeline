<?php
#actions/categoria_apagar.php
require '../includes/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if ($conexao->query("DELETE FROM categoria WHERE id=$id")){
    //DeuCerto
}
else{
    //Nãu deu certo'
}
#redireciona
header('Location: ../index.php?page=categorias');








?>