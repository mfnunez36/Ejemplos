<?php

if(isset($_GET['error']))
{
    if($_GET['error'] == 1)
    {
        echo 'ERROR: Debe ingresar todos los datos.';
    }else if($_GET['error'] == 2)
    {
        echo 'ERROR: Los datos inresados no son los correctos.';
    }else if($_GET['error'] == 3)
    {
        echo 'ERROR: Se debe ingresar solo via login.';
    }else if($_GET['error'] == 4)
    {
        echo 'ERROR: NO intentes acceder sin iniciar session.';
    }
    unset($_GET['error']);
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Acceso Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- <form action="Includes/login.php" method="GET"> -->
        <form action="login.php" method="POST">
            <label>Username : </label><input type="text" name="username" value=""/></br>
            <label>Password : </label><input type="password" name="password" value=""/></br>
            <label>Recordarme <input type="checkbox" name="session" value="1" /></label><br />
            <input type="submit" name="entrar" value="Entrar"/></br>
        </form>
    </body>
</html>
