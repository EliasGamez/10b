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


$insertar = $mysqli->query("INSERT INTO ansiedad (ansiedad.Id_ansiedad, ansiedad.Id_usuario, 
                                        ansiedad.Pregunta_1, ansiedad.Pregunta_2, ansiedad.Pregunta_3, 
                                        ansiedad.Pregunta_4, ansiedad.Pregunta_5, ansiedad.Pregunta_6, 
                                        ansiedad.Pregunta_7,ansiedad.Pregunta_8, ansiedad.Pregunta_9, 
                                        ansiedad.Pregunta_10, ansiedad.Pregunta_11, ansiedad.Pregunta_12,
                                        ansiedad.Pregunta_13, ansiedad.Pregunta_14, ansiedad.Pregunta_15, 
                                        ansiedad.Pregunta_16,ansiedad.Pregunta_17, ansiedad.Pregunta_18, 
                                        ansiedad.Pregunta_19, ansiedad.Pregunta_20, ansiedad.Pregunta_21, 
                                        ansiedad.Pregunta_22, ansiedad.Pregunta_23, ansiedad.Pregunta_24,
                                        ansiedad.Pregunta_25, ansiedad.Pregunta_26, ansiedad.Pregunta_27, 
                                        ansiedad.Pregunta_28,ansiedad.Pregunta_29, ansiedad.Pregunta_30, 
                                        ansiedad.Pregunta_31, ansiedad.Pregunta_32,ansiedad.Pregunta_33, 
                                        ansiedad.Pregunta_34, ansiedad.Pregunta_35, ansiedad.Pregunta_36,
                                        ansiedad.Pregunta_37, ansiedad.Pregunta_38, ansiedad.Pregunta_39, 
                                        ansiedad.Pregunta_40,ansiedad.Escala_estado, ansiedad.Escala_rasgo, 
                                        ansiedad.Estado, ansiedad.Rasgo, ansiedad.Nombre,ansiedad.Fecha) 
                                        VALUES(NULL,'$id','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8',
                                        '$p9','$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17','$p18',
                                        '$p19','$p20','$p21','$p22','$p23','$p24','$p25','$p26','$p27','$p28',
                                        '$p29','$p30','$p31','$p32','$p33','$p34','$p35','$p36','$p37','$p38',
                                        '$p39','$p40','$ab','$aabb','$estado','$rasgo',NULL,'$date')");

$update = $mysqli->query("UPDATE usuarios SET Cuestionario_1 = 1 WHERE Id_usuario = '$id'");

    if($insertar){
        echo "<script> alert('Registro insertado');window.location= '../alumno.php' </script>";
    } 
// }
?>






