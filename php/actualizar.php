
	<?php
		session_start();
		if($_SESSION['username'] != ""){
			require_once "php/connect.php";
			$id=$_GET['id'];
			$query="SELECT * FROM Administrador WHERE cedulaAdmin='$id'";
			$consulta1=$mysqli->query($query);
			$fila=$consulta1->fetch_array(MYSQLI_ASSOC);

			echo '<form class="formulario" action="./procesos/editarDatos.php" method="POST">
				<input type="hidden" name="id" value="'.$fila['cedulaAdmin'].'">
				<label>Nombre</label><input type="text" name="nombre" value="'.$fila['nombreAdmin'].'"><br><br>
				<label>Apellido</label><input type="text" name="apellido" value="'.$fila['apellidoAdmin'].'"><br><br>
				<p>Si quieres actualizar tu clave escribe la clave antigua y escribe y repite la clave nueva</p>
				<label>Clave original</label><input type="password" name="clave1"><br><br>
				<label>Clave nueva</label><input type="password" name="clave2"><br><br>
				<label>Repetir clave nueva</label><input type="password" name="clave3"><br><br>
				<input type="submit" value="Actualizar">
			</form>';
		}else{
			header("Location: ../index.html");
		}
	?>
