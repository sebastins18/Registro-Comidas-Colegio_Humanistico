<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comidas</title>
    <link rel="preload" href="css/normalize.css" as="style" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet" />
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

        
    <a class="Inicio Sesion" href="inicio_sesion.php">Iniciar Sesion</a>
    
        

    </header>

    <form action="indexLlenarTablas.php" method="POST">
        <?php
            require_once "php/php/connect.php";
            require_once "indexLlenarTablas.php"
              
        ?>
              
    </form>

    

    
    <footer>
        &copy;2022 <a class="link-una" href="http://www.una.ac.cr">UNA</a>
    </footer>
</body>

</html>