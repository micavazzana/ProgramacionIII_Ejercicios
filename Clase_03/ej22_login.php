<?php
/* Vazzana Micaela Sol
Aplicación No 22 ( Login)
Archivo: Login.php
método:POST
Recibe los datos del usuario(clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado,
Retorna un :
“Verificado” si el usuario existe y coincide la clave también.
“Error en los datos” si esta mal la clave.
“Usuario no registrado si no coincide el mail“
Hacer los métodos necesarios en la clase usuario*/
require_once "./Usuario.php";

$userAComparar = new Usuario("user",$_POST['contraseña'],$_POST['mail']);

$retorno = Usuario::ValidarUsuario($userAComparar);
echo $retorno;
/*
if($retorno == 0)
{
    echo "Verificado"; //existe
} else if($retorno  == 1){
    echo "Error en los datos"; //esta mal la clave
} else if($retorno  == -1){
    echo "Usuario no registrado"; //mail no coincide
} else {
    echo "Error";
}*/
?>