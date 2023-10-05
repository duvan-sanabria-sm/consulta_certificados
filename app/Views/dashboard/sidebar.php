
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= route_to('/'); ?>" class="brand-link elevation-4">
      <img src="<?=base_url('assets/img/icon_sm.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SERVIMETERS</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="<?= route_to('/');?>" class="d-block"><?= $user->username; ?></a>
      </div>
    </div>

    <!--Menú lateral-->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!--Titulo menú-->
        <li class="nav-header">Panel de Administración</li>
          
        <!--Lista de ingreso de certificados-->
        <li class="nav-links active">
            <a href="<?= route_to('admin/ingreso');?>" class="nav-link">
              <i class="fa-solid fa-user-plus"></i>
              <p> Ingreso de certificados</p>
            </a>
        </li>
    
        <!--Lista crud-->
        <?php if ($user->inGroup('admin')) : ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>Administrar Usuarios<i class="fas fa-angle-left right"></i></p>
            </a>

            <ul class="nav nav-treeview">
            <!--Crear-->
            <li class="nav-item">
                <a href="<?= route_to('admin/crear');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><p>Editar datos</p>
                </a>
            </li>  
          </ul>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</aside>