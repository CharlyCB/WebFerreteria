<?php
	session_start();

	//Constantes de acceso a la BD
		$link = mysql_connect('sql206.byethost7.com', 'b7_14620997', '13clanes') or die('No se pudo conectar: ' . mysql_error());
				
				
		mysql_select_db('b7_14620997_Tienda') or die('No se pudo seleccionar la base de datos');
		
		
		
	function menu($titulo_pagina){
	   	//Inserta la cabecera HTML de una p‡gina web
		session_start();
		echo "<ul id='menu'>
            <li class='b01'><a href='index.php' title='home'>Indice</a></li>
	         <li class='b02'><a href='contacto.php' title='about us'>Contacto</a></li>
	         <li class='b03'><a href='' > Productos </a>
	        	<ul>";
					$query = "SELECT familia FROM productos GROUP BY familia";
					//Lanzar consulta a la BD
					$res = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
					$filas = mysql_num_rows($res);
					
						for ($i = 0; $i < $filas; $i++) {
						//Obtenemos valor de familia
						$familia_pro[$i] = mysql_result($res, $i, "familia");
								echo "<li><a href='subfamilias.php?urlval=".$familia_pro[$i]."'>$familia_pro[$i]</a></li>";
						}
	        echo "</ul>
	        </li>
	        <li class='b04''><a href='wp/index.php' title='gifts and specials'>Foro</a></li>";
			if($_SESSION['user']){
				echo "<li class='b05'><a href='cuenta.php' title='contact us'>Cuenta</a></li>
				<li class='b05'><a href='carrito.php' title='contact us'>Carrito</a></li>
				<li class='b05'><a href='desconectar.php' title='contact us'>Desconectar</a></li>";
			}
			else{
				echo "<li class='b05'><a href='loggin.php' title='contact us'>login</a></li>
				<li class='b05'><a href='registro.php' title='contact us'>Registrme</a></li>";
			}
	        echo "</ul> ";//end echo
		
	//end cabecera
	}
	
	function slider ($titulo_pagina){
		echo "<div class='box_skitter box_skitter_large' align='center'>
				  <ul>
					<li> <a href='#cut'><img src='images/001.1.jpg' alt='im1' class='cut' /></a>
					  <div class='label_text'>
						
					  </div>
					</li>
					<li> <a href='#swapBlocks'><img src='images/002.jpg' alt='im2' class='swapBlocks' /></a>
					  <div class='label_text'>
						
					  </div>
					</li>
					<li> <a href='#swapBarsBack'><img src='images/003.jpg' height='100%' width='100%' alt='im3' class='swapBarsBack' /></a>
					  <div class='label_text'>
					   
					  </div>
					</li>
				  </ul>
		</div>";
	}
	
	function iniciar($titulo_pagina){
			session_start();
			if ($_SESSION['user']) {
				echo "<p>Identificado como: </p>".$_SESSION['user'];
			}
			else {
				echo "usuario no identificado: <a href='loggin.php'><h3>IDENTIFICAME<h3></a>";
			}
	}
?>