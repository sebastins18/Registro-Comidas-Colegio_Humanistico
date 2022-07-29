<?php
	date_default_timezone_set('UTC');
	$Date =date('d/m/y',time());
	
	$query="SELECT * FROM Estudiante"; 
	$consulta=$mysqli->query($query);

	
	 
	
	if($consulta->num_rows>=1){
		echo "<table>
			<tr class="."fila repo".">
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Seccion</th>
				<th>Desayuno</th>
				<th>Almuerzo</th>
				<th>Merienda</th>
			</tr>";

		while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo "<tr class="."fila repo".">";
			echo "<th>".$fila['nombreEstudiante']."</th>";
			echo "<th>".$fila['apellidoEstudiante']."</th>";
			echo "<th>".$fila['seccionEstudiante']."</th>";



			///--------------Desayuno--------------///
			$query1="SELECT Desayuno FROM Desayuno WHERE Estudiante_idEstudiante= '" .$fila['idEstudiante']."' and FechaDesayuno='".$Date."'"; 
			$consulta1=$mysqli->query($query1);	

			if($consulta1->num_rows>=1){
				while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
					echo "<th>".$fila1['Desayuno']."</th>";
				}
			}else{
				echo "<th>No</th>";
			}
			///--------------Almuerzo--------------///
			$query2="SELECT Almuerzo FROM Almuerzo WHERE Estudiante_idEstudiante= '" .$fila['idEstudiante']."' and FechaAlmuerzo='".$Date."'"; 
			$consulta2=$mysqli->query($query2);	

			if($consulta2->num_rows>=1){
				while($fila2=$consulta2->fetch_array(MYSQLI_ASSOC)){
					echo "<th>".$fila2['Almuerzo']."</th>";
				}
			}else{
				echo "<th>No</th>";
			}
			
			///--------------Merienda--------------///
			$query3="SELECT Merienda FROM Merienda WHERE Estudiante_idEstudiante= '" .$fila['idEstudiante']."' and FechaMerienda='".$Date."'"; 
			$consulta3=$mysqli->query($query3);	

			if($consulta3->num_rows>=1){
				while($fila3=$consulta3->fetch_array(MYSQLI_ASSOC)){
					echo "<th>".$fila3['Merienda']."</th>";
				}
			}else{
				echo "<th>No</th>";
			}
			echo "</tr>";
		}
		echo "</table>";
	
	
	}?>

  
	