<?php
		//PREGUNTAR PORQUE NO VA
		include("config.php");
		//obtenemos el correo  y la contraseña:
		$mail = trim($_POST['correo']);
		$pass = trim($_POST['contra']);
		
		//variable que define que el correo existe, si es 0 no existe.
		$findmail = 0;
		
		//comprobamos al existencia del email en la BD:
		$query = "select password FROM cliente WHERE email = '$mail'";
		
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
			
			//inicia sesion al logear
			session_start();
			echo 'Bienvenido';
			$_SESSION['user']  = $mail;
			header("location: index.php");
			
		} 	
?>