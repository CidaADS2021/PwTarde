<?php
function QuebraLinha()
{
    echo "<br><br>";
}
function ImprimirTexto($texto)
{
    echo $texto;
    QuebraLinha();
}

function Adicao($numero1, $numero2)
{
    return $numero1+$numero2 ;
}
function Media($numero1, $numero2)
{
    return Adicao($numero1,$numero2) /2 ;
}
function Subtracao($numero1, $numero2)
{
    return $numero1-$numero2 ;
}
function Multiplicacao($numero1, $numero2)
{
    return $numero1*$numero2 ;
}
function Divisao($numero1, $numero2)
{
    return $numero1/$numero2 ;
}
function Resto($numero1, $numero2)
{
    return $numero1%$numero2;
}
ImprimirTexto( Subtracao(20,12) );
ImprimirTexto( Multiplicacao(2,9) );
ImprimirTexto( Divisao(50,2) );
ImprimirTexto( Resto(3,2) );
ImprimirTexto( Adicao(10,12) );
ImprimirTexto( "Media 8 e 7 =". Media(8,7) );

//ImprimirTexto("Minha chamada de função");
//ImprimirTexto("2");
//ImprimirTexto("terceira");
//ImprimirTexto("quarta vez que eu chamo");
//ImprimirTexto("ultima chamda");

function LendariaCalculadora($num1, $num2, $operacao)
{
    $resultado = 0;
    if ($operacao == "+"){
        $resultado = Adicao($num1, $num2);
    }
    else if ($operacao == "-"){
       $resultado = Subtracao($num1, $num2);
    }
    else if ($operacao == "*"){
        $resultado = Multiplicacao($num1, $num2);
    }
    else if ($operacao == "/"){
       $resultado = Divisao($num1, $num2);
    }
    else if ($operacao == "%"){
        $resultado = Resto($num1, $num2);
    }
    else if ($operacao == "M"){
        $resultado = Media($num1, $num2);
    }
    else{
        $resultado = "Operação inválida";
    }
    ImprimirTexto($resultado);
}
LendariaCalculadora(20,10,"M");
LendariaCalculadora(20,10,"+");
LendariaCalculadora(20,10,"-");
LendariaCalculadora(20,10,"*");
LendariaCalculadora(20,10,"/");
LendariaCalculadora(20,10,"%");
?>