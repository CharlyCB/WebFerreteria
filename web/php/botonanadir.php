<?php
	//boton añadir al carrito
	//En la pagina debe haberun <p id="id_producto"> </p>
	
	/* El boton debe recojer:
	 * La ID del cliente
	 * ID producto
	 * Cantidad del producto.
	 */	
	 session_start();
	 
	$link = mysql_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('proyecto') or die('No se pudo seleccionar la base de datos');
		
		// Realizar una consulta MySQL
		
		//utilizamos la variable de sesión para consultar la id del cliente:
		$query2 ="SELECT id_cliente FROM cliente WHERE email = '".$_SESSION['user']."'";
		
		$res2 = mysql_query($query2) or die('consulta fallida: ' . mysql_error());
		
		//obtenemos id_cliente
		$idcliente = mysql_result($res2, 0, "id_cliente");
		
		//obtenemos valores del producto:
		$id_producto = trim($_POST['producto']);
		$cantidad = trim($_POST['canti']);
		
		//Obtenemos su precio / unidad
		$query3 = "SELECT precio FROM producto WHERE id_producto = '$id_producto'";
		$res3 = mysql_query($query3) or die('consulta fallida: ' . mysql_error());
		//le damos el valordel precio a una variable:
		$precio = mysql_result($res3, 0, "precio");
		
		
		//Insertamos en el carrito los valores:
		$query = "INSERT INTO carrito (**Valores del carrito**) VALUES ('***valores del articulo a añadir***')";
		
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		//obtenemos el id_cliente
		
	 
	 	//La id del cliente estara definida en la variable de sesión
	
	
?>
