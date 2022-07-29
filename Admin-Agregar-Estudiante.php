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
    <title>Aregar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body action="Admin-Agregar-Estudiante.php">

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
                    <a class="enlace" href="indexAdmin.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="enlace" href="Admin-Agregar-Estudiante.php">Agregar estudiantes</a>
                  </li>
                  <li class="nav-item">
                  <a id="registro_comida" class="enlace"  href="Registro_Comidas_Estudiantes_Espera.php">Registro comida</a>
                  </li>
                  <li class="nav-item">
              <a class="enlace" href="php/logout.php">Salir</a>
            </li>
              </div>
            
          </div>
        </nav>
    </header>
    
    <main>
        <form class="formulario" action="Admin-Agregar-Estudiante.php" method="POST">
            <div class="bloque">
                <legend >Agregar un estudiante:</legend>
                <div class="campo">
                    <br />
                    <label class="etiquetas">Identificacion: </label>
                    <input class="input-text" type="text"  name="iden" />
                    <br />
                    <br />
                </div>
                <div class="campo">
                    <label class="etiquetas">Nombre: </label>
                    <input class="input-text" type="text"  name="nombre"/>
                    <br />
                    <br />
                </div>
                <div class="campo">
                    <label class="etiquetas">Apellidos: </label>
                    <input class="input-text" type="text"  name="Apellidos" />
                    <br />
                    <br />
                </div>
                <div class="campo">
                    <label class="etiquetas">Seccion: </label>
                    <div class="seccion">
                        <input class="input-text" type="number" name="sec" min="7" max="12"/>
                        <label class="guion">-</label>
                        <input class="input-text" type="number" name="sec2" min="1"/>
                    </div>
                    
                    <br />
                    <br />
                </div>
                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar" name="enviar">
                </div>

                <h4 id="cantidad"></h4>
            </div>
        </form>    
    </main>
    
    
    <footer>
        <p>Copyright © 2022 Nombre de la entidad UNA. Todos los derechos reservados.
            Web diseñada por estudiantes de ingenieria en sistemas
        </p>
    </footer>
    <?php
        
	?>    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/app.js"> </script>
</body>
</html>