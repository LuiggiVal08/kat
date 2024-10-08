<header class="header">
  <div class="max-width header__content">
    <h1 class="header__title">
      <?php
      if (isset($_SESSION['user'])) {
        echo $_SESSION['user'];
      } else {
      ?>

        Tech
      <?php
      }
      ?>
    </h1>
    <nav class="header_nav">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="/kat/" class="nav__link">Inicio</a>
        </li>
        <li class="nav__item">
          <a href="/kat/about" class="nav__link">Acerca</a>
        </li>

        <?php
        if (!isset($_SESSION['user'])) { ?>

          <li class="nav__item">
            <a href="/kat/login" class="nav__link">Login y registro</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav__item">
            <a href="/kat/tests" class="nav__link">Lecciones</a>
          </li>

          <li class="nav__item">
            <a href="/kat/core/closeSession.php" class="nav__link">Cerrar sesión</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </nav>
  </div>
</header>