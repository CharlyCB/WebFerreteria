<?php
	//Constantes de acceso a la BD
	DEFINE("DB_HOST", "localhost");
	DEFINE("DB_USER", "root");
	DEFINE("DB_PASSWORD", "");
	DEFINE("DB_NAME", "curso_php");
	
	function cabecera_html($titulo_pagina){
	   //Inserta la cabecera HTML de una p‡gina web
	    echo "<html> \n";
	    echo "<head> \n";
	    echo "<title>$titulo_pagina</title> \n";
	    echo "</head> \n";
	    echo "<body> \n";
	} //Fin de la funcion cabecera_html
	
	function menu($titulo_pagina){
		
	}
	
	function pie_html($ttitulo_pagina){
	    //Inserta el pie HTML de una p‡gina web
	    echo "</body> \n";
	    echo "</html>";
	} //fin de la funcion pie_html
?>