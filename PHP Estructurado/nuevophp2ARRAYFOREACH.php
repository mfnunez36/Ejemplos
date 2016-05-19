<?php

#ARRAY

$p = "pertenece al array";
$numeros = array(1, 2, $p, 4, 5, "Max");

echo($numeros[2]);

$x = array(1 => "numero uno", 'pedro' => "pedro tiene hambre");

echo($x[1] . $x['pedro']);
echo("<br />");
echo("<br />");
echo("<br />");
echo("<br />");

$z = array(
    //'max' => "HOMBRE", 
    //'maria' => "MUJER",
    'jose' => array('sexo' => "MASCULINO", 'ojos' => "NEGROS"));

foreach ($z as $clave => $valor)
{
    echo($clave."  :<br /> Genero ".$valor['sexo']."<br /> y tiene ojos ".$valor['ojos']);
    echo("<br />");
}


