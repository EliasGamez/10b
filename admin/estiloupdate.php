<?php 
    require("../conexion.php");

	$id = $_POST["id_nuevo"];  
	$nombre = $_POST['observacion'];	

	$update = $mysqli->query("UPDATE estilo_aprendizaje SET Nombre = '$nombre' WHERE Id_estilo_aprendizaje='$id'");
    if($update){
        echo "<script> alert('Comentario modificado');window.location= 'estilotabla.php' </script>";
    } else {
        echo "<script> alert('No se pudomodificar');window.location= 'estilotabla.php' </script>";
    } 
?>