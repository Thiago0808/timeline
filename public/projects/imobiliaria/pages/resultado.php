<?php isset($check)?true:die('Acesso negado');?>

<?php
require_once './includes/conexao.php';
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = filter_input(INPUT_GET, 'categoria_id', FILTER_SANITIZE_NUMBER_INT);
$data = filter_input(INPUT_GET, 'data', FILTER_SANITIZE_NUMBER_INT);
$fim = filter_input(INPUT_GET, 'finalidade', FILTER_SANITIZE_SPECIAL_CHARS);
$dorm = filter_input(INPUT_GET, 'dorm', FILTER_SANITIZE_NUMBER_INT);
$min_v = filter_input(INPUT_GET, 'min_v', FILTER_SANITIZE_NUMBER_INT);
$max_v = filter_input(INPUT_GET, 'max_v', FILTER_SANITIZE_NUMBER_INT);
$min_a = filter_input(INPUT_GET, 'min_a', FILTER_SANITIZE_NUMBER_INT);
$max_a = filter_input(INPUT_GET, 'max_a', FILTER_SANITIZE_NUMBER_INT);
$bairro = filter_input(INPUT_GET, 'bairro_id', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT i.id, i.nome, i.valor, m.nome AS cidade
FROM imovel i, municipio m
WHERE i.municipio_id=m.id";

$imoveis=2;

echo '<h1 class="branco">Imóveis Encontrados</h1>';

//Nome
if ($nome) {
    $sql = "$sql AND (i.nome LIKE '%". $nome ."%' )";
}

//Categoria
if ($categoria) {
    $sql = "$sql AND categoria_id=$categoria";
}

//Data
if ($data){
    $sql = "$sql AND data_cadastro >='$data'";
}

//Finalidade
if ($fim) {
    $sql = "$sql AND finalidade='$fim'";
}

//Dormitórios
if ($dorm) {
    $sql = "$sql AND dormitorios=$dorm";
}

//Valor
if ($min_v && $max_v){
    $sql = "$sql AND valor BETWEEN $min_v AND $max_v";
}
elseif ($min_v && !$max_v){
    $sql = "$sql AND valor>=$min_v";
}
elseif (!$min_v && $max_v){
    $sql = "$sql AND valor<=$max_v";
}

//Área
if ($min_a && $max_a){
    $sql = "$sql AND area BETWEEN $min_a AND $max_a";
}
elseif ($min_a && !$max_a){
    $sql = "$sql AND area>=$min_a";
}
elseif (!$min_a && $max_a){
    $sql = "$sql AND area<=$max_a";
}


//Bairro
if ($bairro) {
    $sql = "$sql AND bairro_id=$bairro";
}


echo '<br>';
$imoveis = $conexao->query($sql);
if (!$imoveis->rowCount()){
    echo '<div> <h6 class="branco">Não temos Imóveis nestas Especificações</h6> </div>';
}
elseif ($imoveis){
    foreach($imoveis as $i) {
        echo '<div class="imovel">';
        echo '<h2>'.$i['nome'].'</h2>';
        echo '<h3>Preço: R$ '.$i['valor'].'</h3>';
        echo '<h3>Cidade: '.$i['cidade'].'</h3>';
        echo '<a class="ver" href="?page=imovel_ver&id= '.$i['id'].'">Ver Detalhes</a> ';
        echo '</div>';
        };
}




?>