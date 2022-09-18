<?php

class Usuario
{
    private $_usuario;
    private $_clave;
    private $_mail;

    /**
     * Constructor. Crea un objeto de tipo Usuario
     * @param $usuario nombre de usuario
     * @param $clave constraseña del usuario
     * @param $mail mail del usuario
     */
    function __construct($usuario, $clave, $mail)
    {
        $this->_usuario = $usuario;
        $this->_clave = $clave;
        $this->_mail = $mail;
    }

    /**
     * Da de alta un usuario guardandolo en un archivo .csv
     * @return boolean True si pudo escribir en el archivo los datos del usuario False caso contrario
     */
    public function AltaUser()
    {
        $retorno = false;
        $archivo = fopen("usuarios.csv", "a+");
        if (fwrite($archivo, $this->_usuario . "," . $this->_clave . "," . $this->_mail . PHP_EOL)) {
            $retorno = true;
        }
        fclose($archivo);
        return $retorno;
    }

    /**
     * Muestra el nombre de usuario
     * @return string Cadena con el nombre de usuario
     */
    public function MostrarUser()
    {
        return "El user es:  $this->_usuario";
    }
    public function MostrarDatos()
    {
        return "El mail es:  $this->_mail y clave: $this->_clave" ;
    }

    /**
     * Lee el archivo .csv donde fueron guardados los datos del usuario
     * Estos datos son almacenados en un array de objetos Usuario
     * @return array de objetos Usuario
     */
    public static function LeerUsers()
    {
        $users = array();
        $archivo = fopen("usuarios.csv", "r");
        while (!feof($archivo)) {
            $lineaLeida = fgets($archivo);
            if (!empty($lineaLeida)) {
                $arrayStr = explode(",", $lineaLeida);
                array_push($users, new Usuario($arrayStr[0], $arrayStr[1], $arrayStr[2]));
            }
        }
        fclose($archivo);
        return $users;
    }

    /**
     * Concatena en una cadena cada usuario en items de una lista
     * @param array de objetos Usuario que iterara para concatenar sus datos en forma de lista
     * @return string cadena con los items de la lista de Usuario
     */
    public static function ListarUsuarios($users)
    {
        $cadena = "<ul>";
        foreach ($users as $u) {
            $cadena .= "<li> Usuario: $u->_usuario - Clave: $u->_clave - Mail: $u->_mail </li>";
        }
        $cadena .= "</ul>";
        return $cadena;
    }

    /**
     * Valida que el usuario exista en el listado
     * @param Usuario usuario a buscar
     * @return integer 0 si el usuario existe y coincide la clave
     *                 1 si esta mal la clave
     *                 -1 si el mail no coincide
     */
    public static function ValidarUsuario($userAComparar)
    {
        $retorno = "todo mal";//1;
        $usuariosExistentes = Usuario::LeerUsers();
        foreach ($usuariosExistentes as $u) 
        {
            if ($u->_clave == $userAComparar->_clave && $u->_mail == $userAComparar->_mail)
            {  
                $retorno = "lo encontre"; 
            }
        }
        return $retorno;
    }
}
