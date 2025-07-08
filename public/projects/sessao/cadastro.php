<?php
#cadastro.php
/*
objetivo: receber os dados do form_cadastro.php  e salvar no BD
para isso deve:
    - Verificar se o email já não está cadastrado
    - conferir se as senhas batem
    - criptografar a senha
*/
$user=filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$senha=filter_input(INPUT_POST, 'senha');
$senha2=filter_input(INPUT_POST, 'senha2');

#Verificar se senhas batem
if ($senha != $senha2){
    header('Location: form_cadastro.php?msg='.urlencode('As senhas digitadas não são iguais!'));
    exit;
}

#Verificar email já cadastrado
require 'conexao.php';
$u = $conn -> query("SELECT id FROM usuario WHERE email='$email' ");
if ($u->rowCount() > 0){
    header('Location: form_cadastro.php?msg='.urlencode('Email já cadastrado'));
    exit;
}

#Criptografar a senha
#$hash = md5($senha) Não é mais usado
$hash = password_hash($senha, PASSWORD_BCRYPT);

#Salvar no BD
$conn->query("INSERT INTO usuario (nome, email, senha) VALUES ('$user', '$email', '$hash') ");
header('Location: login.php');
exit;

?>