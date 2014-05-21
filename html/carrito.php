<?
	include("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? 
	iniciar("indice");
?>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="pngfix.js"></script>
<link type="text/css" href="css/skitter.styles.css" media="all" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
<script type="text/javascript" src="js/jquery.skitter.min.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$(".box_skitter_large").skitter();
	});
</script>

<?
	session_start();
	//obtener id cliente
	$mail = $_SESSION['mail'];
	$query = "SELECT id_cliente FROM cliente WHERE email = '$mail' ";
	$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
	$id_cli = mysql_result($res, 0, 'id_cliente');
	
	//obtenemos carrito del cliente:
	$query2 = "SELECT * FROM carro WHERE id_cliente = '$id_cli'";
					//Lanzar consulta a la BD
					$res2 = mysql_query($query) or die('Consulta fallida: ' . 				mysql_error());
					$filas = mysql_num_rows($res);
						
?>


</head>

<body>

<div id="container">

<div id="headerPan">
<?
    menu("index");
echo "<br /><br />";
	slider("index");
?>
    <br/><br/>
        <div align="center"></div>

<div id="contentPan">
  
  <div id="content1">

<div id="welcome">
  <p>  
  <p><strong>Bienvenido a tu panel de usuario, aqui podras revisar tu información y cambarla cuando sea necesario.</strong></p>
  <p>&nbsp;</p>
  <p><strong>Asegurate de que estos datos son reales antes de hacer cualquier envio, ya que la utilizaremos para procesar tu compra:</strong></p>
  <p>&nbsp;</p>
  <p><strong>Puedes Cambiar unicamente los Datos que tienen el campo habilitado para ello, en caso de requerir un cambio en otro campo pongase en contacto con el Administrador a traves del correo de la Empresa</strong></p>
  <p>&nbsp;</p>
</div>

<div id="spotlight">
  <blockquote>&nbsp;</blockquote>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="clear" style="height:10px"></div>

  <blockquote>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </blockquote>
</div></div>
  <div align="left"></div>
  <div id="content2">

<div id="services">
  <p align="center"><strong>PANEL DE USUARIO</strong></p>
</div>

</div>
<p align="right">&nbsp;</p>
  <p align="right">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="update.php">
    <p align="right">&nbsp;</p>
    <p align="right"><? 
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
	
	?></p>
  </form>
  <p align="right">&nbsp;</p>
  <p align="right">&nbsp;</p>
  <p align="right">&nbsp;</p>

<div class="clear" style="height:20px"></div>

</div>

<div id="footerPan">

<p>Copyright &copy; Carlos Coloma Bordehore<br/>
All rights reserved</p>

</div>

</div>

</body>
</html>