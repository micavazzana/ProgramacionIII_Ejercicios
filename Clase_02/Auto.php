<?php
// Vazzana Micaela
// Ejercicio 17
/* Aplicación No 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos privados:

_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha. */

class Auto
{
    private string $_marca;
    private string $_color;
    private float $_precio;
    private DateTime $_fecha;

    public function __construct($marca, $color, $precio = 0.0, $fecha = null)
    {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        if($fecha != null)
        {
            $this->_fecha = $fecha;
        } else {
            $this->_fecha = new DateTime();
        }
    }
    //Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
    //parámetro y que se sumará al precio del objeto.
    function AgregarImpuestos($impuesto)
    {
        if(is_double($impuesto) && $impuesto > 0)
            $this->_precio += $impuesto;
    }
    //Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    //por parámetro y que mostrará todos los atributos de dicho objeto.
    function MostrarAuto(Auto $auto)
    {
        return
        "<br>Marca: $auto->_marca" . 
        "<br>Color: $auto->_color" . 
        "<br>Precio: $auto->_precio" . 
        "<br>Fecha: ". $auto->_fecha->format("d-m-Y") . "<br>";
    }
    //Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    //devolverá TRUE si ambos “Autos” son de la misma marca.
    function Equals(Auto $a)
    {
        return $this->_marca == $a->_marca;
    }
    //Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    //de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
    //la suma de los precios o cero si no se pudo realizar la operación.
    //Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
    static function Add(Auto $a1, Auto $a2)
    {
        if($a1->Equals($a1,$a2) && $a1->_color == $a2->_color)
        {
            return $a1->_precio + $a2->_precio;
        }
        else
        {  
            return 0;
        }
    }


    ////   EJERCICIO 19 - POO + ARCHIVOS   ////

    static function ImprimirAuto(Auto $auto)
    {
        return
        $auto->_marca . "," .
        $auto->_color . "," .
        $auto->_precio . "," .
        $auto->_fecha->format("d-m-Y") . PHP_EOL;
    }
    static function altaAuto($autos)//en vez de recibir un solo auto recibir un array
    {
        $archivo = fopen("autos.csv","a+");
        //hago un foreach $autos as $auto
        foreach($autos as $auto)
        {
            fwrite($archivo, Auto::ImprimirAuto($auto));
        }
        fclose($archivo);
    }   

    static function leerAutos()
    {
        $archivo = fopen("autos.csv","r");
        
        while(!feof($archivo))
        {
            echo fgets($archivo) . "<br>";
        }
        fclose($archivo);
    }
}
?>