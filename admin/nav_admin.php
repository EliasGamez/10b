<?php
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];
    $crear =  $_SESSION['Crear'];
    $visualizar =  $_SESSION['Visualizar'];
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Sidebar Menu | CodingLab </title>
  <link rel="stylesheet" href="../css/style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name"><img src="../imagenes/logo.png" alt="Logo Utsem" class="logo"></div>
      <div class="logo_name">PSICOLOGÍA</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class='bx bx-search'></i>
        <input type="text" placeholder="Buscar...">
        <span class="tooltip">Buscar</span>
      </li>

      <?php if(isset($_SESSION['Cuestionario']) && $_SESSION['Cuestionario'] == 1){ ?>
      <li>
        <a href="alumno.php">
          <i class='bx bx-clipboard'></i>
          <span class="links_name">Cuestionarios</span>
        </a>
        <span class="tooltip">Cuestionarios</span>
      </li>
      <?php } ?>

      <li>
        <a href="admin.php">
          <i class='bx bx-copy-alt'></i>
          <span class="links_name">Resultado Alumno</span>
        </a>
        <span class="tooltip">Resultado Alumnos</span>
      </li>

      <li>
        <a href="resultadosgenerales.php">
        <i class='bx bxs-comment-detail'></i>
          <span class="links_name">Resultados Generales</span>
        </a>
        <span class="tooltip">Resultados Generales</span>
      </li>

      <?php if(isset($_SESSION['Visualizar']) && $_SESSION['Visualizar'] == 1){ ?> 
      <li>
        <a href="datosalumnos.php">
          <i class='bx bx-body'></i>
          <span class="links_name">Datos alumnos</span>
        </a>
        <span class="tooltip">Datos alumnos</span>
      </li>
      <?php } ?>

      <?php if(isset($_SESSION['Activar']) && $_SESSION['Activar'] == 1){ ?> 
      <li>
        <a href="activarcarrera.php">
        <i class='bx bxs-edit-alt'></i>
          <span class="links_name">Activar Cuestionarios</span>
        </a>
        <span class="tooltip">Activar Cuestionarios</span>
      </li>
      <?php } ?>

      <?php if(isset($_SESSION['Crear']) && $_SESSION['Crear'] == 1){ ?>
      <li>
        <a href="usuario.php">
          <i class='bx bxs-user-plus'></i>
          <span class="links_name">Crear usuario</span>
        </a>
        <span class="tooltip">Crear usuario</span>
      </li>
      <?php } ?>
      <li>
        <a href="datos.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Mis datos</span>
        </a>
        <span class="tooltip">Mis datos</span>
      </li>
      <li class="profile">
        <a href="../desconexion.php">Salir
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
      </li>
    </ul>
  </div>

  <script src="../js/script.js"></script>

</body>

</html>


