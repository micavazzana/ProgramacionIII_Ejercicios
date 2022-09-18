<?php
// Vazzana Micaela
// Ejercicio 07
/*
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta
(recordar que el salto de línea en HTML es la etiqueta <br/>). 
Repetir la impresión de los números utilizando las estructuras while y foreach.
 */

$vec = array ();
$num = 1;
$i = 0;

//Cargo el array solo con impares
while($num<10)
{
    if($num%2 != 0)
    {
        $vec[$i] = $num;
        $i++;
    }
    $num++;
}

echo "Muestro con FOR:</br>";
//Muestro lo que tiene el array con FOR
$i=0;
for(;$i<sizeof($vec);$i++)
{
   echo $vec[$i] . "</br>";
}

echo "Muestro con WHILE:</br>";
//Muestro lo que tiene el array con WHILE
$i=0;
while($i<sizeof($vec))
{
    echo $vec[$i] . "</br>";
    $i++;    
}

echo "Muestro con FOREACH:</br>";
//Muestro lo que tiene el array con FOREACH
foreach($vec as $numImpar)
{
   echo $numImpar . "</br>";
}

?>