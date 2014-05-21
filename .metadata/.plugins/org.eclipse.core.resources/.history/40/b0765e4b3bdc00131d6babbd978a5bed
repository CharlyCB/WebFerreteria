<?php
	//FUNCIONA CORRECTAMENTE

	
	//muestra las novedades en la pantalla principal
	
	
	//Conectamos BD
	$link = mysql_connect('localhost', 'user', 'contraseña') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('prueba') or die('No se pudo seleccionar la base de datos');
		
		//Realizar una consulta MySQL
		//con el GROUP BY no repetira familias en la consulta.
		//La siguiente consulta obtiene las familias
		
		
		//mediante la variable enviada a traves de la url consultamos el contenido de dicha subfamilia
		//dicha variable contiene la subfamilia o categoria
		$query = "SELECT * FROM productos WHERE id_producto ='$urlvar'";
		//Lanzar consulta a la BD
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		$filas = mysql_num_rows($res);
		$count = 0;
	
			//obtenemos datos de producto:
			$nom_produc = mysql_result($res, 0, "nombre");
			$id_produc = mysql_result($res, 0, "id_productos");
			$precio_produc = mysql_result($res, 0, "precio");
			$familia = mysql_result($res, 0, "familia");
			$sub_familia = mysql_result($res, 0, "subfamilia");
		
?>