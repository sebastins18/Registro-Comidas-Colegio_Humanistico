<?php

	require_once "../php/connect.php";
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$clave1=$_POST['clave1'];
	$clave2=$_POST['clave2'];
	$clave3=$_POST['clave3'];
	if($clave1!="" && $clave2!="" && $clave3!=""){
		$cons="SELECT * FROM Administrador WHERE cedulaAdmin='$id'";
		$consulta1=$mysqli->query($cons);
		$fila=$consulta1->fetch_array(MYSQLI_ASSOC);
		$claveOriginal=md5($clave1);
		if($claveOriginal==$fila['Clave']){
			if($clave2==$clave3){
				$clave=md5($clave2);
				$campos="nombreAdmin='$nombre',apellidoAdmin='$apellido',claveAdmin='$clave'";
			}else{
				echo "Las claves no coinciden";
				exit();
			}
		}else{
			echo "La clave es incorrecta";
			exit();
		}
		
	}else{
		$campos="nombreAdmin='$nombre',apellidoAdmin='$apellido'";
	}
	$query="UPDATE Administrador SET $campos WHERE cedulaAdmin='$id'";
	if($mysqli->query($query)){
		echo "Datos actualizados";
	}else{
		echo "Error no se pudo actualizar los datos";
	}