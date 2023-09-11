<?= $this->extend('default')?>
<?=$this->section('content')?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                        <h1 class="display-3 text-white animated slideInRight">Consultas de Capacitación</h1>
                        <nav aria-label="breadcrumb" style="background-color: aliceblue; padding:1rem; border-radius: 5px;">
                                <ol class="breadcrumb animated slideInRight mb-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('/');?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Consultas de Capacitación</li>
                                </ol>
                        </nav>
                </div>
</div> 
<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="card-body">
                                <h4 class="card-title">Bienvenido a la consulta de Capacitación de SERVIMETERS</h4>
                                <p class="card-description">Por favor ingrese su documentos</p>
                                <form>
                                        <div class="mb-3">
                                                <input type="file" class="form-control" id="archivo">
                                        </div>
                                        <button type="submit" class="btn" style="background-color:#0971b7; color:white">Subir Archivo</button>
                                </form>
                        </div>
                </div>
        </div>
</div>
<?=$this->endSection('content');?>
