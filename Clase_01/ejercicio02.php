<?php
// Vazzana Micaela
// Ejercicio 02
/*
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/

//Muestro fecha actual
echo date("d-m-Y H:i:s");

//muestro con otros formatos
echo "<br>". date("D.M.Y");
echo "<br>". date("Y.m.d");


$mes = (int)date("m");
$dia = (int)date("d");

//Chequeo que mes estamos y segun el caso imprimo en que estacion estamos
if($mes > 3 && $mes < 6 || ($mes == 3 && $dia >=21) || ($mes == 6 && $dia < 21))
{
    echo "<br>Estamos en Otoño";
}
else if($mes > 6 && $mes < 9 || ($mes == 6 && $dia >= 21) || ($mes == 9 && $dia < 21))
{
    echo "<br>Estamos en Invierno";
}
else if($mes > 9 && $mes < 12 || ($mes == 9 && $dia >= 21) || ($mes == 12 && $dia < 21))
{
    echo "<br>Estamos en Primavera";
}
else
{
    echo "<br>Estamos en Verano";
}

?>