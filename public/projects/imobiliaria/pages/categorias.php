<?php isset ($check) ?true:die('Acesso Negado');?>
<h1>Categorias</h1>

<!--
    Existem Várias formas de trabalhar com BD
    Uma popular é a biblioteca MySQLi do PHP
    Mas a melhor forma é trabalhar com PDO
-->
<?php
require_once 'includes/conexao.php';

$sql = 'select * from categoria order by nome';
$categorias = $conexao->query($sql);

foreach($categorias as $c){
    echo '<div class="categoria">';

    echo '<a href="?page=imovel_por_categoria&id='.$c['id']. '">';
    echo $c['nome'];
    echo '</a>';
    #Link Deletar
    echo '</div>';
}


?>
<br>
<p>
    <a href="?page=nova_categoria" class="cat">Nova Categoria</a>
</p>
