<?php
	require_once "php/php/connect.php";
	$query="SELECT * FROM Menu";
	$consulta=$mysqli->query($query);

    $LDesayuno= "";
    $MADesayuno= "";
    $MIDesayuno= "";
    $JDesayuno= "";
    $VDesayuno= "";

    $LAlmuerzo= "";
    $MAAlmuerzo= "";
    $MIAlmuerzo= "";
    $JAlmuerzo= "";
    $VAlmuerzo= "";

    $LMerienda= "";
    $MAMerienda= "";
    $MIMerienda= "";
    $JMerienda= "";
    $VMerienda= "";

	if($consulta->num_rows>=1){
		echo '<table>
		
            <tr class="fila dia">
            <th> Lunes </th>
            <th> Martes </th>
            <th> Miércoles </th>
            <th> Jueves </th>
            <th> Viernes </th>
            </tr>';
		while($fila=$consulta->fetch_array(MYSQLI_ASSOC)){
            if($fila['idmenu'] == 1){
                $LDesayuno= $fila['desayuno'] ;
                $LAlmuerzo= $fila['almuerzo'] ;
                $LMerienda= $fila['merienda'] ;
            }
            else if($fila['idmenu'] == 2){
                $MADesayuno= $fila['desayuno'] ;
                $MAAlmuerzo= $fila['almuerzo'] ;
                $MAMerienda= $fila['merienda'] ;
            }
            else if($fila['idmenu'] == 3){
                $MIDesayuno= $fila['desayuno'] ;
                $MIAlmuerzo= $fila['almuerzo'] ;
                $MIMerienda= $fila['merienda'] ;
            }
            else if($fila['idmenu'] == 4){
                $JDesayuno= $fila['desayuno'] ;
                $JAlmuerzo= $fila['almuerzo'] ;
                $JMerienda= $fila['merienda'] ;
            }
            else if($fila['idmenu'] == 5){
                $VDesayuno= $fila['desayuno'] ;
                $VAlmuerzo= $fila['almuerzo'] ;
                $VMerienda= $fila['merienda'] ;
            }
            		

			

		}
        echo "<tr class="."fila".">
            <th>".$LDesayuno."</th>
            <th>".$MADesayuno."</th>
            <th>".$MIDesayuno."</th>
            <th>".$JDesayuno."</th>
            <th>".$VDesayuno."</th>
            </tr>";	

            echo "<tr class="."fila".">
            <th>".$LAlmuerzo."</th>
            <th>".$MAAlmuerzo."</th>
            <th>".$MIAlmuerzo."</th>
            <th>".$JAlmuerzo."</th>
            <th>".$VAlmuerzo."</th>
            </tr>";	

            echo "<tr class="."fila".">
            <th>".$LMerienda."</th>
            <th>".$MAMerienda."</th>
            <th>".$MIMerienda."</th>
            <th>".$JMerienda."</th>
            <th>".$VMerienda."</th>
            </tr>";	

		echo "</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ";
	}
