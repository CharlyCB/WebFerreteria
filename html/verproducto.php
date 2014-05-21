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
echo "<br /><br />";
	slider("index");
?>
    <br/><br/>
        <div align="center"></div>

<div id="contentPan"><?
				
		$id=$_GET['id']; //id
		
		
		
			//muestra productos
			$query = "SELECT * FROM productos WHERE id_productos ='$id'";
			$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			//obtener datos
					$nombre = mysql_result($res, 0, "nombre");
					$id_producto = mysql_result($res, 0, "id_productos");
					$cat2=  mysql_result($res, 0, "categoria2");
					$subfam =  mysql_result($res, 0, "subfamilia");
					$familia = mysql_result($res, 0, "familia");
					$cat1 = mysql_result($res, 0, "categoria1");
					$precio = mysql_result($res, 0, "precio");
					$marca = mysql_result($res, 0, "marca");
					//PASAR ID_PRODUCTO COMO VARIABLE
					
			
		
	
?>
  <div id="content1">

<div id="welcome"></div>

<div id="spotlight">
  <div align="center">
  <form method="post" action="addcarro.php">
    <blockquote>
      <p>
        <?
		echo "<img width='200'  height='200' src='images/familia/$familia/$id_producto[$i].jpg'/> <br />";
	?>
        </p>
      <p>&nbsp;</p>
      <p><br />
        <input type="submit" value="Añadir al carrito" />
      </p>
    </blockquote>
  </div>
  <p align="center"></p>
  <div class="clear" style="height:10px"></div>

  <div align="center">
    <blockquote>&nbsp; </blockquote>
  </div>
  <blockquote>
    <p align="center"></p>
  </blockquote>
</div></div>
  <div align="left"></div>
  <div id="content2">

<div id="services">
  <p>
  <ul style="font-size:20px; margin-top:15px;">
    <li><b><? echo "$nombre" ?></b></li>
    <li><b><br />
    </b></li>
    <li><b><? echo "$cat1 $cat2" ?></b></li>
    <li><b><br />
    </b></li>
    <li><b>Precio por Unidad <? echo "$precio" ?> €</b></li>
    <li><b><br />
    </b></li>
    <li><b> Marca: <? echo "$marca" ?></b></li>
    <li><b><br />
    </b></li>
    <li><b>Cantidad <input type="number" id="cant" name="cant" /></b></li>
  </ul>
  </p>
</div>
</form>
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