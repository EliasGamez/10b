<?php 
    require("../conexion.php");

	$id = $_POST["id_nuevo"];  
	$nombre = $_POST['observacion'];	

	$update = $mysqli->query("UPDATE ansiedad SET Nombre = '$nombre' WHERE Id_ansiedad='$id'");
    if($update){
        echo "<script> alert('Comentario modificado');window.location= 'ansiedadtabla.php' </script>";
    } else {
        echo "<script> alert('No se pudomodificar');window.location= 'ansiedadtabla.php' </script>";
    } 
?>
