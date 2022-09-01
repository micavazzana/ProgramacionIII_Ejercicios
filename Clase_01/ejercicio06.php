<?php
// Vazzana Micaela
// Ejercicio 06
/*Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/

$vec = array (rand(1,9),rand(1,9),rand(1,9),rand(1,9),rand(1,9));
$promedio = 0;

for($i = 0; $i< 5; $i++)
{
    echo $vec[$i] . "<br>";
    $promedio += $vec[$i];
}
$promedio = $promedio / 5;

if($promedio > 6)
{
    echo "Promedio: $promedio <br>El promedio es mayor a 6";
}
else if($promedio < 6)
{
    echo "Promedio: $promedio <br>El promedio es menor a 6";
}
else
{
    echo "Promedio: $promedio <br>El promedio es igual a 6";
}
?>