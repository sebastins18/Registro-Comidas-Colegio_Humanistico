<?php
date_default_timezone_set('UTC');

	$palabra=$_POST['identificacion'];
	$Date =date('d/m/y',time());

///---------Existencia de usuario---------///
	$query="SELECT * FROM Estudiante WHERE idEstudiante='$palabra'";
	$consulta=$mysqli->query($query);

///---------Ver si desayuno---------///	
	$query1="SELECT * FROM Desayuno where Estudiante_idEstudiante='$palabra' and FechaDesayuno='$Date'";
	$consulta1=$mysqli->query($query1);

///---------Consulta Usuario---------///
	if($consulta->num_rows>=1){
		while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){

			echo"<h1 class=datosd>Cedula: ".$fila['idEstudiante']. "</h1>";
			echo"<h1 class=datosd>Nombre: ".$fila['nombreEstudiante'] ." ". $fila['apellidoEstudiante']. "</h1>";
			echo"<h1 class=datosd>Seccion: ".$fila['seccionEstudiante']. "</h1>";
			
			///---------Consulta Desayuno---------///
			if($consulta1->num_rows>=1){
				while($fila2=$consulta1->fetch_array(MYSQLI_ASSOC)){
					if($fila2['Desayuno']=="SI"){
						echo '<h1 class="datosd titulo">Buscar Estudiante: '.$fila['nombreEstudiante'] .' '. $fila['apellidoEstudiante']. ' Ya Almorzó</h1>';
					}
				}

			}else{
				?>
				<form action="Registro_Comidas_Estudiantes_Desayuno.php" method="POST" autocomplete="off">
				<input type="hidden" class="titulo" value= "<?php echo $palabra ?>" name="identificacion">
				<input class="boton inverso" type="submit" value="Registrar Desayuno" name="registrar_Desayuno">
				</form>
				
				<?php
				 
			}
		}

	}else{
		echo "No hemos encontrado ningun registro con la palabra ".$palabra;
	}

?>


