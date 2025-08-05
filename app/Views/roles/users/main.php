<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<!-- Banner principal con fondo -->
<div class="header py-4 mb-5 text-white text-center wow fadeIn" data-wow-delay="0.1s">
   
</div>
<p id="logo" class="brand image text-center">
    <a class="auto-size" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/img/icon_sm.png') ?>" alt="Logo Servimeters" style="width: 150px; height: 150px; object-fit: contain;">
        <span style="position:absolute; top:-999em;">Consultas Servimeters</span>
    </a>
</p>

<!-- Tarjetas de consulta por país -->
<div class="container py-5">
    <div class="row justify-content-center">
        <!-- Colombia -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <img src="<?= base_url('assets/img/sig_icono.png') ?>" alt="Colombia" style="width: 150px; "class="mb-3 d-block mx-auto">
                    <h2 class="text-center fw-bold">Consulta Colombia</h2>
                    <p class="card-text">Consulta certificados emitidos en territorio colombiano.</p>
                    <a href="<?= route_to('consult_country', 'colombia') ?>" class="btn btn-outline-primary">Ir a la consulta</a>
                </div>
            </div>
        </div>

        <!-- Panamá -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <img src="<?= base_url('assets/img/icon_panama.png') ?>" alt="Panamá" style="width: 150px;" class="mb-3 d-block mx-auto">
                    <h2 class="text-center fw-bold">Consultas Panamá</h2>
                    <p class="card-text">Consulta certificados emitidos en territorio panameño.</p>
                    <a href="<?= route_to('consult_country', 'panama') ?>" class="btn btn-outline-primary">Ir a la consulta</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
