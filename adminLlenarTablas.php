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
        echo '<tr class="fila">
            <th><input name="LDesayuno" id="LD" class="entrada tabla" value="'.$LDesayuno.'"></th>
            <th><input name="MADesayuno" id="MD" class="entrada tabla" value="'.$MADesayuno.'"></th>
            <th><input name="MIDesayuno" id="MID" class="entrada tabla" value="'.$MIDesayuno.'"></th>
            <th><input name="JDesayuno" id="JD" class="entrada tabla" value="'.$JDesayuno.'"></th>
            <th><input name="VDesayuno" id="VD" class="entrada tabla" value="'.$VDesayuno.'"></th>
            </tr>';	

            echo '<tr class="fila">
            <th><input name="LAlmuerzo" id="LA" class="entrada tabla" value="'.$LAlmuerzo.'"></th>
            <th><input name="MAAlmuerzo" id="MA" class="entrada tabla" value="'.$MAAlmuerzo.'"></th>
            <th><input name="MIAlmuerzo" id="MIA" class="entrada tabla" value="'.$MIAlmuerzo.'"></th>
            <th><input name="JAlmuerzo" id="JA" class="entrada tabla" value="'.$JAlmuerzo.'"></th>
            <th><input name="VAlmuerzo" id="VA" class="entrada tabla" value="'.$VAlmuerzo.'"></th>
            </tr>';	

            echo '<tr class="fila">
            <th><input name="LMerienda" id="LM" class="entrada tabla" value="'.$LMerienda.'"></th>
            <th><input name="MAMerienda" id="MM" class="entrada tabla" value="'.$MAMerienda.'"></th>
            <th><input name="MIMerienda" id="MIM" class="entrada tabla" value="'.$MIMerienda.'"></th>
            <th><input name="JMerienda" id="JM" class="entrada tabla" value="'.$JMerienda.'"></th>
            <th><input name="VMerienda" id="VM" class="entrada tabla" value="'.$VMerienda.'"></th>
            </tr>';	

		echo "</table>";


	}else{
		echo "No hemos encotrado ningun registro con la palabra ";
	}
?>

<script>
window.onload=function(){
    console.log("1");
    document.getElementById("LD").value='<?=$LDesayuno?>';
    document.getElementById("MD").value='<?=$MADesayuno?>';
    document.getElementById("MID").value='<?=$MIDesayuno?>';
    document.getElementById("JD").value='<?=$JDesayuno?>';
    document.getElementById("VD").value='<?=$VDesayuno?>';

    document.getElementById("LA").value='<?=$LAlmuerzo?>';
    document.getElementById("MA").value='<?=$MAAlmuerzo?>';
    document.getElementById("MIA").value='<?=$MIAlmuerzo?>';
    document.getElementById("JA").value='<?=$JAlmuerzo?>';
    document.getElementById("VA").value='<?=$VAlmuerzo?>';

   document.getElementById("LM").value='<?=$LMerienda?>';
   document.getElementById("MM").value='<?=$MAMerienda?>';
   document.getElementById("MIM").value='<?=$MIMerienda?>';
   document.getElementById("JM").value='<?=$JMerienda?>';
   document.getElementById("VM").value='<?=$VMerienda?>';

}
</script>

