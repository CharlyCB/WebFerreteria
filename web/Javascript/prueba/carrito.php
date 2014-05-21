<?
	//obtener id cliente
	$mail = $_SESSION['mail'];
	$query = "SELECT id_cliente FROM cliente WHERE email = '$mail' ";
	$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
	$id_cli = mysql_result($res, 0, 'id_cliente');
	
	//obtenemos carrito del cliente:
	$query2 = "SELECT * FROM carro WHERE id_cliente = '$id_cli'";
					//Lanzar consulta a la BD
					$res2 = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
					$filas = mysql_num_rows($res);
					echo "<p align='center'>Carro del Cliente: $id_cli</p>";
					echo "<table><tr>";
					echo "<td>ID Producto</td><td>Nombre</td><td>Precio/Unidad</td><td>cantidad</td><td>Precio Total</td>";
					echo "</tr>";
						for ($i = 0; $i < $filas; $i++) {
						//Obtenemos valor de familia
							$id_producto[$i] = mysql_result($res2, $i, "Id_producto");
							$nombre[$i] = mysql_result($res2, $i, "nombre");
							$precio[$i] = mysql_result($res2,$i, "precio_unidad");
							$cantidad[$i] = mysql_result($res2, $i, "cantidad");
							$total[$i] = $precio[$i] * $cantidad[$i];
							echo "<tr>";
							echo "<td>$id_producto[$i]</td><td>$nombre[$i]</td><td>$precio[$i]</td><td>$cantidad[$i]</td><td>$total[$i]</td>";
							echo "</tr>";
						}
					echo "</table>";
?>