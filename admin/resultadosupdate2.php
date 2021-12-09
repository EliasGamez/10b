<?php

require("../conexion.php");

 
$id_nuevo = $_POST['id_nuevo'];
$observacion = $_POST['observacion'];

$update = $mysqli->query("UPDATE observaciones SET Observacion = '$observacion' WHERE Id_usuario = '$id_nuevo'");

if($update){
        echo "<script> alert('Observación modificada');window.location= 'resultadosgenerales.php' </script>";
    } 
    else {
        echo "<script> alert('No se pudo modificar la observación');window.location= 'resultadosgenerales.php' </script>";
    } 

?>
