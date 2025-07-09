<?php isset($check)?true:die('Acesso negado');?>
<h1 class="branco">Agora, selecione o Municipio que deseja</h1>

<?php
require_once 'includes/conexao.php';
$estado = filter_input(INPUT_GET, 'estado_id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM municipio WHERE estado_id=$estado ORDER BY nome";
$municipios = $conexao->query($sql);
?>

<form action="?page=filtro" method="get">
    <div>
        <label class="em" for="municipio">Municipios:</label>
        <input type="hidden" name="page" value="filtro">
        <select name="municipio_id" id="municipio" class="select_em">
            <?php
            foreach($municipios as $e){
                echo '<option value="'.$e['id'].'">';
                echo $e['nome']; #nome do estado
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <div class="proximo">
        <input type="submit" value="Próxima Etapa" class="botao_em">
    </div>
</form>
