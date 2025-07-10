<h1>Página Inicial</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, in. Pariatur qui consectetur magnam, ex blanditiis eaque deserunt ad facilis, natus veritatis, illo praesentium? Cumque, neque asperiores. Ducimus, quae eaque?</p>

<?php

use Blog\Classes\Texto;

foreach ($premium as $p){
    echo "<div class='comentario'>";
    

    if ($p->valor_pago<=25.00){
        echo "<h2> $p->titulo &#11088;</h2>";
    }
    elseif($p->valor_pago<=50.00){
        echo "<h2> $p->titulo &#11088 &#11088;</h2>";
    }
    elseif($p->valor_pago<=100.00){
        echo "<h2> $p->titulo &#11088 &#11088 &#11088;</h2>";
    }
    elseif($p->valor_pago<=200.00){
        echo "<h2> $p->titulo &#11088 &#11088 &#11088 &#11088;</h2>";
    }
    else{
        echo "<h2> $p->titulo &#11088 &#11088 &#11088 &#11088 &#11088;</h2>";
    }


    echo "<div>$p->texto</div>";
    echo "<p>Autor: ".$p->getUsuario()->nome."</p>";
    echo "</div>";
}

foreach ($normal as $n){
    echo "<div class='comentario'>";
    echo "<h2> $n->titulo</h2>";
    echo "<div>$n->texto</div>";
    echo "<p>Autor: ".$n->getUsuario()->nome."</p>";
    echo "</div>";
}
?>

