<?php
#actions/categoria_salvar.php
require '../include/conexao.php';
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$autor = filter_input(INPUT_POST, 'autor_id', FILTER_SANITIZE_NUMBER_INT);
$editora = filter_input(INPUT_POST, 'editora_id', FILTER_SANITIZE_NUMBER_INT);
$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);
$edicao = filter_input(INPUT_POST, 'edicao', FILTER_SANITIZE_SPECIAL_CHARS);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_SPECIAL_CHARS);









$conexao->query("INSERT INTO livro (tit, pag, ano, edi, sin, cod_autor, cod_editora) VALUES ('$titulo', $pagina, $ano, '$edicao', '$sinopse', $autor, $editora)");

$sql = "SELECT cod_livro FROM livro ORDER BY cod_livro DESC LIMIT 1";
$livros = $conexao->query($sql);
$livro = $livros->fetch();


$sql = "SELECT * FROM genero ORDER BY nome";
$sgenero = $conexao->query($sql);


foreach($sgenero as $s){
    if ($_POST ["$s[nome]"] == 'on'){
        $conexao->query("INSERT INTO genero_livro (cod_livro, cod_genero) VALUES ($livro[cod_livro], $s[cod_genero])");
    }  
}



#redireciona
header('Location: ../gerente.php');








?>