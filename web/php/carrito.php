<?php
	session_start();

	$link = mysql_connect('localhost', 'user', 'contraseña') or die('No se pudo conectar: ' . mysql_error());
				echo 'Connected successfully';
				
		mysql_select_db('prueba') or die('No se pudo seleccionar la base de datos');
		
		// Realizar una consulta MySQL
		//utilizamos la variable de sesión para consultar la id del cliente:
			
		$query = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[user]'";
		
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		
		//obtenemos el id_cliente
		$idcliente = mysql_result($res, 0, "id_cliente");

		
		//a traves del id_cliente consultamos el carrito
		$query2 ="SELECT * FROM carrito WHERE id_cliente = '$idcliente'";
		
		$res2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
		
		$filas2 = mysql_num_rows($res2);
		echo "<table>";
		echo "<tr>";
		echo "<td>Id del producto</td>";
		echo "<td>Nombre del Producto</td>";
		echo "<td>Cantidad</td>";
		echo "<td>Precio / Unidad</td>";
		echo "<td>Precio</td>";
		echo "</tr>";
		if ($filas2 != 0) {
			//mostramos el carrito en una tabla
			for ($a = 0; $a < 5; $a++) {
				echo "<tr>";
				echo "<td>".mysql_result($res, $a, "id_producto")."</td>";
				echo "<td>".mysql_result($res, $a, "nombre")."</td>";
				echo "<td>".mysql_result($res, $a, "cantidad")."</td>";
				echo "<td>".mysql_result($res, $a, "precio")." €</td>";
				echo "<td>".mysql_result($res, $a, "cantidad") * mysql_result($res, $a, "precio")." €</td>";
				echo "<input type='button' value='Eliminar'/>";
				echo "</tr>";
			}
		}
echo "</table>";
//TODO elnace para eliminar el registro
?>