<?php
    include 'session.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Demo Login PHP</title>        
    </head>
    <body>
        
        Bienvenido: <b><?= $_SESSION['loginUser'] ?></b><br />
        Este contenido es s&oacute;lo visible para usuarios autenticados               
        <br />    
        
        <form action="logout.php" method="GET">            
            <input type="submit" name="logout" value="Cerrar Sesion" />
        </form> 
    </body>
</html>