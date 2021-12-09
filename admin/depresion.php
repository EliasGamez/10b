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
    <link rel="icon" href="../imagenes/logo.png">
    <title>ALUMNO | DEPRESIÓN</title>
</head>
<body>
    <?php
        require("nav_admin.php");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Depresión</h1>
        </div>
        
        <div class="ins">
            <h4>
                Instrucciones:
                Entre cuestionario consiste en 21 grupos de afirmaciones, Por favor, lea con atención cada una de ellos y, a
                continuación, señale cuál de las afirmaciones de cada grupo describe mejor el modo en el que se ha sentido DURANTE LAS
                DOS ÚLTIMAS SEMANAS, INCLUIDO EL DÍA DE HOY. Rodee con un círculo el número que se encuentra escrito a la izquierda de
                la afirmación que haya elegido. si dentro del mismo grupo hay más de una afirmación que considere igualmente aplicable
                a su caso, elija el número más alto. Asegúrese de leer todas las afirmaciones de cada grupo antes de efectuar la
                elección. Asegúrese también de no hacer elegido más de una respuesta para cada grupo, particularmente en los elementos
                16 (cambio en el patrón de sueño) y 18 (cambio en el apetito).
            </h4>
        </div>
        <form name="form" action="" method="POST">
        
          <div class="pregunta">
            <h4 class="holaque">1. Tristeza</h4>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess1" value="0">
              <label for="radioSuccess1">
                No me siento triste habitualmente
              </label>
            </div>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess2" value="1">
              <label for="radioSuccess2">
                Me siento triste gran parte del tiempo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess3" value="2">
              <label for="radioSuccess3">
                Me siento triste continuamente
              </label>
            </div>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess4" value="3">
              <label for="radioSuccess4">
                Me siento tan triste o desgraciado que no puedo soportarlo
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">2. Pesimismo</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p2" id="radioSuccess5" value="0">
              <label for="radioSuccess5">
                No estoy desanimado sobre mi futuro
              </label>
            </div>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess6" value="1">
              <label for="radioSuccess6">
                Me siento más desanimado sobre mi futuro que antes
              </label>
            </div>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess7" value="2">
              <label for="radioSuccess7">
                No espero que las cosas mejoren
              </label>
            </div>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess8" value="3">
              <label for="radioSuccess8">
                Siento que mi futuro es desesperanzador y que las cosas solo empeorarán
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">3. Sentimiento de fracaso</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p3" id="radioSuccess9" value="0">
              <label for="radioSuccess9">
                No me siento fracasado
              </label>
            </div>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess10" value="1">
              <label for="radioSuccess10">
                He fracasado más de lo que debería
              </label>
            </div>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess11" value="2">
              <label for="radioSuccess11">
                Cuando miro atrás, veo fracaso tras fracaso
              </label>
            </div>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess12" value="3">
              <label for="radioSuccess12">
                Me siento una persona totalmente fracasada
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">4. Pérdida de placer</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p4" id="radioSuccess13" value="0">
              <label for="radioSuccess13">
                Disfruto de las cosas que me gustan tanto como antes
              </label>
            </div>
            <div class="">
              <input type="radio" name="p4" id="radioSuccess14" value="1">
              <label for="radioSuccess14">
                No disfruto de las cosas tanto como antes
              </label>
            </div>
            <div class="">
              <input type="radio" name="p4" id="radioSuccess15" value="2">
              <label for="radioSuccess15">
                Obtengo muy poco placer de las cosas con las que antes disfrutaba
              </label>
            </div>
            <div class="">
              <input type="radio" name="p4" id="radioSuccess16" value="3">
              <label for="radioSuccess16">
                No obtengo ningún placer de las cosas con las que antes disfrutaba
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">5. Sentimiento de culpa</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p5" id="radioSuccess17" value="0">
              <label for="radioSuccess17">
                No me siento especialmente culpable.
              </label>
            </div>
            <div class="">
              <input type="radio" name="p5" id="radioSuccess18" value="1">
              <label for="radioSuccess18">
                Me siento culpable de muchas cosas que he hecho o debería haber hecho
              </label>
            </div>
            <div class="">
              <input type="radio" name="p5" id="radioSuccess19" value="2">
              <label for="radioSuccess19">
                Me siento bastante culpable la mayor parte del tiempo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p5" id="radioSuccess20" value="3">
              <label for="radioSuccess20">
                Me siento culpable constantemente
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">6. Sentimiento de castigo</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p6" id="radioSuccess21" value="0">
              <label for="radioSuccess21">
                No siento que esté siendo castigado
              </label>
            </div>
            <div class="">
              <input type="radio" name="p6" id="radioSuccess22" value="1">
              <label for="radioSuccess22">
                Siento que puedo ser castigado
              </label>
            </div>
            <div class="">
              <input type="radio" name="p6" id="radioSuccess23" value="2">
              <label for="radioSuccess23">
                Espero ser castigado
              </label>
            </div>
            <div class="">
              <input type="radio" name="p6" id="radioSuccess24" value="3">
              <label for="radioSuccess24">
                Siento que estoy siendo castigado
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">7. Insatisfacción con uno mismo</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p7" id="radioSuccess25" value="0">
              <label for="radioSuccess25">
                Siento lo mismo que antes sobre mí mismo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p7" id="radioSuccess26" value="1">
              <label for="radioSuccess26">
                He perdido confianza en mí mismo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p7" id="radioSuccess27" value="2">
              <label for="radioSuccess27">
                Estoy decepcionado conmigo mismo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p7" id="radioSuccess28" value="3">
              <label for="radioSuccess28">
                No me gusto
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">8. Autocríticas</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p8" id="radioSuccess29" value="0">
              <label for="radioSuccess29">
                No me critico o me culpo más que antes
              </label>
            </div>
            <div class="">
              <input type="radio" name="p8" id="radioSuccess30" value="1">
              <label for="radioSuccess30">
                Soy más crítico conmigo mismo de lo que solía ser
              </label>
            </div>
            <div class="">
              <input type="radio" name="p8" id="radioSuccess31" value="2">
              <label for="radioSuccess31">
                Critico todos mis defectos
              </label>
            </div>
            <div class="">
              <input type="radio" name="p8" id="radioSuccess32" value="3">
              <label for="radioSuccess32">
                Me culpo de todo lo malo que sucede
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">9. Pensamientos o deseos de suicidio</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p9" id="radioSuccess33" value="0">
              <label for="radioSuccess33">
                No tengo ningún pensamiento de suicidio
              </label>
            </div>
            <div class="">
              <input type="radio" name="p9" id="radioSuccess34" value="1">
              <label for="radioSuccess34">
                Tengo pensamientos de suicidio, pero no los llevaría a cabo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p9" id="radioSuccess35" value="2">
              <label for="radioSuccess35">
                Me gustaría suicidarme
              </label>
            </div>
            <div class="">
              <input type="radio" name="p9" id="radioSuccess36" value="3">
              <label for="radioSuccess36">
                Me suicidaría si tuviese la oportunidad
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">10. Llanto</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p10" id="radioSuccess37" value="0">
              <label for="radioSuccess37">
                No lloro más de lo que solía hacerlo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p10" id="radioSuccess38" value="1">
              <label for="radioSuccess38">
                Lloro más de lo que solía hacerlo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p10" id="radioSuccess39" value="2">
              <label for="radioSuccess39">
                Lloro por cualquier cosa
              </label>
            </div>
            <div class="">
              <input type="radio" name="p10" id="radioSuccess40" value="3">
              <label for="radioSuccess40">
                Tengo ganas de llorar continuamente, pero no puedo
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="holaque">11. Agitación</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p11" id="radioSuccess41" value="0">
              <label for="radioSuccess41">
                No estoy más inquieto o agitado que de costumbre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p11" id="radioSuccess42" value="1">
              <label for="radioSuccess42">
                Me siento más inquieto o agitado que de costumbre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p11" id="radioSuccess43" value="2">
              <label for="radioSuccess43">
                Estoy tan inquieto o agitado que me cuesta estarme quieto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p11" id="radioSuccess44" value="3">
              <label for="radioSuccess44">
                Estoy tan inquieto o agitado que tengo que estar continuamente moviéndome o haciendo algo
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">12. Pérdida de interés</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p12" id="radioSuccess45" value="0">
              <label for="radioSuccess45">
                No he perdido el interés por otra personas o actividades
              </label>
            </div>
            <div class="">
              <input type="radio" name="p12" id="radioSuccess46" value="1">
              <label for="radioSuccess46">
                Estoy menos interesado que antes por otras personas o actividades
              </label>
            </div>
            <div class="">
              <input type="radio" name="p12" id="radioSuccess47" value="2">
              <label for="radioSuccess47">
                He perdido la mayor parte de mi interés por los demás o por las cosas
              </label>
            </div>
            <div class="">
              <input type="radio" name="p12" id="radioSuccess48" value="3">
              <label for="radioSuccess48">
                Me resulta difícil interesarme en algo
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">13. Indecisión</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p13" id="radioSuccess49" value="0">
              <label for="radioSuccess49">
                Tomo decisiones más o menos como siempre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p13" id="radioSuccess50" value="1">
              <label for="radioSuccess50">
                Tomar decisiones me resulta más difícil que de costumbre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p13" id="radioSuccess51" value="2">
              <label for="radioSuccess51">
                Tengo mucha más dificultad en tomar decisiones que de constumbre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p13" id="radioSuccess52" value="3">
              <label for="radioSuccess52">
                Tengo problemas para tomar cualquier decisión
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">14. Inutilidad</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p14" id="radioSuccess53" value="0">
              <label for="radioSuccess53">
                No me siento inútil
              </label>
            </div>
            <div class="">
              <input type="radio" name="p14" id="radioSuccess54" value="1">
              <label for="radioSuccess54">
                No me considero tan valioso y útil como solía ser
              </label>
            </div>
            <div class="">
              <input type="radio" name="p14" id="radioSuccess55" value="2">
              <label for="radioSuccess55">
                Me siento inútil en comparación con otras personas
              </label>
            </div>
            <div class="">
              <input type="radio" name="p14" id="radioSuccess56" value="3">
              <label for="radioSuccess56">
                Me siento completamente inútil
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">15. Pérdida de energía</h4>
        
        
        
            <div class="">
              <input type="radio" name="p15" id="radioSuccess57" value="0">
              <label for="radioSuccess57">
                Tengo tanta energía como siempre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p15" id="radioSuccess58" value="1">
              <label for="radioSuccess58">
                Tengo menos energía de la que solía tener
              </label>
            </div>
            <div class="">
              <input type="radio" name="p15" id="radioSuccess59" value="2">
              <label for="radioSuccess59">
                No tengo suficiente energía para hacer muchas cosas
              </label>
            </div>
            <div class="">
              <input type="radio" name="p15" id="radioSuccess60" value="3">
              <label for="radioSuccess60">
                No tengo suficiente energía para hacer nada
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">16. Cambios en el patrón sueño</h4>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess61" value="0">
              <label for="radioSuccess61">
                No he experimentado ningún cambio en mi patrón de sueño
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess62" value="1">
              <label for="radioSuccess62">
                Duermo algo más de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess63" value="1">
              <label for="radioSuccess63">
                Duermo algo menos de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess64" value="2">
              <label for="radioSuccess64">
                Duermo mucho más de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess65" value="2">
              <label for="radioSuccess65">
                Duermo mucho menos de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess66" value="3">
              <label for="radioSuccess66">
                Duermo la mayor parte del día
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess67" value="3">
              <label for="radioSuccess67">
                Me levanto 1 o 2 horas más temprano y no puedo volver a dormirme
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">17. Irritabilidad</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p17" id="radioSuccess68" value="0">
              <label for="radioSuccess68">
                No estoy más irritable de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p17" id="radioSuccess69" value="1">
              <label for="radioSuccess69">
                Estoy más irritable de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p17" id="radioSuccess70" value="2">
              <label for="radioSuccess70">
                Estoy mucho más irritable de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p17" id="radioSuccess71" value="3">
              <label for="radioSuccess71">
                Estoy irritable continuamente
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">18. Cambios en el apetito</h4>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess72" value="0">
              <label for="radioSuccess72">
                No he experimentado ningún cambio en mi apetito
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess73" value="1">
              <label for="radioSuccess73">
                Mi apetito es algo menor de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess74" value="1">
              <label for="radioSuccess74">
                Mi apetito es algo mayor de lo habitual
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess75" value="2">
              <label for="radioSuccess75">
                Mi apetito es mucho menor que antes
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess76" value="2">
              <label for="radioSuccess76">
                Mi apetito es mucho mayor que antes
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess77" value="3">
              <label for="radioSuccess77">
                He perdido completamente el apetito
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess78" value="3">
              <label for="radioSuccess78">
                Tengo ganas de comer continuamente
              </label>
            </div>
          </div>
        
        
        
        
          <div class="pregunta">
            <h4 class="holaque">19. Dificultad de concentración</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p19" id="radioSuccess79" value="0">
              <label for="radioSuccess79">
                Puedo concentrarme tambien como siempre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p19" id="radioSuccess80" value="1">
              <label for="radioSuccess80">
                No puedo concentrarme tan bien como habitualmente
              </label>
            </div>
            <div class="">
              <input type="radio" name="p19" id="radioSuccess81" value="2">
              <label for="radioSuccess81">
                Me cuesta mantenerme concentrado en algo durante mucho tiempo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p19" id="radioSuccess82" value="3">
              <label for="radioSuccess82">
                No puedo concentrarme en nada
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">20. Cansancio o fatiga</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p20" id="radioSuccess83" value="0">
              <label for="radioSuccess83">
                No estoy más cansado o fatigado que de constumbre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p20" id="radioSuccess84" value="1">
              <label for="radioSuccess84">
                Me canso o fatiga más fácilmente que de costumbre
              </label>
            </div>
            <div class="">
              <input type="radio" name="p20" id="radioSuccess85" value="2">
              <label for="radioSuccess85">
                Estoy demasiado cansado o fatigado para hacer muchas cosas que antes solía hacer
              </label>
            </div>
            <div class="">
              <input type="radio" name="p20" id="radioSuccess86" value="3">
              <label for="radioSuccess86">
                Estoy demasiado cansado o fatigado para hacer la mayoría de las cosas que antes solía hacer
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="holaque">21. Pérdida de interés por el sexo</h4>
        
        
        
        
            <div class="">
              <input type="radio" name="p21" id="radioSuccess87" value="0">
              <label for="radioSuccess87">
                No he notado ningún cambio reciente en mi interés por el sexo
              </label>
            </div>
            <div class="">
              <input type="radio" name="p21" id="radioSuccess88" value="1">
              <label for="radioSuccess88">
                Estoy menos interesado por el sexo de lo que solía estar
              </label>
            </div>
            <div class="">
              <input type="radio" name="p21" id="radioSuccess89" value="2">
              <label for="radioSuccess89">
                Estoy mucho menos interesado por el sexo ahora
              </label>
            </div>
            <div class="">
              <input type="radio" name="p21" id="radioSuccess90" value="3">
              <label for="radioSuccess90">
                He perdido completamente el interés por el sexo
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

