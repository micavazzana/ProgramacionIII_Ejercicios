<?php
// Vazzana Micaela
// Ejercicio 12
/*Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/
function InvertirPalabra($palabra)
{
    $nuevaCadena = " ";
    $largoPalabra = count($palabra)-1;
    for($i=$largoPalabra;$i>-1;$i--)
    {
        $nuevaCadena .= $palabra[$i];
    }
    return $nuevaCadena;
}

echo InvertirPalabra(array ("H","O","L","A"));
?>