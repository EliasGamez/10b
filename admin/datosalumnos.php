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
    <title>DATOS | ALUMNOS</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../css/main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
  </head>
    
  <body> 
    <?php
        require("nav_admin.php");
    ?>
<section class="home-section">
    <div class="text">
        <h3>Datos de SICA-A de los alumnos</h3>
    </div>
     
    <!-- Ejemplo tabla con DataTables-->
    <div class="container tablaresultado">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered tablaresultado" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>                               
                                <th>Apellido materno</th>
                                <th>Sexo</th>
                                <th>Matricula</th>         
                                <th>Correo</th>                                                    
                                <th>Grado y Grupo</th>
                                <th>Carrera</th>
                                <th>Nivel</th>     
                                <th>Telefono</th>
                                <th>Activar formularios</th>                                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $sql="SELECT * from usuarios WHERE Rol = 'Alumno'";
                                        $result=mysqli_query($mysqli,$sql);
                                        
                                        while($mostrar=mysqli_fetch_array($result)){
                                            // $bgColor = "secondary";
                                            
                                            // if($mostrar['Rango'] == "Minima") {
                                            //     $bgColor =  "success";
                                            // } elseif($mostrar['Rango'] == "Leve") {
                                            //     $bgColor =  "primary";
                                            // } elseif($mostrar['Rango'] == "Moderada") {
                                            //     $bgColor =  "warning";
                                            // } elseif($mostrar['Rango'] == "Grave") {
                                            //     $bgColor =  "danger";
                                            // }
                                    ?>
                            <tr>
                                <td>
                                    <?php echo $mostrar['Nombre']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Apellido_paterno']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Apellido_materno']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Sexo']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Matricula']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Correo']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Grado']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Carreras']?>
                                </td>
                                <!-- <td>
                                    <?php $hola = $mostrar['Carreras']?>
                                    <?php echo utf8_encode($hola);?>
                                </td> -->
                                <td>
                                    <?php echo $mostrar['Nivel']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Telefono']?>
                                </td>
                                <td>
                                    <a href="activar.php?Id_usuario=<?php echo $mostrar['Id_usuario']; ?>"><img src="../imagenes/10.png" alt="Modificar"  width="50px";></a>
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
