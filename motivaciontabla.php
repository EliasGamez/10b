<?php
    require("conexion.php");
    // $conexion=mysqli_connect('localhost','root','','cuestionarios');

    session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo.png">
    <script src="grafica/Chart.js"></script>
    <title>RESULTADO | MOTIVACIÓN</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="css/main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
  </head>
    
  <body> 
    <?php
        require("nav_alumno.html");
    ?>
<section class="home-section">
    <div class="text">
        <h3>Resultado Motivación</h3>
    </div>
     
    <!-- Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered tablaresultado" style="width:100%">
                        <thead>
                            <tr>
                                <th>Motivación profunda</th>
                                <th>¿Qué significa la Motivación profunda?</th>
                                <th>Motivación de rendimiento</th>
                                <th>¿Qué significa la Motivación de rendimiento?</th>
                                <th>Motivación superficial</th>
                                <th>¿Qué significa la Motivación superficial?</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $sql="SELECT * from motivacion_aprendizaje WHERE Id_usuario = $id";
                                        $result=mysqli_query($mysqli,$sql);
                                        
                                        while($mostrar=mysqli_fetch_array($result)){
                                            $bgColor = "secondary";
                                            $bgColor2 = "secondary";
                                            $bgColor3 = "secondary";
                                            $bgColor4 = "";
                                            $bgColor5 = "";
                                            $bgColor6 = "";
                                            
                                            if($mostrar['Cantidad_profunda'] == "Baja") {
                                                $bgColor =  "danger";
                                            } elseif($mostrar['Cantidad_profunda'] == "Media") {
                                                $bgColor =  "warning";
                                            } elseif($mostrar['Cantidad_profunda'] == "Alta") {
                                                $bgColor =  "success";
                                            }

                                            if($mostrar['Cantidad_ren'] == "Baja") {
                                                $bgColor2 =  "danger";
                                            } elseif($mostrar['Cantidad_ren'] == "Media") {
                                                $bgColor2 =  "warning";
                                            } elseif($mostrar['Cantidad_ren'] == "Alta") {
                                                $bgColor2 =  "success";
                                            }

                                            if($mostrar['Cantidad_super'] == "Baja") {
                                                $bgColor3 =  "success";
                                            } elseif($mostrar['Cantidad_super'] == "Media") {
                                                $bgColor3 =  "warning";
                                            } elseif($mostrar['Cantidad_super'] == "Alta") {
                                                $bgColor3 =  "danger";
                                            }

                                            if($mostrar['Cantidad_profunda'] == "Baja") {
                                                $bgColor4 =  "Tiene pensamientos sobre la falta de capacidad o sobre la inutilidad de sus estrategias de estudio, los sentimientos de no poder con la escuela y el poco o nulo valor e interés que tienen las actividades";
                                            } elseif($mostrar['Cantidad_profunda'] == "Media") {
                                                $bgColor4 =  "Puede tener pensamientos y sentimientos en los que duda de su capacidad y siente vergüenza por su desempeño, pero en ocasiones se motiva a sí mismo y se marca metas, iniciando actividades y pudiendo terminarlas o no";
                                            } elseif($mostrar['Cantidad_profunda'] == "Alta") {
                                                $bgColor4 =  "Estudiar es una actividad satisfactoria por sí misma. Siente más orgullo por su desempeño que vergüenza. Reconoce qué quiere aprender, tiene intereses personales marcados y sabe que sus logros son fruto de su esfuerzo. Cuando inicia una actividad puede terminarla";
                                            }

                                            if($mostrar['Cantidad_ren'] == "Baja") {
                                                $bgColor5 =  "Es poco competitivo, no le interesan los resultados de su actividad. No busca el apoyo ni la aprobación de sus padres o compañeros. Puede llegar a no conseguir buenos resultados";
                                            } elseif($mostrar['Cantidad_ren'] == "Media") {
                                                $bgColor5 =  "Puede ser dependiente de la aprobación de los demás, especialmente de los maestros; si el maestro falla, pierde el interés por las actividades. Puede llegar a competir con otros, pero no es lo importante, además que experimenta esto con alto estrés. Si no logra su objetivo reacciona inadecuadamente (tristeza-enojo)";
                                            } elseif($mostrar['Cantidad_ren'] == "Alta") {
                                                $bgColor5 =  "Se presiona por obtener un buen resultado, le importa la aprobación de la familia y profesores. Se centra en sus calificaciones, más que en sus aprendizajes. Debe preservar una imagen de buen estudiante a como dé lugar. Tiene una alta autonomía, es muy competitivo y busca el apoyo emocional personal";
                                            }

                                            if($mostrar['Cantidad_super'] == "Baja") {
                                                $bgColor6 =  "No se centra en aprobar. No busca el acompañamiento del maestro. No suele considerarse un estudiante común";
                                            } elseif($mostrar['Cantidad_super'] == "Media") {
                                                $bgColor6 =  "Su motivación puede estar centrada en no reprobar. Puede tener una imagen estudiantil negativa y llega a pensarse poco capaz. Puede buscar recompensas para sentirse motivado";
                                            } elseif($mostrar['Cantidad_super'] == "Alta") {
                                                $bgColor6 =  "Se concentra sólo en cumplir, sin tener un objetivo con ello. Requiere que le digan exactamente qué hacer. Si no logra aprobar, puede desmotivarse fácilmente. Cree que no tiene capacidad. Necesita una recompensa no académica para motivarse";
                                            }
                                    ?>
                            <tr>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor."' style='padding: 10px; border-radius: 30px';>{$mostrar['Cantidad_profunda']}</span>";?>
                                </td>
                                <td>
                                    <?php echo $bgColor4?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor2."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Cantidad_ren']}</span>";?>
                                </td>
                                <td>
                                    <?php echo $bgColor5?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor3."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Cantidad_super']}</span>";?>
                                </td>
                                <td>
                                    <?php echo $bgColor6?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Nombre']?>
                                </td>
                            </tr>
                        </tbody>
                        <?php 
                                    }
                                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div style="width: 50%; margin-left: 30%;">
        <canvas id="canvas" height="450" width="600"></canvas>
    </div>

    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        
        var barChartData = {
            labels : [
                <?php
                    $sql="SELECT * from motivacion_aprendizaje_";
                    $result=mysqli_query($mysqli,$sql);

                    while($mostrar=mysqli_fetch_array($result)) { 
                        ?>
                        '<?php echo $mostrar["Subescala"] ?>',
                        <?php
                    }
                ?>
            ],
            datasets : [
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,0.8)",
                    highlightFill : "rgba(151,187,205,0.75)",
                    highlightStroke : "rgba(151,187,205,1)",
                    data : 
                    <?php  
                        $sql="SELECT * from motivacion_aprendizaje WHERE Id_usuario = $id";
                        $result=mysqli_query($mysqli,$sql);
                    ?>
                    [<?php while($mostrar=mysqli_fetch_array($result)) {
                        ?>
                        <?php echo $mostrar["Motivacion_profunda"] ?>,
                        <?php echo $mostrar["Motivacion_rendimiento"] ?>,
                        <?php echo $mostrar["Motivacion_superficial"] ?>,
                    <?php } ?>]
                }
            ]
        }   

        window.onload = function(){
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx).Bar(barChartData, {
                responsive : true
            });
        }
	</script>
</section>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="js/main.js"></script>  
    
    
  </body>
</html>
