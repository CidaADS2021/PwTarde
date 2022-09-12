<?php
#Comentario
// Comentario
/*  
    bloco de comentario
*/
echo "Minha mensagem \n ";
echo "<br>";
echo "<h1>Meu HTML</h1>";

$nome = "Fernando";
$idade = 32;
$altura = 1.77;
$solteiro = true;

$prova1 = 8;
$prova2 = 7.5;
$soma = $prova1 + $prova2 ;
$media = $soma / 2;

$multiplicacao = $prova1 * $prova2;
$subtração = $prova1 - $prova2;

CONST NOMECOMPLETO = "FERNANDO CESAR GRACIANO";
echo "<p>". NOMECOMPLETO. "<p>";

$faltas = 21;

if($media >= 6 && $faltas <= 20 ){
    echo "<br>Aprovado"."<br>";
}else{
    echo "<br>reprovado"."<br>";
}

# != Diferente
# == Igual
# > Maior
# < Menor
# >= Maior e igual
# <= Menor e igual
# === mesmo conteudo e mesmo tipo

$valor = 10;

#Valor + Valor + 5;
$valor += 5;
$valor -= 7;
$valor *= 2;
$valor /= 1;

#incremento para laço de repetição
$valor += 1;

#Resto da divisão (MOD)
$resto = 4 % 2;

echo "<p>";
//Se for par ou impar
if($valor % 2 == 0){
    echo "par";
}else{
    echo "impar";
}
echo "</p>";
//Incremento e decremento 1 em 1
$cont = 0;
$cont++;
$cont--;

do{
    //faça 
    $cont++;
    echo $cont."<br>";
}while($cont < 10);

while($cont < 10){
    //faça
}

for($i = 0; $i < 10; $i++)
{
    echo "<h2>For i:".$i."</h2>";
}

for($i = 1; $i <= 5197; $i++)
{
    if($i % 2 == 0){
        echo $i." é par<br>";
    }else{
        echo $i." é impar<br>";
    }
}


?>
