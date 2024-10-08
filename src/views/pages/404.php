<div class="w-full min-h-[calc(100vh-70px)] flex justify-center items-center py-5">
    <section class="max-w-5xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800 ">
        <div class="container h-full px-6 py-12 mx-auto lg:flex lg:items-center lg:gap-12">
            <div class="wf-ull lg:w-1/2">
                <h1 class="mt-3 font-sketchup text-5xl text-gray-800 dark:text-white ">Pagina no encontrada</h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Lo sentimos, no hemos podido encontrar la página que buscas. Aquí tienes algunos enlaces que podrían ser de ayuda:</p>

                <div class="flex items-center mt-6 gap-x-3" x-data="{ goBack() { window.history.back(); } }">
                    <button @click="goBack" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12l3.75-3.75M3 12h18" />
                        </svg>
                        <span>Volver atrás</span>
                    </button>

                    <a href="/" class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200  rounded-lg shrink-0 sm:w-auto  bg-blue-600 hover:bg-blue-400">
                        Ir al Inicio
                    </a>
                </div>
            </div>

            <div class="relative w-full mt-12 lg:w-1/2 lg:mt-0">
                <img class="w-full  m-auto max-w-lg lg:mx-auto" src="/images/illustrations/404.svg" alt="">
                <h1 class="font-sketchup text-7xl text-center">Tech4All</span></h1>
                <!-- <img class="m-auto" src="/images/logos3.png" alt=""> -->
            </div>
        </div>
    </section>
</div>
