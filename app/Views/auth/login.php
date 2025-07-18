<?= $this->extend('default')?>

<?=$this->section('contentLogin')?>
<div class="hold-transition login-page">
<div class="card card-outline card-primary">
        <div class="card-header">
            <div class="login-logo p-3">
            <img src="<?=base_url('assets/img/icon_sm.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 100px; height: 100px; border-radius: 50%;">
            </div>
        </div>
        <div class="login-box">
            <div class="card-body login-card-body">
                <h4 class="text-center text-lg">Certificado de Capacitación</h4>
                <p class="login-box-msg">Ingrese a su cuenta</p>
                <form action="<?= url_to('login') ?>" method="post" autocomplete="on">

                    <!--Input Group usuario-->
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>


                    <!--Input Group contraseña-->
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required />
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
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
                    
                      
                    <!--Input envió formulario-->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" id="loguin" class="btn btn-primary btn-block">Inicio de Sesión &nbsp;&nbsp;&nbsp; <span class="fas fa-check"></span></button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

<?=$this->endSection('contentLogin');?>