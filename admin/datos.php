<?php
    require("../conexion.php");
    // $conexion=mysqli_connect('localhost','root','','cuestionarios');

    session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];

    $sql="SELECT * from usuarios WHERE Id_usuario = '$id'";
    $result=mysqli_query($mysqli,$sql);
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo.png">
    <link rel="stylesheet" href="../css/formulario2.css">
    <title>DATOS | ADMIN</title>
      
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
        require("nav_admin.php");
    ?>
<section class="home-section">
     
    <section class="form-register">
                <h4>Mis datos</h4>
                <?php
                while($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    
                <label for="">Nombre</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Nombre']; ?>" readonly>
                <label for="">Apellido paterno</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Apellido_paterno']; ?>" readonly>
                <label for="">Apellido materno</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Apellido_materno']; ?>" readonly>
                <label for="">Sexo</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Sexo']; ?>" readonly>
                <label for="">Matrícula</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Matricula']; ?>" readonly>
                <label for="">Contraseña</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Contrasena']; ?>" readonly>
                <label for="">Correo</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Correo']; ?>" readonly>
                <label for="">Teléfono</label>
                <input class="controls" type="text" value="<?php echo $mostrar['Telefono']; ?>" readonly>

                <?php } ?>
         
        </section>


    <!-- Ejemplo tabla con DataTables
    <div class="container tablaresultado">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered tablaresultado" style="width:100%; vertical-align: baseline;">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>                               
                                <th>Apellido materno</th>
                                <th>Sexo</th>
                                <th>Matrícula</th>
                                <th>Contraseña</th>          
                                <th>Correo</th>                                                    
                                <th>Grado y Grupo</th>
                                <th>Carrera</th>
                                <th>Nivel</th>     
                                <th>Teléfono</th>                                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $sql="SELECT * from usuarios WHERE Id_usuario = '$id'";
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
                                    <?php echo $mostrar['Contraseña']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Correo']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Grado']?>
                                </td>
                                <td>
                                    <?php echo utf8_encode($mostrar['Carreras']);?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Nivel']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Telefono']?>
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
    </div> -->

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
