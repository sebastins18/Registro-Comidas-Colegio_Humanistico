<?php

	require_once "php/connect.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$query="DELETE FROM Administrador WHERE cedulaAdmin='$id'";
		if($mysqli->query($query)){
			echo "Registro eliminado";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}