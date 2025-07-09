<?php
#actions/categoria_salvar.php
require '../include/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_NUMBER_INT);
$nascimento=date("Y-m-d",strtotime($nascimento));

$conexao->query("INSERT INTO funcionario (nome, sob, senha, tel, ende, rg, nasc) VALUES ('$nome', '$sobrenome', '$senha', '$telefone', '$endereco', $rg, '$nascimento')");



#redireciona
header('Location: ../gerente.php');








?>