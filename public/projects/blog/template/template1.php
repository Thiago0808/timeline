<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav>
            <a href="index.php">Início</a>
            <a href="?p=novoUsuario">Novo Usuário</a>
            <a href="?p=novoTexto">Novo Texto</a>
            <a href="?p=login">Login</a>
            <a href="?p=logout">Logout</a>

        </nav>
        <main>
            <?php require "pages/$page.php"; ?>
        </main>
    </div>
    
</body>
</html>