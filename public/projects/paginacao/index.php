<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="pages/img/icone.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <!-- Topo -->
        <header>
                <h1>Meu Blog</h1>
        </header>
        <!-- Menu -->
        <nav>
            <a href="index.php">Início</a>
            <a href="?page=galeria">Galeria</a>
            <a href="?page=informacoes">Informações</a>
            <a href="?page=contato">Contato</a>
        </nav>
        <!-- Parte Principal -->
        <main>
            <?php

                $check=true;

                $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
                if($page && file_exists("pages/$page.php")){
                    require "pages/$page.php";
                } else{
                    require 'pages/inicio.php';
                }
            ?>
        </main>
        
        <!-- Rodapé -->
        <footer>
            <p>Técnico em Informática 2021</p>
        </footer>
    </div>
    
</body>
</html>