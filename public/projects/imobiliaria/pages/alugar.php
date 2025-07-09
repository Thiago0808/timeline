<?php isset ($check) ?true:die('Acesso Negado');?>
<h1>Imóveis para Alugar</h1>

<!--
    Existem Várias formas de trabalhar com BD
    Uma popular é a biblioteca MySQLi do PHP
    Mas a melhor forma é trabalhar com PDO
-->
<?php
require_once 'includes/conexao.php';

$sql = "SELECT i.id, i.nome, i.descricao, i.valor, m.nome AS cidade
            FROM imovel i, municipio m
            WHERE i.municipio_id = m.id AND finalidade='aluguel' ";

$imoveis = $conexao -> query($sql);

foreach($imoveis as $i){
    echo '<div class="imovel">';
    echo '<h2>'.$i ['nome']. '</h2>';
    echo '<h3>Descrição: '.$i ['descricao']. '<h3>';
    echo '<h3>Preço: R$'.  $i ['valor']. '<p>';
    echo '<h3>Cidade: '.$i ['cidade']. '<h3>';
    echo '<a class="ver" href="?page=imovel_ver&id= '.$i['id'].'">Ver Detalhes</a> ';
    echo '</div>';
}

















?>