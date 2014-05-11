<?php
	//Conectamos BD
	$link = mysql_connect('localhost', 'user', 'contraseña') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('prueba') or die('No se pudo seleccionar la base de datos');
		
		
		//obtenemos el correo  y la contraseña:
		$mail = trim($_POST['correo']);
		$pass = trim($_POST['contra']);
		
		//variable que define que el correo existe, si es 0 no existe.
		$findmail = 0;
		
		//comprobamos al existencia del email en la BD:
		$query = "select * FROM cliente";
		
		//lanzamos consulta para insertar los datos en la BD;
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		$filas = mysql_num_rows($res);
	
		if ($filas != 0) {
			for ($i = 0; $i < 5; $i++) {
				$correo[$i] = mysql_result($res, $i, "email");
				if ($mail == $correo[$i]) {
					//el correo existe
					$findmail = 1;
				}
				else{
					//mensaje en el caso de que el correo no exista.
					
				}
			}
		}
		//Si el correo existe se realiza otra consulta para averiguar la coincidencia de la contraseña
		if ($findmail == 1) {
			$query2 = "SELECT password FROM cliente WHERE email == '$mail'";
			$res2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
			$filas2 = mysql_num_rows($res2);
			if ($filas != 0) {
				for ($i = 0; $i < 5; $i++) {
					$contra[$i] = mysql_result($res, $i, "password");
					//mensaje en el caso de que la contraseña no coincida.
					if ($pass != $contra[$i]) {
						echo "Correo o contraseña no coinciden con un usuario registrado";
					}
					else {
						//Iniciar sesion
						//TODO incorporar las variables de sesion para logear correctamente en la pagina.
					}
				}
			}
		}
		
?>