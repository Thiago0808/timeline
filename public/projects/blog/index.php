<?php
require 'autoload.php';

session_start();

use Blog\Classes\Controlador;


$p = filter_input(INPUT_GET, 'p');
$c = new Controlador;

switch ($p) {
    case 'novoUsuario':
        $c->novoUsuario();
        break;
    case 'login':
        $c->login();
        break;

    case 'novoTexto':
        $c->novoTexto();
        break;
    
    default:
        $c->inicial();
        break;
}


?>
