<?php
	require_once "php/connect.php";
	$query="SELECT * FROM Administrador";
	$consulta=$mysqli->query($query);
	if($consulta->num_rows>=1){
		echo "<table>
		
			<tr class="."fila".">
				<th>Identificacion</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
				
			</tr>";
		while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
			if($fila['rolAdmin'] != 'SU'){
				echo "<tr class="."fila".">
				<th>".$fila['cedulaAdmin']."</th>
				<th>".$fila['nombreAdmin']."</th>
				<th>".$fila['apellidoAdmin']."</th>
				<th><a class="."rojo"." href="."php/actualizar.php?id=".$fila['cedulaAdmin'].">Actualizar</a></th>
				<th><a class="."rojo"." href="."php/eliminar.php?id=".$fila['cedulaAdmin'].">Eliminar</a></th>
			</tr>";
			}

		}
		echo "</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ".$palabra;
	}
