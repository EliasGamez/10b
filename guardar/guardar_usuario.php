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

$insertar = $mysqli->query("INSERT INTO usuarios (Id_usuario, Nombre, Telefono, Matricula,Correo, Contrasena, 
                                                    Sexo, Apellido_paterno, Apellido_materno, Rol, Crear,
                                                    Visualizar, Cuestionario, Activar) 
                                                    VALUES('','$nombre','$telefono','$correo','$correo',
                                                    '$password','$sexo','$apellidop','$apellidom','Docente',
                                                    '$p1','$p2','$p3','$p4')");

if($insertar){
        echo "<script> alert('Usuario resgistrado');window.location= '../admin/usuario.php' </script>";
    } 

?>






