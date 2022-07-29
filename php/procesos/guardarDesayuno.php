<?php
date_default_timezone_set('UTC');
	$palabra=$_POST['identificacion'];
	$Date =date('d/m/y',time());
    $Date2 =date('h:i a',time());
	$Date3 =date('W',time());
	 
	
	$query="INSERT INTO Desayuno (horaDesayuno,FechaDesayuno,Desayuno,Estudiante_idEstudiante,semanaDesayuno) VALUES ('$Date2', '$Date', 'SI', '$palabra','$Date3');";
	if($mysqli->query($query)){
		echo "Datos guardados";
	}else{
		echo "Ocurrio un error";
	}