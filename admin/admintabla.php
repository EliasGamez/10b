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
            <h1>Seleciona el resultado a observar...</h1>
        </div>
        <p></p>
        <div class="hijo">
            <h4 class="texto">Ansiedad</h4>
            <p>La ansiedad puede ser normal en situaciones estresantes, como hablar en público o realizar una prueba.</p>
            <br>
            <a href="ansiedad_admin.php" style="text-decoration:none; color: inherit;">Visualizar resultado
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <h4 href="">Depresión</h4>
            <p>Se caracteriza por una profunda tristeza, decaimiento anímico, baja autoestima, pérdida de interés por
                todo y disminución de las funciones psíquicas.</p>
            <br>
            <a href="depresiontabla.php" style="text-decoration:none; color: inherit;">Visualizar resultado
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <h4>Motivación del Aprendizaje</h4>
            <p>Es el interés que tiene el alumno por su propio aprendizaje o por las actividades que le conducen a él.
            </p>
            <br>
            <a href="motivaciontabla.php" style="text-decoration:none; color: inherit;">Visualizar resultado
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <h4 href="">Estilo de Aprendizaje</h4>
            <p>Se definen como las distintas maneras en que un individuo puede aprender.</p>
            <br>
            <a href="estilotabla.php" style="text-decoration:none; color: inherit;">Visualizar resultado
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
        <div class="hijo">
            <h4 href="">Canal de Aprendizaje</h4>
            <p>Son el conjunto de estrategias, métodos y tendencias concretas que se utilizan cuando se quiere aprender
                algo.</p>
            <br>
            <a href="canaltabla.php" style="text-decoration:none; color: inherit;">Visualizar resultado
                <i class='bx bxs-caret-right-circle'></i>
            </a>
        </div>
    </section>

</body>
</html>