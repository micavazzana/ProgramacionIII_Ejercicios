<?php
/*En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.*/
require_once "./Garage.php";

$auto1 = new Auto("Jeep","Amarillo");
$auto2 = new Auto("Fiat","Verde");
$auto3 = new Auto("Ford","Blanco", 300.00);
$auto4 = new Auto("Ford","Blanco", 300.00);
$garage = new Garage("Garage", 150);

if($garage->Add($auto1) != -1 && $garage->Add($auto3) != -1)
{
    echo "Se añadieron autos correctamente: <br>";
    echo $garage->MostrarGarage();
} else {
    echo "No se pudieron añadir autos al garage";
}


echo "<br>PRUEBAS: <br>";

echo "<br>Intento agregar auto que ya existe: <br>";
if($garage->Add($auto4) != -1) //auto4 es igual a auto3 ya agregado
{
    echo "Se añadio correctamente";
} else {
    echo "El auto ya existe";
}

echo "<br>Intento eliminar auto que no existe: <br>";
if($garage->Remove($auto2) != -1)//auto2 no fue agregado
{
    echo "El auto se ha eliminado exitosamente";
} else {
    echo "El auto no existe";
}

echo "<br>Intento eliminar auto que si existe: <br>";
if($garage->Remove($auto1) != -1)//auto1 ya fue agregado
{
    echo "El auto se ha eliminado exitosamente";
} else {
    echo "El auto no existe";
}

echo "<br> GARAGE POST PRUEBAS <br>" .  $garage->MostrarGarage();

?>