<?php
// Vazzana Micaela
// Ejercicio 19 - Poo + Archivos
require_once "..\Clase_02\Auto.php";

$auto1 = new Auto("Jeep","Amarillo");
$auto2 = new Auto("Fiat","Verde");
$auto3 = new Auto("Ford","Blanco", 300.00);
$auto4 = new Auto("Ford","Blanco", 700.00);
$auto5 = new Auto("Peugeot","Negro",250.00,new DateTime(2008-03-21));

$autos = array($auto1,$auto2,$auto3,$auto4,$auto5);
Auto::altaAuto($autos);

Auto::leerAutos();

?>