<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo.png">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>ADMINISTRADOR | NUEVO USUARIO</title>
</head>
<body>
    <?php
        require("nav_admin.php");
    ?>

    <section class="home-section">
        <section class="form-register">
            <form name="form" action="../guardar/guardar_usuario.php" method="POST">
                <h4>Registrar nuevo usuario</h4>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
                <input class="controls" type="text" name="apellidop" id="apellidop" placeholder="Ingrese su Apellido Parerno" required>
                <input class="controls" type="text" name="apellidom" id="apellidom" placeholder="Ingrese su Apellido Materno" required>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
                <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña" required>
                <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono" required>
                <input type="checkbox" name="p1" id="1" value="1">
                <label for="1">
                Crear usuarios
                </label>
                <br>
                <input type="checkbox" name="p2" id="2" value="1">
                <label for="2">
                Visualizar datos del SICA-A de alumnos / Activar-desactivar cuestionarios individuales
                </label>
                <br>
                <input type="checkbox" name="p3" id="3" value="1">
                <label for="3">
                Visualizar cuestionarios
                </label>
                <br>
                <input type="checkbox" name="p4" id="4" value="1">
                <label for="4">
                Activar cuestionarios
                </label>
                <br><br>
                <select class="controls" name="sexo">
                    <option value="0" style="display:none;"><label>Seleccionar Sexo</label></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <input class="botons" type="submit" value="Registrar">
            </form>
        </section>
    </section>

</body>
</html>