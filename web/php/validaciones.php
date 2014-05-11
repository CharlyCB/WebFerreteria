<?php

	//Validar Cadenas de Texto (Nombre, apellidos, ciudad, etc)
	$cadena = isset($_POST["cadena"]);
	
	if ($cadena == "" || $cadena == null || $cadena == " ") {
		echo "Debes introducir una cadena de texto";
	}	
	
	$aux = str_split($cadena);
	$cuenta = count($aux);
	for ($i=0; $i < $cuenta ; $i++) { 
			if(is_numeric($aux[$i])){
				echo "Aqui no se pueden poner numeros";
		}
	}
		


	//validar numero de telefono
	$telf = isset($_POST["telf"]);
	
	if ( $telf < 9 || $telf >  9) {
		echo "El telefono debe contener 9 caracteres";
	}
	else if (is_nan($telf)){
		echo "el telefono debe estar compuesto de numeros";
	}
	
	
	//validar correo
	$correo = isset($_POST["mail"]);
	if (filter_var($correo, FILTER_VALIDATE_EMAIL) == FALSE) {
		echo "debes introducir un correo valido";
	}
	
	//validar contraseña
	$pass = isset($_POST["pass"]);
	$auxpass = isset($_POST["auxpass"]);
	$numint = 0;
	$passarray = str_split($pass);
	
	for ($i=0; $i < count($passarray) ; $i++) { 
		if (is_numeric($passarray[$i])) {
			$numint++;
		}
	}
	
	if($pass < 6){
		echo "las contraseña debe tener almenos 6 caracteres";	
	}
	elseif ($numint <2) {
		echo "La contraseña debe contener almenos 2 Numeros";
	}
	elseif ($pass == $auxpass) {
		echo "La contraseña no coincide";
	}
	
	
	//validar DNI
	if(strlen($dni)<9) {
		return "DNI demasiado corto.";
	}
	else if (strlen($dni)>9) {
		return "DNI demasiado largo.";
	}
 
	$dni = strtoupper($dni);
 
	$letra = substr($dni, -1, 1);
	$numero = substr($dni, 0, 8);
 
	// Si es un NIE hay que cambiar la primera letra por 0, 1 ó 2 dependiendo de si es X, Y o Z.
	$numero = str_replace(array('X', 'Y', 'Z'), array(0, 1, 2), $numero);	
 
	$modulo = $numero % 23;
	$letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
	$letra_correcta = substr($letras_validas, $modulo, 1);
 
	if($letra_correcta!=$letra) {
		return "Letra incorrecta, la letra deber&iacute;a ser la $letra_correcta.";
	}
	else {
		return "OK";
	}
	
	
	
	//Validar Codigo postal:
	$cod_postal = isset($_POST["codigo"]);
	
	if ($cod_postal <5) {
		echo "el codigo postal debe tener 5 digitos";
	}
	else if($cod_postal>5){
		echo "el codigo postal solo tiene 5 digitos.";
	}
	

		
?>