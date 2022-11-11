<?php

$servername = "localhost"; 
$database = "usuarios";
$username = "root";
$password = "";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);//aqui se hace una consulta para hacer una conexion
// Caqui creamos una condicion donde compara y si falla la conexion aparece una pagina que dice que no sirve
if (!$con) {
    die( include echo "Error 404" . mysqli_connect_error());
}

?>