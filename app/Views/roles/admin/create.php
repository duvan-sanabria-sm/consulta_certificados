<?= $this->extend('default')?>

<?= $this->section('content')?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"><h1>Editar Usuarios</h1></div>
                <?php if (!empty($message)): ?>
                    <div class="alert alert-warning">
                        <?= esc($message) ?>
                    </div>
                <?php endif; ?>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Editar Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--Tabla de datos-->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Correo</th>
                      <th>Contraseña</th>
                      <th>Rol</th>
                      <th>Editar</th>
                      <!--<th>Eliminar</th>-->
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($records as $record): ?>
                        <tr>
                            <td><?= $record['id']; ?></td>
                            <td><?= $record['name']; ?></td>
                            <td><?= $record['secret']; ?></td>
                            <td><?= $record['secret2']; ?></td>
                            <td><?= $record['grupo']; ?></td>
                            <td>
                                <i class="fa-solid fa-pen-to-square" class="btn btn-primary"
                                data-toggle="modal" data-target="#editarModal<?= $record['id']; ?>"
                                style="color: #0971b7;"></i>
                            </td>

                            <!--<td>
                            <a href="<?= route_to('admin_eliminar', $record['id']); ?>" class="btn" onclick="return confirm('¿Seguro que deseas eliminar este registro?')">
                                <i class="fa-solid fa-trash-can-arrow-up" style="color: #d01b48;"></i>
                            </a>
                            </td>-->
                        </tr>

                        <!-- Modal de edición para cada registro -->
                        <div class="modal fade" id="editarModal<?= $record['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editarModalLabel" style="font-weight: bold;">Editar Registro</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulario de edición con los campos -->
                                        <form action="modificar" method="post">
                                            <input type="hidden" name="id" value="<?= $record['id']; ?>">
                                            
                                            <!--Campo nombre-->
                                            <div class="form-group">
                                                <label for="name">Nombre</label>
                                                <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="<?= $record['name'];?>" required>
                                            </div>

                                            <!--Campo correo-->
                                            <div class="form-group">
                                                <label for="name">Correo</label>
                                                <input type="email" class="form-control" name="secret" placeholder="Ingrese su correo" value="<?= $record['secret']; ?>" required>
                                            </div>

                                            <!--Campo correo-->
                                            <div class="form-group">
                                                <label for="name">Contraseña</label>
                                                <input type="text" class="form-control" name="secret2" placeholder="Ingrese contraseña nueva" required>
                                            </div>

                                            <!--Campo grupo-->
                                            <div class="form-group">
                                                <label for="name">Rol</label>
                                                <div class="form-group">
                                                    <select class="custom-select form-control-border" name="group" id="exampleSelectBorder" required>
                                                        <option value="administrador" <?= ($record['grupo'] === 'administrador') ? 'selected' : ''; ?>>administrador</option>
                                                        <option value="gestor" <?= ($record['grupo'] === 'gestor') ? 'selected' : ''; ?>>gestor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" >Guardar cambios</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </tbody>
                    <?php if (session()->has('success')): ?>
                        <div class="alert alert-success"><?= session('success') ?></div>
                    <?php endif; ?>

                    <?php if (session()->has('error')): ?>
                        <div class="alert alert-danger"><?= session('error') ?></div>
                    <?php endif; ?>
                </table>
            </div>
        </div>    
    </section>
</div>
<?=$this->endSection();?>
