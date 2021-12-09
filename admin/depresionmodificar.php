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
    <title>UPDATE | DEPRESIÓN</title>
      
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
        <h3>Update comentario del cuestionario depresión</h3>
    </div>
     
    <!-- Ejemplo tabla con DataTables-->
<form method="POST" action="depresionupdate.php" name="formulario">
    <div class="container tablaresultado">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered tablaresultado" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Puntuación general</th>
                                <th>Tipo de Rango en Depresión</th>
                                <th>Fecha en que se realizó</th>
                                <th>Observaciones</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $id = intval($_GET['Id']);
                                        $sql="SELECT * from depresion WHERE Id_depresion = $id";
                                        $result=mysqli_query($mysqli,$sql);
                                        
                                        while($mostrar=mysqli_fetch_array($result)){
                                            $bgColor = "secondary";
                                            
                                            if($mostrar['Rango'] == "Minima") {
                                                $bgColor =  "success";
                                            } elseif($mostrar['Rango'] == "Leve") {
                                                $bgColor =  "primary";
                                            } elseif($mostrar['Rango'] == "Moderada") {
                                                $bgColor =  "warning";
                                            } elseif($mostrar['Rango'] == "Grave") {
                                                $bgColor =  "danger";
                                            }
                                    ?>
                            <tr>
                                <td>
                                    <input type="number" name="id_nuevo" readonly value="<?php echo $mostrar['Id_depresion']; ?>">
                                </td>
                                <td>
                                    <?php echo $mostrar['Rango_numerico']?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor."' style='padding: 10px; border-radius: 30px'; padding: 10px; border-radius: 30px';'>{$mostrar['Rango']}</span>";?>
                                </td>
                                <td>
                                    <?php echo $mostrar['Fecha']?>
                                </td>
                                <td>
                                   <input type="text" name="observacion">
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
    <center>
    <input type="submit" value="Modificar" class="boton_enviar">
    <a href="depresiontabla.php" class="boton_enviar" style="text-decoration:none">Regresar</a>
    </center>
</form>


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
