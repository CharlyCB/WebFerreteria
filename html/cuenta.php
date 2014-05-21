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
		//Realizar una consulta MySQL
		$mail = $_SESSION['mail'];
		$query = "SELECT * FROM cliente WHERE email = '$mail'";
		
		
		//Lanzar consulta a la BD
		$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		echo $res;
			
		$correo = mysql_result($res,0, "email");
		$pass = mysql_result($res, 0, "password");
		$nombre = mysql_result($res, 0, "nombre");
		$apellidos = mysql_result($res, 0, "apellidos");
		$Dni = mysql_result($res, 0, "dni");
		$telf = mysql_result($res, 0, "telf");
		$dir = mysql_result($res, 0, "direccion");
		$pais = mysql_result($res, 0, "pais");
		$ciudad = mysql_result($res, 0, "ciudad");
		$postal = mysql_result($res, 0, "codpost");
		$dir_env = mysql_result($res, 0, "dir_envio");
		$provincia = mysql_result($res, 0, "provincia");
		

				 
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
<div align="right">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="update.php">
    <table width="60%" border="0">
      <tr>
        <td width="33%"><strong>Email:</strong></td>
        <td width="33%"><div align="center"><? echo "$email"; ?></div></td>
        <td width="33%"><label for="mail"></label></td>
      </tr>
      <tr>
        <td><strong>Nueva Contraseña:</strong></td>
        <td><div align="center"></div></td>
        <td><label for="pass"></label>
          <input type="text" name="pass" id="pass" /></td>
      </tr>
      <tr>
        <td><strong>Nombre:</strong></td>
        <td> <div align="center"><? echo "$nombre"; ?></div></td>
        <td> </td>
      </tr>
      <tr>
        <td><strong>Apellidos:</strong></td>
        <td><div align="center"><? echo "$apellidos"; ?></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>DNI:</strong></td>
        <td> <div align="center"><? echo "$Dni"; ?></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Telefono</strong></td>
        <td><div align="center"><? echo $telf; ?></div></td>
        <td><label for="telf"></label></td>
      </tr>
      <tr>
        <td><strong>Dirrección</strong></td>
        <td><div align="center"><? echo $dir; ?></div></td>
        <td><label for="dir"></label></td>
      </tr>
      <tr>
        <td><strong>Pais</strong></td>
        <td><div align="center"><? echo $pais; ?></div></td>
        <td><label for="pais"></label></td>
      </tr>
      <tr>
        <td><strong>Ciudad</strong></td>
        <td><div align="center"><? echo $ciudad; ?></div></td>
        <td><label for="ciudad"></label></td>
      </tr>
      <tr>
        <td><strong>Codigo Postal</strong></td>
        <td><div align="center"><? echo $postal; ?></div></td>
        <td><label for="cod_post"></label></td>
      </tr>
      <tr>
        <td><strong>Provincia:</strong></td>
        <td><div align="center"><? echo $provincia; ?></div></td>
        <td><label for="provincia"></label></td>
      </tr>
      <tr>
        <td><strong>Dirección de Envio</strong></td>
        <td> <div align="center"><? echo $dir_env; ?></div></td>
        <td><label for="dir_envio"></label>
          <input type="text" name="dir_envio" id="dir_envio" /></td>
      </tr>
  </table>
    <p>&nbsp;</p>
    <p align="center">Contraseña Actual: 
      <input type="text" name="pass_actual" id="pass_actual" />
      <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
    </p>
    <p>&nbsp;</p>
  </form>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
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