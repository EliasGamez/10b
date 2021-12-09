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
$p41 = $_POST['p41'];
$p42 = $_POST['p42'];
$p43 = $_POST['p43'];
$p44 = $_POST['p44'];
date_default_timezone_set("America/Mexico_City");
$date = date("Y-m-d");

// if($p1 == 0 & $p2 == 0 & $p3 == 0 & $p4 == 0 & $p5 == 0 & $p6 == 0 & $p7 == 0 & $p8 == 0 & $p9 == 0 & $p10 == 0 &
// $p11 == 0 & $p12 == 0 & $p13 == 0 & $p14 == 0 & $p15 == 0 & $p16 == 0 & $p17 == 0 & $p18 == 0 & $p19 == 0 & $p20 == 0 &
// $p21 == 0 & $p22 == 0 & $p23 == 0 & $p24 == 0 & $p25 == 0 & $p26 == 0 & $p27 == 0 & $p28 == 0 & $p29 == 0 & $p30 == 0 &
// $p31 == 0 & $p32 == 0 & $p33 == 0 & $p34 == 0 & $p35 == 0 & $p36 == 0 & $p37 == 0 & $p38 == 0 & $p39 == 0 & $p40 == 0 &
// $p41 == 0 & $p42 == 0 & $p44 == 0 & $p44 == 0) {
//     echo '<script> var msg = "Favor de llenar todos los campos vacios";
//             alert(msg); window.location= "../estilo_aprendizaje.php" 
//         </script>';
// } else {

$total2 = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20
    +$p21+$p22+$p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30+$p31+$p32+$p33+$p34+$p35+$p36+$p37+$p38+$p39+$p40
    +$p41+$p42+$p43+$p44;

$activo = $p3+$p6+$p9+$p16+$p17+$p26+$p27+$p29+$p30+$p39+$p41;
$porcentaje_activo = ($activo * 100) / $total2;
$reflexivo = $p5+$p7+$p11+$p13+$p20+$p22+$p24+$p28+$p38+$p42+$p44;
$porcentaje_reflexisivo = ($reflexivo * 100) / $total2;
$teorico = $p2+$p4+$p8+$p12+$p14+$p23+$p31+$p32+$p35+$p37+$p43;
$porcentaje_teorico = ($teorico * 100) / $total2;
$pragmatico = $p1+$p10+$p15+$p18+$p19+$p21+$p25+$p33+$p34+$p36+$p40;
$porcentaje_pragmatico = ($pragmatico * 100) / $total2;

$insertar = $mysqli->query("INSERT INTO estilo_aprendizaje (estilo_aprendizaje.Id_estilo_aprendizaje, 
                                        estilo_aprendizaje.Id_usuario, estilo_aprendizaje.Pregunta_1, 
                                        estilo_aprendizaje.Pregunta_2, estilo_aprendizaje.Pregunta_3, estilo_aprendizaje.Pregunta_4, estilo_aprendizaje.Pregunta_5, estilo_aprendizaje.Pregunta_6, estilo_aprendizaje.Pregunta_7, estilo_aprendizaje.Pregunta_8, estilo_aprendizaje.Pregunta_9, estilo_aprendizaje.Pregunta_10, estilo_aprendizaje.Pregunta_11, estilo_aprendizaje.Pregunta_12, estilo_aprendizaje.Pregunta_13, estilo_aprendizaje.Pregunta_14, estilo_aprendizaje.Pregunta_15, estilo_aprendizaje.Pregunta_16, estilo_aprendizaje.Pregunta_17, estilo_aprendizaje.Pregunta_18, estilo_aprendizaje.Pregunta_19, estilo_aprendizaje.Pregunta_20, estilo_aprendizaje.Pregunta_21, estilo_aprendizaje.Pregunta_22, estilo_aprendizaje.Pregunta_23, estilo_aprendizaje.Pregunta_24, estilo_aprendizaje.Pregunta_25, estilo_aprendizaje.Pregunta_26, estilo_aprendizaje.Pregunta_27, estilo_aprendizaje.Pregunta_28, estilo_aprendizaje.Pregunta_29, estilo_aprendizaje.Pregunta_30, estilo_aprendizaje.Pregunta_31, estilo_aprendizaje.Pregunta_32, estilo_aprendizaje.Pregunta_33, estilo_aprendizaje.Pregunta_34, estilo_aprendizaje.Pregunta_35, estilo_aprendizaje.Pregunta_36, estilo_aprendizaje.Pregunta_37, estilo_aprendizaje.Pregunta_38, estilo_aprendizaje.Pregunta_39, estilo_aprendizaje.Pregunta_40, estilo_aprendizaje.Pregunta_41, estilo_aprendizaje.Pregunta_42, estilo_aprendizaje.Pregunta_43`, estilo_aprendizaje.Pregunta_44, estilo_aprendizaje.Activo, estilo_aprendizaje.Reflexivo, estilo_aprendizaje.Teorico, estilo_aprendizaje.Pragmatico, estilo_aprendizaje.Porcentaje_activo, estilo_aprendizaje.Porcentaje_reflex, estilo_aprendizaje.Porcentaje_teo, estilo_aprendizaje.Porcentaje_prag, estilo_aprendizaje.Fecha, estilo_aprendizaje.Nombre) VALUES(NULL,$id,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,
                                        $p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,
                                        $p18,$p19,$p20,$p21,$p22,$p23,$p24,$p25,
                                        $p26,$p27,$p28,$p29,$p30,$p31,$p32,$p33,$p34,$p35,$p36,$p37,$p38,$p39,$p40,$p41,
                                        $p42,$p43,$p44,$activo,$reflexivo,$teorico,
                                        $pragmatico,$porcentaje_activo,$porcentaje_reflexisivo,
                                        $porcentaje_teorico,$porcentaje_pragmatico,
                                        '$date','Hola')");

$update = $mysqli->query("UPDATE usuarios SET Cuestionario_4 = 1 WHERE Id_usuario = '$id'");

    if($insertar){
        echo "<script> alert('Registro insertado');window.location= '../alumno.php' </script>";
    }
// }
?>






