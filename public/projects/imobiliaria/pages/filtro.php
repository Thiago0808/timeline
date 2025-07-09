<h1 class="branco">Filtros</h1>

<!-- Selecionar Muita Coisa -->
<?php
require_once 'includes/conexao.php';
$municipio = filter_input(INPUT_GET, 'municipio_id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM bairro WHERE municipio_id=$municipio ORDER BY nome";
$bairros = $conexao->query($sql);
if (!$bairros->rowCount()){
    echo '<div> <h6>Não temos Imóveis nesta cidade</h6> </div>';
}
else{
$sql = 'select * from categoria order by nome';
$categoria = $conexao->query($sql);
?>




<form action="index.php" method="get" class="filtro">
    <input type="hidden" name="page" value="resultado">

    <!-- Nome do Imóvel -->
    <div> 
        <label for="nome">Nome:</label>
        <input type="text" placeholder="Nome" name="nome" id="categoria" >
    </div>
    <!-- Categoria -->
    <div>
        <label for="categoria">Categoria:</label>
        <select name="categoria_id" id="categoria">
            <option value="">Não Selecionar</option>
            <?php
            foreach($categoria as $c){
                echo '<option value="'.$c['id'].'">';
                echo $c['nome']; #nome da categoria
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <!-- Data de Cadastro Mínima-->
    <div>
        <label for="data">Data de Cadastro Mínima:</label>
        <input type="date" name="data" id="data">
    </div>
    <!-- Finalidade -->
    <div>
        <label for="finalidade">Finalidade:</label>
        <select name="finalidade" id="finalidade">
            <option value="">Não Selecionar</option>
            <option value="venda">Venda</option>
            <option value="aluguel">Aluguel</option>
        </select>
    </div>
    <!-- Dormitórios -->
    <div>
        <label for="dorm">Dormitórios:</label>
        <select name="dorm" id="dorm">
            <option value="">Não Selecionar</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <!-- Valor Mínimo-->
    <div>
        <label for="min_v">Valor Mínimo (Em Reais):</label>
        <input type="number" name="min_v" id="min_v" min="0" max="1000000" step="1" placeholder="Valor Mínimo">
    </div>
    <!-- Valor Máximo-->
    <div>
        <label for="max_v">Valor Máximo (Em Reais):</label>
        <input type="number" name="max_v" id="max_v" min="0" max="1000000" step="1" placeholder="Valor Máximo">
    </div>
    <!-- Área Mínima-->
    <div>
        <label for="min_a">Área Mínima (Em m²):</label>
        <input type="number" name="min_a" id="min_a" min="0" max="1000000" step="1" placeholder="Área Mínima">
    </div>
    <!-- Área Máxima-->
    <div>
        <label for="max_a">Área Máxima (Em m²):</label>
        <input type="number" name="max_a" id="max_a" min="0" max="1000000" step="1" placeholder="Área Máxima">
    </div>
    <!-- Bairro -->
    <div>
        <label for="bairro">Bairro:</label>
        <select name="bairro_id" id="bairro">
            <option value="">Não Selecionar</option>
            <?php
            foreach($bairros as $b){
                echo '<option value="'.$b['id'].'">';
                echo $b['nome']; #nome do bairro
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <div class="proximo"><input type="submit" value="Procurar" class="botao_em"></div>
</form>

<?php } ?>