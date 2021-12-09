<?php
    require("../conexion.php");
    // $conexion=mysqli_connect('localhost','root','','cuestionarios');

    session_start();
    // if(@!$_SESSION['Id']) {
    //     header("location:index.html");
    // }   

    // $sql="SELECT DISTINCT Carreras FROM usuarios";
    // $result=mysqli_query($conexion,$sql);
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
    <title>REPORTE | ADMIN</title>
      
  </head>
    
  <body> 
    <?php
        require("nav_admin.php");
    ?>
<section class="home-section">
     
    <section class="form-register">
                <h4>Resultados por nivel académico</h4>


            <form name="form" action="pdf.php" method="POST">
                <label for="">Nivel académico</label>
                <select class="controls" name="nivel">
                <?php
                        $sql="SELECT DISTINCT Nivel FROM usuarios";
                        $result=mysqli_query($mysqli,$sql);
                        while($mostrar = mysqli_fetch_array($result))
                        {
                    ?>
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="<?php echo $mostrar['Nivel']?>"><?php echo $mostrar['Nivel']?></option>
                <?php
                    }
                ?>
                </select>
                <label for="">Fecha de inicio</label>
                <br>
                <input type="date" name="fecha_inicio" required>
                <br><br>
                <label for="">Fecha de finalización</label>
                <br>
                <input type="date" name="fecha_fin" required>
                <input class="botons" type="submit" value="Realizar">
            </form>
         
        </section>

        <section class="form-register">
                <h4>Resultados por programa educativo</h4>


            <form name="form" action="pdf2.php" method="POST">
                <label for="">Carreras</label>
                <select class="controls" name="carrera">
                <?php
                        $sql="SELECT DISTINCT Carreras FROM usuarios";
                        $result=mysqli_query($mysqli,$sql);
                        while($mostrar = mysqli_fetch_array($result))
                        {
                    ?>
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="<?php echo $mostrar['Carreras']?>"><?php echo $mostrar['Carreras']?></option>
                <?php
                    }
                ?>
                </select>
                <label for="">Fecha de inicio</label>
                <br>
                <input type="date" name="fecha_inicio" required>
                <br><br>
                <label for="">Fecha de finalización</label>
                <br>
                <input type="date" name="fecha_fin" required>
                <input class="botons" type="submit" value="Realizar">
            </form>
         
        </section>

        <section class="form-register">
                <h4>Resultados por grupo</h4>


            <form name="form" action="pdf3.php" method="POST">
                <label for="">Grado y grupo</label>
                <select class="controls" name="grado">
                <?php
                        $sql="SELECT DISTINCT Grado FROM usuarios";
                        $result=mysqli_query($mysqli,$sql);
                        while($mostrar = mysqli_fetch_array($result))
                        {
                    ?>
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="<?php echo $mostrar['Grado']?>"><?php echo $mostrar['Grado']?></option>
                <?php
                    }
                ?>
                </select>
                <label for="">Fecha de inicio</label>
                <br>
                <input type="date" name="fecha_inicio" required>
                <br><br>
                <label for="">Fecha de finalización</label>
                <br>
                <input type="date" name="fecha_fin" required>
                <input class="botons" type="submit" value="Realizar">
            </form>
         
        </section>

</section>
   
    
  </body>
</html>
