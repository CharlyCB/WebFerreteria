<?php
	//FUNCIONA PERFECTAMENTE


	//muestra las novedades en la pantalla principal
	
	
	//Conectamos BD
	$link = mysql_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('proyecto') or die('No se pudo seleccionar la base de datos');
		
		//Realizar una consulta MySQL
		$query = "SELECT * FROM productos ORDER BY fecha DESC";
		
		//Lanzar consulta a la BD
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		$filas = mysql_num_rows($res);
	
		if ($filas != 0) {
			//La siguiente consulta obtiene el nombre, la id, precio y fecha de los productos.
			//Cada valor se almacena en una posición distinta de los array siguientes, llegando a 4
			//para asi mostrar unicamente las 4 ultimas novedades.
			for ($i = 0; $i < 5; $i++) {
				$nom_produc[$i] = mysql_result($res, $i, "nombre");
				$id_produc[$i] = mysql_result($res, $i, "id_productos");
				$precio_produc[$i] = mysql_result($res, $i, "precio");
				$fecha_produc[$i] = mysql_result($res, $i, "fecha");
				$familia[$i] = mysql_result($res, $i, "familia");
				$sub_familia[$i] = mysql_result($res, $i, "subfamilia");
			}
		} else {
		
			echo "<h2 align=\"center\"> No tiene registros</h2>";
		}
		//Codigo para mostrar novedades:
		//El realizar esta consulta con un For impide poder colocar estas novedaddes al gusto en los DIV.
		echo "<img align='center' src='images/$familia[0]/$sub_familia[0]/$id_produc[0].jpg'/> \n <p align='center'>$nom_produc[0] $precio_produc[0] €</p>";
		echo "<img align='center' src='images/$familia[1]/$sub_familia[1]/$id_produc[1].jpg'/> \n <p align='center'>$nom_produc[1] $precio_produc[1] €</p>";
		echo "<img align='center' src='images/$familia[2]/$sub_familia[2]/$id_produc[2].jpg'/> \n <p align='center'>$nom_produc[2] $precio_produc[2] €</p>";
		echo "<img align='center' src='images/$familia[3]/$sub_familia[3]/$id_produc[3].jpg'/> \n <p align='center'>$nom_produc[3] $precio_produc[3] €</p>";
		echo "<img align='center' src='images/$familia[4]/$subfamilia[4]/$id_produc[4].jpg'/> \n <p align='center'>$nom_produc[4] $precio_produc[4] €</p>";
?>