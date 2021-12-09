<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo.png">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <?php
        require("nav_admin.php");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Ver el resultados de los alumnos</h1>
        </div>
        <p></p>
        <div class="hijo">
            <a href="ansiedadtabla.php" style="text-decoration:none; color: inherit;">
                <h2 class="texto">Ansiedad</h2>
                <center>
                    <img src="../imagenes/4.png" alt="Ansiedad" width="184px" ; class="img">
                </center>
                Visualizar resultados
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <a href="depresiontabla.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Depresión</h2>
                <center>
                    <img src="../imagenes/5.png" alt="Depresión" width="120px" ; class="img">
                </center>
                Visualizar resultados
            <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <a href="motivaciontabla.php" style="text-decoration:none; color: inherit;">
                <h2>Motivación del Aprendizaje</h2>
                <center>
                    <img src="../imagenes/6.png" alt="Motivación" width= "218px"; class="img">
                </center> 
                Visualizar resultados
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <a href="estilotabla.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Estilo de Aprendizaje</h2>
                <center>
                    <img src="../imagenes/7.png" alt="Estilo" width= "110px"; class="img">
                </center> 
                Visualizar resultados
                    <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <a href="canaltabla.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Canal de Aprendizaje</h2>
                <center>
                    <img src="../imagenes/8.jpg" alt="Canal" width= "222px" class="img">
                </center> 
                Visualizar resultados
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <a href="resultados.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Resultados generales</h2>
                <center>
                    <img src="../imagenes/8.png" alt="Canal" width= "110px" class="img">
                </center> 
                Visualizar resultados
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
    </section>

</body>
</html>