    <nav>
        <a href="index.php">Início</a>
        <a href="segura.php">Página Segura</a>
        <?php
        if (!isset($logado)){
            echo '<a href="login.php">Login</a>';
        }
        else{
            echo '<a href="logout.php">Logout</a>';
        }
        ?>
    </nav>