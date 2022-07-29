/<?php
	$ident=$_POST['email'];
	$clave=md5($_POST['clave']);
	$query="SELECT * FROM Administrador WHERE cedulaAdmin='$ident' AND claveAdmin='$clave'";
	//echo $query;
	$consulta2=$mysqli->query($query);
	if($consulta2->num_rows>=1){
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		session_start();

		$_SESSION['username']=$fila['nombreAdmin'];
		$_SESSION['loggedin']=true;
		$_SESSION['start'] = time();
    	$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
		
        if($fila['rolAdmin']=='SU'){
            header("Location: indexSU.php");
        }else{
            header("Location: indexAdmin.php");  
        }
	}else{
		echo "Los datos son incorrectos";
	}
?>	