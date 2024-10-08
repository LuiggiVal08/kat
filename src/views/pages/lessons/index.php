<?php
include_once 'src/views/components/topPage.php'
?>
<section class="bg-white pt-10 ">
    <div class="container w-full relative m-auto p-10 flex gap-5 flex-col pt-4">
        <h3 class="text-center tracking-wider font-medium m-auto max-w-[800px] ">
            <span class="text-7xl font-sketchup ">Lecciones!</span>
            <br>
            Aquí podrás poner en práctica tus conocimientos y habilidades adquiridas. ¡No te preocupes,Prepárate para una experiencia educativa interactiva y enriquecedora!
            <br>
            ¡Comencemos!
        </h3>
        <article class="mt-10 py-7 px-3 grid grid-cols-4 gap-5">
            <a href="/lessons/computer" class="group sm:col-start-[span_2]  col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden">
                    <img src="/images/lessons/computador.jpg"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">El Computador y sus Partes</span>
                    </div>
                </figure>
            </a>
            <a href="/lessons/preventive" class="group sm:col-start-[span_2]  col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden">
                    <img src="/images/lessons/limpieza-fisica.png"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">Mantenimiento Preventivo</span>
                    </div>
                </figure>
            </a>
            <a href="/lessons/corrective" class="group sm:lg:col-start-[span_1] md:col-start-[span_2] col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden ">
                    <img src="/images/lessons/mantenimiento.webp"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">Mantenimiento Correctivo</span>
                    </div>
                </figure>
            </a>
            <a href="/lessons/tics" class="group sm:col-start-[span_2] col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden">
                    <img src="/images/lessons/tic.png"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">El Uso de las Tics</span>
                    </div>
                </figure>
            </a>
            <a href="/lessons/word" class="group sm:lg:col-start-[span_1] md:col-start-[span_2] col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden">
                    <img src="/images/lessons/word.webp"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">Word, Herramienta para documentación</s
                                pan>
                    </div>
                </figure>
            </a>
            <a href="/lessons/powerpoint" class="group sm:col-start-[span_2] col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden">
                    <img src="/images/lessons/powerpoint.png"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">Powerpoint, crea tus presentaciones</s
                                pan>
                    </div>
                </figure>
            </a>
            <a href="/lessons/excel" class="group sm:col-start-[span_2] col-start-[span_4]">
                <figure class="h-full bg-black relative overflow-hidden">
                    <img src="/images/lessons/excel.avif"
                        class="group-hover:opacity-25 group-hover:scale-[1.3] duration-300 object-cover w-full h-full" alt="">
                    <div class="absolute -translate-y-full group-hover:translate-y-0 object-cover px-2 inset-0 mx-auto my-0  flex justify-center items-center duration-300 ">
                        <span class="text-center font-sketchup text-5xl text-white">Excel, herramienta avanzada de análi
                            sis y visualización de datos.</span>
                    </div>
                </figure>
            </a>

        </article>
    </div>
</section>
