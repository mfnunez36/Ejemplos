<?php

include('Imprimir.php');
include('Estatico.php');

echo '<h3>ESTO ES CALCULO SUMAR</h3>';
$calc = new Imprimir(10, 10);
$calc->Sumar();

echo '<br />';
echo '<h3>ESTO ES DEL METODO ESTATICO</h3>';
echo Estatico::Impreso2('Esto esta ingresado mediante el metodo estatico <br />'.
'el cual permite que se pueda llamar sin instanciar la clase.');
//$objetoestatico = new Estatico('Esto se ingresó en impreso mediante el constructor.');
//echo $objetoestatico->Impreso();