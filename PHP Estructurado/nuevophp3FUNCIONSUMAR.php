<?php

function mensaje()
{
    return "mensaje de la funcion";
    
}

echo(mensaje());
echo("<br/>");

function sumar($a, $b)
{
    return $a + $b;
}

echo(sumar(12, 12));
echo("<br/>");
echo("<br/>");
echo("<br/>");

function condicion($x)
{
    if($x > 0)
    {
        $c = "x es mayor que cero";
    }else
    {
        $c = "x es menor que cero";
    }
    return $c;
}

echo(condicion(-20));


?>

