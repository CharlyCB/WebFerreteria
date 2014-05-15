<html>
	<head>
		
	</head>
	<body>
		<?php
			$cadena = "Artemisa";
			
			
			$ext = str_split($cadena);
			for($i = 0; $i < count($ext) ; $i++)
				echo "$ext[$i] //";			
		?>
		
		
		//probar si lo siguiente puede hacer un submir:
		//imagen como boton.
		<input type=image src="images/go.gif" width="25" height="15">
		
		//con esto podemos pasar una variable a otro php desde uno mismo
		<a href="url.php?nobrevariable=valor&nombrevariable=valor"></a>
		//ejemplo:
		<a href="borrar.php?registro=$seccion">Borrar Registro</a>
	</body>
</html>