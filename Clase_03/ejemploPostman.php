<?php
//HTTP - HyperText Transfer Protocol
//Permite enviar y recibir datos (hypertextos) a través de un protocolo de
//comunicacion entre archivos.
//Para traer recursos del servidor usamos: 
//$_GET; // -> http GET desde el navegador son todas get
//$_POST; // -> http POST viajan en el body y no en la url
//Post trae de manera segura data sensible


//var_dump($_GET);
//echo $_GET['nombreUsuario'] . ' ' . $_GET['rol'];

//json:
//data via get
//echo json_encode($_GET, true );
//data via post
//echo json_encode($_POST, true );
//data del server
//echo json_encode($_SERVER, true);

//para cargar archivos
var_dump($_FILES);
?>