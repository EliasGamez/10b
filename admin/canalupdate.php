<?php 
    require("../conexion.php");

	$id = $_POST["id_nuevo"];  
	$nombre = $_POST['observacion'];	

	$update = $mysqli->query("UPDATE canal_aprendizaje SET Nombre = '$nombre' WHERE Id_canal='$id'");
    if($update){
        echo "<script> alert('Registro modificado');window.location= 'canaltabla.php' </script>";
    } else {
        echo "<script> alert('No se pudomodificar');window.location= 'canaltabla.php' </script>";
    } 
?>