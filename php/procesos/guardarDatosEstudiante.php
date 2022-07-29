<?php
	require_once "php/php/connect.php";
	$ident=$_POST['iden'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['Apellidos'];
	$seccion=$_POST['sec']."-".$_POST['sec2'];
	
	
	$query="INSERT INTO Estudiante(idEstudiante,nombreEstudiante,apellidoEstudiante,seccionEstudiante) VALUES('$ident','$nombre','$apellidos', '$seccion')";
	if($mysqli->query($query)){
		echo "Datos guardados";
	}else{
		echo "Ocurrio un error";
	}
	