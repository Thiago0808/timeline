<?php isset ($check) ?true:die('Acesso Negado');?>

<h1>Inicio</h1>

<p class="bem">Seja Bem vindo à Imobiliária IFSC!</p>
<p class="bem">De Santa Catarina para todo o Brasil, encontre a sua moradia ideal aqui!</p>
<h2 class="sem_borda">Últimos Imóveis:</h2>

<?php
require_once 'includes/conexao.php';

$p = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if(!$p){
    $p = 0;
}

#Quantidade por pagina
$qpg = 3;
$inicio = $p*$qpg;

$sql = "SELECT i.id, i.nome, i.descricao, i.valor, m.nome AS cidade
            FROM imovel i, municipio m
            WHERE i.municipio_id = m.id ORDER BY i.id DESC LIMIT $inicio, $qpg ";

$imoveis = $conexao -> query($sql);

foreach($imoveis as $i){
    echo '<div class="imovel">';
    echo '<h2>'.$i ['nome']. '</h2>';
    echo '<h3>Cidade: '.$i ['cidade']. '<h3>';
    echo '<a class="ver" href="?page=imovel_ver&id= '.$i['id'].'">Ver Detalhes</a> ';
    echo '</div>';
}

echo '<div class="paginacao">';
if($p > 0){
    echo '<a href="?p= '.($p-1).' ">Anterior</a>';
}
if($imoveis->rowCount()){
    echo '<a href="?p= '.($p+1).' ">Próxima</a>';
}
echo '</div>';