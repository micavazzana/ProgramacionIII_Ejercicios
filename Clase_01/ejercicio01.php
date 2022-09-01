<?php
// Vazzana Micaela
// Ejercicio 01
/*Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros 
desde 1 mientras la suma no supere a 1000. 
Mostrar los números sumados y al finalizar el proceso 
indicar cuantos números se sumaron.
*/

$acumulador = 0;

for($i=1;$acumulador<1000;$i++)
{
    echo "Numero: $acumulador <br>";
    $acumulador+=$i;
}
echo "Cantidad de numeros sumados: $i";
?>