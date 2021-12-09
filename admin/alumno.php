<?php
    session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo.png">
    <title>ALUMNO</title>
</head>
<body>
    <?php
        require("nav_admin.php");
    ?>

    <section class="home-section">
        <div class="text">
            <p class="textos">Objetivos:</p>
            <p class="textos-hijo"> - Generar un perfil del alumno/solicitante en el que se identifiquen factores emocionales y  cognitivos que puedan impactar en su trayectoria académica.</p>
            <p class="textos-hijo"> - Establecer estrategias personalizadas conforme el perfil generado del alumno.</p>
        </div>
        <p></p>
        <?php
        if(isset($_SESSION['Cuestionario1']) && $_SESSION['Cuestionario1'] == 0){ 
            ?> 
            <div class="hijo">
                <a href="ansiedad.php" style="text-decoration:none; color: inherit;">
                <h2 class="texto">Ansiedad</h2>
                <center>
                    <img src="../imagenes/4.png" alt="Ansiedad" width="184px" ; class="img">
                </center>
                Realizar cuestionario
                <i class='bx bxs-caret-right-circle'></i>
                </a>
            </div>
            <?php } else {?>
            <div class="padre">
                <a href="" style="text-decoration:none; color: inherit;">
                <h2 class="texto">Ansiedad</h2>
                <center>
                    <img src="../imagenes/4.png" alt="Ansiedad" width="184px" ; class="img">
                </center>
                Ya no puedes realizar este cuestionario
                <i class='bx bx-hide'></i>
                </a>
            </div>
            <?php } ?>
        
        <?php
        if(isset($_SESSION['Cuestionario2']) && $_SESSION['Cuestionario2'] == 0){ 
            ?> 
            <div class="hijo">
                <a href="depresion.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Depresión</h2>
                <center>
                    <img src="../imagenes/5.png" alt="Depresión" width="120px" ; class="img">
                </center>
                Realizar cuestionario
                <i class='bx bxs-caret-right-circle'></i>
                </a>
            </div>
            <?php } else {?>
                <div class="padre">
                <a href="" style="text-decoration:none; color: inherit;">
                <h2 href="">Depresión</h2>
                <center>
                    <img src="../imagenes/5.png" alt="Depresión" width="120px" ; class="img">
                </center>
                Ya no puedes realizar este cuestionario
                <i class='bx bx-hide'></i>
                </a>
            </div>
            <?php } ?>

        <?php
        if(isset($_SESSION['Cuestionario3']) && $_SESSION['Cuestionario3'] == 0){ 
            ?> 
            <div class="hijo">
                <a href="motivacion_aprendizaje.php" style="text-decoration:none; color: inherit;">
                <h2>Motivación del Aprendizaje</h2>
                <center>
                    <img src="../imagenes/6.png" alt="Motivación" width= "218px"; class="img">
                </center> 
                Realizar cuestionario
                <i class='bx bxs-caret-right-circle'></i>
                </a>
            </div>
            <?php } else {?>
                <div class="padre">
                <a href="" style="text-decoration:none; color: inherit;">
                <h2>Motivación del Aprendizaje</h2>
                <center>
                    <img src="../imagenes/6.png" alt="Motivación" width= "218px"; class="img">
                </center> 
                Ya no puedes realizar este cuestionario
                <i class='bx bx-hide'></i>
                </a>
            </div>
            <?php } ?>

        <?php
        if(isset($_SESSION['Cuestionario4']) && $_SESSION['Cuestionario4'] == 0){ 
            ?>
            <div class="hijo">
                <a href="estilo_aprendizaje.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Estilo de Aprendizaje</h2>
                <center>
                    <img src="../imagenes/7.png" alt="Estilo" width= "110px"; class="img">
                </center> 
                Realizar cuestionario
                    <i class='bx bxs-caret-right-circle'></i>
                </a>
            </div>
            <?php } else {?>
                <div class="padre">
                <a href="" style="text-decoration:none; color: inherit;">
                <h2 href="">Estilo de Aprendizaje</h2>
                <center>
                    <img src="../imagenes/7.png" alt="Estilo" width= "110px"; class="img">
                </center> 
                Ya no puedes realizar este cuestionario
                <i class='bx bx-hide'></i>
                </a>
            </div>
            <?php } ?>

        <?php
        if(isset($_SESSION['Cuestionario5']) && $_SESSION['Cuestionario5'] == 0){ 
            ?>
            <div class="hijo">
                <a href="canal_aprendizaje.php" style="text-decoration:none; color: inherit;">
                <h2 href="">Canal de Aprendizaje</h2>
                <center>
                    <img src="../imagenes/8.jpg" alt="Canal" width= "222px" class="img">
                </center> 
                Realizar cuestionario
                <i class='bx bxs-caret-right-circle'></i>
                </a>
            </div>
            <?php } else {?>
                <div class="padre">
                <a href="" style="text-decoration:none; color: inherit;">
                <h2 href="">Canal de Aprendizaje</h2>
                <center>
                    <img src="../imagenes/8.jpg" alt="Canal" width= "222px" class="img">
                </center> 
                Ya no puedes realizar este cuestionario
                <i class='bx bx-hide'></i>
                </a>
            </div>
            <?php } ?>
    </section>

</body>
</html>