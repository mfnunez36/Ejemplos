<?php

class Primera
{
    protected $algo;//para que se pueda heredar es protected palabra reservada.
    
    
    public function __construct($parametro) 
    {
        $this->algo = $parametro;
    }
    
    public function Imprimir()
    {
        echo $this->algo;
    }
}
