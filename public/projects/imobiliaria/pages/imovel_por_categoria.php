<?php isset ($check) ?true:die('Acesso Negado');?>
<?php
#Pegamos o ID pela URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
require_once 'includes/conexao.php';
$sql = "SELECT * FROM categoria WHERE id=$id";
$categorias = $conexao->query($sql);
$categoria = $categorias->fetch();

#pegamos os imoveis da categoria_id do id enviado na url
$sql = "SELECT i.id, i.nome, i.descricao, i.valor, m.nome AS cidade
        FROM imovel i, municipio m
        WHERE i.municipio_id = m.id AND categoria_id=$id";
$imoveis = $conexao-> query($sql);

?>
<h1>Imóveis em <?=$categoria['nome']?></h1>

<?php
foreach($imoveis as $i){
    echo '<div class="imovel">';
    echo '<h2>'.$i ['nome']. '</h2>';
    echo '<h3>Preço: R$'.  $i ['valor']. '<h3>';
    echo '<h3>Cidade: '.$i ['cidade']. '<h3>';
    echo '<a class="ver" href="?page=imovel_ver&id= '.$i['id'].'">Ver Detalhes</a> ';
    echo '</div>';
}

?>

