<?php
	//PREGUNTAR PORQUE NO VA

	//Conectamos BD
	$link = mysql_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('proyecto') or die('No se pudo seleccionar la base de datos');
		
		
		//obtenemos el correo  y la contraseña:
		$mail = trim($_POST['correo']);
		$pass = trim($_POST['contra']);
		
		//variable que define que el correo existe, si es 0 no existe.
		$findmail = 0;
		
		//comprobamos al existencia del email en la BD:
		$query = "select password FROM cliente WHERE mail = '$mail'";
		
		//lanzamos consulta para insertar los datos en la BD;
		
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		if (mysql_num_rows($res) <= 0){
			echo "No existe registro";
			return false;
		}
		else if($pass != mysql_result($res, 0, "password")){
			echo "Contraseña invalida";
			return FALSE;
		}
		else {
			session_start();

			echo 'Bienvenido';
			
			$_SESSION['Usuario']  = $mail;
		} 	
		
						//Iniciar sesion
						//TODO incorporar las variables de sesion para logear correctamente en la pagina.
						header("location: novedades.php");

?>