<div x-show="openModal" x-transition x-cloak x-on:click="openModal = false" @click.stop @keydown.escape="openModal = false"
    class="backdrop-blur-sm fixed inset-x-0 top-0 z-50 h-screen overflow-hidden md:inset-0 scrollbar min-h-fit items-center justify-center flex bg-opaco ">
    <div tabindex="-1" id=":rm:" role="dialog" class="px-4 w-full max-w-2xl" aria-labelledby=":r11:" @click.stop @keydown.escape="openModal = false">
        <div class=" border border-gray-200 dark:border-gray-700 relative max-h-[calc(100vh-33px)] md:max-h-[calc(100vh-33px)] overflow-y-auto scrollbar shadow rounded-lg bg-white dark:bg-primary">
            <header class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-600">
                <h3 id=":r11:" class="text-3xl font-medium text-gray-900 dark:text-white font-sketchup">Preparado?</h3>

                <button x-on:click="openModal = false" aria-label="Close" class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" type="button">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg></button>
            </header>
            <form id="formAsistencia">
                <!-- <div class="flex justify-start items-center gap-4 flex-row"><span class="material-symbols-rounded ico-error md-48 fill-regular wght-normal text-warning-200 leading-none"></span><b class="text-text-tertiary">¿Desea editar el siguiente Archivero?</b></div> -->
                <div class="space-y-4 py-4 px-6 ">
                    <p class="mb-4">
                        Antes de comenzar la evaluación, asegúrate de <span class="font-bold text-blue-600">revisar las instrucciones</span> y estar familiarizado con el tema.
                    </p>
                    <p class="mb-4">
                        <span class="font-bold text-red-600">No está permitido salir</span> del entorno de evaluación durante el proceso.
                    </p>
                    <p class="mb-4">
                        Ten en cuenta que hay un <span class="font-bold text-yellow-600">tiempo límite</span> para completar la evaluación, así que administra tu tiempo adecuadamente.
                    </p>

                </div>

                <div class="items-center space-x-2 rounded-b border-gray-200 p-6 dark:border-gray-600 border-t flex flex-row w-full flex-wrap justify-end gap-6">

                    <a href="/lessons/computer/evaluation" class="w-full py-2 group relative flex items-stretch justify-center p-0.5 text-center font-medium transition-[color,background-color,border-color,text-decoration-color,fill,stroke,box-shadow] focus:z-10 focus:outline-none border border-transparent bg-blue-600 text-white focus:ring-4 focus:ring-blue-300 enabled:hover:bg-blue-500 dark:hover:bg-blue-500 dark:focus:ring-blue-800 rounded-lg">
                        <span class=" flex items-stretch transition-all duration-200 rounded-md px-4 py-2 text-sm">Aceptar</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
