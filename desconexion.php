<?php

session_start();
if($_SESSION['Id']){
	session_destroy();
	header("location: index.html");
}
else{
	header("location: alumno.php");
}

?>