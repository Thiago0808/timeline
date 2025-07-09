<?php
#actions/categoria_salvar.php
require '../include/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_NUMBER_INT);
$nascimento=date("Y-m-d",strtotime($nascimento));



$conexao->query("INSERT INTO autor (nome, nacio, nasc) VALUES ('$nome', '$nacionalidade', '$nascimento')");

#redireciona
header('Location: ../gerente.php');








?>