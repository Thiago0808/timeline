<?php isset($check)?true:die('Acesso negado');?>
<h1>Primeiramente, selecione o Estado de seu desejo</h1>

<?php
require_once 'includes/conexao.php';
$sql = "SELECT * FROM estado ORDER BY nome";
$estados = $conexao->query($sql);
?>

<form action="?page=municipio" method="get">
    <div>
        <input type="hidden" name="page" value="municipio">
        <label class="em" for="estado_id">Estado:</label>
        <select name="estado_id" id="estado_id" class="select_em">
            <?php
            foreach($estados as $e){
                echo '<option value="'.$e['id']. '">';
                echo $e['nome']; #nome do estado
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <div class="proximo">
        <input type="submit" value="Próxima Etapa" class="botao_em ">
    </div>
</form>
