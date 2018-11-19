<?php
	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['alias']) && isset($_POST['password']) && isset($_POST['email']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$alias = $_POST['alias'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		

		$query = "INSERT INTO usuarios(nombres_usuario, apellidos_usuario, correo_usuario, alias_suaurio, clave_usuario) VALUES('$nombre','$apellido','$alias','$password','$email')";
		
		if (!$result = mysqli_query($con, $query)) {
			exit(mysqli_error($con));
			echo "Al parecer tenemos problemas con la base $nombre, intentalo mas tarde";
	    }
	    echo "Felicidades $nombre, ahora a crear tus anuncios";
	}
?>