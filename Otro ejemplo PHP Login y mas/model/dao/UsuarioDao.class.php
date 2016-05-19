<?php

require_once ROOT_DIR.'/model/dao/DBConection.class.php';

class UsuarioDao 
{
    private $conection;
    
    function __construct() {
        $this->conection = DBConection::getInstance();
    }
    
    public function autenticate($username, $password) {

        $this->conection->set_charset("utf-8");
        
        if($preparedStmt = $this->conection->prepare("SELECT nombre, username, password FROM usuario WHERE username = ? AND password = PASSWORD(?)")) {
            
            $preparedStmt->bind_param("ss",$username, $password);
            $preparedStmt->bind_result($dbusername, $dbpassword, $dbnombre);
            $preparedStmt->execute();

//            if($preparedStmt->fetch()) {
//                $user = new Usuario($dbusername,$dbpassword,$dbnombre);  
//            } else {
//                $user = null;
//            }
        } else {
            throw new Exception('no se pudo preparar la consulta a la base de datos: '.$this->conection->error);
        }
        
        return $user;
    }
    
    
    
}
