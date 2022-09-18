<?php
/* Vazzana Micaela Sol
Aplicación No 20 (Registro CSV)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario*/
require_once "./Usuario.php";

$user = new Usuario($_POST['nombreUsuario'],$_POST['contraseña'],$_POST['mail']);

if($user->AltaUser())
{
    echo "Guarde el user con éxito \n";
} else {
    "Algo malio sal \n";
}

echo $user->MostrarUser();

?>