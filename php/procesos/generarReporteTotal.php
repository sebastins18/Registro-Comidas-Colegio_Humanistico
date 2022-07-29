<?php
	date_default_timezone_set('UTC');
	$Date =date('d/m/y',time());
	
	$query="SELECT FechaDesayuno FROM Desayuno"; 
	$consulta=$mysqli->query($query);	
    $contadorD=0;
    $contadorA=0;
    $contadorM=0;
	$contador=0;
	$fecha=""; 
	
	if($consulta->num_rows>=1){
		echo "<table>
			<tr class="."fila repo".">
				<th>Dia</th>
				<th>Desayuno</th>
				<th>Almuerzo</th>
				<th>Merienda</th>
			</tr>";

		while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){

///--------------Desayuno--------------///
$query1="SELECT Desayuno FROM Desayuno WHERE FechaDesayuno='".$fila['FechaDesayuno']."'"; 
$consulta1=$mysqli->query($query1);	

if($consulta1->num_rows>=1){
    while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
        $contadorD=$contadorD+1;
    }
}
///--------------Almuerzo--------------///
$query2="SELECT Almuerzo FROM Almuerzo WHERE FechaAlmuerzo='".$fila['FechaDesayuno']."'"; 
$consulta2=$mysqli->query($query2);	

    while($fila2=$consulta2->fetch_array(MYSQLI_ASSOC)){
        $contadorA++;
    }


///--------------Merienda--------------///
$query3="SELECT Merienda FROM Merienda WHERE  FechaMerienda='".$fila['FechaDesayuno']."'"; 
$consulta3=$mysqli->query($query3);	

if($consulta3->num_rows>=1){
    while($fila3=$consulta3->fetch_array(MYSQLI_ASSOC)){
        $contadorM=$contadorM+1;
    }
}
echo "</tr>";

if($contador==0){
echo "<tr class="."fila repo".">";
echo "<th>".$fila['FechaDesayuno']."</th>";
echo "<th>".$contadorD."</th>";
echo "<th>".$contadorA."</th>";
echo "<th>".$contadorM."</th>";
echo "</tr>";
$contador=1;
$contadorD=0;
$contadorA=0;
$contadorM=0;
$fecha=$fila['FechaDesayuno'];
}else{
    if($fecha!=$fila['FechaDesayuno']){
        echo "<tr class="."fila repo".">";
        echo "<th>".$fila['FechaDesayuno']."</th>";
        echo "<th>".$contadorD."</th>";
        echo "<th>".$contadorA."</th>";
        echo "<th>".$contadorM."</th>";
        $contadorD=0;
        $contadorA=0;
        $contadorM=0;
        $fecha=$fila['FechaDesayuno'];
        echo "</tr>";
    }else{
        $contadorD=0;
        $contadorA=0;
        $contadorM=0;
        $fecha=$fila['FechaDesayuno'];
    }
    
}
        }
echo "</table>";
	
	
	}?>

  
	