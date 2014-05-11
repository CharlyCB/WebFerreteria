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
	</body>
</html>