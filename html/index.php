<?
	include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? 
	
	iniciar("indice");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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
			//Cada valor se almacena en una posición distinta de los array siguientes, llegando a 4
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
  <div align="center">
    <?	
    menu("index");
	echo "<br /><br />";
	slider("index");
?>
      <br/><br/>
          
  </div>
        <div align="center"></div>

<div id="contentPan">
  
  <div>
    
      <div align="center"><b>
        <table width="100%" border="0" style="font-size:20px;margin-top:5px">
          <tr>
            <td width="34%"><p align="center">&nbsp;</p>
              <p align="center"><? echo " <a href='verproducto.php?id=$id_produc[0]' ><img align='center' width='200' height='200' src='images/familia/$familia[0]/$id_produc[0].jpg'/> <br /> <p align='center' style='font-size: 20px; margin-top: 6px'>".$nom_produc[0]." ".$precio_produc[0]." €</p> <br /><br />"; ?></a></p></td>
            <td width="33%"><p align="center">&nbsp;</p>
              <p align="center"><? echo "<a href='verproducto.php?id=$id_produc[2]' ><img align='center' width='200' height='200' src='images/familia/$familia[2]/$id_produc[2].jpg'/> <br /> <p align='center' style='font-size: 20px; margin-top: 6px'>".$nom_produc[2]." ".$precio_produc[2]." €</p> <br /><br />"; ?></a></p></td>
            <td width="33%"><p align="center">&nbsp;</p>
              <p align="center"><span class="clear" style="margin-bottom:10px; border-bottom:#4a4a4a 1px dotted"><? echo " <a href='verproducto.php?id=$id_produc[3]' ><img align='center' width='200' height='200' src='images/familia/$familia[3]/$id_produc[3].jpg'/> <br /> <p align='center' style='font-size: 20px; margin-top: 6px'>".$nom_produc[3]." ".$precio_produc[3]." €</p> <br /><br />"; ?></a></span></p></td>
            </tr>
        </table>
      </div>
      <p align="center">&nbsp;</p>
      <div align="center">
        <table width="100%" border="0" style="font-size:20px;margin-top:5px">
          <tr>
            <td><p align="center">&nbsp;</p>
            <p align="center"><? echo "<a href='verproducto.php?id=$id_produc[1]' ><img align='center' width='200' height='200' src='images/familia/$familia[1]/$id_produc[1].jpg'/> <br /> <p align='center' style='font-size: 20px; margin-top: 6px'>".$nom_produc[1]." ".$precio_produc[1]." €</p> <br /><br />"; ?></a></p></td>
            <td><p align="center">&nbsp;</p>
            <p align="center" style='font-size: 20px; margin-top: 6px'><? echo "<a href='verproducto.php?id=$id_produc[4]' ><img align='center' width='200' height='200' src='images/familia/$familia[4]/$id_produc[4].jpg'/> <br />".$nom_produc[4]." ".$precio_produc[4]." €</p> <br /><br />"; ?></a></p></td>
          </tr>
        </table>
        </b>
      </div>
      <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="content1">

<div id="welcome"></div>

<div id="spotlight">
  <p>&nbsp;</p>
  <div class="clear" style="height:10px"></div>

<p><span class="headline"></span></p>

</div>

</div>

<div id="content2">

<div id="services">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  <div class="clear" style="margin-bottom:10px; border-bottom:#4a4a4a 1px dotted">
    <p>&nbsp;</p>
  </div>
  
  <div class="clear" style="margin-bottom:10px; border-bottom:#4a4a4a 1px dotted;" > 
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>

</div>
;

<div class="clear" style="height:20px"></div>

</div>

<div id="footerPan">

<p>Copyright &copy; Carlos Coloma Bordehore<br/>
All rights reserved</p>

</div>

</div>

</body>
</html>
