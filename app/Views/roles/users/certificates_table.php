<?= $this->extend('default')?>

<?=$this->section('table')?>

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
                                                        <td><?= $result['id']; ?></td>
                                                        <td><?= $result['nombre']; ?></td>
                                                        <td><?= $result['capacitacion'];?></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
 </div>
<?=$this->endSection('table');?>

