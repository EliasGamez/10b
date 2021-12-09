<?php 
    require("../conexion.php");

	$id = $_POST["id_nuevo"];  
	$nombre = $_POST['observacion'];	

	$update = $mysqli->query("UPDATE motivacion_aprendizaje SET Nombre = '$nombre' WHERE Id_motivacion_aprendizaje = '$id'");
    if($update){
        echo "<script> alert('Comentario modificado');window.location= 'motivaciontabla.php' </script>";
    } else {
        echo "<script> alert('No se pudomodificar');window.location= 'motivaciontabla.php' </script>";
    } 
?>
