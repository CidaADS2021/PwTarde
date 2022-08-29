<?php

$numero = array( rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10),
                    rand(-10,10), );

$negativo = 0;
$positivo = 0;
for($i = 0; $i < 10; $i++)
{
    if($numero[$i] < 0)
    {
        $negativo++;
    }else {
        $positivo++;
    }
}

echo "negativo: $negativo positivo $positivo <pre>";
print_r($numero );
echo "</pre>";

?>
