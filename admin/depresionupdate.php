<?php 
    require("../conexion.php");

	$id = $_POST["id_nuevo"];  
	$nombre = $_POST['observacion'];	

	$update = $mysqli->query("UPDATE depresion SET Nombre = '$nombre' WHERE Id_depresion='$id'");
    if($update){
        echo "<script> alert('Comentario modificado');window.location= 'depresiontabla.php' </script>";
    } else {
        echo "<script> alert('No se pudomodificar');window.location= 'depresiontabla.php' </script>";
    } 
?>
