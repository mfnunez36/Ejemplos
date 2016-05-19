<?php
    include_once './config.php';
    require_once ROOT_DIR.'/model/dao/UsuarioDao.class.php';
    require_once ROOT_DIR.'/model/Usuario.class.php';
    
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $daoUsuario = new UsuarioDao();
        $usuario = $daoUsuario->autenticate($_POST["username"], $_POST["password"]);
        
        if($usuario!=NULL) {
            //session_register($usuario);
            $_SESSION['loginUser'] = $usuario->getNombre();
            header("location: inicio.php");
        }else {
            $loginError = "El email o clave no es v&aacute;lido";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
    </head>
    <body>
        <?php
            if(isset($loginError)) {                
        ?>
        <div class="loginError">
            <p><?= $loginError ?></p>
        </div>
        <?php
            }
        ?>           
        
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td>Username : </td>
                    <td>
                        <input type="username" name="username" value="" />
                    </td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td>
                        <input type="password" name="password" value="" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="login" value="Entrar" />
                        <input type="button" name="cancelar" value="Cancelar" />
                    </td>
                </tr>
            </table>            
        </form>
        
    </body>
</html>
