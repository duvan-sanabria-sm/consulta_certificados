
<?= $this->extend('default')?>

<?=$this->section('content')?>

<section class="container py-5">
                <div class="row text-center pt-3">
                        <div class="col-lg-6 m-auto">
                                <h1 class="h1">Consulta de Certificados</h1>
                                <p>Nos complace presentarte nuestro nuevo servicio de Validación de Certificados en Línea,
                                diseñado para ofrecerte tranquilidad y seguridad con respecto a la legitimidad de tus logros educativos.</p>
                        </div>
                </div>
                <div class="row">
                        <div class="col-12 col-md-4 p-5 mt-3 text-center">
                                <a href="#"><img src="assets/img/retie.PNG" class="rounded-circle img-fluid border"></a>
                                <label class=" mt-3 mb-3">Consultas Retie</label>
                                <p><a class="button" href="<?= base_url('retie');?>">Consultar</a></p>
                        </div>
                        <div class="col-12 col-md-4 p-5 mt-3 text-center">
                                <a href="#"><img src="./assets/img/productos.png" class="rounded-circle img-fluid border"></a>
                                <label class="mt-3 mb-3">Consultas de Producto</label>
                                <p><a class="button" href="<?= base_url('productos');?>">Consultar</a></p>
                        </div>
                        <div class="col-12 col-md-4 p-5 mt-3 text-center">
                                <a href="#"><img src="./assets/img/calidad.PNG" class="rounded-circle img-fluid border"></a>
                                <label class="mt-3 mb-3">Consultas de Certificado SIG</label>
                                <p><a class="button" href="<?= base_url('sig');?>">Consultar</a></p>
                        </div>
                </div>
</section>
<?=$this->endSection('content');?>
