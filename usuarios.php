<?php
 include ("conexion.php");

	if(isset($_POST["insert"])){
		$id_usuario = $_POST["idUser"];
		$password = $_POST["Contraseña"];
        $nombre = $_POST["Nombre"];
		$apellidop = $_POST["ApellidoP"];
        $apellidom = $_POST["ApellidoM"];
		$correo = $_POST["Email"];

		$insertar = "INSERT INTO usuario (idUser,Contraseña,Nombre,ApellidoP,ApellidoM,Email) VALUES ('$id_usuario', '$password','$nombre','$apellidop','$apellidom','$correo')";//creamos la consulta
		$ejecutar = mysqli_query($con, $insertar);//la ejecutamos 

		if ($ejecutar){
			echo "<h3>Insertado Correctamente</h3>";//si la insersion es correcta muestra este msj por medio de una condicion
		}
	}
?>