<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Orientado a Objetos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <main>
            <h1>PHP e Orientação a Objetos</h1>
            <?php
            #Buscar os arquivos
            require 'autoload.php';

            #Usar os Namespaces
            use MeuApp\Tecnico\Aluno; 
            use MeuApp\Superior\Aluno as AlunoSuperior;
            use MeuApp\Lib\Conexao;

            #Criando alunos
            $a0 = new AlunoSuperior("Diego");

            #Criando uma conexão
            $conn = new Conexao();

            $a1 = new Aluno();
            $a1 ->nome = "Thiago";
            $a1 ->email = "thiago@ifsc.edu.br";
            $a1->senha='123';
            echo "<p>Meu nome é $a1->nome, e sou aluno de ensino técnico</p>";
            $a1->salvar();
            echo "<p>Meu id é $a1->id</p>";


            $a2 = new Aluno($a1->id);
            $a2->nome = "Thi";
            $a2 -> atualizar();

            echo "<p>Meu nome atualizado é $a2->nome</p>";




            ?>
        </main>
    </div>
    
</body>
</html>