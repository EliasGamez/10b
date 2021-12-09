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
    <title>DATOS | ALUMNOS</title>
      
  </head>
    
  <body> 
    <?php
        require("nav_admin.php");
    ?>
<section class="home-section">
     
    <section class="form-register">
                <h4>Activar/Desactivar cuestionarios</h4>


            <form name="form" action="../guardar/guardar_nivel.php" method="POST">
                <label for="">Activar por nivel académico</label>
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
                <label for="">Cuestionario Ansiedad</label>
                <select class="controls" name="ansiedad">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Depresión</label>
                <select class="controls" name="depresion">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Motivación del Aprendizaje</label>
                <select class="controls" name="motivacion">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Estilo de Aprendizaje</label>
                <select class="controls" name="estilo">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Canal de Aprendizaje</label>
                <select class="controls" name="canal">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <input class="botons" type="submit" value="Modificar">
            </form>
         
        </section>

        <section class="form-register">
                <h4>Activar/Desactivar cuestionarios</h4>


            <form name="form" action="../guardar/guardar_carrera.php" method="POST">
                <label for="">Activar por carrera</label>
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
                <label for="">Cuestionario Ansiedad</label>
                <select class="controls" name="ansiedad">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Depresión</label>
                <select class="controls" name="depresion">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Motivación del Aprendizaje</label>
                <select class="controls" name="motivacion">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Estilo de Aprendizaje</label>
                <select class="controls" name="estilo">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <label for="">Cuestionario Canal de Aprendizaje</label>
                <select class="controls" name="canal">
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="0">Activar</option>
                    <option value="1">Desactivar</option>
                </select>
                <input class="botons" type="submit" value="Modificar">
            </form>
         
        </section>

</section>
   
    
  </body>
</html>
