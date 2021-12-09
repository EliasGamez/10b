<?php
    session_start();

    $id =  $_SESSION['Id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo.png">
    <title>ALUMNO | ESTILO</title>
</head>
<body>
    <?php
        require("nav_admin.php");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Estilo de Aprendizaje</h1>
        </div>
        
        <div class="ins">
            <h4>
                Instrucciones:
                Este cuestionario permite identificar su Estilo preferente de Aprendizaje. No es un test de
                inteligencia, ni de personalidad.
            </h4>
        </div>
        <form name="form" action="" method="POST">
          
            <div class="pregunta">
              <h4 class="">1. La gente que me conoce dice de mí que digo las cosas tal y como pienso</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p1" id="radioSuccess1" value="1">
                    <label for="radioSuccess1">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p1" id="radioSuccess2" value="0">
                    <label for="radioSuccess2">
                      Menos -
                    </label>
                  </div>
                </div>
             
          
          
            <div class="pregunta">
              <h4 class="">2. Distingo claramente lo bueno de lo malo, lo que está bien y lo que está mal</h4>
       
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p2" id="radioSuccess3" value="1">
                    <label for="radioSuccess3">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p2" id="radioSuccess4" value="0">
                    <label for="radioSuccess4">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">3. Muchas veces actúo sin mirar las consecuencias</h4>
        
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p3" id="radioSuccess5" value="1">
                    <label for="radioSuccess5">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p3" id="radioSuccess6" value="0">
                    <label for="radioSuccess6">
                      Menos -
                    </label>
                  </div>
                </div>
            
          
            <div class="pregunta">
              <h4 class="">4. Me interesa saber cómo piensan los demás y por qué motivos actúan</h4>
     
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p4" id="radioSuccess7" value="1">
                    <label for="radioSuccess7">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p4" id="radioSuccess8" value="0">
                    <label for="radioSuccess8">
                      Menos -
                    </label>
                  </div>
                </div>
              
          
            <div class="pregunta">
              <h4 class="">5. Valoro mucho que me hagan un regalo que tiene gran utilidad</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p5" id="radioSuccess9" value="1">
                    <label for="radioSuccess9">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p5" id="radioSuccess10" value="0">
                    <label for="radioSuccess10">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">6. Procuro enterarme de lo que ocurre en donde estoy</h4>
 
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p6" id="radioSuccess11" value="1">
                    <label for="radioSuccess11">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p6" id="radioSuccess12" value="0">
                    <label for="radioSuccess12">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">7. Disfruto si tengo tiempo para preparar mi trabajo y hacerlo lo mejor posible</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p7" id="radioSuccess13" value="1">
                    <label for="radioSuccess13">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p7" id="radioSuccess14" value="0">
                    <label for="radioSuccess14">
                      Menos -
                    </label>
                  </div>
                </div>
             
          
            <div class="pregunta">
                <h4 class="">8. Me gusta seguir un orden, en las comidas, en el estudio y hacer deporte
                    con regularidad</h4>
   
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p8" id="radioSuccess15" value="1">
                    <label for="radioSuccess15">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p8" id="radioSuccess16" value="0">
                    <label for="radioSuccess16">
                      Menos -
                    </label>
                  </div>
                </div>
         

          
            <div class="pregunta">
              <h4 class="">9. Prefiero las ideas originales y novedosas aunque no sean muy prácticas.</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p9" id="radioSuccess17" value="1">
                    <label for="radioSuccess17">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p9" id="radioSuccess18" value="0">
                    <label for="radioSuccess18">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">10. Acepto y cumplo las normas sólo si sirven para lograr lo que me gusta</h4>
     
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p10" id="radioSuccess19" value="1">
                    <label for="radioSuccess19">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p10" id="radioSuccess20" value="0">
                    <label for="radioSuccess20">
                      Menos -
                    </label>
                  </div>
                </div>
             
          
            <div class="pregunta">
              <h4 class="">11. Escucho más que hablo</h4>
       
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p11" id="radioSuccess21" value="1">
                    <label for="radioSuccess21">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p11" id="radioSuccess22" value="0">
                    <label for="radioSuccess22">
                      Menos -
                    </label>
                  </div>
                </div>
         

          
            <div class="pregunta">
                <h4 class="">12. En mi cuarto tengo, generalmente, las cosas ordenas, pues no soporto el
                    desorden</h4>
        
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p12" id="radioSuccess23" value="1">
                    <label for="radioSuccess23">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p12" id="radioSuccess24" value="0">
                    <label for="radioSuccess24">
                      Menos -
                    </label>
                  </div>
                </div>
          

          
            <div class="pregunta">
              <h4 class="">13. Antes de hacer algo estudio con cuidado sus ventajas e inconvenientes</h4>
      
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p13" id="radioSuccess25" value="1">
                    <label for="radioSuccess25">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p13" id="radioSuccess26" value="0">
                    <label for="radioSuccess26">
                      Menos -
                    </label>
                  </div>
                </div>
           

          
            <div class="pregunta">
                <h4 class="">14. En las actividades escolares pongo más interés cuando hago algo nuevo y
                    diferente</h4>
     
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p14" id="radioSuccess27" value="1">
                    <label for="radioSuccess27">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p14" id="radioSuccess28" value="0">
                    <label for="radioSuccess28">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">15. En una discusión me gusta decir claramente lo que pienso</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p15" id="radioSuccess29" value="1">
                    <label for="radioSuccess29">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p15" id="radioSuccess30" value="0">
                    <label for="radioSuccess30">
                      Menos -
                    </label>
                  </div>
                </div>
          
          
            <div class="pregunta">
                <h4 class="">16. Cuando juego, dejo los sentimientos por mis amigos a un lado, pues en el
                    juego lo importante es ganar</h4>
       
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p16" id="radioSuccess31" value="1">
                    <label for="radioSuccess31">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p16" id="radioSuccess32" value="0">
                    <label for="radioSuccess32">
                      Menos -
                    </label>
                  </div>
                </div>
           

          
            <div class="pregunta">
                <h4 class="">17. Me siento a gusto con personas espontáneas y divertidas aunque a veces
                    me den problemas</h4>
       
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p17" id="radioSucces33" value="1">
                    <label for="radioSucces33">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p17" id="radioSuccess34" value="0">
                    <label for="radioSuccess34">
                      Menos -
                    </label>
                  </div>
                </div>
           
          
            <div class="pregunta">
              <h4 class="">18. Expreso abiertamente como me siento</h4>
            
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p18" id="radioSuccess35" value="1">
                    <label for="radioSuccess35">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p18" id="radioSuccess36" value="0">
                    <label for="radioSuccess36">
                      Menos -
                    </label>
                  </div>
                </div>
              

          
            <div class="pregunta">
              <h4 class="">19. En reuniones y fiestas suelo ser el más divertido</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p19" id="radioSuccess37" value="1">
                    <label for="radioSuccess37">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p19" id="radioSuccess38" value="0">
                    <label for="radioSuccess38">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">20.Me gusta analizar y dar vueltas a las cosas para lograr su solución</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p20" id="radioSuccess39" value="1">
                    <label for="radioSuccess39">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p20" id="radioSuccess40" value="0">
                    <label for="radioSuccess40">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">21. Prefiero las ideas que sirven para algo y que se pueden realizar a soñar y 
                fantasear</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p21" id="radioSuccess41" value="1">
                    <label for="radioSuccess41">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p21" id="radioSuccess42" value="0">
                    <label for="radioSuccess42">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">22. Tengo cuidado y pienso las cosas antes de sacar conclusiones</h4>
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p22" id="radioSuccess43" value="1">
                    <label for="radioSuccess43">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p22" id="radioSuccess44" value="0">
                    <label for="radioSuccess44">
                      Menos -
                    </label>
                  </div>
                </div>
          

          
            <div class="pregunta">
              <h4 class="">23. Intento hacer las cosas para que me queden perfectas</h4>
 
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p23" id="radioSuccess45" value="1">
                    <label for="radioSuccess45">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p23" id="radioSuccess46" value="0">
                    <label for="radioSuccess46">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">24. Prefiero oír las opiniones de los demás antes de exponer la mía</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p24" id="radioSuccess47" value="1">
                    <label for="radioSuccess47">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p24" id="radioSuccess48" value="0">
                    <label for="radioSuccess48">
                      Menos -
                    </label>
                  </div>
                </div>
           

          
            <div class="pregunta">
              <h4 class="">25. Enlas discusiones me gusta observar cómo actúan los demás participantes</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p25" id="radioSuccess49" value="1">
                    <label for="radioSuccess49">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p25" id="radioSuccess50" value="0">
                    <label for="radioSuccess50">
                      Menos -
                    </label>
                  </div>
                </div>
         

          
            <div class="pregunta">
              <h4 class="">26. Me disgusta estar con personas calladas y que piensan mucho todas las cosas</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p26" id="radioSuccess51" value="1">
                    <label for="radioSuccess51">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p26" id="radioSuccess52" value="0">
                    <label for="radioSuccess52">
                      Menos -
                    </label>
                  </div>
                </div>
           

          
            <div class="pregunta">
              <h4 class="">27. Me agobio si me obligan a acelerar mucho el trabajo para cumplir un plazo</h4>
        
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p27" id="radioSuccess53" value="1">
                    <label for="radioSuccess53">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p27" id="radioSuccess54" value="0">
                    <label for="radioSuccess54">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">28. Doy ideas nuevas y espontáneas en los trabajos en grupo</h4>
           
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p28" id="radioSuccess55" value="1">
                    <label for="radioSuccess55">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p28" id="radioSuccess56" value="0">
                    <label for="radioSuccess56">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
                <h4 class="">29. La mayoría de las veces creo que es preciso saltarse las normas más que
                    cumplirlas</h4>
      
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p29" id="radioSuccess57" value="1">
                    <label for="radioSuccess57">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p29" id="radioSuccess58" value="0">
                    <label for="radioSuccess58">
                      Menos -
                    </label>
                  </div>
                </div>
             
          
            <div class="pregunta">
              <h4 class="">30. Cuando estoy con mis amigos hablo más que escucho</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p30" id="radioSuccess60" value="1">
                    <label for="radioSuccess60">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p30" id="radioSuccess61" value="0">
                    <label for="radioSuccess61">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">31. Creo que siempre deben hacerse las con lógica y de forma razonada</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p31" id="radioSuccess62" value="1">
                    <label for="radioSuccess62">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p31" id="radioSuccess63" value="0">
                    <label for="radioSuccess63">
                      Menos -
                    </label>
                  </div>
                </div>
          

          
            <div class="pregunta">
              <h4 class="">32. Me ponen nervioso/a aquellos que dicen cosas poco importantes o sin 
                sentido</h4>
        
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p32" id="radioSuccess64" value="1">
                    <label for="radioSuccess64">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p32" id="radioSuccess65" value="0">
                    <label for="radioSuccess65">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">33. Me gusta comprobar que las cosas funcionan</h4>
        
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p33" id="radioSuccess66" value="1">
                    <label for="radioSuccess66">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p33" id="radioSuccess67" value="0">
                    <label for="radioSuccess67">
                      Menos -
                    </label>
                  </div>
                </div>
           
          
            <div class="pregunta">
              <h4 class="">34. Rechazo las ideas originales y espontáneas si veo que no sirven para algo 
                práctico</h4>
           
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p34" id="radioSuccess68" value="1">
                    <label for="radioSuccess68">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p34" id="radioSuccess69" value="0">
                    <label for="radioSuccess69">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">35. Con frecuencia poenso en las consecuencias demis actos para prever el 
                futuro</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p35" id="radioSuccess70" value="1">
                    <label for="radioSuccess70">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p35" id="radioSuccess71" value="0">
                    <label for="radioSuccess71">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">36. En muchas ocasiones, si se desea algo, no importa lo que se haga para 
                conseguirlo</h4>
     
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p36" id="radioSuccess72" value="1">
                    <label for="radioSuccess72">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p36" id="radioSuccess73" value="0">
                    <label for="radioSuccess73">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">37. Me molestan los compañeros y personas que hacen las cosas a lo loco</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p37" id="radioSuccess74" value="1">
                    <label for="radioSuccess74">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p37" id="radioSuccess75" value="0">
                    <label for="radioSuccess75">
                      Menos -
                    </label>
                  </div>
                </div>
          
            <div class="pregunta">
              <h4 class="">38. Suelo reflexionar sobre los asuntos y problemas</h4>
           
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p38" id="radioSuccess76" value="1">
                    <label for="radioSuccess76">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p38" id="radioSuccess77" value="0">
                    <label for="radioSuccess77">
                      Menos -
                    </label>
                  </div>
                </div>
            
          
            <div class="pregunta">
              <h4 class="">39. Con frecuencia soy una de las personas que más animan las fiestas</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p39" id="radioSuccess78" value="1">
                    <label for="radioSuccess78">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p39" id="radioSuccess79" value="0">
                    <label for="radioSuccess79">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">40.Los que me conocen suelen pensar que soy poco sensible a sus sentimientos</h4>
           
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p40" id="radioSuccess80" value="1">
                    <label for="radioSuccess80">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p40" id="radioSuccess81" value="0">
                    <label for="radioSuccess81">
                      Menos -
                    </label>
                  </div>
                </div>
             

          
            <div class="pregunta">
              <h4 class="">41. Me cuesta mucho planificar mis tareas y preparar con tiempo mis exámenes</h4>
   
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p41" id="radioSuccess82" value="1">
                    <label for="radioSuccess82">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p41" id="radioSuccess83" value="0">
                    <label for="radioSuccess83">
                      Menos -
                    </label>
                  </div>
                </div>
         

          
            <div class="pregunta">
              <h4 class="">42. Cuando trabajo en grupo me interesa saber lo que opinan los demás</h4>
         
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p42" id="radioSuccess84" value="1">
                    <label for="radioSuccess84">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p42" id="radioSuccess85" value="0">
                    <label for="radioSuccess85">
                      Menos -
                    </label>
                  </div>
                </div>
            

          
            <div class="pregunta">
              <h4 class="">43. Me molesta que la gente no se tome las cosas en serio</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p43" id="radioSuccess86" value="1">
                    <label for="radioSuccess86">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p43" id="radioSuccess87" value="0">
                    <label for="radioSuccess87">
                      Menos -
                    </label>
                  </div>
                </div>
          

          
            <div class="pregunta">
              <h4 class="">44. A menudo me doy cuenta de otras formas mejores dehacerlas cosas</h4>
          
            
              
                
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p44" id="radioSuccess88" value="1">
                    <label for="radioSuccess88">
                      Mas +
                    </label>
                  </div>
                  <div class="col-6 icheck-success d-inline">
                    <input type="radio" name="p44" id="radioSuccess89" value="0">
                    <label for="radioSuccess89">
                      Menos -
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

