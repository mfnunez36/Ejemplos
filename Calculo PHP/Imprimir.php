<?php

include('Calcular.php');

class Imprimir extends calcular
{
    public function Sumar()
    {
        parent::Sumar();//esto es para no sobreescribir el metodo que se llama 
                        //igual aunque estamos accediendo igual a todo su contenido
        echo 'resultado es: ', $this->resultado;
    }
    
}
