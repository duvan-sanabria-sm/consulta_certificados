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
    <!--Item I-->
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    
    <!--Item II-->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa-solid fa-right-from-bracket"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Configuración</span>
          <div class="dropdown-divider"></div>
          <?php if (auth()->loggedIn()) { ?> 
              <a href="<?= base_url('logout') ?>" class="btn-close btn-close-white ml-5">Salir</a>
          <?php } ?> 
        </div>
      </li>
  </ul>
</nav>