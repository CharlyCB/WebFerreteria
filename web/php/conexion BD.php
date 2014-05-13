<?php

	//FUNCIONA CORRECTAMENTE

		$link = mysql_connect('localhost', 'user', 'contraseña') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('prueba') or die('No se pudo seleccionar la base de datos');
		
		// Realizar una consulta MySQL
		$query = "INSERT INTO registro (usuario,contra) VALUES('$user','$contra')";
		
		//Lanzar consulta a la BD
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>


	
<?php
	//comprobar loggin
	
	//Posibilidad de hacer el loggin mediante esta forma, preguntar a chema si es posible esto:
	
	
	$user = isset($_POST["usuario"]);
	$contra = isset($_POST["contra"]);
	
	$query = "SELECT Pass FROM cliente WHERE correo='$user'";
	$result = mysql_query($query) or die('Usuario no encontrado ' . mysql_error());
	if ($result == "" || $result == null || $result != $contra) {
		echo "el usuario o la contraseña no son los correctos";
	}
	
		
		


?>