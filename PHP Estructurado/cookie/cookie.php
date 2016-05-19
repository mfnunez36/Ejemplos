<?php
//Para que la cookie exista una cookie debe recargarse la pagina.
//La cookie se guarda en la carpeta creada que en este caso fue en cookie
////si trabajamos con cookies debemos utilizar $_REQUEST en vez de post
//con $_REQUEST es para POST Y GET 
//para borrar una cookie de la siguiente manera:
//setcookie('color','',time() - (60*60),'/');
$color = '';

if(!empty($_COOKIE['color']))//aqui estamos llamando a la cookie que esta en setcookie ("color")
{
    $color = $_COOKIE['color'];
}

//if(isset($_POST['miradio']))
//{
//    if($_POST['miradio'] == 1)
//    {
//        setcookie('color','red',time() + (60*60),'/'); 
//        //(60*60) significa el tiempo que dura la cookie activa
//        //si se le pone un cero donde tenemos colocado el time()
//        // la cookie durara asta que el navegador se cierre.
//        header('location: cookie.php');
//    }
//    else if($_POST['miradio'] == 2)
//    {
//        setcookie('color','blue',time() + (60*60),'/');
//        header('location: cookie.php');
//    }
//    echo $_POST['miradio'];
//}

if(isset($_REQUEST['miradio']))
{
    if($_REQUEST['miradio'] == 1)
    {
        setcookie('color','red',time() + (60*60),'/'); 
        //(60*60) significa el tiempo que dura la cookie activa
        //si se le pone un cero donde tenemos colocado el time()
        // la cookie durara asta que el navegador se cierre.
        header('location: cookie.php');
    }
    else if($_REQUEST['miradio'] == 2)
    {
        setcookie('color','blue',time() + (60*60),'/');
        header('location: cookie.php');
    }
    //echo $_REQUEST['miradio'];
}

?>
<html>
    <head><title>Mis Cookies</title></head>
    
    <body style="background-color: <?php echo $color; ?>;">
        <form action="cookie.php" method="POST">
            <label>Elegir color rojo<input type="radio" name="miradio" value="1" /></label><br />
            <label>Elegir color azul<input type="radio" name="miradio" value="2" /></label><br />
            <br />
            <input type="submit" name="Elegir Color de fondo" />
        </form>
    </body>
        
    
</html>