<?php
$protegido = false;
require 'proteger.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> 
        <?php require 'menu.php'; ?>
        <main>

            <?php
            $msg=filter_input(INPUT_GET, 'msg');
            if ($msg){
                echo '<div class="erro">'.urldecode($msg).' </div>';
            }
            ?>

            <h1>Cadastro</h1>
            <form action="cadastro.php" method="post">
                <div>
                    <label for="user">Nome de Usuário:</label>
                    <input type="text" name="user" id="user" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div>
                    <label for="senha2">Confirme a senha:</label>
                    <input type="password" name="senha2" id="senha2" required>
                </div>
                <div>
                    <input type="submit" value="Salvar">
                </div>
            </form>
        </main>

    </div>
</body>
</html>