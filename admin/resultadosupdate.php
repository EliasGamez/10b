<?php

require("../conexion.php");

session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];
 
$id_nuevo = $_POST['id_nuevo'];
$observacion = $_POST['observacion'];

$insertar = $mysqli->query("INSERT INTO Observaciones VALUES('','$id_nuevo','$observacion')");

if($insertar){
        echo "<script> alert('Usuario resgistrado');window.location= 'resultadosgenerales.php' </script>";
    } 

?>
