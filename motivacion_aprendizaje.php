<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo.png">
    <title>ALUMNO | MOTIVACIÓN</title>
</head>
<body>
    <?php
        require("nav_alumno.html");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Motivación del Aprendizaje</h1>
        </div>
        
        <div class="ins">
            <h4>
                Instrucciones:
                Marcar la casilla que mejor refleje su respuesta, considerando que el
                puntaje 1 corresponde a total desacuerdo, 2 muy en desacuerdo, 3 en desacuerdo,
                4 indiferente, 5 de acuerdo, 6 muy de acuerdo y el puntaje 7 total acuerdo
            </h4>
        </div>
        <form name="form" action="guardar/guardar_motivacion.php" method="POST">
          
            <div class="pregunta">
              <h4 class="">1. Me desanimo fácilmente cuando obtengo una baja calificación</h4>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p1" id="radioSuccess1" value="1">
                    <label for="radioSuccess1">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p1" id="radioSuccess2" value="2">
                    <label for="radioSuccess2">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p1" id="radioSuccess3" value="3">
                    <label for="radioSuccess3">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p1" id="radioSuccess4" value="4">
                    <label for="radioSuccess4">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p1" id="radioSuccess5" value="5">
                      <label for="radioSuccess5">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p1" id="radioSuccess6" value="6">
                      <label for="radioSuccess6">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p1" id="radioSuccess7" value="7">
                      <label for="radioSuccess7">
                        7
                      </label>
                    </div>
            </div>
           

          
            <div class="pregunta">
              <h4 class="">2. Me satisface estudiar porque siempre descubro algo nuevo</h4>
           
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p2" id="radioSuccess8" value="1">
                    <label for="radioSuccess8">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p2" id="radioSuccess9" value="2">
                    <label for="radioSuccess9">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p2" id="radioSuccess10" value="3">
                    <label for="radioSuccess10">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p2" id="radioSuccess11" value="4">
                    <label for="radioSuccess11">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p2" id="radioSuccess12" value="5">
                      <label for="radioSuccess12">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p2" id="radioSuccess13" value="6">
                      <label for="radioSuccess13">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p2" id="radioSuccess14" value="7">
                      <label for="radioSuccess14">
                        7
                      </label>
                    </div>
                  </div>
           
          
            <div class="pregunta">
              <h4 class="">3. Pienso que es siempre importante obtener altas calificaciones</h4>
       
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p3" id="radioSuccess15" value="1">
                    <label for="radioSuccess15">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p3" id="radioSuccess16" value="2">
                    <label for="radioSuccess16">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p3" id="radioSuccess17" value="3">
                    <label for="radioSuccess17">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p3" id="radioSuccess18" value="4">
                    <label for="radioSuccess18">
                      4
                    </label>
                  </div>
            
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p3" id="radioSuccess19" value="5">
                      <label for="radioSuccess19">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p3" id="radioSuccess20" value="6">
                      <label for="radioSuccess20">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p3" id="radioSuccess21" value="7">
                      <label for="radioSuccess21">
                        7
                      </label>
                    </div>
                  </div>
             
          
            <div class="pregunta">
              <h4 class="">4. Reconozco que estudio para aprobar</h4>
    
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p4" id="radioSuccess22" value="1">
                    <label for="radioSuccess22">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p4" id="radioSuccess23" value="2">
                    <label for="radioSuccess23">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p4" id="radioSuccess24" value="3">
                    <label for="radioSuccess24">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p4" id="radioSuccess25" value="4">
                    <label for="radioSuccess25">
                      4
                    </label>
                  </div>
           
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p4" id="radioSuccess26" value="5">
                      <label for="radioSuccess26">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p4" id="radioSuccess27" value="6">
                      <label for="radioSuccess27">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p4" id="radioSuccess28" value="7">
                      <label for="radioSuccess28">
                        7
                      </label>
                    </div>
                  </div>
            

          
            <div class="pregunta">
              <h4 class="">5. Me gusta aprender cosas nuevas para profundizar después en ellas</h4>
        
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p5" id="radioSuccess29" value="1">
                    <label for="radioSuccess29">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p5" id="radioSuccess30" value="2">
                    <label for="radioSuccess30">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p5" id="radioSuccess31" value="3">
                    <label for="radioSuccess31">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p5" id="radioSuccess32" value="4">
                    <label for="radioSuccess32">
                      4
                    </label>
                  </div>
               
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p5" id="radioSuccess33" value="5">
                      <label for="radioSuccess33">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p5" id="radioSuccess34" value="6">
                      <label for="radioSuccess34">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p5" id="radioSuccess35" value="7">
                      <label for="radioSuccess35">
                        7
                      </label>
                    </div>
                  </div>
          

          
            <div class="pregunta">
              <h4 class="">6. Es muy importante para mí que los profesores y profesoras 
                expliquen exactamente lo que debemos hacer</h4>
    
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p6" id="radioSuccess36" value="1">
                    <label for="radioSuccess36">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p6" id="radioSuccess37" value="2">
                    <label for="radioSuccess37">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p6" id="radioSuccess38" value="3">
                    <label for="radioSuccess38">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p6" id="radioSuccess39" value="4">
                    <label for="radioSuccess39">
                      4
                    </label>
                  </div>
          
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p6" id="radioSuccess40" value="5">
                      <label for="radioSuccess40">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p6" id="radioSuccess41" value="6">
                      <label for="radioSuccess41">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p6" id="radioSuccess42" value="7">
                      <label for="radioSuccess42">
                        7
                      </label>
                    </div>
                  </div>
              
          
            <div class="pregunta">
              <h4 class="">7. Estudio a fondo los temas que me resultan interesantes</h4>
      
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p7" id="radioSuccess43" value="1">
                    <label for="radioSuccess43">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p7" id="radioSuccess44" value="2">
                    <label for="radioSuccess44">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p7" id="radioSuccess45" value="3">
                    <label for="radioSuccess45">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p7" id="radioSuccess46" value="4">
                    <label for="radioSuccess46">
                      4
                    </label>
                  </div>
           
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p7" id="radioSuccess47" value="5">
                      <label for="radioSuccess47">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p7" id="radioSuccess48" value="6">
                      <label for="radioSuccess48">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p7" id="radioSuccess49" value="7">
                      <label for="radioSuccess49">
                        7
                      </label>
                    </div>
                  </div>
            
          
            <div class="pregunta">
              <h4 class="">8. Me esfuerzo en el estudio porque mi familia me suele dar regalos</h4>
        
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p8" id="radioSuccess50" value="1">
                    <label for="radioSuccess50">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p8" id="radioSuccess51" value="2">
                    <label for="radioSuccess51">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p8" id="radioSuccess52" value="3">
                    <label for="radioSuccess52">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p8" id="radioSuccess53" value="4">
                    <label for="radioSuccess53">
                      4
                    </label>
                  </div>
               
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p8" id="radioSuccess54" value="5">
                      <label for="radioSuccess54">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p8" id="radioSuccess55" value="6">
                      <label for="radioSuccess55">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p8" id="radioSuccess56" value="7">
                      <label for="radioSuccess56">
                        7
                      </label>
                    </div>
                  </div>
          
          
            <div class="pregunta">
              <h4 class="">9. A la hora de hacer los exámenes tengo miedo de reprobar</h4>
  
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p9" id="radioSuccess57" value="1">
                    <label for="radioSuccess57">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p9" id="radioSuccess58" value="2">
                    <label for="radioSuccess58">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p9" id="radioSuccess59" value="3">
                    <label for="radioSuccess59">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p9" id="radioSuccess60" value="4">
                    <label for="radioSuccess60">
                      4
                    </label>
                  </div>
               
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p9" id="radioSuccess61" value="5">
                      <label for="radioSuccess61">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p9" id="radioSuccess62" value="6">
                      <label for="radioSuccess62">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p9" id="radioSuccess63" value="7">
                      <label for="radioSuccess63">
                        7
                      </label>
                    </div>
                  </div>
           
          
            <div class="pregunta">
              <h4 class="">10. Pienso que estudiar te ayuda a comprender mejor la vida y la 
                sociedad</h4>
    
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p10" id="radioSuccess64" value="1">
                    <label for="radioSuccess64">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p10" id="radioSuccess65" value="2">
                    <label for="radioSuccess65">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p10" id="radioSuccess66" value="3">
                    <label for="radioSuccess66">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p10" id="radioSuccess67" value="4">
                    <label for="radioSuccess67">
                      4
                    </label>
                  </div>
            
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p10" id="radioSuccess68" value="5">
                      <label for="radioSuccess68">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p10" id="radioSuccess69" value="6">
                      <label for="radioSuccess69">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p10" id="radioSuccess70" value="7">
                      <label for="radioSuccess70">
                        7
                      </label>
                    </div>
                  </div>
           

          
            <div class="pregunta">
              <h4 class="">11. Me gusta competir para obtener las mejores calificaciones</h4>
       
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p11" id="radioSuccess71" value="1">
                    <label for="radioSuccess71">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p11" id="radioSuccess72" value="2">
                    <label for="radioSuccess72">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p11" id="radioSuccess73" value="3">
                    <label for="radioSuccess73">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p11" id="radioSuccess74" value="4">
                    <label for="radioSuccess74">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p11" id="radioSuccess75" value="5">
                      <label for="radioSuccess75">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p11" id="radioSuccess76" value="6">
                      <label for="radioSuccess76">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p11" id="radioSuccess77" value="7">
                      <label for="radioSuccess77">
                        7
                      </label>
                    </div>
                  </div>
             

          
            <div class="pregunta">
              <h4 class="">12. Creo que estudiar facilita un mejor trabajo en el futuro</h4>
      
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p12" id="radioSuccess78" value="1">
                    <label for="radioSuccess78">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p12" id="radioSuccess79" value="2">
                    <label for="radioSuccess79">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p12" id="radioSuccess80" value="3">
                    <label for="radioSuccess80">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p12" id="radioSuccess81" value="4">
                    <label for="radioSuccess81">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p12" id="radioSuccess82" value="5">
                      <label for="radioSuccess82">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p12" id="radioSuccess83" value="6">
                      <label for="radioSuccess83">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p12" id="radioSuccess84" value="7">
                      <label for="radioSuccess84">
                        7
                      </label>
                    </div>
                  </div>
           

          
            <div class="pregunta">
              <h4 class="">13. Cuando estudio aporto mi punto de vista o conocimientos previos</h4>
         
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p13" id="radioSuccess85" value="1">
                    <label for="radioSuccess85">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p13" id="radioSuccess86" value="2">
                    <label for="radioSuccess86">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p13" id="radioSuccess87" value="3">
                    <label for="radioSuccess87">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p13" id="radioSuccess88" value="4">
                    <label for="radioSuccess88">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p13" id="radioSuccess89" value="5">
                      <label for="radioSuccess89">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p13" id="radioSuccess90" value="6">
                      <label for="radioSuccess90">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p13" id="radioSuccess91" value="7">
                      <label for="radioSuccess91">
                        7
                      </label>
                    </div>
                  </div>
          

          
            <div class="pregunta">
              <h4 class="">14. Lo importante para mí es conseguir buenas notas en todas las 
                materias</h4>
         
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p14" id="radioSuccess92" value="1">
                    <label for="radioSuccess92">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p14" id="radioSuccess93" value="2">
                    <label for="radioSuccess93">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p14" id="radioSuccess94" value="3">
                    <label for="radioSuccess94">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p14" id="radioSuccess95" value="4">
                    <label for="radioSuccess95">
                      4
                    </label>
                  </div>
       
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p14" id="radioSuccess96" value="5">
                      <label for="radioSuccess96">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p14" id="radioSuccess97" value="6">
                      <label for="radioSuccess97">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p14" id="radioSuccess98" value="7">
                      <label for="radioSuccess98">
                        7
                      </label>
                    </div>
                  </div>
           
          
            <div class="pregunta">
              <h4 class="">15. Cuando presento los exámenes pienso que me van a salir peor 
                que a mis compañeros/as</h4>
    
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p15" id="radioSuccess99" value="1">
                    <label for="radioSuccess99">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p15" id="radioSuccess100" value="2">
                    <label for="radioSuccess100">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p15" id="radioSuccess101" value="3">
                    <label for="radioSuccess101">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p15" id="radioSuccess102" value="4">
                    <label for="radioSuccess102">
                      4
                    </label>
                  </div>
           
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p15" id="radioSuccess103" value="5">
                      <label for="radioSuccess103">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p15" id="radioSuccess104" value="6">
                      <label for="radioSuccess104">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p15" id="radioSuccess105" value="7">
                      <label for="radioSuccess105">
                        7
                      </label>
                    </div>
                  </div>
            

          
            <div class="pregunta">
              <h4 class="">16. Cuando profundizo en el estudio, luego sé que puedo aplicar en la 
                práctica lo que voy aprendiendo</h4>
  
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p16" id="radioSuccess106" value="1">
                    <label for="radioSuccess106">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p16" id="radioSuccess107" value="2">
                    <label for="radioSuccess107">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p16" id="radioSuccess108" value="3">
                    <label for="radioSuccess108">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p16" id="radioSuccess109" value="4">
                    <label for="radioSuccess109">
                      4
                    </label>
                  </div>
            
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p16" id="radioSuccess110" value="5">
                      <label for="radioSuccess110">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p16" id="radioSuccess111" value="6">
                      <label for="radioSuccess111">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p16" id="radioSuccess112" value="7">
                      <label for="radioSuccess112">
                        7
                      </label>
                    </div>
                  </div>
              

          
            <div class="pregunta">
              <h4 class="">17. Si puedo, intentaré sacar mejores notas que la mayoría de mis 
                compañeros/as</h4>
       
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p17" id="radioSuccess113" value="1">
                    <label for="radioSuccess113">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p17" id="radioSuccess114" value="2">
                    <label for="radioSuccess114">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p17" id="radioSuccess115" value="3">
                    <label for="radioSuccess115">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p17" id="radioSuccess116" value="4">
                    <label for="radioSuccess116">
                      4
                    </label>
                  </div>
            
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p17" id="radioSuccess117" value="5">
                      <label for="radioSuccess117">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p17" id="radioSuccess118" value="6">
                      <label for="radioSuccess118">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p17" id="radioSuccess119" value="7">
                      <label for="radioSuccess119">
                        7
                      </label>
                    </div>
                  </div>
            
          
            <div class="pregunta">
              <h4 class="">18. Lo que quiero es estudiar solamente lo que me van a preguntar en los exámenes</h4>
           
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p18" id="radioSuccess120" value="1">
                    <label for="radioSuccess120">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p18" id="radioSuccess121" value="2">
                    <label for="radioSuccess121">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p18" id="radioSuccess122" value="3">
                    <label for="radioSuccess122">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p18" id="radioSuccess123" value="4">
                    <label for="radioSuccess123">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p18" id="radioSuccess124" value="5">
                      <label for="radioSuccess124">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p18" id="radioSuccess125" value="6">
                      <label for="radioSuccess125">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p18" id="radioSuccess126" value="7">
                      <label for="radioSuccess126">
                        7
                      </label>
                    </div>
                  </div>
            

          
            <div class="pregunta">
              <h4 class="">19. Prefiero estudiar los temas que me resultan interesantes aunque 
                sean difíciles</h4>

            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p19" id="radioSuccess127" value="1">
                    <label for="radioSuccess127">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p19" id="radioSuccess128" value="2">
                    <label for="radioSuccess128">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p19" id="radioSuccess129" value="3">
                    <label for="radioSuccess129">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p19" id="radioSuccess130" value="4">
                    <label for="radioSuccess130">
                      4
                    </label>
                  </div>
             
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p19" id="radioSuccess131" value="5">
                      <label for="radioSuccess131">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p19" id="radioSuccess132" value="6">
                      <label for="radioSuccess132">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p19" id="radioSuccess133" value="7">
                      <label for="radioSuccess133">
                        7
                      </label>
                    </div>
                  </div>
           

          
            <div class="pregunta">
              <h4 class="">20. Cuando salen las notas acostumbro a compararlas con las de mis 
                compañeros/as o as de mis amigos/as</h4>
      
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p20" id="radioSuccess134" value="1">
                    <label for="radioSuccess134">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p20" id="radioSuccess135" value="2">
                    <label for="radioSuccess135">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p20" id="radioSuccess136" value="3">
                    <label for="radioSuccess136">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p20" id="radioSuccess137" value="4">
                    <label for="radioSuccess137">
                      4
                    </label>
                  </div>
            
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p20" id="radioSuccess138" value="5">
                      <label for="radioSuccess138">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p20" id="radioSuccess139" value="6">
                      <label for="radioSuccess139">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p20" id="radioSuccess140" value="7">
                      <label for="radioSuccess140">
                        7
                      </label>
                    </div>
                  </div>
           
          
            <div class="pregunta">
              <h4 class="">21. Creo que soy un buen/a alumno/a</h4>
     
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p21" id="radioSuccess141" value="1">
                    <label for="radioSuccess141">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p21" id="radioSuccess142" value="2">
                    <label for="radioSuccess142">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p21" id="radioSuccess143" value="3">
                    <label for="radioSuccess143">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p21" id="radioSuccess144" value="4">
                    <label for="radioSuccess144">
                      4
                    </label>
                  </div>
                
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p21" id="radioSuccess145" value="5">
                      <label for="radioSuccess145">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p21" id="radioSuccess146" value="6">
                      <label for="radioSuccess146">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p21" id="radioSuccess147" value="7">
                      <label for="radioSuccess147">
                        7
                      </label>
                    </div>
                  </div>
        
          
            <div class="pregunta">
              <h4 class="">22. Tengo buenas cualidades para estudiar</h4>
         
            
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p22" id="radioSuccess148" value="1">
                    <label for="radioSuccess148">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p22" id="radioSuccess149" value="2">
                    <label for="radioSuccess149">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p22" id="radioSuccess150" value="3">
                    <label for="radioSuccess150">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p22" id="radioSuccess151" value="4">
                    <label for="radioSuccess151">
                      4
                    </label>
                  </div>
           
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p22" id="radioSuccess152" value="5">
                      <label for="radioSuccess152">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p22" id="radioSuccess153" value="6">
                      <label for="radioSuccess153">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p22" id="radioSuccess154" value="7">
                      <label for="radioSuccess154">
                        7
                      </label>
                    </div>
                  </div>
            

          
            <div class="pregunta">
              <h4 class="">23. Me considero un alumno del montón</h4>
          
              
                
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p23" id="radioSuccess155" value="1">
                    <label for="radioSuccess155">
                      1
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p23" id="radioSuccess156" value="2">
                    <label for="radioSuccess156">
                      2
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p23" id="radioSuccess157" value="3">
                    <label for="radioSuccess157">
                      3
                    </label>
                  </div>
                  <div class="col-3 icheck-success d-inline">
                    <input type="radio" name="p23" id="radioSuccess158" value="4">
                    <label for="radioSuccess158">
                      4
                    </label>
                  </div>
           
                
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p23" id="radioSuccess159" value="5">
                      <label for="radioSuccess159">
                        5
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p23" id="radioSuccess160" value="6">
                      <label for="radioSuccess160">
                        6
                      </label>
                    </div>
                    <div class="col-3 icheck-success d-inline">
                      <input type="radio" name="p23" id="radioSuccess161" value="7">
                      <label for="radioSuccess161">
                        7
                      </label>
                    </div>
                  </div>
           
                  <center>
                    <input type="submit" name="Enviar" class="boton_enviar">
                  </center>
        </form>


    </section>

</body>
</html>

