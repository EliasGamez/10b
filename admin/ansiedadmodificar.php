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
    <title>UPDATE | ANSIEDAD</title>
      
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
        <h3>Update comentario del cuestionario ansiedad</h3>
    </div>
     
    <!-- Ejemplo tabla con DataTables-->
<form method="POST" action="ansiedadupdate.php" name="formulario">
    <div class="container tablaresultado">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered tablaresultado" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Escala Ansiedad de Estado</th>
                                <th>Escala Ansiedad de Rasgo</th>
                                <th>Fecha en que se realizó</th>
                                <th>Observaciones</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $id = intval($_GET['Id']);
                                        $sql="SELECT * from ansiedad WHERE Id_ansiedad = $id";
                                        $result=mysqli_query($mysqli,$sql);
                                        
                                        while($mostrar=mysqli_fetch_array($result)){
                                            $bgColor = "secondary";
                                            $bgColor2 = "secondary";
                                            
                                            if($mostrar['Estado'] == "Bajo") {
                                                $bgColor =  "success";
                                            } elseif($mostrar['Estado'] == "Medio") {
                                                $bgColor =  "warning";
                                            } elseif($mostrar['Estado'] == "Alto") {
                                                $bgColor =  "danger";
                                            }

                                            if($mostrar['Rasgo'] == "Bajo") {
                                                $bgColor2 =  "success";
                                            } elseif($mostrar['Rasgo'] == "Medio") {
                                                $bgColor2 =  "warning";
                                            } elseif($mostrar['Rasgo'] == "Alto") {
                                                $bgColor2 =  "danger";
                                            }
                                    ?>
                            <tr>
                                <td>
                                    <input type="number" name="id_nuevo" readonly value="<?php echo $mostrar['Id_ansiedad']; ?>">
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor."' style='padding: 10px; border-radius: 30px';>{$mostrar['Estado']}</span>";?>
                                </td>
                                <td>
                                    <?php echo "<span class='bg-".$bgColor2."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Rasgo']}</span>";?>
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
    <a href="ansiedadtabla.php" class="boton_enviar" style="text-decoration:none">Regresar</a>
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
