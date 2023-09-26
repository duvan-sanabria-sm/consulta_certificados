
<?= $this->extend('default')?>

<?=$this->section('content')?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                <h1 class="display-3 text-white animated slideInRight">Consultas de Capacitación</h1>
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb animated slideInRight mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('/');?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Consultas de Capacitación</li>
                        </ol>
                </nav>
                </div>
        </div> 

<div class="container">
        <div class="row">
                <div class="col-md">
                        <div class="card-body">
                                <h5 class="card-title">Bienvenido a la consulta de Capacitación de SERVIMETERS</h5>
                                <p class="card-description">Por favor indique su número de certificado</p>
                                <form class="form-inline">
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="identifier" placeholder="Ingresa número certificado">
                                        <i class="fa-solid fa-magnifying-glass" id="send"></i>
                                </form>
                                <div id="errorText" style="color: red;"></div>
                        </div>
                </div>
        </div>
</div>

<div class="container">
        <div id="main-table" style="display: none;">
                
                <table class="table">
                        <thead>
                                <tr>
                                        <th>Certificado</th>
                                        <th>Nombre</th>
                                        <th>Capacitación</th>
                                        <th>Fecha</th>
                                </tr>
                        </thead>
                        <tbody id="tablaDatos">    
                                <!-- Aquí se agregarán las filas de datos -->

                        </tbody> 
                </table>
                
        </div>
</div>

<?=$this->endSection('content');?>
