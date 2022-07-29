<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="preload" href="css/normalize.css" as="style" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preload" href="css/style.css" as="style" />
  <link href="css/style.css " rel="stylesheet" />

</head>
<body>
    
  <header class="header">
    <div class="contenedor">
      <div class="header__izquierda">

        <a class="Logo-una" href="http://www.una.ac.cr" target="_blank" title="logo UNA"> <img src="img/logo-una.png"
          alt="logo-UNA" /></a>
        <a class="Logo-humanistico" href="http://www.colegiohumanistico.una.ac.cr/" target="_blank" title="logo UNA">
          <img src="img/logo-coleg-humanistico.png" alt="logo-UNA" /></a>
      </div>
    </div>

    <a class= "Inicio" href="index.php">Inicio</a>      
           
  </header>  

  <h1 class="titulo">Iniciar Sesion</h1>
      
  <form method="POST" action="inicio_sesion.php" class="formulario">
    <label class="etiquetas">Identificacion</label>
    <input type="text" name="email" class="input-text"><br><br>
    <label class="etiquetas">Clave</label>
    <input type="password" name="clave" class="input-text"><br><br>
    <input type="submit" value="Ingresar" name="boton" class="boton">
	</form>

	<?php
  
  if(isset($_POST['boton'])){
		if(isset($_POST['email']) && isset($_POST['clave'])){
			require_once "php/php/connect.php";
			require_once "php/procesos/login.php";
      
		}
  }
	?>
    <!-- JavaScript Bundle with Popper -->
  <footer>
    &copy;2022 <a href="http://www.una.ac.cr">UNA</a>
  </footer>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>