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
date_default_timezone_set("America/Mexico_City");
$date = date("Y-m-d");

// if($p1 == 0 & $p2 == 0 & $p3 == 0 & $p4 == 0 & $p5 == 0 & $p6 == 0 & $p7 == 0 & $p8 == 0 & $p9 == 0 & $p10 == 0 &
// $p11 == 0 & $p12 == 0 & $p13 == 0 & $p14 == 0 & $p15 == 0 & $p16 == 0 & $p17 == 0 & $p18 == 0 & $p19 == 0 & $p20 == 0 &
// $p21 == 0 & $p22 == 0 & $p23 == 0 & $p24 == 0 & $p25 == 0 & $p26 == 0 & $p27 == 0 & $p28 == 0 & $p29 == 0 & $p30 == 0 &
// $p31 == 0 & $p32 == 0 & $p33 == 0 & $p34 == 0 & $p35 == 0 & $p36 == 0 & $p37 == 0) {
//     echo '<script> var msg = "Favor de llenar todos los campos vacios";
//             alert(msg); window.location= "../canal_aprendizaje.php" 
//         </script>';
// } else {

$total2 = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20
            +$p21+$p22+$p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31+$p32+$p33+$p34+$p35+$p36;

$visual = $p1+$p5+$p9+$p10+$p11+$p16+$p17+$p22+$p26+$p27+$p32+$p36;
$porcentaje_visual = ($visual * 100) / $total2;
$auditivo = $p2+$p3+$p12+$p13+$p15+$p19+$p20+$p23+$p24+$p28+$p29+$p33;
$porcentaje_auditivo = ($auditivo * 100) / $total2;
$kinestesico = $p4+$p6+$p7+$p8+$p14+$p18+$p21+$p25+$p30+$p31+$p34+$p35;
$porcentaje_kinestesico = ($kinestesico * 100) / $total2;   

$insertar = $mysqli->query("INSERT INTO canal_aprendizaje(canal_aprendizaje.Id_canal, 
                                        canal_aprendizaje.Id_usuario, canal_aprendizaje.Pregunta_1, 
                                        canal_aprendizaje.Pregunta_2, canal_aprendizaje.Pregunta_3, 
                                        canal_aprendizaje.Pregunta_4, canal_aprendizaje.Pregunta_5, 
                                        canal_aprendizaje.Pregunta_6, canal_aprendizaje.Pregunta_7, 
                                        canal_aprendizaje.Pregunta_8, canal_aprendizaje.Pregunta_9, 
                                        canal_aprendizaje.Pregunta_10, canal_aprendizaje.Pregunta_11, canal_aprendizaje.Pregunta_12, canal_aprendizaje.Pregunta_13, canal_aprendizaje.Pregunta_14, canal_aprendizaje.Pregunta_15, canal_aprendizaje.Pregunta_16, canal_aprendizaje.Pregunta_17, canal_aprendizaje.Pregunta_18, canal_aprendizaje.Pregunta_19, canal_aprendizaje.Pregunta_20, canal_aprendizaje.Pregunta_21, canal_aprendizaje.Pregunta_22, canal_aprendizaje.Pregunta_23, canal_aprendizaje.Pregunta_24, canal_aprendizaje.Pregunta_25, canal_aprendizaje.Pregunta_26, canal_aprendizaje.Pregunta_27, canal_aprendizaje.Pregunta_28, canal_aprendizaje.Pregunta_29, canal_aprendizaje.Pregunta_30, canal_aprendizaje.Pregunta_31, canal_aprendizaje.Pregunta_32, canal_aprendizaje.Pregunta_33, canal_aprendizaje.Pregunta_34, canal_aprendizaje.Pregunta_35, canal_aprendizaje.Pregunta_37, canal_aprendizaje.Cal_visual, canal_aprendizaje.Cal_audi, canal_aprendizaje.Cal_kines, canal_aprendizaje.Visual, canal_aprendizaje.Audi, canal_aprendizaje.Kines, canal_aprendizaje.Fecha, canal_aprendizaje.Nombre) VALUES(NULL,$id,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,
                                        $p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,
                                        $p23,$p24,$p25,$p26,$p27,$p28,$p29,$p30,$p31,$p32,$p33,$p34,$p35,
                                        $p36,$visual,$auditivo,$kinestesico,$porcentaje_visual,
                                        $porcentaje_auditivo,$porcentaje_kinestesico,'$date','Hola')");

$update = $mysqli->query("UPDATE usuarios SET Cuestionario_5 = 1 WHERE Id_usuario = '$id'");

    if($insertar){
        echo "<script> alert('Registro insertado');window.location= '../alumno.php' </script>";
    }
// }
?>






