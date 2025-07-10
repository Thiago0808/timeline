


<h1>Novo Texto</h1>

        
<form action="" method="post">
    <div>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
    </div>
    <div>
        <label for="texto">Digite seu Texto:</label>
        <br>
        <textarea name="texto" id="texto" cols="30" rows="10"  required></textarea>

    </div>
    <?php
        $msg=filter_input(INPUT_GET, 'msg');
        if ($msg){
            echo '<div class="erro">'.urldecode($msg).' </div>';
        }
    ?>
    <div>
        <label for="mais" class="mais">Quer ultrapassar os 50 caracteres? Pague R$20.00 extras!</label>
        <br>
        <label for="mais" class="mais">Eu quero!</label>
        <input type="radio" name="mais" id="mais" value="mais">
    </div>

    <div>
        <label for="premium">Premium:</label>
        <div>
            <input type="radio" id="sim" name="premium" value="sim" require>
            <label for="sim">Sim</label><br>
        </div>
        <div>
            <input type="radio" id="nao" name="premium" value="nao" required>
            <label for="nao">Não</label><br>
        </div>
    </div>

    <div class="valor">
        <label for="valor_pago">Valor a Pagar (Em R$):</label>
        <br>
        <input type="" name="valor_pago" id="valor_pago" min=0.00 placeholder="49.99" step="0.10">
    </div>

    <div>
        <input type="submit" value="Salvar">
    </div>
</form>

<script>
    const sim = document.getElementById("sim")
    const nao = document.getElementById("nao")
    const valor = document.querySelector(".valor")

    sim.addEventListener("click", function(){
        valor.style.display = "inline-block"
    })

    nao.addEventListener("click", function(){
        valor.style.display = "none"
    })


</script>

