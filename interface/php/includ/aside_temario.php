<aside class="aside">
    <div class="container__aside">
        <!-- <section class="aside_user card">

                </section> -->
        <section class="aside__menu card">
            <header class="aside__header">
                <h3 class="aside__title">Temas</h3>
            </header>
            <ul class="aside__list-menu">
                <h4 class="aside__subtitle">1er Lapso</h4>
                <li class="aside__list-item">
                    <a class="aside__link" href="/kat/computador">El Computador y sus partes</a>
                </li>
                <li class="aside__list-item">
                    <a class="aside__link" href="/kat/mantenimiento-preventivo">Mantenimiento Preventivo</a>
                </li>
                <li class="aside__list-item">
                    <a class="aside__link" href="#">Mantenimiento Correctivo</a>
                </li>
            </ul>
            <ul class="aside__list-menu">
                <h4 class="aside__subtitle">2do Lapso</h4>
                <li class="aside__list-item"><a class="aside__link" href="#">Uso de Herramientas Tecn.</a></li>
                <!-- <li class="aside__list-item"></li> -->
                <!-- <li class="aside__list-item"></li> -->
            </ul>
            <ul class="aside__list-menu">
                <h4 class="aside__subtitle">3er Lapso</h4>
                <li class="aside__list-item"></li>
                <li class="aside__list-item"></li>
                <li class="aside__list-item"></li>
            </ul>
        </section>
    </div>
</aside>
<script>
    // Obtener todos los enlaces con la clase "nav-link"
    const navLinks = document.querySelectorAll('.aside__list-item a');

    // Iterar sobre cada enlace
    navLinks.forEach(link => {
        console.log(link);
        // Obtener la ruta del enlace
        const href = link.getAttribute('href');

        // Obtener la ruta actual
        const currentPath = window.location.pathname;
        console.log(currentPath === href);
        console.log(currentPath, href);
        // Verificar si la ruta del enlace coincide con la ruta actual
        if (currentPath === href) {
            // Aplicar la clase "active" al enlace
            link.classList.add('active');
        }
    });
</script>