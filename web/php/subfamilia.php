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
		//diha variable contiene la familia Padre.		
		$query = "SELECT subfamilia FROM productos WHERE familia ='$urlvar' OUP BY subfamilia";
		
		//Lanzar consulta a la BD
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		$filas = mysql_num_rows($res);
		$count = 0;
		
		if ($filas != 0) {
			echo "<table>";
			echo "<tr>";
			
			//Codigo para mostrar Familia:
			//Ordenado para mostrar en cada linea 4 Familias
			for ($i = 0; $i < $filas; $i++) {
				$familia_produc[$i] = mysql_result($res, $i, "familia");
				if($count < 4){
					echo "<td> <img align='center' src='images/$familia_produc[$i].jpg'/> \n <p align='center'>$familia_produc[$i]</p> </td>";
					$count++;
				}
				else {
					echo "</tr>";
					echo "<tr>";
					echo "<td> <img align='center' src='images/$familia_produc[$i].jpg'/> \n <p align='center'>$familia_produc[$i]</p> </td>";
					$count = 0;
				}
			}
			echo "</tr></table>";
		} 
		
		
		//NOTA: para poder consultar las subfamilias y categorias se realiza la misma consulta pero cambiando levemente el SELECT:
		//SUBFAMILIAS: $query = "SELECT subfamilia FROM productos GROUP BY subfamilia";
		//CATEGORIA1: $query = "SELECT categoria1 FROM productos GROUP BY categoria1";
		//PRODUCTOS: $query = "SELECT * FROM productos";
		//;
		
?>