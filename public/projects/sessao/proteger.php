<?php
require 'conexao.php';
#proteger.php
session_start();

#Se pediu para proteger, e não está logado
if (isset($protegido) && $protegido  && !isset($_SESSION['nome'])){
    header('Location:login.php?msg='.urlencode("Página Restrita !!!!!!!"));
    exit;
};

#Se está logado
if (isset($_SESSION['nome'])){
    $logado = true;
}

?>