<?
		//Realizar una consulta MySQL
		$mail = "carlos.coloborde@gmail.es";
		$query = "SELECT * FROM cliente WHERE email = '$mail'";
		
		
		//Lanzar consulta a la BD
		
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		$filas = mysql_num_rows($res);
		
		if ($filas != 0) {
			for ($i = 0; $i < $filas; $i++) {
				$correo[$i] = mysql_result($res,$i, "email");
				/*$pass = mysql_result($res, 0, "password");
				$nombre = mysql_result($res, 0, "nombre");
				$apellidos = mysql_result($res, 0, "apellidos");
				$Dni = mysql_result($res, 0, "dni");
				$telf = mysql_result($res, 0, "telf");
				$dir = mysql_result($res, 0, "direccion");
				$pais = mysql_result($res, 0, "pais");
				$ciudad = mysql_result($res, 0, "ciudad");
				$postal = mysql_result($res, 0, "codpost");
				$dir_env = mysql_result($res, 0, "dir_envio");
				$provincia = mysql_result($res, 0, "provincia");*/
				}
			
		
		
		echo "<h1>$correo[0] FINGARO</h1>"; 
				 
?>