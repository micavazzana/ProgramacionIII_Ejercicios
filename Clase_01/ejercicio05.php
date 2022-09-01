<?php
// Vazzana Micaela
// Ejercicio 05
/*Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.*/

$num = 35;

$primerDigito = (int)($num /10);
$segundoDigito = $num %10;

switch($primerDigito)
{
    case 2: 
        $decimaTexto = "veinte";
        break;
    case 3: 
        $decimaTexto = "treinta";
        break;
    case 4: 
        $decimaTexto = "cuarenta";
        break;
    case 5: 
        $decimaTexto = "cincuenta";
        break;
    case 6: 
        $decimaTexto = "sesenta";
        break;
}

switch($segundoDigito)
{
    case 1: 
        $unidadTexto = "uno";
        break;
    case 2: 
        $unidadTexto = "dos";
        break;
    case 3: 
        $unidadTexto = "tres";
        break;
    case 4: 
        $unidadTexto = "cuatro";
        break;
    case 5: 
        $unidadTexto = "cinco";
        break;
    case 6: 
        $unidadTexto = "seis";
        break;
    case 7: 
        $unidadTexto = "siete";
        break;
    case 8: 
        $unidadTexto = "ocho";
        break;
    case 9: 
        $unidadTexto = "nueve";
        break;
}

if($num >= 20 && $num <= 60)
{
    echo "Numero: $num <br>";
    if($segundoDigito != 0)
        echo $decimaTexto . " y " . $unidadTexto;
    else
        echo $decimaTexto;
}
else
{
    echo "fuera del rango estipulado";
}
?>