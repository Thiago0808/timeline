<?php
#actions/categoria_salvar.php
require '../include/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$conexao->query("INSERT INTO genero (nome) VALUES ('$nome')");

#redireciona
header('Location: ../gerente.php');








?>