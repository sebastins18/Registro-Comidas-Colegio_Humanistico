<?php
if($_POST['password'] == $_POST['password2']){
	require_once "php/php/connect.php";
	$ident=$_POST['iden'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$clave=md5($_POST['password']);
	
	
	$query="INSERT INTO Administrador(nombreAdmin,apellidoAdmin,claveAdmin,cedulaAdmin) VALUES('$nombre','$apellidos','$clave','$ident')";
	if($mysqli->query($query)){
		echo "Datos guardados";
	}else{
		echo "Ocurrio un error";
	}	
}
else{
	echo 'error';
}

