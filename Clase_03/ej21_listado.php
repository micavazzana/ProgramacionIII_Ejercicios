<?php
/* Vazzana Micaela Sol
Aplicación No 21 ( Listado CSV y array de usuarios)
Archivo: listado.php
método:GET
Recibe qué listado va a retornar(ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos
usuarios).
En el caso de usuarios carga los datos del archivo usuarios.csv.
se deben cargar los datos en un array de usuarios.
Retorna los datos que contiene ese array en una lista
<ul>
<li>Coffee</li>
<li>Tea</li>
<li>Milk</li>
</ul>
Hacer los métodos necesarios en la clase usuario */
require_once "./Usuario.php";

switch($_GET['listado'])
{
    case "Usuario":
        $users = Usuario::LeerUsers();
        echo Usuario::ListarUsuarios($users);
        break;
    case "Productos":
        echo "todavia no nada";
        break;
    case "Vehiculos":
        echo "todavia no nada";
        break;
}
?>