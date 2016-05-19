<?php

class Usuario 
{
    private $id;
    private $nombre;
    private $username;
    private $password;
    
    public function __construct($id, $nombre, $username, $password) 
    {
        $this->nombre = $nombre;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setId($id) 
    {
        $this->id = $id;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
}
