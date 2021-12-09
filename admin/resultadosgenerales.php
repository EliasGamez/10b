<?php
    require("../conexion.php");
    // $conexion=mysqli_connect('localhost','root','','cuestionarios');

    session_start();
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../imagenes/logo.png">
    <title>Resultados generales de los alumnos</title>

    <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>
<body>

<?php
        require("nav_admin.php");
    ?>

<section class="home-section">
    <div class="text">
        <h3>Resultados Generales</h3>
    </div>

    <div class="container">
        <div class="table-responsive">
            <div class="card-header">
                Resultados generales de los alumnos
            </div>
            <div class="card-body">
                <button id="btnExportar" class="btn btn-success">
                    <i class="fas fa-file-excel"></i> Exportar datos a Excel
                </button>
                <a href="reporte.php">
                    <button class="btn btn-success">
                        <i class="fas fa-file-excel"></i> Realizar reporte
                    </button>
                </a>

                <br><br>

                <table id="tabla" class="table table-striped table-bordered tablaresultado" style="text-align: center;">
                <thead>
                                <tr>
                                    <th>Matrícula</th>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Escala Ansiedad de Estado</th>
                                    <th>Escala Ansiedad de Rasgo</th>
                                    <th>Fecha de ansiedad</th>
                                    <th>Tipo de Rango Depresión</th>
                                    <th>Fecha de depresion</th>
                                    <th>Motivación profunda</th>
                                    <th>Motivación de rendimiento</th>
                                    <th>Motivación superficial</th>
                                    <th>Fecha de motivación del aprendizaje</th>
                                    <th>Activo</th>
                                    <th>Reflexivo</th>
                                    <th>Teórico</th>
                                    <th>Pragmático</th>
                                    <th>Fecha de estilo aprendizaje</th>
                                    <th>Visual</th>
                                    <th>Auditivo</th>
                                    <th>Kinestésico</th>
                                    <th>Fecha de canal aprendizaje</th>
                                    <th>Observación General</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                            $sql="SELECT u.Matricula, u.Nombre, u.Apellido_paterno, u.Apellido_materno, 
                                            a.Fecha AS aFecha, d.Fecha AS dFecha, c.Fecha AS cFecha, e.Fecha AS eFecha, m.Fecha AS mFecha,
                                            a.Estado, a.Rasgo, d.Rango, m.Cantidad_profunda, m.Cantidad_ren, 
                                            m.Cantidad_super, e.Porcentaje_activo, e.Porcentaje_reflex, 
                                            e.Porcentaje_teo, e.Porcentaje_prag, c.Visual, c.Audi, c.Kines, o.Observacion
                                            FROM ansiedad a INNER JOIN depresion d ON a.Id_usuario = d.Id_usuario 
                                            INNER JOIN canal_aprendizaje c ON d.Id_usuario = c.Id_usuario 
                                            INNER JOIN estilo_aprendizaje e ON c.Id_usuario = e.Id_usuario 
                                            INNER JOIN motivacion_aprendizaje m ON e.Id_usuario = m.Id_usuario 
                                            INNER JOIN usuarios u ON u.Id_usuario = m.Id_usuario
                                            INNER JOIN observaciones o ON u.Id_usuario = o.Id_usuario;";
                                            $result=mysqli_query($mysqli,$sql);
                                            
                                            while($mostrar=mysqli_fetch_array($result)){
                                                $bgColor = "secondary";
                                                $bgColor2 = "secondary";
                                                $bgColor3 = "secondary";
                                                $bgColor4 = "secondary";
                                                $bgColor5 = "secondary";
                                                $bgColor6 = "secondary";
                                                
                                                if($mostrar['Estado'] == "Bajo") {
                                                    $bgColor =  "success";
                                                } elseif($mostrar['Estado'] == "Medio") {
                                                    $bgColor =  "warning";
                                                } elseif($mostrar['Estado'] == "Alto") {
                                                    $bgColor =  "danger";
                                                }

                                                if($mostrar['Rasgo'] == "Bajo") {
                                                    $bgColor2 =  "success";
                                                } elseif($mostrar['Rasgo'] == "Medio") {
                                                    $bgColor2 =  "warning";
                                                } elseif($mostrar['Rasgo'] == "Alto") {
                                                    $bgColor2 =  "danger";
                                                }

                                                if($mostrar['Rango'] == "Minima") {
                                                    $bgColor3 =  "success";
                                                } elseif($mostrar['Rango'] == "Leve") {
                                                    $bgColor3 =  "primary";
                                                } elseif($mostrar['Rango'] == "Moderada") {
                                                    $bgColor3 =  "warning";
                                                } elseif($mostrar['Rango'] == "Grave") {
                                                    $bgColor3 =  "danger";
                                                }

                                                if($mostrar['Cantidad_profunda'] == "Baja") {
                                                    $bgColor4 =  "danger";
                                                } elseif($mostrar['Cantidad_profunda'] == "Media") {
                                                    $bgColor4 =  "warning";
                                                } elseif($mostrar['Cantidad_profunda'] == "Alta") {
                                                    $bgColor4 =  "success";
                                                }

                                                if($mostrar['Cantidad_ren'] == "Baja") {
                                                    $bgColor5 =  "success";
                                                } elseif($mostrar['Cantidad_ren'] == "Media") {
                                                    $bgColor5 =  "warning";
                                                } elseif($mostrar['Cantidad_ren'] == "Alta") {
                                                    $bgColor5 =  "danger";
                                                }

                                                if($mostrar['Cantidad_super'] == "Baja") {
                                                    $bgColor6 =  "danger";
                                                } elseif($mostrar['Cantidad_super'] == "Media") {
                                                    $bgColor6 =  "warning";
                                                } elseif($mostrar['Cantidad_super'] == "Alta") {
                                                    $bgColor6 =  "success";
                                                }
                                        ?>
                                <tr>
                                    <td>
                                        <?php echo $mostrar['Matricula']?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['Nombre']?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['Apellido_paterno']?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['Apellido_materno']?>
                                    </td>
                                    <td>
                                    <?php echo "<span class='bg-".$bgColor."' style='padding: 10px; border-radius: 30px';>{$mostrar['Estado']}</span>";?>
                                    </td>
                                    <td>
                                    <?php echo "<span class='bg-".$bgColor2."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Rasgo']}</span>";?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['aFecha']?>
                                    </td>
                                    <td>
                                    <?php echo "<span class='bg-".$bgColor3."' style='padding: 10px; border-radius: 30px'; padding: 10px; border-radius: 30px';'>{$mostrar['Rango']}</span>";?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['dFecha']?>
                                    </td>
                                    <td>
                                    <?php echo "<span class='bg-".$bgColor4."' style='padding: 10px; border-radius: 30px';>{$mostrar['Cantidad_profunda']}</span>";?>
                                    </td>
                                    <td>
                                    <?php echo "<span class='bg-".$bgColor5."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Cantidad_ren']}</span>";?>
                                    </td>
                                    <td>
                                    <?php echo "<span class='bg-".$bgColor6."' style='padding: 10px; border-radius: 30px';'>{$mostrar['Cantidad_super']}</span>";?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['mFecha']?>
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Porcentaje_activo'],2).'%'?>
                                        
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Porcentaje_reflex'],2).'%'?>
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Porcentaje_teo'],2).'%'?>
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Porcentaje_prag'],2).'%'?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['eFecha']?>
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Visual'],2).'%'?>
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Audi'],2).'%'?>
                                    </td>
                                    <td>
                                        <?php echo number_format($mostrar['Kines'],2).'%'?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['cFecha']?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['Observacion']?>
                                    </td>
                                </tr>
                            </tbody>
                            <?php 
                                        }
                                    ?>
                </table>
            </div>
        </div>
    </div>




</section>

    <!-- script para exportar a excel -->
    <script>
        const $btnExportar = document.querySelector("#btnExportar"),
            $tabla = document.querySelector("#tabla");

        $btnExportar.addEventListener("click", function() {
            let tableExport = new TableExport($tabla, {
                exportButtons: false, // No queremos botones
                filename: "Resultaods Generales Alumnos Utsem", //Nombre del archivo de Excel
                sheetname: "Resultaods Generales", //Título de la hoja
            });
            let datos = tableExport.getExportData();
            let preferenciasDocumento = datos.tabla.xlsx;
            tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
        });
    </script>

</body>
</html>