<?php

require("../conexion.php");

session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
 
$nivel = $_POST['nivel'];  
$ansiedad = $_POST['ansiedad'];
$depresion = $_POST['depresion'];
$motivacion = $_POST['motivacion'];
$estilo = $_POST['estilo'];
$canal = $_POST['canal'];

// echo $carrera;
// echo $ansiedad;
// echo $depresion;
// echo $motivacion;
// echo $estilo;
// echo $canal;

$update = $mysqli->query("UPDATE usuarios SET Cuestionario_1 = $ansiedad, Cuestionario_2 = $depresion, 
                            Cuestionario_3 = $motivacion, Cuestionario_4 = $estilo,
                            Cuestionario_5 = $canal WHERE Nivel = '$nivel'");
    if($update){
        echo "<script> alert('Registro modificado');window.location= '../admin/admin.php' </script>";
    } else {
        echo "<script> alert('No se pudomodificar');window.location= '../admin/admin.php' </script>";
    } 

?>