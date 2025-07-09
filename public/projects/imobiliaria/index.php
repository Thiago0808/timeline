<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária IFSC</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="pages/img/icone.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <!-- Topo -->
        <header>
                <h1>Imobiliária IFSC</h1>
                <p>Os melhores imóveis do País!</p>
        </header>
        <!-- Menu -->
        <nav>
            <a href="" class="sanduiche">&#9776;</a>
            <a href="index.php" class="pc">Início</a>
            <a href="?page=comprar" class="pc">Comprar</a>
            <a href="?page=alugar" class="pc">Alugar</a>
            <a href="?page=categorias" class="pc">Categorias</a>
            <a href="?page=contato" class="pc">Contato</a>
            <a href="?page=estado" class="pc">Filtros</a>
            <form action="?page=pesquisar" method="get" class="form-inline">
                <input type="search" name="pesquisar" placeholder="Pesquisar" required>
                <input type="hidden" name="page" value="pesquisar">
            </form>
            <!-- Pesquisar -->
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
            <p>Thiago Martins</p>
            <p>Técnico em Informática 2021</p>
        </footer>
    </div>
    
</body>
</html>