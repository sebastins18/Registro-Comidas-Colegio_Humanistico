<?php
      session_start();
      if($_SESSION['username'] == ""){
        header("Location: index.php");
      }
      $now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado";
echo "<br><a href='index.php'>Login</a>";
exit;
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super usuario | Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class=" navbar-expand-lg navbar-light bg-light">
          
          <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="Logo-una" href="http://www.una.ac.cr"                     target="_blank" title="logo UNA"> <img src="img/logo-una.png" alt="logo-UNA" /></a>
            <a class= "Logo-humanistico" href="http://www.colegiohumanistico.una.ac.cr/" target="_blank" title="logo UNA"> <img src="img/logo-coleg-humanistico.png" alt="logo-UNA" /></a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                  <a class="enlace" href="indexSU.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="enlace" href="SU-AgregarAdmin.php">Agregar administradores</a>
                </li>
                <li class="nav-item">
                  <a class="enlace" href="SU-Reportes.php">Ver reportes del dia por persona</a>
                </li>
                <li class="nav-item">
              <a class="enlace" href="SU-ReporteTotal.php">Reporte por dia</a>
            </li>
            <li class="nav-item">
              <a class="enlace" href="SU-ReporteSemana.php">Reporte por semana</a>
            </li>
                <li class="nav-item">
              <a class="enlace" href="php/logout.php">Salir</a>
            </li>
            </div>
             
          </div>
             
          </div>
            
          </div>
        </nav>

       
    </header>

    <main class="contenido-principal">
        <h1>Reportes</h1>
        <form  action="SU-Reportes.php" method="POST" autocomplete="off">
        <input class="boton inverso" type="submit" name="generar_reporte" value="Generar Reporte"/>
        </form>
       
        <?php

     if(isset($_POST['generar_reporte'])){
    
      require_once "php/php/connect.php";
			require_once "php/procesos/generareporte.php";

     }
    ?>

   
 
    </main>

    <footer>
        <p>Copyright © 2022 Nombre de la entidad UNA. Todos los derechos reservados.
            Web diseñada por estudiantes de ingenieria en sistemas
        </p>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>


</html>