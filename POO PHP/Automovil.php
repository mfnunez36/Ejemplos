<?php

class Automovil 
{
    protected $color;
    protected $velocidad;
    protected $motor;
    //public $prueba;
    
    public function Arrancar($velo, $mot)
    {
        $this->velocidad = $velo;
        $this->motor = $mot;
        echo 'Arranca altoke. ', $this->velocidad, ' - ', $this->motor;
    }
    
    public function Frenar()
    {
        echo ' Freno altoke.';
    }
    
    /*public function MiMetodo($parametro)
    {
        $this->prueba = $parametro;
        return $this->prueba;
    }*/
    
    public function DeterminarColor($color)
    {
        $this->color = $color;
        echo ' y tiene un color de ', $this->color;
    }    
       
}

class Moto extends Automovil
{
    private $ruedas;
    
    /*public function Ruedas($parametro)
    {
        $this->ruedas = $parametro;
        return $this->ruedas;
    }*/
    
    public function __construct($ruedas_cant, $velocidad, $motor, $color) 
    {
        $this->ruedas = $ruedas_cant;
        $this->velocidad = $velocidad;
        $this->motor = $motor;
        $this->color = $color;
    }
    
    public function Color()
    {
        return $this->color;
    }
    
    public function Todo()
    {
        echo 'nueva velocidad ',$this->velocidad, ' nuevomotor ', $this->motor, ' nuevocolor ', $this->color;
    }
    
}

#Creando objeto y utilizando metodos (Functions).
$moto = new Moto(2, '100 Km/h', ' motor chico ', ' nogroclaro');
//echo $moto->Ruedas(2);
$moto->DeterminarColor('Azul');
echo '<br />';
echo $moto->Color(),'<br />';
$moto->Todo();

#Creando objeto y utilizando metodos (Functions).
$ferrari = new Automovil();
$ferrari->Arrancar(' 400 km/h', ' Motor filete ');
$ferrari->DeterminarColor(' Negro/Blanco Metalico');
$ferrari->Frenar();
echo '<br />';
//$ferrari->prueba;
//echo $ferrari->MiMetodo('hola este es mi metodo.');
echo '<br />';
//echo $ferrari->prueba;

