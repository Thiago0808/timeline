<?php
//Arquivo receve.php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$rg = $_POST["rg"];
$nasc = $_POST["nasc"];
$curso= $_POST["curso"];
$turma= $_POST["turma"];
$comentario= $_POST["comentario"];




echo "<p>Nome: $nome</p>";
echo "<p>RG: $rg</p>";
echo "<p>Data de Nascimento: $nasc</p>";
echo "<p>Senha: ".md5 ($senha)."</p>";

if($curso=='adm'){
    echo "Curso: Administração";
}
else{
    echo "Curso: Informática";
}
echo "<p>Turma: $turma</p>";
echo "<p>Comentario: $comentario</p>";


?>