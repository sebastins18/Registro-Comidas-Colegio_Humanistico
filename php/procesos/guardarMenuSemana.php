<?php
    

    

    if(isset($_POST['boton'])){
        $LDesayuno= $_POST['LDesayuno'];
        $MADesayuno= $_POST['MADesayuno'];
        $MIDesayuno= $_POST['MIDesayuno'];
        $JDesayuno= $_POST['JDesayuno'];
        $VDesayuno= $_POST['VDesayuno'];

        $LAlmuerzo= $_POST['LAlmuerzo'];
        $MAAlmuerzo= $_POST['MAAlmuerzo'];
        $MIAlmuerzo= $_POST['MIAlmuerzo'];
        $JAlmuerzo= $_POST['JAlmuerzo'];
        $VAlmuerzo= $_POST['VAlmuerzo'];

        $LMerienda= $_POST['LMerienda'];
        $MAMerienda= $_POST['MAMerienda'];
        $MIMerienda= $_POST['MIMerienda'];
        $JMerienda= $_POST['JMerienda'];
        $VMerienda= $_POST['VMerienda'];

        $desayuno = $LDesayuno.'-'.$MADesayuno.'-'.$MIDesayuno.'-'.$JDesayuno.'-'.$VDesayuno;
        $almuerzo = $LAlmuerzo.'-'.$MAAlmuerzo.'-'.$MIAlmuerzo.'-'.$JAlmuerzo.'-'.$VAlmuerzo;
        $merienda = $LMerienda.'-'.$MAMerienda.'-'.$MIMerienda.'-'.$JMerienda.'-'.$VMerienda;
        for($i=1;$i<6;$i++){
            $query0="DELETE FROM Menu WHERE idmenu='$i'";
            if($mysqli->query($query0)){
                
            }
        }
        $query1="INSERT INTO Menu(idmenu,desayuno,almuerzo,merienda) VALUES(1,'$LDesayuno','$LAlmuerzo','$LMerienda')";
        
        if($mysqli->query($query1)){
            
        }
        $query2="INSERT INTO Menu(idmenu,desayuno,almuerzo,merienda) VALUES(2,'$MADesayuno','$MAAlmuerzo','$MAMerienda')";
        
        if($mysqli->query($query2)){
            
        }
        $query3="INSERT INTO Menu(idmenu,desayuno,almuerzo,merienda) VALUES(3,'$MIDesayuno','$MIAlmuerzo','$MIMerienda')";
        
        if($mysqli->query($query3)){
            
        }
        $query4="INSERT INTO Menu(idmenu,desayuno,almuerzo,merienda) VALUES(4,'$JDesayuno','$JAlmuerzo','$JMerienda')";
        
        if($mysqli->query($query4)){
            
        }
        $query5="INSERT INTO Menu(idmenu,desayuno,almuerzo,merienda) VALUES(5,'$VDesayuno','$VAlmuerzo','$VMerienda')";
        
        if($mysqli->query($query5)){
            
        }
    } 
?>

<script>
window.onload=function(){
    console.log("2");
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


