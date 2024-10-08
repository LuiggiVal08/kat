<!-- <?php
        // include_once 'src/views/components/topPage.php'
        ?> -->
<div x-data="{ openModal:false }" class="relative min-h-screen bg-white p-16 sm:p-10">
    <!-- <h1>El computador y sus partes</h1> -->
    <?php
    include_once 'src/views/pages/lessons/computer/warnig.php';
    ?>
    <div class="container mx-auto flex flex-col lg:flex-row gap-6 justify-between relative max-lg:divide-y-2 lg:divide-x-2 > * ">
        <div class="">
            <section class="max-w-[850px]">
                <img src="/images/lessons/computador.jpg" alt="computador" class="max-w-[340px] float-end md:float-right ml-5 rounded-lg mask-image__radial-gradient pb-5">
                <h2 class=" text-center sm:text-start font-sketchup text-7xl  mb-5"><?= htmlspecialchars($title) ?></h2>
                Una computadora es un dispositivo electrónico capaz de procesar, almacenar y manipular datos mediante la ejecución de programas y algoritmos. Sus componentes internos incluyen la CPU para procesamiento, la memoria RAM para almacenamiento temporal y el disco duro para almacenamiento permanente. Los periféricos externos incluyen dispositivos de entrada como el teclado y el ratón, y dispositivos de salida como el monitor y la impresora.
            </section>
            <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">
            <section class="max-w-[900px] mt-10 space-y-5">
                <h2 class="sm:text-center text-start font-sketchup text-7xl ">
                    Viaje al Interior Partes Internas
                </h2>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/placa-base.png" alt="" class="max-w-[250px] float-end md:float-left mr-5 rounded-lg mask-image__radial-gradient pb-5">
                    <h3 class="font-semibold text-xl">2.1 La Placa Base: El esqueleto de la computadora</h3>
                    <p>La placa base, también conocida como placa madre, es el componente principal de una computadora que proporciona la conexión física y eléctrica entre otros componentes, como el procesador, la memoria, las tarjetas de expansión y los dispositivos de entrada/salida.</p>
                </article>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/procesador.jpg" alt="" class="max-w-[200px] float-end md:float-right ml-5 rounded-lg mask-image__radial-gradient ">
                    <h3 class="font-semibold text-xl">2.2 El Procesador: El cerebro de la operación</h3>
                    <p>El procesador, también conocido como Unidad Central de Procesamiento (CPU), es el componente principal de una computadora responsable de ejecutar instrucciones y procesar datos. Funciona como el cerebro de la computadora, realizando operaciones aritméticas, lógicas y de control según lo indicado por los programas en ejecución.</p>
                </article>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/ram.png" alt="" class="max-w-[250px] float-end md:float-start ml-5 rounded-lg mask-image__radial-gradient ">
                    <h3 class="font-semibold text-xl">2.3 2.3 La Memoria RAM: Almacenamiento temporal para la acción</h3>
                    <p>La memoria RAM (Memoria de Acceso Aleatorio) es un tipo de memoria volátil que se utiliza en computadoras y otros dispositivos electrónicos para almacenar temporalmente datos y programas que están en uso. Es accesible de manera aleatoria, lo que significa que el sistema puede leer o escribir en cualquier ubicación de la memoria de forma directa y rápida.
                        La RAM es fundamental para el funcionamiento de un sistema informático, ya que permite a la CPU acceder rápidamente a los datos necesarios para ejecutar programas y realizar operaciones, mejorando así el rendimiento general del sistema.</p>
                </article>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/discos.png" alt="" class="max-w-[250px] float-end md:float-right ml-5 rounded-lg mask-image__radial-gradient ">
                    <h3 class="font-semibold text-xl">2.4 El Almacenamiento: Hogar permanente de tus datos</h3>
                    <p>El almacenamiento de computadora se refiere a la capacidad de guardar datos de manera permanente en un dispositivo electrónico. Este almacenamiento puede ser tanto interno como externo y se utiliza para conservar información incluso cuando la computadora está apagada. Los dispositivos de almacenamiento comunes incluyen discos duros, unidades de estado sólido (SSD), unidades flash USB, tarjetas de memoria y discos ópticos como CD, DVD y Blu-ray. El almacenamiento de la computadora permite a los usuarios guardar archivos, programas y otros datos para su acceso posterior, lo que lo convierte en una parte fundamental de cualquier sistema informático.</p>
                </article>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/fuente.png" alt="" class="max-w-[250px] float-end md:float-start mr-5 rounded-lg mask-image__radial-gradient ">
                    <h3 class="font-semibold text-xl">2.5 La fuente de alimentación</h3>
                    <p>La fuente de alimentación de un computador es un componente fundamental que suministra energía eléctrica a todos los demás componentes del sistema. Se encarga de convertir la corriente alterna proveniente de la toma de corriente en corriente continua de bajo voltaje, necesaria para el funcionamiento de la computadora.</p>
                </article>
            </section>
            <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">
            <section class="max-w-[900px] mt-10 space-y-5">
                <h2 class=" sm:text-center text-start font-sketchup text-7xl m-auto ">
                    Interacción con el Mundo Partes Externas
                </h2>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/monitor.png" alt="" class="max-w-[250px] float-end md:float-left mr-5 rounded-lg mask-image__radial-gradient pb-5">
                    <h3 class="font-semibold text-xl">3.1 El Monitor: Ventana al mundo digital</h3>
                    <p>El monitor de una computadora es un dispositivo de salida que muestra información visual generada por la computadora. Es un tipo de pantalla que presenta imágenes, texto y gráficos producidos por la tarjeta gráfica del sistema. Los monitores pueden ser de diferentes tipos y tecnologías, como LCD (pantalla de cristal líquido), LED (diodo emisor de luz), OLED (diodo orgánico emisor de luz) o CRT (tubo de rayos catódicos), y varían en tamaño, resolución y características adicionales como la frecuencia de actualización y la calidad del color.</p>
                </article>
                <article class="clear-both max-w-[750px] mx-auto space-y-4">
                    <h3 class="font-semibold text-xl">3.2 Teclado y Ratón: Puentes de comunicación</h3>
                    <ol class="pl-5 space-y-4">
                        <li class="list-decimal"><span class="font-semibold">Teclado:</span> Es un dispositivo que consta de una serie de teclas que representan letras, números, símbolos y funciones especiales. Permite al usuario introducir texto y comandos mediante la pulsación de teclas. Los teclados modernos también pueden tener teclas multimedia y teclas de acceso rápido para funciones específicas.</li>
                        <img src="/images/lessons/computador/mouse-y-teclado.png" alt="" class="max-w-[300px] float-end md:float-right ml-5 rounded-lg mask-image__radial-gradient ">
                        <li class="list-decimal"><span class="font-semibold">Ratón:</span> Es un dispositivo pequeño que se desplaza sobre una superficie plana y permite al usuario controlar el movimiento del cursor en la pantalla. El ratón generalmente tiene uno o más botones que pueden ser utilizados para realizar acciones como hacer clic, doble clic o arrastrar elementos en la pantalla. Además, algunos ratones pueden tener ruedas de desplazamiento para facilitar la navegación. El ratón es especialmente útil para seleccionar, arrastrar y manipular objetos en entornos gráficos.</li>
                    </ol>
                </article>
                <article class="clear-both max-w-[750px] mx-auto">
                    <img src="/images/lessons/computador/ram.png" alt="" class="max-w-[250px] float-end md:float-start ml-5 rounded-lg mask-image__radial-gradient ">
                    <h3 class="font-semibold text-xl">2.3 2.3 La Memoria RAM: Almacenamiento temporal para la acción</h3>
                    <p>La memoria RAM (Memoria de Acceso Aleatorio) es un tipo de memoria volátil que se utiliza en computadoras y otros dispositivos electrónicos para almacenar temporalmente datos y programas que están en uso. Es accesible de manera aleatoria, lo que significa que el sistema puede leer o escribir en cualquier ubicación de la memoria de forma directa y rápida.
                        La RAM es fundamental para el funcionamiento de un sistema informático, ya que permite a la CPU acceder rápidamente a los datos necesarios para ejecutar programas y realizar operaciones, mejorando así el rendimiento general del sistema.</p>
                </article>

            </section>
        </div>
        <aside class="max-lg:pt-6  lg:pl-6 w-full lg:max-w-[374px] lg:sticky h-fit top-20 bottom-10">
            <h3 class="font-sketchup text-center text-5xl">Instrucciones</h3>
            Esta prueba está diseñada para evaluar tu comprensión sobre las partes internas y externas de una computadora y sus funciones.

            <h4 class="font-sketchup text-3xl">Tiempo</h4>
            Tienes 30 minutos para completar la prueba.
            <h4 class="font-sketchup text-3xl">Materiales Permitidos</h4>
            No se permite el uso de materiales de referencia externos.
            <h4 class="font-sketchup text-3xl">Formato de la Prueba</h4>
            <ol>
                <li class="list-decimal ml-5">Preguntas de opción múltiple</li>
                <li class="list-decimal ml-5">Preguntas de verdadero o falso</li>
            </ol>
            <div class="flex flex-col justify-center p-4 gap-4">
                <span class="text-center font-sketchup text-3xl">Buena suerte!</span>
                <button type="button" @click="openModal = true" class="w-full py-2 group relative flex items-stretch justify-center p-0.5 text-center font-medium transition-[color,background-color,border-color,text-decoration-color,fill,stroke,box-shadow] focus:z-10 focus:outline-none border border-transparent bg-blue-600 text-white focus:ring-4 focus:ring-blue-300 enabled:hover:bg-blue-500 dark:hover:bg-blue-500 dark:focus:ring-blue-800 rounded-lg">Comenzar prueba</button>
            </div>

        </aside>

    </div>

    <!-- Aquí puedes agregar más contenido específico para la lección -->
</div>
