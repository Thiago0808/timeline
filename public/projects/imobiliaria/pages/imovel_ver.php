<?php
#pegar o ID do imóvel
require_once 'includes/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT i.nome, i.descricao, i.valor, m.nome AS cidade
        FROM imovel i, municipio m
        WHERE i.municipio_id = m.id AND i.id=$id";
$i = $conexao->query($sql)->fetch();
echo '<div class="imovel">';
echo '<h3>'.$i ['nome']. '</h3>';
echo '<p>Descrição: '.$i ['descricao']. '<p>';
echo '<p>Preço: R$'.  $i ['valor']. '<p>';
echo '<p>Cidade: '.$i ['cidade']. '<p>';
echo '</div>';

?>