<nav class="main-header navbar navbar-expand" style="border: none; background-color: #0971b7;">
  <!--Link del header posición izquierda-->
  <ul class="navbar-nav">

    <!--Item I-->
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <!--Item II-->
    <li class="nav-item">
      <i class="fa fa-calendar mx-2"></i>
      <a class="navbar-sm-brand text-light text-decoration-none" href=""><?php echo(date("Y-m-d"))?></a>
    </li>  
  </ul>

  <!--Link del header posición derecha-->
<ul class="navbar-nav ml-auto">
  <!-- Pantalla completa -->
  <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Pantalla completa">
      <i class="fas fa-expand-arrows-alt"></i>
    </a>
  </li>

  <!-- Configuración -->
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" title="Configuración">
      <i class="fa-solid fa-right-from-bracket"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
      <h6 class="dropdown-header text-center">Configuración</h6>
      <div class="dropdown-divider"></div>

      <?php if (auth()->loggedIn()) { ?>
        <a href="<?= base_url('logout') ?>" class="dropdown-item text-danger">
          <i class="fa-solid fa-right-from-bracket mr-2"></i> Salir
        </a>
      <?php } ?>
    </div>
  </li>
</ul>

</nav>