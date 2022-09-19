-)Crie uma variável e atribua um array com os seguintes itens : 20, 15, 30, 17, 8 

<?php
$numeros = array();
$numeros = ["20","15","30","17","8"];
echo "<ul>";
for($i = 0; $i < count($numeros); $i ++)
{
    echo "<br> $numeros[$i]";
}

echo "<ul>";

echo "<pre>";
print_r($numeros);
echo "</pre>";

?>

-)Faça uma função que imprima o array do primeiro exercício.

<?php

function Imprimir($numeros){
foreach ($numeros as $numero){
    echo $numero."<br>";
 }
}

?>

-)Crie uma função que some todos os itens do array do exercício 1;

<?php

function SomaDosItens($numeros){
    $resultado = 0;
    for ($i=0;$i<count($numeros);$i++){
        $resultado +=$numeros[$i];
    }
    return $resultado;
}
echo SomaDosItens($numeros);
?>

-)Utilizando o For imprima a tabuada do 144.

<?php

echo"tabuada<br>";

    for ($i=0;$i<=10;$i++){
        echo "144*$i=".(144*$i);
        echo "<br>";
    }
    echo"<br>";

?>

)Exiba na tela todos os itens pares de 251 de 544.

<?php

for($i = 251; $i <= 544; $i ++ ){
    if($i % 2 ==0){
        echo"<div>".$i."</div>";
    }
}
?>

-) Adicione 3 novos itens no array do exercício 1 usando a função rand(-10,10).

<?php

array_push($numeros,rand(-10, 10));
array_push($numeros,rand(-10, 10));
array_push($numeros,rand(-10, 10));

echo"<pre>";
print_r($numeros);
echo"<pre>";

?>

-)Faça uma função que receba a porcentagem e um numero e calcule a porcentagem desse numero.

<?php

function Calcular($porcentagem, $numero){
    return ($numero/100)*$porcentagem;
}
echo "<br> 24% de 120 é: ". Calcular(24, 120)."<br>";

?>

-)Exiba na tela a quantidade de pares, impares, negativos e positivos do array do exercicio 1

<?php

$count_pares = 0;
$count_impares = 0;
$count_positivos = 0;
$count_negativos = 0;

    for ($i=0;$i<count($numeros);$i++){
       
        if($numeros[$i] >= 0){
            $count_positivos++;
        }else{
            $count_negativos++;
        }
        if($numeros[$i] %2 ==0){
            $count_pares++;
        }else{
            $count_impares++;
        }
    }

    echo "<br> pares:".$count_pares."impares:".$count_impares;
    echo "<br> positivos:".$count_positivos."negativos:".$count_negativos;

?>

-)Calcule a média do array do exercício 1
 
<?php

$soma = SomaDosItens($numeros);
echo "<br> A media do meu array é: ".($soma/count($numeros));

?>