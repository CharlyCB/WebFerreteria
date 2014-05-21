<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("config.php");
	iniciar('familias');
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





</head>

<body>

<div id="container">

<div id="headerPan">
<?
    menu("index");
?>
    <br/><br/>
        <div align="center"></div>

<div id="contentPan"><?
				
		$val=$_GET['urlval']; //subfamilia
		$familia = $_GET['familia'];
		$modelo = $_GET['modelo']; //categoria2
		
		
			//muestra productos
			$query = "SELECT * FROM productos WHERE subfamilia ='$val' AND categoria1 ='$modelo' ORDER BY nombre";
			$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			
			$filas = mysql_num_rows($res);
			$count = 0;
		
			if ($filas != 0) {
				echo "<table>";
				echo "<tr>";
				
				//Codigo para mostrar PRODUCTOS
				//Ordenado para mostrar en cada linea 4 Familias
				for ($i = 0; $i < $filas; $i++) {
					$familia_produc[$i] = mysql_result($res, $i, "nombre");
					$id_producto[$i] = mysql_result($res, $i, "id_productos");
					$cat2[$i] =  mysql_result($res, $i, "categoria2");
					$subfam[$i] =  mysql_result($res, $i, "subfamilia");
					//PASAR ID_PRODUCTO COMO VARIABLE
					if($count < 4){
						echo "<td><a href='verproducto.php?id=$id_producto[$i]' /> <img align='center'  width='200' height='200' src='images/familia/$familia/$id_producto[$i].jpg'/> <br /> <p align='center' style='font-size: 20px; margin-top: 6px' >$familia_produc[$i] <br /> $subfamilia[$i] $cat2[$i] </p></a> </td>";
						$count++;
					}
					else {
						echo "</tr>";
						echo "<tr>";
						echo "<td> <img align='center' src='images/$familia_produc[$i].jpg'/> <br /> <p align='center' style='font-size: 20px; margin-top: 6px'>$familia_produc[$i]</p> </td>";
						$count = 0;
					}
				}
				echo "</tr></table>";
			
		
	}
?>
  <div id="content1">

<div id="welcome"></div>

<div id="spotlight">
  <blockquote>&nbsp;</blockquote>
  <p></p>
  <div class="clear" style="height:10px"></div>

  <blockquote>
    <p></p>
  </blockquote>
</div></div>
  <div align="left"></div>
  <div id="content2">

<div id="services">
  <p>&nbsp;</p>
</div>

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