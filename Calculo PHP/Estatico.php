<?php

class Estatico 
{
    private $propiedad;
    
    public function __construct($parametro)
    {
        $this->propiedad = $parametro;
    }
    
    public function Impreso()
    {
        return $this->propiedad;
    }
    
    public static function Impreso2($algo)
    {
        return $algo;
    }
    
}
