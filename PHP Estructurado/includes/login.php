<?php

//$_GET['username'];
//$_GET['password'];
//
//echo $_GET['username'], '  y ' , $_GET['password'], ' son los datos ingresados en el formulario.';

$_POST['username'];
$_POST['password'];

echo $_POST['username'], '  y ' , $_POST['password'], ' son los datos ingresados en el formulario.';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//$username = user1;
//$password = pass1;

if(empty($_POST['username']) or empty($_POST['password']))
{
    echo 'debe llenar los dos campos para poder entrar';
}else
{
    if($_POST['username'] == 'user1' and $_POST['password'] == 'pass1')
    {
        echo 'el usuario y password ingresados son correctos';
    }else
    {
        echo 'no es correcto el usuario o el password ingresado';
    }
}