<?php
    require("../conexion.php");
    // $conexion=mysqli_connect('localhost','root','','cuestionarios');

    session_start();
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo.png">
    <title>RESULTADO | MOTIVACIÓN</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../css/main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
  </head>
    
  <body> 
    <?php
        require("nav_admin.php");
    ?>
<section class="home-section">
    <div class="text">
        <h3>Resultados de los alumnos en el cuestionario Motivación Académica</h3>
    </div>
     
    <!-- Ejemplo tabla con DataTables-->
    <div class="container tablaresultado">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered tablaresultado" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre completo</th>
                                <th>Motivación profunda</th>
                                <th>Motivación de rendimiento</th>
                                <th>Motivación superficial</th>
                                <th>Fecha en que se realizó</th>  
                                <th>observaciones</th> 
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $sql="SELECT m.Cantidad_profunda,m.Cantidad_ren,m.Cantidad_super,
                                        m.Id_motivacion_aprendizaje,m.Fecha,m.Nombre AS Obse, u.Nombre,
                                        u.Apellido_paterno,u.Apellido_materno FROM motivacion_aprendizaje m 
                                        INNER JOIN usuarios u ON m.Id_usuario = u.Id_usuario";
                                        $result=mysqli_query($mysqli,$sql);
                                        
                                        while($mostrar=mysqli_fetch_array($result)){
                                            $bgColor = "secondary";
                                            $bgColor2 = "secondary";
                                            $bgColor3 = "secondary";
                                            
                                            if($mostrar['Cantidad_profunda'] == "Baja") {
                                                $bgColor =  "success";
                                            } elseif($mostrar['Cantidad_profunda'] == "Media") {
                                                $bgColor =  "warning";
                                            } elseif($mostrar['Cantidad_profunda'] == "Alta") {
                                                $bgColor =  "danger";
                                            }

                                            if($mostrar['Cantidad_ren'] == "Baja") {
                                                $bgColor2 =  "success";
                                            } elseif($mostrar['Cantidad_ren'] == "Media") {
                                                $bgColor2 =  "warning";
                                            } elseif($mostrar['Cantidad_ren'] == "Alta") {
                                                $bgColor2 =  "danger";
                                            }

                                            if($mostrar['Cantidad_super'] == "Baja") {
                                                $bgColor3 =  "success";
                                            } elseif($mostrar['Cantidad_super'] == "Media") {
                                                $bgColor3 =  "warning";
                                            } elseif($mostrar['Cantidad_super'] == "Alta") {
                                                $bgColor3 =  "danger";
                                            }
                                    ?>
                            <tr>
                                <td>
                                    <?php echo $mostrar['Id_motivacion_aprendizaje']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Nombre'].' '.$mostrar['Apellido_paterno'].' '.$mostrar['Apellido_materno']?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor."' style='padding: 10px; border-radius: 30px';>{$mostrar['Cantidad_profunda']}</span>";?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor2."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Cantidad_ren']}</span>";?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor3."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Cantidad_super']}</span>";?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Fecha']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Obse']?>
                                </td>
                                <td>
                                    <a href="motivacionmodificar.php?Id=<?php echo $mostrar['Id_motivacion_aprendizaje']; ?>"><img src="../imagenes/modificar.png" alt="Modificar"  width="50px";></a>
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

</section>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../js/main.js"></script>  
    
    
  </body>
</html>
