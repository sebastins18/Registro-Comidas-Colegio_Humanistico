<?php
	$palabra=$_POST['identificacion'];
	$query="SELECT * FROM Estudiante WHERE identificacion LIKE '%$palabra%'";
	$consulta3=$mysqli->query($query);
	
	if($consulta3->num_rows>=1){
		echo "<table>
		<thead>
			<tr>
				
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Seccion</th>
				<th>Desayuno</th>
				<th>Almuerzo</th>
				<th>Merienda</th>
				
			</tr>
		</thead>
		<tbody>";
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
			echo "<tr>
				<td>".$fila['Nombre']."</td>
				<td>".$fila['Apellidos']."</td>
				<td>".$fila['Seccion']."</td>
				<td> <input value=" .$fila['Desayuno']." name=".'desayunofila'." > </td>
				<td> <input value=" .$fila['Almuerzo']." name=".'almuerzofila'." > </td>
				<td> <input value=" .$fila['Merienda']." name=".'meriendafila'." > </td>
				<td>".$fila['Almuerzo']."</td>
				<td>".$fila['Merienda']."</td>

				
			</tr>";
		}
		echo "</tbody>
	</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ".$palabra;
	}