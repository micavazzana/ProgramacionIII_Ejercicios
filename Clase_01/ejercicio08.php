<?php
// Vazzana Micaela
// Ejercicio 08
/*Aplicación No 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo'; */

$v[1]=90; 
$v[30]=7; 
$v['e']=99; 
$v['hola']= 'mundo';

foreach($v as $clave => $valor)
{
    echo $clave ." - " . $valor . "</br>";
}

?>