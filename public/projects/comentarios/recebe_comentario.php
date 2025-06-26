<?php
// Arquivo que Recebe comentário
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);
    $nota= filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_INT);

    /* Tentou enviar em branco*/ 
    if(!$comentario || !$nota){
        header('Location:index.php?erro=1'); #Redireciona;
        exit;
    }

    date_default_timezone_set('America/Sao_Paulo');
    $msg = '<div class="comentario">';
    $msg .= '<small>' .date('d/m/Y H:i'). ' - Nota: '.$nota.'</small>';
    $msg .= '<hr>';
    $msg .= $comentario;
    $msg .= '</div>';
    $msg .= "\n\n";

    file_put_contents("comentarios.txt", $msg, FILE_APPEND);

    header('Location:index.php'); #Redireciona;










?>