<?php

require("../conexion.php");

session_start();
    if(@!$_SESSION['Id']) {
        header("location:index.html");
    }   
    $id =  $_SESSION['Id'];
 
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];
$p11 = $_POST['p11'];
$p12 = $_POST['p12'];
$p13 = $_POST['p13'];
$p14 = $_POST['p14'];
$p15 = $_POST['p15'];
$p16 = $_POST['p16'];
$p17 = $_POST['p17'];
$p18 = $_POST['p18'];
$p19 = $_POST['p19'];
$p20 = $_POST['p20'];
$p21 = $_POST['p21'];
date_default_timezone_set("America/Mexico_City");
$date = date("Y-m-d");

// if($p1 == 0 & $p2 == 0 & $p3 == 0 & $p4 == 0 & $p5 == 0 & $p6 == 0 & $p7 == 0 & $p8 == 0 & $p9 == 0 & $p10 == 0 &
// $p11 == 0 & $p12 == 0 & $p13 == 0 & $p14 == 0 & $p15 == 0 & $p16 == 0 & $p17 == 0 & $p18 == 0 & $p19 == 0 & $p20 == 0 &
// $p21 == 0) {
//     echo '<script> var msg = "Favor de llenar todos los campos vacios";
//             alert(msg); window.location= "../depresion.php" 
//         </script>';
// } else {

$total = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20+$p21;
$total2 = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20+$p21;

if($total > 13){
    if($total > 19){
        if($total > 28){
            $total = 'Grave';
        } else{
            $total = 'Moderada';
        }
    } else{
        $total = 'Leve';
    }
} else{
    $total = 'Minima';
}

if($total2 > 13){
    if($total2 > 19){
        if($total2 > 28){
            $total2;
        } else{
            $total2;
        }
    } else{
        $total2;
    }
} else{
    $total2;
}

$insertar = $mysqli->query("INSERT INTO depresion VALUES('','$id','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9',
                                                        '$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17',
                                                        '$p18','$p19','$p20','$p21','$total','$total2','$date','')");

$update = $mysqli->query("UPDATE usuarios SET Cuestionario_2 = 1 WHERE Id_usuario = '$id'");

    if($insertar){
        echo "<script> alert('Registro insertado');window.location= '../alumno.php' </script>";
    }
// }
?>






