<?php
  session_start();
  require("conexion.php");
  require_once('./lib/nusoap.php');

  $correo=$_POST['matricula'];
  $password=$_POST['contraseña'];
  $tipo_usuario=$_POST['rol'];

  if ($tipo_usuario =='Alumno') {
    $client = new nusoap_client("http://www.mi-escuelamx.com/ws/wsUTSEM/Datos.asmx?wsdl", 'wsdl', '', '', '', '');
    $err = $client->getError();
    
    if ($err) {
      echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
    }
    $params = array('lsMatricula' => $correo,'lsPassword'  => $password);
    $result = $client->call('Login', $params);
   
    if ($result) {
      $data = $result['LoginResult']['diffgram'];

      if ($data==false) {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, usuario o contrasela imcorrecta.</div>';
      } else{
        foreach ($data as $key => $value) {
          foreach ($value as $key => $value1) {
            $matricula = $value1['matricula'];
            $contrasena = $value1['contrasena'];
            $apaterno = $value1['apaterno'];
            $amaterno = $value1['amaterno'];
            $nombre = $value1['nombre'];
            $sexo = $value1['sexo'];                                 
            $telefono = $value1['telefono'];
            $mail = $value1['mail'];
            $desc_nivel = $value1['desc_nivel'];
            $desc_carrera = $value1['desc_carrera'];
            $desc_grupo = $value1['desc_grupo'];
            
            if ($correo == $matricula) {
              $sql = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE Matricula ='$matricula'");
              $row = mysqli_fetch_assoc($sql);

              // $_SESSION['Cuestionario1'] = $nr['Cuestionario_1'];
              // $_SESSION['Cuestionario2'] = $nr['Cuestionario_2'];
              // $_SESSION['Cuestionario3'] = $nr['Cuestionario_3'];
              // $_SESSION['Cuestionario4'] = $nr['Cuestionario_4'];
              // $_SESSION['Cuestionario5'] = $nr['Cuestionario_5'];
              // $_SESSION['Id'] = $nr['Id_usuario'];
              
              if(mysqli_num_rows($sql) == 1){
                // $insertar =$mysqli->query("INSERT INTO usuarios (Id_usuario, Nombre, Telefono, Matricula, 
                //                                                 Contrasena, Correo, Sexo, Apellido_paterno, 
                //                                                 Apellido_materno, Carreras, Grado, Nivel,
                //                                                 Rol) 
                //                                   VALUES('','$nombre','$telefono','$matricula','$contrasena',
                //                                          '$mail','$sexo','$apaterno','$amaterno','$desc_carrera',
                //                                          '$desc_grupo','$desc_nivel','Alumno')");

                $insertar=$mysqli->query("INSERT INTO usuarios (usuarios.Id_usuario, usuarios.Nombre,usuarios.Telefono,usuarios.Matricula,
                                                                usuarios.Contrasena,usuarios.Correo, usuarios.Sexo,usuarios.Apellido_paterno, 
                                                                usuarios.Apellido_materno, usuarios.Carreras,usuarios.Grado,usuarios.Nivel, 
                                                                usuarios.Rol, usuarios.Estatus_alumno,usuarios.Crear, usuarios.Visualizar,
                                                                usuarios.Cuestionario,usuarios.Activar, usuarios.Cuestionario_1, 
                                                                usuarios.Cuestionario_2,usuarios.Cuestionario_3,usuarios.Cuestionario_4, 
                                                                usuarios.Cuestionario_5) 
                                                                VALUES (NULL,'$nombre','$telefono','$matricula','$contrasena','$mail','$sexo',
                                                                '$apaterno','$amaterno','$desc_carrera','$desc_grupo','$desc_nivel',
                                                                'Alumno',0,0,0,0,0,0,0,0,0,0)");                             

                if($insertar) {
                  $queryusuario = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Matricula ='$correo'");
                  $nr = mysqli_fetch_array($queryusuario); 
                  $_SESSION['Cuestionario1'] = $nr['Cuestionario_1'];
                  $_SESSION['Cuestionario2'] = $nr['Cuestionario_2'];
                  $_SESSION['Cuestionario3'] = $nr['Cuestionario_3'];
                  $_SESSION['Cuestionario4'] = $nr['Cuestionario_4'];
                  $_SESSION['Cuestionario5'] = $nr['Cuestionario_5'];
                  $_SESSION['Id'] = $nr['Id_usuario'];
                  echo "<script>location.href='alumno.php'</script>";
                } else {
                  echo "<script> alert('No se pudo ingresar pero si a web service');window.location= 'index.html' </script>";
                }
              } else {

                $queryusuario = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Matricula ='$correo'");
                $nr = mysqli_fetch_array($queryusuario); 
                $_SESSION['Cuestionario1'] = $nr['Cuestionario_1'];
                $_SESSION['Cuestionario2'] = $nr['Cuestionario_2'];
                $_SESSION['Cuestionario3'] = $nr['Cuestionario_3'];
                $_SESSION['Cuestionario4'] = $nr['Cuestionario_4'];
                $_SESSION['Cuestionario5'] = $nr['Cuestionario_5'];
                $_SESSION['Id'] = $nr['Id_usuario'];
                echo "<script>location.href='alumno.php'</script>";
              }
            }
          }
        }
      }
    }
  } else if($tipo_usuario=='Docente') {
    $consultar=$mysqli->query("SELECT * FROM usuarios WHERE Matricula = '$correo'");
    if($dato=$consultar->fetch_array()) {
      if ($password == $dato['Contrasena']) {

        $queryusuario = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Matricula ='$correo'");
        $nr = mysqli_fetch_array($queryusuario); 
        $_SESSION['Id'] = $nr['Id_usuario'];
        $_SESSION['Crear'] = $nr['Crear'];
        $_SESSION['Visualizar'] = $nr['Visualizar'];
        $_SESSION['Cuestionario'] = $nr['Cuestionario'];
        $_SESSION['Activar'] = $nr['Activar'];
        $_SESSION['Cuestionario1'] = $nr['Cuestionario_1'];
        $_SESSION['Cuestionario2'] = $nr['Cuestionario_2'];
        $_SESSION['Cuestionario3'] = $nr['Cuestionario_3'];
        $_SESSION['Cuestionario4'] = $nr['Cuestionario_4'];
        $_SESSION['Cuestionario5'] = $nr['Cuestionario_5'];
        
        if ($dato['Rol']=="Docente") {
          echo "<script>location.href='admin/admin.php'</script>";
        } else {
          echo "<script>location.href='index.html'</script>";
        }
      } else {
        
        echo "<script>location.href='index.html'</script>";
      }
    } else {
      echo "<script>location.href='index.html'</script>";
    }
  }

?>
