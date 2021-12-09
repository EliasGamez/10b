<?php
	session_start();
	include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$rol 	= $_POST["rol"];



$queryusuario = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE Matricula ='$usu' and Contraseña = '$pass' and Rol = '$rol'");
$nr = mysqli_fetch_array($queryusuario); 

if ($nr != NULL)  
	{ 
		if($rol=="Usuario")
			{	
				$_SESSION['Cuestionario1'] = $nr['Cuestionario_1'];
				$_SESSION['Cuestionario2'] = $nr['Cuestionario_2'];
				$_SESSION['Cuestionario3'] = $nr['Cuestionario_3'];
				$_SESSION['Cuestionario4'] = $nr['Cuestionario_4'];
				$_SESSION['Cuestionario5'] = $nr['Cuestionario_5'];
				$_SESSION['Id'] = $nr['Id_usuario'];
				header("Location: alumno.php");
			}
		else if ($rol=="Administrador")
			{
				$_SESSION['Id'] = $nr['Id_usuario'];
				header("Location: admin/admin.php");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.html' </script>";
	}

/*VaidrollTeam*/
?>
