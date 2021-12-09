<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="css/estilo.css">
    <title>ALUMNO</title>
</head>
<body>
    <?php
        require("nav_alumno.html");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Seleciona la opción para vizualizar tu resultado</h1>
        </div>
        <p></p>
        <div class="hijo">
            <h2 class="texto">Ansiedad</h2>
            <br><br>
            <center>
                <button id="open">
                    Saber más
                </button>
            </center>
            <div id="modal_container" class="modal-container">
                <div class="modal">
                    <h1>ANSIEDAD</h1>
                    <p>
                        Es una respuesta psicofisiológica que surge de la percepción-interpretación de una situación que genera determinada emoción y no logra ser gestionada de forma correcta.  Así, la ansiedad no es una emoción, es una respuesta que se tiene ante  una emoción desbordada. 
                    </p>
                    <br>
                    <button id="close">Cerrar</button>
                </div>
            </div>
            <script src="js/modal.js"></script>
            <br><br><br>
            <a href="ansiedadtabla.php" style="text-decoration:none; color: inherit;">
                Visualizar resultado
                <i class='bx bx-show'></i>
            </a>
        </div>
        <div class="hijo">
            <h2 href="">Depresión</h2>
            <br><br>
            <center>
                <button id="open2">
                    Saber más
                </button>
            </center>
            <div id="modal_container2" class="modal-container">
                <div class="modal">
                    <h1>DEPRESIÓN</h1>
                    <p>
                    La depresión, normalmente, no es el origen, sino lo secundario de otras problemáticas. La palabra “depresión” indica “bajada”, sirve para indicar la reacción que tiene un individuo cuando hay algo que no funciona en la vida. La depresión no  nace de la nada, es el resultado de los fracasos, de la desilusión, rabia y dolor. 
                    </p>
                    <br>
                    <button id="close2">Cerrar</button>
                </div>
            </div>
            <script src="js/modal2.js"></script>
            <br><br><br>
            <a href="depresiontabla.php" style="text-decoration:none; color: inherit;">
                Visualizar resultado
                <i class='bx bx-show'></i>
            </a>
        </div>
        <div class="hijo">
                <h2>Motivación del Aprendizaje</h2>
                <br><br>
            <center>
                <button id="open3">
                    Saber más
                </button>
            </center>
            <div id="modal_container3" class="modal-container">
                <div class="modal">
                    <h1>MOTIVACIÓN DEL APRENDIZAJE</h1>
                    <p>
                    Desde un punto de vista etimológico, la palabra Motivación está compuesta por el latín Motivus (movimiento) y el sufijo  -ción (acción y efecto).  De forma que, la motivación sería “moverte hacia la acción”. 
                    </p>
                    <br>
                    <button id="close3">Cerrar</button>
                </div>
            </div>
            <script src="js/modal3.js"></script>
            <br><br>
            <a href="motivaciontabla.php" style="text-decoration:none; color: inherit;">
                Visualizar resultado
                <i class='bx bx-show'></i>
            </a>
        </div>
        <div class="hijo">
                <h2 href="">Estilo de Aprendizaje</h2>
                <br><br>
            <center>
                <button id="open4">
                    Saber más
                </button>
            </center>
            <div id="modal_container4" class="modal-container">
                <div class="modal">
                    <h1>ESTILO DE APRENDIZAJE</h1>
                    <p>
                    Alonso y otros (1994) de acuerdo a  Keefe (1988) explican que los Estilos de Aprendizaje son los “rasgos cognitivos, afectivos y fisiológicos que sirven como indicadores relativamente estables, de cómo los alumnos  perciben, interrelacionan y responden  a sus ambientes de aprendizajes. 
                    </p>
                    <br>
                    <button id="close4">Cerrar</button>
                </div>
            </div>
            <script src="js/modal4.js"></script>
            <br><br>
            <a href="estilotabla.php" style="text-decoration:none; color: inherit;">
                Visualizar resultado
                <i class='bx bx-show'></i>
            </a>
        </div>
        <div class="hijo">
                <h2 href="">Canal de Aprendizaje</h2>
                <br><br>
            <center>
                <button id="open5">
                    Saber más
                </button>
            </center>
            <div id="modal_container5" class="modal-container">
                <div class="modal">
                    <h1>CANAL DE APRENDIZAJE</h1>
                    <p>
                        Los canales de aprendizaje son el conjunto de estrategias, métodos y tendencias concretas que se utilizan cuando se quiere aprender algo. Los niños que poseen este canal del aprendizaje, necesitan invertir más tiempo, sin embargo su aprendizaje es concreto, profundo y duradero.
                    </p>
                    <br>
                    <button id="close5">Cerrar</button>
                </div>
            </div>
            <script src="js/modal5.js"></script>
            <br><br>
            <a href="canaltabla.php" style="text-decoration:none; color: inherit;">
                Visualizar resultado
                <i class='bx bx-show'></i>
            </a>
        </div>
    </section>

</body>
</html>
