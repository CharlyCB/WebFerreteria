<?php
	session_start();
	
	$pass = trim($_POST['pass']);
	$oldpass = trim($_POST['pass_actual']);
	$envio = trim($_POST['dir_envio']);
	$mail = $_SESSION['mail'];
	$query = "";
	$query2 =
	if ($pass != "" || $pass != " " || $pass != null || strlen($pass)>6) {
		if ($envio != "" || $envio!= " " || $envio != null) {
			$query = "UPDATE cliente SET password = '$pass', dir_envio = '$envio' WHERE email ='$mail'";
		}
		else {
			$query = "UPDATE cliente SET password = '$pass' WHERE email ='$mail'";
		}
	}
	else if($envio != "" || $envio!= " " || $envio != null) {
		"UPDATE cliente SET dir_envio = '$envio' WHERE email ='$mail'";
	}
	
	
	$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
	echo "Update correcto";
	
	header("location: cuenta.php");
?>