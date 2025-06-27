<?php $check?true:exit;?>

<h2>Início</h2>
<p>Olá, eu sou Thiago Martins, um desenvolvedor full stack navegando pelos complexos desafios da tecnologia</p>
<p>Abaixo, estão testes de lógica em php, como condicionais, cálculos e arrays</p>
<p>Acese o código para entender melhor!</p>
<hr>
<?php
$a =10;
$b = 2;
$ab = ++$a; #$a+1; a--
echo "$a-$b";
if($a>10 && $b>=10){
    echo 'São maiores que 10';
}
elseif ($a>10){
    echo'<br> Só o $a é maior que 10';
}
else{
    echo '<br> Nenhum é maior que 10';
}

echo '<hr>';

#Equivalentes
echo $a>10? 'sim':'não';
if ($a>10)
    echo 'sim';
else
    echo 'não';

$nome='Thiago';
$sobrenome='Martins';
echo '<hr>';
echo "Meu nome é $nome $sobrenome";
echo '<hr>';

# Arrays
$meuArr = [8, 18, 27, "Thiago",  "Aline", "Gatinha", "Amor", true];
$meuArr[] =11;
echo $meuArr[3];
echo '<hr>';
$meuArr [0]++;
echo "$meuArr[0]";

echo '<hr>';
$meuArr [7]= $meuArr[1]+$meuArr[2];
echo "$meuArr[7]";

#Arrays Associativos
echo '<hr>';
$estados = [
    'sc'=>'Santa Catarina',
    'pr'=>'Paraná',
    'rs'=>'Rio Grande do Sul'];
echo $estados['sc'];
echo '<hr>';

$estados['sp'] ='São Paulo';
echo $estados['sp'];