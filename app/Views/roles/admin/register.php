<?= $this->extend('default')?>

<?=$this->section('content')?>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= base_url('assets/img/icon_sm.png') ?>" width="180" alt="">
                </a>
                <p class="text-center">Registro</p>
                <form action="<?= url_to('login') ?>" method="post">
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
                  <!--Input email-->
                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                  </div>

                  <!--Input username-->
                  <div class="mb-4">
                    <input type="text" class="form-control" name="username" inputmode="text" autocomplete="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
                  </div>

                  <!--Input password-->
                  <div class="mb-4">
                    <input type="password" class="form-control" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required />
                  </div>

                  <!--Input confirm-password-->
                  <div class="mb-4">
                    <input type="password" class="form-control" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required />
                  </div>

                  <!--Button send-->
                  <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>

                  <p class="text-center"><?= lang('Auth.haveAccount') ?> <a href="<?= url_to('admin/login') ?>"><?= lang('Auth.login') ?></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?=$this->endSection();?>
