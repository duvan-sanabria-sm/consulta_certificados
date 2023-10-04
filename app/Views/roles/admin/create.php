<?= $this->extend('default')?>

<?= $this->section('content')?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Creación de Usuarios</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Formulario</h3>
                    </div>

                    <form action="<?= url_to('register') ?>" method="post">
                        <div class="card-body">
                            <!--Input correo-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Dirección de correo</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" inputmode="email" autocomplete="email" placeholder="Ingresa el correo" required />
                            </div>

                            <!--Input usuario-->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Usuario</label>
                                <input type="text" " name="username" class="form-control" inputmode="text" autocomplete="username" id="exampleInputPassword1" placeholder="Ingresa el nombre de usuario" required />
                            </div>

                            <!--Input contraseña-->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" name="password" class="form-control" inputmode="text" autocomplete="new-password" id="exampleInputPassword1" placeholder="Ingresa una contraseña" required />
                            </div>

                             <!--Input contraseña x2-->
                             <div class="form-group">
                                <label for="exampleInputPassword1">Confirmar contraseña</label>
                                <input type="password" name="password_confirm" class="form-control" inputmode="text" autocomplete="new-password" id="exampleInputPassword1" placeholder="Ingresa nuevamente la contraseña" required />
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


                            <div class="form-group ">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Subir cambios</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
<?=$this->endSection();?>
