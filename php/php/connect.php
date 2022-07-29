<?php
	$mysqli= new mysqli("localhost", "root", "", "Sistema_Comida",3306);
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$mysqli->set_charset("utf8");
	?>