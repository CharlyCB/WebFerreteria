<?php
	$link = mysql_connect('localhost', 'user', 'contraseña') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('prueba') or die('No se pudo seleccionar la base de datos');
		
		
	//la variable producto se pasa atraves de URL para que este documento la pueda obtener y borrar el registro de la misma.			
	// Realizar una consulta MySQL	
	$query = "DELETE FROM carrito WHERE id = $producto";
	
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
	
	header("location: carrito.php");
			
?>