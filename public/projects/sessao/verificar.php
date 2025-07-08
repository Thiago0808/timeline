<?php
#verificar.php
$user=filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$senha=filter_input(INPUT_POST, 'senha');

#buscar a linha do usuário pelo email (user) fornecido
#depois, comparar a senha fornecida

require 'conexao.php';
$sql = "SELECT * FROM usuario WHERE email='$user' ";

//Busca o primeiro user encontrado com este email
$u = $conn->query($sql)->fetch();

//Verificar se não achou um user com este email
if(!$u){
    header('Location:login.php?msg='.urlencode('E-mail não encontrado!'));
    exit;
}

#Verificar se a senha confere
if (password_verify($senha, $u['senha'])){
    session_start();
    $_SESSION['nome'] = $u['nome'];
    header('Location:segura.php');
    exit;
}

#Senha não bateu
header('Location:login.php?msg='.urlencode('Senha incorreta! Tente novamente!'));
exit;
//die($user.''.$senha);



?>