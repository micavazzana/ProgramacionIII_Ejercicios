<?php
// Vazzana Micaela
// Ejercicio 18
/* Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.

En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.*/
require_once "./Auto.php";

class Garage
{
    private string $_razonSocial;
    private float $_precioPorHora;
    private array $_autos;

    public function __construct($razonSocial, $precioPorHora = 0.0)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos = array();
    }
    //Realizar un método de instancia llamado “MostrarGarage”, 
    //que no recibirá parámetros y que mostrará todos los atributos del objeto.
    function MostrarGarage()
    {
        $cadena = "<br>Razon Social: $this->_razonSocial" . 
        "<br>Precio por hora: $this->_precioPorHora" .
        "<br>Autos: <br>";
        
        foreach($this->_autos as $a)
        {
            $cadena .= "<br>". $a->MostrarAuto();
        }
        return $cadena;
    }
    //Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
    //objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
    function Equals(Auto $a)
    {
        foreach($this->_autos as $autoExiste)
        {
            if($autoExiste->Equals($a))
            {
                return true;
            }
        }
        return false;
    }
    //Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
    //(sólo si el auto no está en el garaje, de lo contrario informarlo). Ejemplo: $miGarage->Add($autoUno);
    function Add(Auto $a)
    {
        if(!$this->Equals($a))
        {
            array_push($this->_autos,$a);
        }
    }
    //Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
    //“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo: $miGarage->Remove($autoUno);
    function Remove(Auto $a)
    {
        if($this->Equals($a))
        {
            $key = array_search($a,$this->_autos); //https://www.w3schools.com/php/func_array_search.asp
            array_splice($this->_autos,$key); //???????????????????
        }
    }

}
?>