<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? 
	include("config.php");
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
			//Cada valor se almacena en una posici�n distinta de los array siguientes, llegando a 4
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
	slider("index")
?>
    <br/><br/>
        <div align="center"></div>

<div id="contentPan">
  
  <div id="content1">

<div id="welcome"><h2>Formulario de Registro en la Web</h2></div>

<div id="spotlight">
  <blockquote>
    <h3>Los datos que nos facilite seran almacenados en una BD de uso exclusivo de Ferreteria Online, en ningún caso se utilizaran de forma fraudulenta o se hara publicos.
    <p>&nbsp;</p>
    <p>Registrarse en nuestra Web conlleva la aceptación de estos terminos y su politica interna.</p>
</h3>  </blockquote>
  <p>
   </p>
  <div class="clear" style="height:10px"></div>

  <blockquote>
    <p>&nbsp;</p>
  </blockquote>
</div></div>
  <div align="left"></div>
  <div align="right"></div>
  <div id="content2">

<div id="services"><h3>
  <p align="right">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="register.php">
    <p align="right">Correo de Usuario		 
      <label for="correo"></label>
      <input type="text" name="correo" id="correo" />
    </p>
    <p align="right">&nbsp;</p>
    <p align="right">Contraseña: 
      <label for="contra"></label>
      <input type="text" name="contra" id="contra" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Verificar Contraseña:
      <label for="contra2"></label>
      <input type="text" name="contra2" id="contra2" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Nombre: 
      <label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Apellidos: 
      <label for="apellidos"></label>
      <input type="text" name="apellidos" id="apellidos" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Telefono: 
      <label for="telefono"></label>
      <input type="text" name="telefono" id="telefono" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Dirección: 
      <label for="direccion"></label>
      <input type="text" name="direccion" id="direccion" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Ciudad: 
      <label for="ciudad"></label>
      <input type="text" name="ciudad" id="ciudad" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Codigo Postal: 
      <label for="cod_postal"></label>
      <input type="text" name="cod_postal" id="cod_postal" />
    </p>
    <p align="right">&nbsp; </p>
    <p align="right">Provincia: 
      <label for="provincia"></label>
      <input type="text" name="provincia" id="provincia" />
    </p>
    <p align="right">&nbsp;</p>
    <p align="center">
      <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
    </p>
  </form>
  <p align="right">&nbsp;</p>
  <p align="right">&nbsp;</p>
</h3></div>

</div>
<div align="right">
  
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