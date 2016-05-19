<?php

class otraClase implements miInterface
{
    public function guardarNombre() 
    {
        echo 'Esta es la implementacion del metodo guardar nombre';
    }
    
}
$E = new otraClase();
$E->guardarNombre();