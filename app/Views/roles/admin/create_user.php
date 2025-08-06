<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>Crear Usuario</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Crear Usuario</li>
          </ol>
        </div>
      </div>

      <?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header"><h3 class="card-title">Formulario de Registro</h3></div>
          <form action="create" method="post">
              <?= csrf_field() ?>
              <div class="card-body">

                <!-- Usuario -->
                <div class="form-group">
                  <label for="username">Nombre de usuario</label>
                  <input type="text" class="form-control" name="username" placeholder="Ingrese el nombre de usuario" required>
                </div>

                <!-- Correo -->
                <div class="form-group">
                  <label for="email">Correo</label>
                  <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" required>
                  <?php if (session('errors.email')): ?>
                    <div class="text-danger">
                        <?= session('errors.email') ?>
                    </div>
                  <?php endif; ?>
                </div>

                <!-- Contraseña -->
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña" required>
                  <?php if (session('errors.password')): ?>
                    <div class="text-danger">
                        <?= session('errors.password') ?>
                    </div>
                  <?php endif; ?>
                </div>

                <!-- Rol -->
                <div class="form-group">
                  <label for="role" class="form-label">Rol</label>
                  <select name="role" id="role" class="custom-select form-control-border <?= session('errors.role') ? 'is-invalid' : '' ?>">
                          <option value="">Seleccione un rol</option>
                    <option value="administrador" <?= old('role') == 'administrador' ? 'selected' : '' ?>>Administrador</option>
                    <option value="gestor" <?= old('role') == 'gestor' ? 'selected' : '' ?>>Gestor</option>
                  </select>
                    <?php if (session('errors.role')): ?>
                      <div class="invalid-feedback">
                          <?= session('errors.role') ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
        </form>

      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>
