
<?= $this->extend('default')?>
<?=$this->section('content')?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                <h1 class="display-3 text-white animated slideInRight">Consultas Productos</h1>
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb animated slideInRight mb-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('/');?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Consultas Productos</li>
                        </ol>
                </nav>
                </div>
        </div> 

<div class="container">
        <div class="row">
                <div class="col-md">
                        <div>
                                <div class="card-body">
                                        <h5 class="card-title">Bienvenido a la consulta de producto de SERVIMETERS</h5>
                                        <p class="card-description">Por favor indique su número de certificado</p>
                                        <form class="form-inline">
                                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        <div class="col-lg grid-margin stretch-card">
                <div class="card">
                        <div class="card-body">
                                <div class="table-responsive">
                                <table class="table">
                                        <thead>
                                                <tr>
                                                        <th>Certificado</th>
                                                        <th>Nombre</th>
                                                        <th>Capacitación</th>
                                                        <th>Fecha</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>Jacob</td>
                                                        <td>53275531</td>
                                                        <td>12 May 2017</td>
                                                        <td><label class="badge badge-danger">Pending</label></td>
                                                </tr>
                                                <tr>
                                                        <td>Messsy</td>
                                                        <td>53275532</td>
                                                        <td>15 May 2017</td>
                                                        <td><label class="badge badge-warning">In progress</label></td>
                                                </tr>
                                                <tr>
                                                        <td>John</td>
                                                        <td>53275533</td>
                                                        <td>14 May 2017</td>
                                                        <td><label class="badge badge-info">Fixed</label></td>
                                                </tr>
                                                <tr>
                                                        <td>Peter</td>
                                                        <td>53275534</td>
                                                        <td>16 May 2017</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                </tr>
                                                <tr>
                                                        <td>Dave</td>
                                                        <td>53275535</td>
                                                        <td>20 May 2017</td>
                                                        <td><label class="badge badge-warning">In progress</label></td>
                                                </tr>
                                        </tbody>
                                </table>
                                </div>
                        </div>
                </div>
        </div>
</div>
<?=$this->endSection('content');?>

