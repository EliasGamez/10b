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
$p22 = $_POST['p22'];
$p23 = $_POST['p23'];
$p24 = $_POST['p24'];
$p25 = $_POST['p25'];
$p26 = $_POST['p26'];
$p27 = $_POST['p27'];
$p28 = $_POST['p28'];
$p29 = $_POST['p29'];
$p30 = $_POST['p30'];
$p31 = $_POST['p31'];
$p32 = $_POST['p32'];
$p33 = $_POST['p33'];
$p34 = $_POST['p34'];
$p35 = $_POST['p35'];
$p36 = $_POST['p36'];
$p37 = $_POST['p37'];
$p38 = $_POST['p38'];
$p39 = $_POST['p39'];
$p40 = $_POST['p40'];
date_default_timezone_set("America/Mexico_City");
$date = date("Y-m-d");

// if($p1 == 0 & $p2 == 0 & $p3 == 0 & $p4 == 0 & $p5 == 0 & $p6 == 0 & $p7 == 0 & $p8 == 0 & $p9 == 0 & $p10 == 0 &
// $p11 == 0 & $p12 == 0 & $p13 == 0 & $p14 == 0 & $p15 == 0 & $p16 == 0 & $p17 == 0 & $p18 == 0 & $p19 == 0 & $p20 == 0 &
// $p21 == 0 & $p22 == 0 & $p23 == 0 & $p24 == 0 & $p25 == 0 & $p26 == 0 & $p27 == 0 & $p28 == 0 & $p29 == 0 & $p30 == 0 &
// $p31 == 0 & $p32 == 0 & $p33 == 0 & $p34 == 0 & $p35 == 0 & $p36 == 0 & $p37 == 0 & $p38 == 0 & $p39 == 0 & $p40 == 0) {
//     echo '<script> var msg = "Favor de llenar todos los campos vacios";
//             alert(msg); window.location= "../ansiedad.php" 
//         </script>';
// } else {

// $total = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20;
// $total2 = $p21+$p22+$p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31+$p32+$p33+$p34+$p35+$p36+$p37+$p38+$p39+$p40;

$a = $p3+$p4+$p6+$p7+$p9+$p12+$p13+$p14+$p17+$p18;
$b = $p1+$p2+$p5+$p8+$p10+$p11+$p15+$p16+$p19+$p20;
$ab = ($a - $b) + 50;

$aa = $p22+$p23+$p24+$p25+$p28+$p29+$p31+$p32+$p34+$p35+$p37+$p38+$p40;
$bb = $p21+$p26+$p27+$p30+$p33+$p35+$p39;
$aabb = ($aa - $bb) + 35;

$estado = $ab;
$rasgo = $aabb;
// $total2 = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20
//         +$p21+$p22+$p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31+$p32+$p33+$p34+$p35+$p36+$p37+$p38+$p39+$p40;

    if($estado > 30){
        if($estado >= 45) {
            $estado = "Alto";

        } else {
            $estado = "Medio";
        }
    } else {
        $estado = "Bajo";
    }

    if($rasgo > 30){
        if($rasgo >= 45) {
            $rasgo = "Alto";

        } else {
            $rasgo = "Medio";
        }
    } else {
        $rasgo = "Bajo";
    }
        
        // if($total2 > 13){
        //     if($total2 > 19){
        //         if($total2 > 28){
        //             $total2;
        //         } else{
        //             $total2;
        //         }
        //     } else{
        //         $total2;
        //     }
        // } else{
        //     $total2;
        // }

// $insertar = $mysqli->query("INSERT INTO ansiedad VALUES('','$id','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9',
//                                                         '$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17',
//                                                         '$p18','$p19','$p20','$p21','$p22','$p23','$p24','$p25',
//                                                         '$p26','$p27','$p28','$p29','$p30','$p31','$p32','$p33',
//                                                         '$p34','$p35','$p36','$p37','$p38','$p39','$p40','$ab',
//                                                         '$aabb','$estado','$rasgo','','$date')")


$insertar = $mysqli->query("INSERT INTO `ansiedad`(`Id_ansiedad`, `Id_usuario`, `Pregunta_1`, `Pregunta_2`, 
                                        `Pregunta_3`, `Pregunta_4`, `Pregunta_5`, `Pregunta_6`, `Pregunta_7`, 
                                        `Pregunta_8`, `Pregunta_9`, `Pregunta_10`, `Pregunta_11`, `Pregunta_12`, 
                                        `Pregunta_13`, `Pregunta_14`, `Pregunta_15`, `Pregunta_16`, 
                                        `Pregunta_17`, `Pregunta_18`, `Pregunta_19`, `Pregunta_20`, 
                                        `Pregunta_21`, `Pregunta_22`, `Pregunta_23`, `Pregunta_24`, 
                                        `Pregunta_25`, `Pregunta_26`, `Pregunta_27`, `Pregunta_28`, 
                                        `Pregunta_29`, `Pregunta_30`, `Pregunta_31`, `Pregunta_32`, 
                                        `Pregunta_33`, `Pregunta_34`, `Pregunta_35`, `Pregunta_36`, 
                                        `Pregunta_37`, `Pregunta_38`, `Pregunta_39`, `Pregunta_40`, 
                                        `Escala_estado`, `Escala_rasgo`, `Estado`, `Rasgo`, `Nombre`, 
                                        `Fecha`) 
                                        VALUES('','$id','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9',
                                                        '$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17',
                                                        '$p18','$p19','$p20','$p21','$p22','$p23','$p24','$p25',
                                                        '$p26','$p27','$p28','$p29','$p30','$p31','$p32','$p33',
                                                        '$p34','$p35','$p36','$p37','$p38','$p39','$p40','$ab',
                                                        '$aabb','$estado','$rasgo','','$date')");

$update = $mysqli->query("UPDATE usuarios SET Cuestionario_1 = 1 WHERE Id_usuario = '$id'");

    if($insertar){
        echo "<script> alert('Registro insertado');window.location= '../alumno.php' </script>";
    } 
// }
?>






