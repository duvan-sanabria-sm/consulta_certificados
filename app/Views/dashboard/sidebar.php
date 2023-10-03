
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= route_to('/'); ?>" class="brand-link elevation-4">
      <img src="<?=base_url('assets/img/icon_sm.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SERVIMETERS</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="<?= route_to('/');?>" class="d-block">Duvan Camilo Sanabria</a>
      </div>
    </div>

    <!--Menú lateral-->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!--Titulo menú-->
        <li class="nav-header">Panel de Administración</li>
          
        <!--Lista de consulta de certificados-->
        <li class="nav-links active">
            <a href="<?= route_to('/');?>" class="nav-link">
              <i class="fa-solid fa-book"></i>
              <p> Consulta de certificados<span class="badge badge-info right"></p>
            </a>
        </li>

        <!--Lista de ingreso de certificados-->
        <li class="nav-item">
            <a href="<?= route_to('admin/ingreso');?>" class="nav-link">
              <i class="fa-solid fa-user-plus"></i>
              <p> Ingreso de certificados</p>
            </a>
        </li>
    
        <!--Lista crud-->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>Usuarios<i class="fas fa-angle-left right"></i></p>
            </a>

            <ul class="nav nav-treeview">
              <!--Consulta-->
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><p>Consulta</p>
                </a>
              </li>

              <!--Modificar-->
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar</p>
                </a>
              </li>

              <!--Eliminar-->
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Eliminar</p>
                </a>
              </li>
            </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>