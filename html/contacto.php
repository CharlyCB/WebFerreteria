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
  <div align="center" style="font-size:24px"><strong>FERRETERIA COLOMA</strong></div>
  <div id="content2">
    
  <div id="services">
  <p align="left" style="font-size:24px">&nbsp;</p>
</div>

</div>
<div align="right">
  <p>&nbsp;</p>
  <table width="100%" border="0">
    <tr>
      <td width="54%"><p align="left"><strong>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3107.8544273782272!2d0.10681430000003514!3d38.83579459999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129e1b240f5efad9%3A0x99ef52172c3802fa!2sCarrer+de+Pedreguer%2C+11!5e0!3m2!1ses!2s!4v1400345870097" width="400" height="300" frameborder="0" style="border:0"></iframe>
      </strong></p></td>
      <td width="46%"><p align="left"><strong>Ya han pasado muchos años  desde que en el año 1.965 Coloma Ferreteros abrió sus puertas en un local pequeños de apenas 100 m.</strong></p>
        <p align="left"><strong>Gracias a todos los clientes fuimos ampliando nuestro empresa hasta llegar hoy en día  que actualmente contamos con una gran empresa.</strong></p>
        <p align="left"><strong>Contamos con un equipo humano muy profesional que le solucionará todos sus problemas.</strong></p>
        <p align="left"><strong>Desde entonces nos hemos esforzado cada día para ofrecer lo mejor a nuestros clientes.</strong></p>
        <p align="left"><strong>Seguimos con la misma ilusión para ofrecerles un trato cada día mas cuidado y personal.</strong></p>
        <p align="left"><strong>Seleccionamos con rigurosidad, la mejor relación calidad-precio en todos nuestros productos, proporcionándole loa máxima calidad y garantía</strong></p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>C/Pedreguer n�11<br />
    03700 Denia (Alicante)</p>
  <p>Tel:�<strong>96 578 80 94�</strong>�fax �<strong>966426074</strong></p>
  <p>www.ColomaFerreteros.es  </p>
  <div id="content1">
    <div id="welcome">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div id="spotlight">
      <p>&nbsp;</p>
      <div class="clear" style="height:10px"></div>
</div>
  </div>
  <p>e-mail: ferreteriacoloma@yahoo.es  </p>
  <p align="left">&nbsp;</p>
  <p>&nbsp;</p>
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