<header class="sticky w-full min-h-14 bg-gray-900 top-0 z-50">
    <!-- <?= $hola ?> -->
    <nav x-data="{ isOpenNav: false }" class="relative bg-white shadow dark:bg-gray-800">
        <div class="container   mx-auto md:flex md:justify-between md:items-center py-2 pt-3">
            <div class="flex items-center justify-between px-4">
                <a href="/">
                    <h1 class="font-sketchup text-4xl">Tech4All</span></h1>
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden ">
                    <button x-cloak @click="isOpenNav = !isOpenNav" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400 md:hidden" aria-label="toggle menu">
                        <svg x-show="!isOpenNav" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpenNav" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpenNav ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-4 gap-1.5 md:gap-6 items-center">
                    <a href="/" class="t border-b-2 border-transparent transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-600  hover:text-blue-400  max-md:py-2 max-sm:px-2 sm:hover:bg-opacity-50 h-fit font-medium">Inicio</a>
                    <a href="/about" class="t border-b-2 border-transparent transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-600  hover:text-blue-400  max-md:py-2 max-sm:px-2 sm:hover:bg-opacity-50 h-fit font-medium">Acerca de</a>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <a href="/lessons"
                            class="t border-b-2 border-transparent transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-600  hover:text-blue-400  max-md:py-2 max-sm:px-2 sm:hover:bg-opacity-50 h-fit font-medium">
                            Lecciones
                        </a>


                    <?php endif; ?>
                    <?php if (!isset($_SESSION['user'])) : ?>

                        <a href="/login" class="text-xl border-b-2 transition-colors text-blue-600 duration-300 transform dark:hover:text-gray-200 hover:bg-blue-600  hover:text-white  py-1  px-5  flex items-center gap-2 border-2 border-blue-600 font-medium rounded-md font-sketchup">
                            Ingresar
                            <!-- <span class="material-symbols-rounded ico-login md-24 fill-1 wght-18 leading-none"></span> -->
                        </a>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <div class="relative inline-block text-left " x-data="{ open: false }">
                            <!-- Botón del perfil con imagen -->
                            <button @click="open = !open" type="button" class="inline-flex items-center rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <img src="/images/profile.webp" alt="Perfil" class="w-8 h-8 rounded-full ">
                                <!-- <span>Mi Perfil</span> -->
                            </button>

                            <!-- Menú desplegable -->
                            <div x-show="open" @click.outside="open = false" class="border-[1px] border-gray-300 absolute right-0 mt-2 w-48 bg-white  rounded-md shadow-lg z-20 py-4">
                                <a href="/profile"
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 duration-200">
                                    Ir al perfil
                                </a>
                                <a href="/profile"
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 duration-200">
                                    Puntaje
                                </a>
                                <button @click="cerrarSesion()"
                                    class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 duration-200">
                                    Cerrar sesión
                                </button>
                            </div>
                        </div>

                        <script>
                            const cerrarSesion = async () => {
                                try {
                                    const response = await fetch('/api/logout', {
                                        method: 'POST'
                                    });
                                    // Verificar el estado de la respuesta
                                    const result = await response.json();
                                    if (response.ok) {
                                        // alert('Sesión cerrada correctamente');
                                        console.log(result)
                                        // Redirigir a la página de login o página de inicio
                                        window.location.href = '/login';
                                    } else {
                                        alert('Error al cerrar sesión');
                                        throw new Error('Error al cerrar sesión');
                                    }
                                } catch (error) {
                                    console.error('Error al cerrar sesión:', error);
                                    alert('Hubo un problema al cerrar sesión.');
                                }
                            }
                        </script>


                    <?php endif; ?>

                </div>

            </div>
        </div>
    </nav>
</header>
