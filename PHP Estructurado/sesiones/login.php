<?php

//$_GET['username'];
//$_GET['password'];
//
//echo $_GET['username'], '  y ' , $_GET['password'], ' son los datos ingresados en el formulario.';

$_POST['username'];
$_POST['password'];
$_POST['session'];

//echo $_POST['username'], '  y ' , $_POST['password'], ' son los datos ingresados en el formulario.';

if(isset($_POST['username']) and isset($_POST['password']))
{
    if(empty($_POST['username']) or empty($_POST['password']))
    {
        header('location: index.php?error=1');
        //echo 'debe llenar los dos campos para poder entrar';
    }else
    {
        if($_POST['username'] == 'user1' and $_POST['password'] == 'pass1')
        {
            session_start();//ve las sesiones que estan activas para asignarlas a las variables session
                            //Para poder crear variables de session debo tener un session_start();
            if($_POST['session'] == 1)
            {
                ini_set(session_cookie_lifetime, time() + (60*60));
            }
            
            $_SESSION['usuario'] = $_POST['username'];//Las sessiones pueden durar solo 20 min. 
                                                      //funcionan igual que las variables cookies para utilizarlas se debe declarar la session_start();
            header('location: accedido.php');//'el usuario y password ingresados son correctos';
        }else
        {
            header('location: index-php?error=2');
            //echo 'no es correcto el usuario o el password ingresado';
        }
    }
}else
{
    header('location: index.php?error=3');
    //echo 'no estan definidas las variables de username y password.';
}
