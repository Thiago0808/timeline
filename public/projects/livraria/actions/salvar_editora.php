<?php
#actions/categoria_salvar.php
require '../include/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$origem = filter_input(INPUT_POST, 'origem', FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);



$conexao->query("INSERT INTO editora (nome, origem, ano) VALUES ('$nome', '$origem', $ano)");

#redireciona
header('Location: ../gerente.php');








?>