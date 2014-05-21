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

	
	//FUNCIONA PERFECTAMENTE
	//muestra las novedades en la pantalla principal
	//Conectamos BD
	
			
		//Realizar una consulta MySQL
		$query = "SELECT * FROM productos ORDER BY fecha DESC";
		
		//Lanzar consulta a la BD
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		$filas = mysql_num_rows($res);
	
		$nom_produc;
		$id_produc;
		$precio_produc;
		$familia;
		$sub_familia;
		
		if ($filas != 0) {
			//La siguiente consulta obtiene el nombre, la id, precio y fecha de los productos.
			//Cada valor se almacena en una posici?n distinta de los array siguientes, llegando a 4
			//para asi mostrar unicamente las 4 ultimas novedades.
			for ($i = 0; $i < 5; $i++) {
				$nom_produc[$i] = mysql_result($res, $i, "nombre");
				$id_produc[$i] = mysql_result($res, $i, "id_productos");
				$precio_produc[$i] = mysql_result($res, $i, "precio");
				$familia[$i] = mysql_result($res, $i, "familia");
				$sub_familia[$i] = mysql_result($res, $i, "subfamilia");
			}
		} else {
		
			echo "<h2 align=\"center\"> No tiene registros</h2>";
		}
		
        
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
  <h1 align="center">Bienvenido a</h1>
  <h1 align="center"> <b style="color:#F00">Ferreteria Online</b></h1>
  </p>
  <p>&nbsp;</p>
  <p><h3>Para Poder acceder a nuestro servicio de compra es necesario darse de alta en nuetra Web</p>
  <p>&nbsp;</p>
  <p>Si no tienes una cuenta puedes crear una a traves del siguiente link: </h3></p>
  <p>&nbsp;</p>
  <p><a href="registro.php" style="color:#F00"><h3>Crear Cuenta</h3></a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>

<div id="spotlight">
  <blockquote>&nbsp;</blockquote>
  <p>&nbsp;</p>
  <div class="clear" style="height:10px"></div>

  <blockquote>
    <p>&nbsp;</p>
  </blockquote>
</div></div>
  <div align="left"></div>
  <div id="content2">

<div id="services">
  <form id="form1" name="form1" method="post" action="login.php">
    <h3>&nbsp;      </h3>
    <h3 align="center">
      <p align="center">Introduzca sus datos para identificarse en la Web</p>
    </h3>
    <h3>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      <p align="right">Correo de usuario 
        <label for="correo"></label>
        <input type="text" name="correo" id="correo" />
      </p>
      <p align="right">&nbsp;</p>
      <p align="right">Contraseña 	
        <label for="contra"></label>
        <input type="text" name="contra" id="contra" />
      </p>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      </h3>
    <h3 align="center">
      <p align="center">
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </p>
    </h3>
    <h3>&nbsp; </h3>
  </form>
  <p>&nbsp;</p>
</div>

</div>
<div align="right">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h1>&nbsp;</h1>
  <p>&nbsp;</p>
</div>
<div class="clear" style="height:20px"></div>

</div>

<div id="footerPan">

<p>Copyright &copy; Carlos Coloma Bordehore<br/>
All rights reserved</p>

</div>

</div>

</body>
</html>