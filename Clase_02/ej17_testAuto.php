<?php
/*En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,5)
*/
require_once "./Auto.php";

$auto1 = new Auto("Jeep","Amarillo");
$auto2 = new Auto("Jeep","Verde");
$auto3 = new Auto("Ford","Blanco", 300.00);
$auto4 = new Auto("Ford","Blanco", 700.00);
$auto5 = new Auto("Peugeot","Negro",250.00,new DateTime(2008-03-21));

echo "<br>Autos: <br>" ; 
echo $auto1->MostrarAuto($auto1);
echo $auto2->MostrarAuto($auto2);
echo $auto3->MostrarAuto($auto3);
echo $auto4->MostrarAuto($auto4);
echo $auto5->MostrarAuto($auto5);

echo "<br>Sumo Impuestos al Auto 3,4,5:<br>";

$auto3->AgregarImpuestos(1500.00);
$auto4->AgregarImpuestos(1500.00);
$auto5->AgregarImpuestos(1500.00);
echo $auto3->MostrarAuto($auto3);
echo $auto4->MostrarAuto($auto4);
echo $auto5->MostrarAuto($auto5);

$importeDouble = Auto::Add($auto1, $auto2);
echo "<br>La suma del precio entre jeeps iguales: $" . $importeDouble . "<br>";
$importeDouble = Auto::Add($auto3, $auto4);
echo "<br>La suma del precio entre fords: $" . $importeDouble . "<br>";

if($auto1->Equals($auto2))
{
    echo "<br>El primer auto es igual al segundo<br>";
} else {
    echo "<br>El primer auto es distinto al segundo<br>";
}

if($auto1->Equals($auto5))
{
    echo "<br>El primer auto es igual al quinto<br>";
} else {
    echo "<br>El primer auto es distinto al quinto<br>";
}

echo "<br>Autos impares: <br>" ; 
$autos = array($auto1,$auto2,$auto3,$auto4,$auto5);
for($i=0;$i < count($autos);$i++)//comienzo en el indice 0 == auto1
{
    if($i%2 == 0) //si mi iterador empieza en 0: mi auto1 es indice 0, auto3 es indice 2, auto5 es indice 4 
    {
        echo $autos[$i]->MostrarAuto($autos[$i]); //muestro autos 1, 3 y 5
    }
}
?>