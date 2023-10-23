<?= $this->extend('default')?>

<?= $this->section('content')?>
<div class="content-wrapper">
    <!--Encabezados-->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>Creación de Usuarios</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Crear Usuarios</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!--Contenido principal-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingrese los datos para registrar a los usuarios</h3>
              </div>
              <!--Formulario-->
              <form id="quickForm" action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="card-body">

                  <!--Campo correo-->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dirección de correo</label>
                      <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                  </div>

                  <!--Campo usuario-->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usuario</label>
                    <input type="text" class="form-control" name="username" inputmode="text" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
                  </div>

                  <!--Campo contraseña-->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required />
                  </div>

                  <!--Campo confirmar contraseña-->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña nuevamente</label>
                    <input type="password" class="form-control" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required />
                  </div>              
                </div>
                <!--Mostrar errores-->
                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Registrar nuevo usuario</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?=$this->endSection();?>
