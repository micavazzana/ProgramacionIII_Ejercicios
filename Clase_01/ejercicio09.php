<?php
// Vazzana Micaela
// Ejercicio 09
/*Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras. */

$lapicera1 = array("Color" => "Azul", "Marca" => "Bic", "Trazo" => "Fino", "Precio" => "$50");
$lapicera2 = array("Color" => "Rojo", "Marca" => "Bic", "Trazo" => "Grueso", "Precio" => "$45");
$lapicera3 = array("Color" => "Verde", "Marca" => "Bic", "Trazo" => "Fino", "Precio" => "$55");

$lapiceras = array($lapicera1, $lapicera2, $lapicera3);

for($i=0;$i<count($lapiceras);$i++)
{
    echo "Lapicera $i </br>";
    foreach($lapiceras[$i] as $clave => $valor)
    {
        echo $clave . ": " . $valor . "</br>";
    }
    echo "</br>";    
}
?>