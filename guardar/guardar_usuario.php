<?php

require("../conexion.php");

session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];
 
$nombre = $_POST['nombre'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
// $p1 = $_POST['p1'];
// $p2 = $_POST['p2'];
$sexo = $_POST['sexo'];

$p1 = "";
if(isset($_POST['p1'])) {
    $p1 = 1;
} else {
    $p1 = 0;
}

$p2 = "";
if(isset($_POST['p2'])) {
    $p2 = 1;
} else {
    $p2 = 0;
}

$p3 = "";
if(isset($_POST['p3'])) {
    $p3 = 1;
} else {
    $p3 = 0;
}

$p4 = "";
if(isset($_POST['p4'])) {
    $p4 = 1;
} else {
    $p4 = 0;
}

$insertar = $mysqli->query("INSERT INTO usuarios (usuarios.Id_usuario, usuarios.Nombre,usuarios.Telefono,
                                        usuarios.Matricula,usuarios.Contrasena,usuarios.Correo, usuarios.Sexo, 
                                        usuarios.Apellido_paterno, usuarios.Apellido_materno, usuarios.Carreras, 
                                        usuarios.Grado,usuarios.Nivel, usuarios.Rol, usuarios.Estatus_alumno, 
                                        usuarios.Crear, usuarios.Visualizar,usuarios.Cuestionario,
                                        usuarios.Activar, usuarios.Cuestionario_1, usuarios.Cuestionario_2, 
                                        usuarios.Cuestionario_3,usuarios.Cuestionario_4, usuarios.Cuestionario_5) 
                                        VALUES (NULL,'$nombre','$telefono','$correo','$password','$correo',
                                        '$sexo','$apaterno','$amaterno',0,0,
                                        0,'Docente',0,'$p1','$p2','$p3','$p4',0,0,0,0,0)");

if($insertar){
        echo "<script> alert('Usuario resgistrado');window.location= '../admin/usuario.php' </script>";
    } 

?>






