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
    <title>ALUMNO | ANSIEDAD</title>
</head>
<body>
    <?php
        require("nav_alumno.html");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Ansiedad</h1>
        </div>
        
        <div class="ins">
            <h4>
                Instrucciones:
                Algunas expresiones que la gente usa para describirse aparecen abajo. Lea cada frase y llene el círculo numerado que
                indique cómo se siente ahora mismo, o sea, en este momento. No hay contestaciones buenas o malas. No emplee mucho
                tiempo en cada frase, pero trate de dar la respuesta que mejor describe sus sentimientos ahora.
            </h4>
        </div>
        <center><img
          src="imagenes/1.png"
          alt="Escala de evaluación">
        </center>
        <form name="form" action="guardar/guardar_ansiedad.php" method="POST">
          <div class="pregunta">
            <h4>1. Me siento calmado(a)</h4>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess1" value="4" >
              <label for="radioSuccess1">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess2" value="3" >
              <label for="radioSuccess2">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess3" value="2" >
              <label for="radioSuccess3">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p1" id="radioSuccess4" value="1" >
              <label for="radioSuccess4">
                Mucho
              </label>
            </div>
          </div>
          <div class="pregunta">
            <h4 class="">2. Me siento seguro(a)</h4>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess5" value="4" >
              <label for="radioSuccess5">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess6" value="3" >
              <label for="radioSuccess6">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess7" value="2" >
              <label for="radioSuccess7">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p2" id="radioSuccess8" value="1" >
              <label for="radioSuccess8">
                Mucho
              </label>
            </div>
          </div>
          <div class="pregunta">
            <h4 class="">3. Me siento tenso(a)</h4>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess9" value="1" >
              <label for="radioSuccess9">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess10" value="2" >
              <label for="radioSuccess10">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess11" value="3" >
              <label for="radioSuccess11">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p3" id="radioSuccess12" value="4" >
              <label for="radioSuccess12">
                Mucho
              </label>
            </div>
          </div>        
          <div class="pregunta">
            <h4 class="">4. Estoy contrariado(a)</h4>
        
            <div class="">
              <input type="radio" name="p4" id="radioSuccess13" value="1" >
              <label for="radioSuccess13">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p4" id="radioSuccess14" value="2" >
              <label for="radioSuccess14">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p4" id="radioSuccess15" value="3" >
              <label for="radioSuccess15">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p4" id="radioSuccess16" value="4" >
              <label for="radioSuccess16">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">5. Estoy a gusto</h4>
        
            <div class="">
              <input type="radio" name="p5" id="radioSuccess17" value="4" >
              <label for="radioSuccess17">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p5" id="radioSuccess18" value="3" >
              <label for="radioSuccess18">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p5" id="radioSuccess19" value="2" >
              <label for="radioSuccess19">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p5" id="radioSuccess20" value="1" >
              <label for="radioSuccess20">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">6. Me siento alterado(a)</h4>
        
        
            <div class="">
              <input type="radio" name="p6" id="radioSuccess21" value="1" >
              <label for="radioSuccess21">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p6" id="radioSuccess22" value="2" >
              <label for="radioSuccess22">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p6" id="radioSuccess23" value="3" >
              <label for="radioSuccess23">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p6" id="radioSuccess24" value="4" >
              <label for="radioSuccess24">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">7. Estoy preocupado(a) actualmente por algún posible contratiempo</h4>
        
            <div class="">
              <input type="radio" name="p7" id="radioSuccess25" value="1" >
              <label for="radioSuccess25">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p7" id="radioSuccess26" value="2" >
              <label for="radioSuccess26">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p7" id="radioSuccess27" value="3" >
              <label for="radioSuccess27">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p7" id="radioSuccess28" value="4" >
              <label for="radioSuccess28">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">8. Me siento descansado(a)</h4>
        
            <div class="">
              <input type="radio" name="p8" id="radioSuccess29" value="4" >
              <label for="radioSuccess29">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p8" id="radioSuccess30" value="3" >
              <label for="radioSuccess30">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p8" id="radioSuccess31" value="2" >
              <label for="radioSuccess31">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p8" id="radioSuccess32" value="1" >
              <label for="radioSuccess32">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">9. Me siento ansioso(a)</h4>
        
            <div class="">
              <input type="radio" name="p9" id="radioSuccess33" value="1" >
              <label for="radioSuccess33">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p9" id="radioSuccess34" value="2" >
              <label for="radioSuccess34">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p9" id="radioSuccess35" value="3" >
              <label for="radioSuccess35">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p9" id="radioSuccess36" value="4" >
              <label for="radioSuccess36">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">10. Me siento cómodo(a)</h4>
        
            <div class="">
              <input type="radio" name="p10" id="radioSuccess37" value="4" >
              <label for="radioSuccess37">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p10" id="radioSuccess38" value="3" >
              <label for="radioSuccess38">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p10" id="radioSuccess39" value="2" >
              <label for="radioSuccess39">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p10" id="radioSuccess40" value="1" >
              <label for="radioSuccess40">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">11. Me siento con confianza en mí misma(a)</h4>
        
            <div class="">
              <input type="radio" name="p11" id="radioSuccess41" value="4" >
              <label for="radioSuccess41">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p11" id="radioSuccess42" value="3" >
              <label for="radioSuccess42">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p11" id="radioSuccess43" value="2" >
              <label for="radioSuccess43">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p11" id="radioSuccess44" value="1" >
              <label for="radioSuccess44">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">12. Me siento nervioso(a)</h4>
        
            <div class="">
              <input type="radio" name="p12" id="radioSuccess45" value="1" >
              <label for="radioSuccess45">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p12" id="radioSuccess46" value="2" >
              <label for="radioSuccess46">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p12" id="radioSuccess47" value="3" >
              <label for="radioSuccess47">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p12" id="radioSuccess48" value="4" >
              <label for="radioSuccess48">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">13. Me siento agitado(a)</h4>
        
            <div class="">
              <input type="radio" name="p13" id="radioSuccess49" value="1" >
              <label for="radioSuccess49">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p13" id="radioSuccess50" value="2" >
              <label for="radioSuccess50">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p13" id="radioSuccess51" value="3" >
              <label for="radioSuccess51">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p13" id="radioSuccess52" value="4" >
              <label for="radioSuccess52">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">14. Me siento "a punto de explotar"</h4>
        
            <div class="">
              <input type="radio" name="p14" id="radioSuccess53" value="1" >
              <label for="radioSuccess53">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p14" id="radioSuccess54" value="2" >
              <label for="radioSuccess54">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p14" id="radioSuccess55" value="3" >
              <label for="radioSuccess55">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p14" id="radioSuccess56" value="4" >
              <label for="radioSuccess56">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">15. Me siento reposado(a)</h4>
        
            <div class="">
              <input type="radio" name="p15" id="radioSuccess57" value="4" >
              <label for="radioSuccess57">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p15" id="radioSuccess58" value="3" >
              <label for="radioSuccess58">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p15" id="radioSuccess59" value="2" >
              <label for="radioSuccess59">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p15" id="radioSuccess60" value="1" >
              <label for="radioSuccess60">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">16. Me siento satisfecho(a)</h4>
        
            <div class="">
              <input type="radio" name="p16" id="radioSuccess61" value="4" >
              <label for="radioSuccess61">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess62" value="3" >
              <label for="radioSuccess62">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess63" value="2" >
              <label for="radioSuccess63">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p16" id="radioSuccess64" value="1" >
              <label for="radioSuccess64">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">17. Estoy preocupado</h4>
        
            <div class="">
              <input type="radio" name="p17" id="radioSuccess65" value="1" >
              <label for="radioSuccess65">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p17" id="radioSuccess66" value="2" >
              <label for="radioSuccess66">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p17" id="radioSuccess67" value="3" >
              <label for="radioSuccess67">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p17" id="radioSuccess68" value="4" >
              <label for="radioSuccess68">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">18. Me siento muy agitado(a) y aturdido(a)</h4>
        
            <div class="">
              <input type="radio" name="p18" id="radioSuccess170" value="1" >
              <label for="radioSuccess170">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess171" value="2" >
              <label for="radioSuccess171">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess172" value="3" >
              <label for="radioSuccess172">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p18" id="radioSuccess173" value="4" >
              <label for="radioSuccess173">
                Mucho
              </label>
            </div>
          </div>
        
        
          <div class="pregunta">
            <h4 class="">19. Me siento alegre</h4>
        
            <div class="">
              <input type="radio" name="p19" id="radioSuccess69" value="4" >
              <label for="radioSuccess69">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p19" id="radioSuccess70" value="3" >
              <label for="radioSuccess70">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p19" id="radioSuccess71" value="2" >
              <label for="radioSuccess71">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p19" id="radioSuccess72" value="1" >
              <label for="radioSuccess72">
                Mucho
              </label>
            </div>
          </div>
        
        
        
          <div class="pregunta">
            <h4 class="">20. Me siento bien</h4>
        
            <div class="">
              <input type="radio" name="p20" id="radioSuccess73" value="4" >
              <label for="radioSuccess73">
                No en lo absoluto
              </label>
            </div>
            <div class="">
              <input type="radio" name="p20" id="radioSuccess74" value="3" >
              <label for="radioSuccess74">
                Un poco
              </label>
            </div>
            <div class="">
              <input type="radio" name="p20" id="radioSuccess75" value="2" >
              <label for="radioSuccess75">
                Bastante
              </label>
            </div>
            <div class="">
              <input type="radio" name="p20" id="radioSuccess76" value="1" >
              <label for="radioSuccess76">
                Mucho
              </label>
            </div>
            </div>
        
        
            <div class="pregunta">
              <b>Instrucciones:</b>
              Algunas expresiones que la gente usa para describirse aparecen abajo. Lea cada frase y llene el círculo numerado
              que
              indique cómo se siente generalmente. No hay contestaciones buenas o malas. No emplee mucho tiempo en cada frase,
              pero
              trate de dar la respuesta que mejor describa cómo se siente generalmente.
            </div>
            <center><img
                src="imagenes/2.png"
                alt="Escala de evaluación">
            </center>
        
        
            <div class="pregunta">
              <h4 class="">21. Me siento bien</h4>
        
              <div class="">
                <input type="radio" name="p21" id="radioSuccess77" value="4" >
                <label for="radioSuccess77">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p21" id="radioSuccess78" value="3" >
                <label for="radioSuccess78">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p21" id="radioSuccess79" value="2" >
                <label for="radioSuccess79">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p21" id="radioSuccess80" value="1" >
                <label for="radioSuccess80">
                  Casi siempre
                </label>
              </div>
            </div>
        
            <div class="pregunta">
              <h4 class="">22. Me canso rápidamente</h4>
        
              <div class="">
                <input type="radio" name="p22" id="radioSuccess81" value="1" >
                <label for="radioSuccess81">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p22" id="radioSuccess82" value="2" >
                <label for="radioSuccess82">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p22" id="radioSuccess83" value="3" >
                <label for="radioSuccess83">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p22" id="radioSuccess84" value="4" >
                <label for="radioSuccess84">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">23. Siento ganas de llorar</h4>
        
              <div class="">
                <input type="radio" name="p23" id="radioSuccess85" value="1" >
                <label for="radioSuccess85">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p23" id="radioSuccess86" value="2" >
                <label for="radioSuccess86">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p23" id="radioSuccess87" value="3" >
                <label for="radioSuccess87">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p23" id="radioSuccess88" value="4" >
                <label for="radioSuccess88">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">24. Quisiera ser feliz como otros parecen serlo</h4>
        
              <div class="">
                <input type="radio" name="p24" id="radioSuccess89" value="1" >
                <label for="radioSuccess89">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p24" id="radioSuccess90" value="2" >
                <label for="radioSuccess90">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p24" id="radioSuccess91" value="3" >
                <label for="radioSuccess91">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p24" id="radioSuccess92" value="4" >
                <label for="radioSuccess92">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">25. Pierdo oportunidades por no poder decidirme rápidamente</h4>
        
              <div class="">
                <input type="radio" name="p25" id="radioSuccess93" value="1" >
                <label for="radioSuccess93">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p25" id="radioSuccess94" value="2" >
                <label for="radioSuccess94">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p25" id="radioSuccess95" value="3" >
                <label for="radioSuccess95">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p25" id="radioSuccess96" value="4" >
                <label for="radioSuccess96">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">26. Se siento descansando(a)</h4>
        
              <div class="">
                <input type="radio" name="p26" id="radioSuccess97" value="4" >
                <label for="radioSuccess97">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p26" id="radioSuccess98" value="3" >
                <label for="radioSuccess98">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p26" id="radioSuccess99" value="2" >
                <label for="radioSuccess99">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p26" id="radioSuccess100" value="1" >
                <label for="radioSuccess100">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">27. Soy una persona "tranquila, serena y sosegada"</h4>
        
              <div class="">
                <input type="radio" name="p27" id="radioSuccess101" value="4" >
                <label for="radioSuccess101">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p27" id="radioSuccess102" value="3" >
                <label for="radioSuccess102">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p27" id="radioSuccess103" value="2" >
                <label for="radioSuccess103">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p27" id="radioSuccess104" value="1" >
                <label for="radioSuccess104">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">28. Siento que las dificultades se me amontonan al punto de no poder superarlas</h4>
        
              <div class="">
                <input type="radio" name="p28" id="radioSuccess105" value="1" >
                <label for="radioSuccess105">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p28" id="radioSuccess106" value="2" >
                <label for="radioSuccess106">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p28" id="radioSuccess107" value="3" >
                <label for="radioSuccess107">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p28" id="radioSuccess108" value="4" >
                <label for="radioSuccess108">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">29. Me preocupa demasiado por cosas sin importancia</h4>
        
              <div class="">
                <input type="radio" name="p29" id="radioSuccess109" value="1" >
                <label for="radioSuccess109">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p29" id="radioSuccess110" value="2" >
                <label for="radioSuccess110">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p29" id="radioSuccess111" value="3" >
                <label for="radioSuccess111">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p29" id="radioSuccess112" value="4" >
                <label for="radioSuccess112">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">30. Soy feliz</h4>
        
              <div class="">
                <input type="radio" name="p30" id="radioSuccess113" value="4" >
                <label for="radioSuccess113">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p30" id="radioSuccess114" value="3" >
                <label for="radioSuccess114">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p30" id="radioSuccess115" value="2" >
                <label for="radioSuccess115">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p30" id="radioSuccess116" value="1" >
                <label for="radioSuccess116">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">31. Tomo las cosas muy a pecho</h4>
        
              <div class="">
                <input type="radio" name="p31" id="radioSuccess117" value="1" >
                <label for="radioSuccess117">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p31" id="radioSuccess118" value="2" >
                <label for="radioSuccess118">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p31" id="radioSuccess119" value="3" >
                <label for="radioSuccess119">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p31" id="radioSuccess120" value="4" >
                <label for="radioSuccess120">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">32. Me falta confianza en mí mismo</h4>
        
              <div class="">
                <input type="radio" name="p32" id="radioSuccess121" value="1" >
                <label for="radioSuccess121">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p32" id="radioSuccess122" value="2" >
                <label for="radioSuccess122">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p32" id="radioSuccess123" value="3" >
                <label for="radioSuccess123">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p32" id="radioSuccess124" value="4" >
                <label for="radioSuccess124">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">33. Me siento seguro(a)</h4>
        
              <div class="">
                <input type="radio" name="p33" id="radioSuccess125" value="4" > 
                <label for="radioSuccess125">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p33" id="radioSuccess126" value="3" >
                <label for="radioSuccess126">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p33" id="radioSuccess127" value="2" >
                <label for="radioSuccess127">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p33" id="radioSuccess128" value="1" >
                <label for="radioSuccess128">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">34. Procuro evitar enfrentarme a las crisis y dificultades</h4>
        
              <div class="">
                <input type="radio" name="p34" id="radioSuccess129" value="1" >
                <label for="radioSuccess129">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p34" id="radioSuccess130" value="2" >
                <label for="radioSuccess130">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p34" id="radioSuccess131" value="3" >
                <label for="radioSuccess131">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p34" id="radioSuccess132" value="4" >
                <label for="radioSuccess132">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
            <div class="pregunta">
              <h4 class="">35. Me siento melancólico(a)</h4>
        
              <div class="">
                <input type="radio" name="p35" id="radioSuccess133" value="1" >
                <label for="radioSuccess133">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p35" id="radioSuccess134" value="2" >
                <label for="radioSuccess134">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p35" id="radioSuccess135" value="3" >
                <label for="radioSuccess135">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p35" id="radioSuccess136" value="4" >
                <label for="radioSuccess136">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">36. Me siento satisfecho(a)</h4>
        
              <div class="">
                <input type="radio" name="p36" id="radioSuccess137" value="4" >
                <label for="radioSuccess137">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p36" id="radioSuccess138" value="3" >
                <label for="radioSuccess138">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p36" id="radioSuccess139" value="2" >
                <label for="radioSuccess139">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p36" id="radioSuccess140" value="1" >
                <label for="radioSuccess140">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">37. Algunas ideas poco importantes pasan por mi mente y me molestan</h4>
              <div class="">
                <input type="radio" name="p37" id="radioSuccess141" value="1" >
                <label for="radioSuccess141">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p37" id="radioSuccess142" value="2" >
                <label for="radioSuccess142">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p37" id="radioSuccess143" value="3" >
                <label for="radioSuccess143">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p37" id="radioSuccess144" value="4" >
                <label for="radioSuccess144">
                  Casi siempre
                </label>
              </div>
            </div>
        
        
        
            <div class="pregunta">
              <h4 class="">38. Me afectan tanto los desengaños que no me los puedo quitar de la cabeza</h4>
              <div class="">
                <input type="radio" name="p38" id="radioSuccess145" value="1" >
                <label for="radioSuccess145">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p38" id="radioSuccess146" value="2" >
                <label for="radioSuccess146">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p38" id="radioSuccess147" value="3" >
                <label for="radioSuccess147">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p38" id="radioSuccess148" value="4" >
                <label for="radioSuccess148">
                  Casi siempre
                </label>
              </div>
            </div>
            <div class="pregunta">
              <h4 class="">39. Soy una persona estable</h4>
        
              <div class="">
                <input type="radio" name="p39" id="radioSuccess149" value="4" >
                <label for="radioSuccess149">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p39" id="radioSuccess150" value="3" >
                <label for="radioSuccess150">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p39" id="radioSuccess151" value="2" >
                <label for="radioSuccess151">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p39" id="radioSuccess152" value="1" >
                <label for="radioSuccess152">
                  Casi siempre
                </label>
              </div>
            </div>
        
            <div class="pregunta">
              <h4 class="">40. Cuando pienso en mis preocupaciones actuales me pongo tenso(a) y alterado(a)</h4>
              <div class="">
                <input type="radio" name="p40" id="radioSuccess153" value="1" >
                <label for="radioSuccess153">
                  Casi nunca
                </label>
              </div>
              <div class="">
                <input type="radio" name="p40" id="radioSuccess154" value="2" >
                <label for="radioSuccess154">
                  Algunas veces
                </label>
              </div>
              <div class="">
                <input type="radio" name="p40" id="radioSuccess155" value="3" >
                <label for="radioSuccess155">
                  Frecuentemente
                </label>
              </div>
              <div class="">
                <input type="radio" name="p40" id="radioSuccess156" value="4" >
                <label for="radioSuccess156">
                  Casi siempre
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

