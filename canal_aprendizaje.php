<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo.png">
    <title>ALUMNO | CANAL</title>
</head>
<body>
    <?php
        require("nav_alumno.html");
    ?>

    <section class="home-section">
        <div class="text">
            <h1>Canal de Aprendizaje</h1>
        </div>
        
        <div class="ins">
            <h4>
                Instrucciones:
                Lea cuidadosamente cada oración y piense de qué manera se aplica a usted. En cada línea 
                escriba el número que mejor describe su reacción a cada oración. 
            </h4>
        </div>
        <center><img
                src="imagenes/escala.png"
                alt="Escala de evaluación" width="500px">
            </center>
        <form name="form" action="guardar/guardar_canal.php" method="POST">

        <div class="pregunta">
          <h4 class="">1. Puedo recordar algo mejor si lo escribo</h4>
          <div class="">
            <input type="radio" name="p1" id="radioSuccess1" value="1">
            <label for="radioSuccess1">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p1" id="radioSuccess2" value="2">
            <label for="radioSuccess2">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p1" id="radioSuccess3" value="3">
            <label for="radioSuccess3">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p1" id="radioSuccess4" value="4">
            <label for="radioSuccess4">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p1" id="radioSuccess5" value="5">
            <label for="radioSuccess5">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">2. Al leer, oigo las palabras en mi cabeza o leo en voz alta</h4>
          <div class="">
            <input type="radio" name="p2" id="radioSuccess6" value="1">
            <label for="radioSuccess6">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p2" id="radioSuccess7" value="2">
            <label for="radioSuccess7">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p2" id="radioSuccess8" value="3">
            <label for="radioSuccess8">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p2" id="radioSuccess9" value="4">
            <label for="radioSuccess9">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p2" id="radioSuccess10" value="5">
            <label for="radioSuccess10">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">3. Necesito hablar las cosas para entenderlas mejor</h4>
          <div class="">
            <input type="radio" name="p3" id="radioSuccess11" value="1">
            <label for="radioSuccess11">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p3" id="radioSuccess12" value="2">
            <label for="radioSuccess12">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p3" id="radioSuccess13" value="3">
            <label for="radioSuccess13">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p3" id="radioSuccess14" value="4">
            <label for="radioSuccess14">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p3" id="radioSuccess15" value="5">
            <label for="radioSuccess15">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">4. No me gusta leer o escuchar instrucciones, prefiero simplemente comenzar a hacer las cosas</h4>
          <div class="">
            <input type="radio" name="p4" id="radioSuccess16" value="1">
            <label for="radioSuccess16">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p4" id="radioSuccess17" value="2">
            <label for="radioSuccess17">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p4" id="radioSuccess18" value="3">
            <label for="radioSuccess18">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p4" id="radioSuccess19" value="4">
            <label for="radioSuccess19">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p4" id="radioSuccess20" value="5">
            <label for="radioSuccess20">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">5. Puedo visualizar imágenes en mi cabeza</h4>
          <div class="">
            <input type="radio" name="p5" id="radioSuccess21" value="1">
            <label for="radioSuccess21">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p5" id="radioSuccess22" value="2">
            <label for="radioSuccess22">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p5" id="radioSuccess23" value="3">
            <label for="radioSuccess23">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p5" id="radioSuccess24" value="4">
            <label for="radioSuccess24">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p5" id="radioSuccess25" value="5">
            <label for="radioSuccess25">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">6. Puedo estudiar mejor si escucho música</h4>
          <div class="">
            <input type="radio" name="p6" id="radioSuccess26" value="1">
            <label for="radioSuccess26">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p6" id="radioSuccess27" value="2">
            <label for="radioSuccess27">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p6" id="radioSuccess28" value="3">
            <label for="radioSuccess28">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p6" id="radioSuccess29" value="4">
            <label for="radioSuccess29">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p6" id="radioSuccess30" value="5">
            <label for="radioSuccess30">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">7. Necesito recreos frecuentes cuando estudio</h4>
          <div class="">
            <input type="radio" name="p7" id="radioSuccess31" value="1">
            <label for="radioSuccess31">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p7" id="radioSuccess32" value="2">
            <label for="radioSuccess32">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p7" id="radioSuccess33" value="3">
            <label for="radioSuccess33">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p7" id="radioSuccess34" value="4">
            <label for="radioSuccess34">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p7" id="radioSuccess35" value="5">
            <label for="radioSuccess35">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">8. Pienso mejor cuando tengo la libertad de moverme, estar sentado detrás de un escritorio no es para mí</h4>
          <div class="">
            <input type="radio" name="p8" id="radioSuccess36" value="1">
            <label for="radioSuccess36">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p8" id="radioSuccess37" value="2">
            <label for="radioSuccess37">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p8" id="radioSuccess38" value="3">
            <label for="radioSuccess38">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p8" id="radioSuccess39" value="4">
            <label for="radioSuccess39">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p8" id="radioSuccess40" value="5">
            <label for="radioSuccess40">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">9. Tomo muchas notas de lo que leo y escucho</h4>
          <div class="">
            <input type="radio" name="p9" id="radioSuccess41" value="1">
            <label for="radioSuccess41">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p9" id="radioSuccess42" value="2">
            <label for="radioSuccess42">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p9" id="radioSuccess43" value="3">
            <label for="radioSuccess43">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p9" id="radioSuccess44" value="4">
            <label for="radioSuccess44">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p9" id="radioSuccess45" value="5">
            <label for="radioSuccess45">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">10. Me ayuda MIRAR a la persona que está hablando. Me mantiene enfocado</h4>
          <div class="">
            <input type="radio" name="p10" id="radioSuccess46" value="1">
            <label for="radioSuccess46">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p10" id="radioSuccess47" value="2">
            <label for="radioSuccess47">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p10" id="radioSuccess48" value="3">
            <label for="radioSuccess48">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p10" id="radioSuccess49" value="4">
            <label for="radioSuccess49">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p10" id="radioSuccess50" value="5">
            <label for="radioSuccess50">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">11. Se me hace difícil entender lo que una persona está diciendo si hay ruidos alrededor</h4>
          <div class="">
            <input type="radio" name="p11" id="radioSuccess51" value="1">
            <label for="radioSuccess51">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p11" id="radioSuccess52" value="2">
            <label for="radioSuccess52">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p11" id="radioSuccess53" value="3">
            <label for="radioSuccess53">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p11" id="radioSuccess54" value="4">
            <label for="radioSuccess54">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p11" id="radioSuccess55" value="5">
            <label for="radioSuccess55">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">12. Prefiero que alguien me diga cómo tengo que hacer las cosas que leer las instrucciones</h4>
          <div class="">
            <input type="radio" name="p12" id="radioSuccess56" value="1">
            <label for="radioSuccess56">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p12" id="radioSuccess57" value="2">
            <label for="radioSuccess57">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p12" id="radioSuccess58" value="3">
            <label for="radioSuccess58">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p12" id="radioSuccess59" value="4">
            <label for="radioSuccess59">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p12" id="radioSuccess60" value="5">
            <label for="radioSuccess60">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">13. Prefiero escuchar una conferencia o una grabación a leer un libro</h4>
          <div class="">
            <input type="radio" name="p13" id="radioSuccess61" value="1">
            <label for="radioSuccess61">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p13" id="radioSuccess62" value="2">
            <label for="radioSuccess62">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p13" id="radioSuccess63" value="3">
            <label for="radioSuccess63">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p13" id="radioSuccess64" value="4">
            <label for="radioSuccess64">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p13" id="radioSuccess65" value="5">
            <label for="radioSuccess65">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">14. Cuando no puedo pensar en una palabra específica, uso mis manos y llamo al objeto “coso”</h4>
          <div class="">
            <input type="radio" name="p14" id="radioSuccess66" value="1">
            <label for="radioSuccess66">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p14" id="radioSuccess67" value="2">
            <label for="radioSuccess67">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p14" id="radioSuccess68" value="3">
            <label for="radioSuccess68">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p14" id="radioSuccess69" value="4">
            <label for="radioSuccess69">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p14" id="radioSuccess70" value="5">
            <label for="radioSuccess70">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">15. Puedo seguir fácilmente a una persona que está hablando aunque mi cabeza esté hacia abajo o me encuentre mirando por una ventana</h4>
          <div class="">
            <input type="radio" name="p15" id="radioSuccess71" value="1">
            <label for="radioSuccess71">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p15" id="radioSuccess72" value="2">
            <label for="radioSuccess72">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p15" id="radioSuccess73" value="3">
            <label for="radioSuccess73">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p15" id="radioSuccess74" value="4">
            <label for="radioSuccess74">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p15" id="radioSuccess75" value="5">
            <label for="radioSuccess75">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">16. Es más fácil para mí hacer un trabajo en un lugar tranquilo</h4>
          <div class="">
            <input type="radio" name="p16" id="radioSuccess76" value="1">
            <label for="radioSuccess76">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p16" id="radioSuccess77" value="2">
            <label for="radioSuccess77">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p16" id="radioSuccess78" value="3">
            <label for="radioSuccess78">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p16" id="radioSuccess79" value="4">
            <label for="radioSuccess79">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p16" id="radioSuccess80" value="5">
            <label for="radioSuccess80">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">17. Me resulta fácil entender mapas, tablas y gráficos</h4>
          <div class="">
            <input type="radio" name="p17" id="radioSuccess81" value="1">
            <label for="radioSuccess81">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p17" id="radioSuccess82" value="2">
            <label for="radioSuccess82">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p17" id="radioSuccess83" value="3">
            <label for="radioSuccess83">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p17" id="radioSuccess84" value="4">
            <label for="radioSuccess84">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p17" id="radioSuccess85" value="5">
            <label for="radioSuccess85">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">18. Cuando comienzo un artículo o un libro, prefiero espiar la última página</h4>
          <div class="">
            <input type="radio" name="p18" id="radioSuccess86" value="1">
            <label for="radioSuccess86">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p18" id="radioSuccess87" value="2">
            <label for="radioSuccess87">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p18" id="radioSuccess8889" value="3">
            <label for="radioSuccess8889">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p18" id="radioSuccess89" value="4">
            <label for="radioSuccess89">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p18" id="radioSuccess100" value="5">
            <label for="radioSuccess100">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">19. Recuerdo mejor lo que la gente dice que su aspecto</h4>
          <div class="">
            <input type="radio" name="p19" id="radioSuccess101" value="1">
            <label for="radioSuccess101">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p19" id="radioSuccess102" value="2">
            <label for="radioSuccess102">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p19" id="radioSuccess103" value="3">
            <label for="radioSuccess103">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p19" id="radioSuccess104" value="4">
            <label for="radioSuccess104">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p19" id="radioSuccess105" value="5">
            <label for="radioSuccess105">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">20. Recuerdo mejor si estudio en voz alta con alguien</h4>
          <div class="">
            <input type="radio" name="p20" id="radioSuccess106" value="1">
            <label for="radioSuccess106">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p20" id="radioSuccess107" value="2">
            <label for="radioSuccess107">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p20" id="radioSuccess108" value="3">
            <label for="radioSuccess108">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p20" id="radioSuccess109" value="4">
            <label for="radioSuccess109">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p20" id="radioSuccess110" value="5">
            <label for="radioSuccess110">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">21. Tomo notas, pero nunca vuelvo a releerlas</h4>
          <div class="">
            <input type="radio" name="p21" id="radioSuccess111" value="1">
            <label for="radioSuccess111">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p21" id="radioSuccess112" value="2">
            <label for="radioSuccess112">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p21" id="radioSuccess113" value="3">
            <label for="radioSuccess113">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p21" id="radioSuccess114" value="4">
            <label for="radioSuccess114">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p21" id="radioSuccess115" value="5">
            <label for="radioSuccess115">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">22. Cuando estoy concentrado leyendo o escribiendo, la radio me molesta</h4>
          <div class="">
            <input type="radio" name="p22" id="radioSuccess116" value="1">
            <label for="radioSuccess116">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p22" id="radioSuccess117" value="2">
            <label for="radioSuccess117">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p22" id="radioSuccess118" value="3">
            <label for="radioSuccess118">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p22" id="radioSuccess119" value="4">
            <label for="radioSuccess119">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p22" id="radioSuccess120" value="5">
            <label for="radioSuccess120">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">23. Me resulta difícil crear imágenes en mi cabeza</h4>
          <div class="">
            <input type="radio" name="p23" id="radioSuccess121" value="1">
            <label for="radioSuccess121">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p23" id="radioSuccess122" value="2">
            <label for="radioSuccess122">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p23" id="radioSuccess123" value="3">
            <label for="radioSuccess123">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p23" id="radioSuccess124" value="4">
            <label for="radioSuccess124">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p23" id="radioSuccess125" value="5">
            <label for="radioSuccess125">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">24. Me resulta útil decir en voz alta las tareas que tengo para hacer</h4>
          <div class="">
            <input type="radio" name="p24" id="radioSuccess126" value="1">
            <label for="radioSuccess126">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p24" id="radioSuccess127" value="2">
            <label for="radioSuccess127">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p24" id="radioSuccess128" value="3">
            <label for="radioSuccess128">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p24" id="radioSuccess129" value="4">
            <label for="radioSuccess129">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p24" id="radioSuccess130" value="5">
            <label for="radioSuccess130">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">25. Mi cuaderno y mi escritorio pueden verse un desastre, pero sé exactamente dónde está cada cosa</h4>
          <div class="">
            <input type="radio" name="p25" id="radioSuccess131" value="1">
            <label for="radioSuccess131">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p25" id="radioSuccess132" value="2">
            <label for="radioSuccess132">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p25" id="radioSuccess133" value="3">
            <label for="radioSuccess133">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p25" id="radioSuccess134" value="4">
            <label for="radioSuccess134">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p25" id="radioSuccess135" value="5">
            <label for="radioSuccess135">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">26. Cuando estoy en un examen, puedo “ver” la página en el libro de textos y la respuesta</h4>
          <div class="">
            <input type="radio" name="p26" id="radioSuccess136" value="1">
            <label for="radioSuccess136">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p26" id="radioSuccess137" value="2">
            <label for="radioSuccess137">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p26" id="radioSuccess138" value="3">
            <label for="radioSuccess138">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p26" id="radioSuccess139" value="4">
            <label for="radioSuccess139">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p26" id="radioSuccess140" value="5">
            <label for="radioSuccess140">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">27. No puedo recordar una broma lo suficiente para contarla luego</h4>
          <div class="">
            <input type="radio" name="p27" id="radioSuccess141" value="1">
            <label for="radioSuccess141">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p27" id="radioSuccess142" value="2">
            <label for="radioSuccess142">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p27" id="radioSuccess143" value="3">
            <label for="radioSuccess143">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p27" id="radioSuccess144" value="4">
            <label for="radioSuccess144">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p27" id="radioSuccess145" value="5">
            <label for="radioSuccess145">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">28. Al aprender algo nuevo, prefiero escuchar la información, luego leer y luego hacerlo</h4>
          <div class="">
            <input type="radio" name="p28" id="radioSuccess146" value="1">
            <label for="radioSuccess146">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p28" id="radioSuccess147" value="2">
            <label for="radioSuccess147">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p28" id="radioSuccess148" value="3">
            <label for="radioSuccess148">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p28" id="radioSuccess149" value="4">
            <label for="radioSuccess149">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p28" id="radioSuccess150" value="5">
            <label for="radioSuccess150">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">29. Me gusta completar una tarea antes de comenzar otra</h4>
          <div class="">
            <input type="radio" name="p29" id="radioSuccess151" value="1">
            <label for="radioSuccess151">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p29" id="radioSuccess152" value="2">
            <label for="radioSuccess152">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p29" id="radioSuccess153" value="3">
            <label for="radioSuccess153">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p29" id="radioSuccess154" value="4">
            <label for="radioSuccess154">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p29" id="radioSuccess155" value="5">
            <label for="radioSuccess155">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">30. Uso mis dedos para contar y muevo los labios cuando leo</h4>
          <div class="">
            <input type="radio" name="p30" id="radioSuccess156" value="1">
            <label for="radioSuccess156">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p30" id="radioSuccess157" value="2">
            <label for="radioSuccess157">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p30" id="radioSuccess158" value="3">
            <label for="radioSuccess158">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p30" id="radioSuccess159" value="4">
            <label for="radioSuccess159">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p30" id="radioSuccess160" value="5">
            <label for="radioSuccess160">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">31. No me gusta releer mi trabajo</h4>
          <div class="">
            <input type="radio" name="p31" id="radioSuccess161" value="1">
            <label for="radioSuccess161">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p31" id="radioSuccess162" value="2">
            <label for="radioSuccess162">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p31" id="radioSuccess163" value="3">
            <label for="radioSuccess163">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p31" id="radioSuccess164" value="4">
            <label for="radioSuccess164">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p31" id="radioSuccess165" value="5">
            <label for="radioSuccess165">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">32. Cuando estoy tratando de recordar algo nuevo, por ejemplo, un número de teléfono, me ayuda formarme una imagen mental para lograrlo</h4>
          <div class="">
            <input type="radio" name="p32" id="radioSuccess166" value="1">
            <label for="radioSuccess166">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p32" id="radioSuccess167" value="2">
            <label for="radioSuccess167">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p32" id="radioSuccess168" value="3">
            <label for="radioSuccess168">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p32" id="radioSuccess169" value="4">
            <label for="radioSuccess169">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p32" id="radioSuccess170" value="5">
            <label for="radioSuccess170">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">33. Para obtener una nota extra, prefiero grabar un informe a escribirlo</h4>
          <div class="">
            <input type="radio" name="p33" id="radioSuccess171" value="1">
            <label for="radioSuccess171">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p33" id="radioSuccess172" value="2">
            <label for="radioSuccess172">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p33" id="radioSuccess173" value="3">
            <label for="radioSuccess173">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p33" id="radioSuccess174" value="4">
            <label for="radioSuccess174">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p33" id="radioSuccess175" value="5">
            <label for="radioSuccess175">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">34. Fantaseo en clase</h4>
          <div class="">
            <input type="radio" name="p34" id="radioSuccess176" value="1">
            <label for="radioSuccess176">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p34" id="radioSuccess177" value="2">
            <label for="radioSuccess177">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p34" id="radioSuccess178" value="3">
            <label for="radioSuccess178">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p34" id="radioSuccess179" value="4">
            <label for="radioSuccess179">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p34" id="radioSuccess180" value="5">
            <label for="radioSuccess180">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">35. Para obtener una calificación extra, prefiero crear un proyecto a escribir un informe</h4>
          <div class="">
            <input type="radio" name="p35" id="radioSuccess181" value="1">
            <label for="radioSuccess181">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p35" id="radioSuccess182" value="2">
            <label for="radioSuccess182">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p35" id="radioSuccess183" value="3">
            <label for="radioSuccess183">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p35" id="radioSuccess184" value="4">
            <label for="radioSuccess184">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p35" id="radioSuccess185" value="5">
            <label for="radioSuccess185">
              Casi siempre
            </label>
          </div>
        </div>
        <div class="pregunta">
          <h4 class="">36. Cuando tengo una gran idea, debo escribirla inmediatamente, o la olvido con facilidad</h4>
          <div class="">
            <input type="radio" name="p36" id="radioSuccess186" value="1">
            <label for="radioSuccess186">
              Casi nunca
            </label>
          </div>
          <div class="">
            <input type="radio" name="p36" id="radioSuccess187" value="2">
            <label for="radioSuccess187">
              Rara vez
            </label>
          </div>
          <div class="">
            <input type="radio" name="p36" id="radioSuccess188" value="3">
            <label for="radioSuccess188">
              A veces
            </label>
          </div>
          <div class="">
            <input type="radio" name="p36" id="radioSuccess189" value="4">
            <label for="radioSuccess189">
              Frecuentemente
            </label>
          </div>
          <div class="">
            <input type="radio" name="p36" id="radioSuccess190" value="5">
            <label for="radioSuccess190">
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

