<?php
//array
$carros = array();
//            0     1       2       3
$carros = ["BMW","GOL","SAVEIRO","HILUX"];

echo "<ul>";
for($i = 0; $i < count($carros); $i ++)
{
    echo "<br> $carros[$i]";
}
echo "<ul>";

echo "<pre>";
print_r($carros);
echo"</pre>";
//                  0         1         2         3    
$nomes = array("Fernando","Isabela","Sabrina","Renato");
echo"<pre>";
print_r($nomes);
echo"</pre>";

echo $nomes[2];

$nomes[567] = "Carlos";

array_push($nomes,"Bruno");

echo"<pre>";
print_r($nomes);
echo"</pre>";

$nomes[4] = "Gabriela";

echo"<pre>";
print_r($nomes);
echo"</pre>";

array_push($nomes,"Jubileu");

echo"<pre>";
print_r($nomes);
echo"</pre>";

array_pop($nomes);
array_pop($nomes);

echo"<pre>";
print_r($nomes);
echo"</pre>";

$carros["Eletricos"] = "Tesla";

echo"<pre>";
print_r($carros);
echo"</pre>";

$cadastro = array();
$pessoa1 = array("Id" => 1, "Nome" => "Fer", "Fer" => "123");
$pessoa2 = array("Id" => 2, "Nome" => "Fer", "Sa" => "456");
$pessoa3 = array("Id" => 3, "Nome" => "Fer", "Nome" => "789");

array_push($cadastro, $pessoa1);
array_push($cadastro, $pessoa2);
array_push($cadastro, $pessoa3);

echo"<pre>";
print_r($cadastro);
echo"</pre>";


?>