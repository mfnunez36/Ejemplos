<?php

class calcular 
{
    protected $num;
    protected $num2;
    protected $resultado;
    
    function __construct($num, $num2) 
    {
        $this->num = $num;
        $this->num2 = $num2;
    }

    public function Sumar()
    {
        $this->resultado = $this->num + $this->num2;
        return $this->resultado;
    }
}
