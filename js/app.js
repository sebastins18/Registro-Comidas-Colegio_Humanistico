function obtenerPag(){
    let fecha = new Date();
    let horas = fecha.getHours();
    
    
    if(horas >= 7 && horas < 8){
        
        document.getElementById("registro_comida").href="Registro_Comidas_Estudiantes_Desayuno.php";
        document.getElementById().img
    }
    else if(horas >= 12 && horas < 13){
        
        document.getElementById("registro_comida").href="Registro_Comidas_Estudiantes_Almuerzo.php";
    }
    else if(horas >= 14 && horas <15){
        
        document.getElementById("registro_comida").href="Registro_Comidas_Estudiantes_Merienda.php";
    }else{
       
        document.getElementById("registro_comida").href="Registro_Comidas_Estudiantes_Espera.php";
    }
    
}

obtenerPag();
