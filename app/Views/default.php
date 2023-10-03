<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Certificados</title>
       
        <!-- Estilos principales (cargados primero) -->
        <link rel="stylesheet" href="<?php echo base_url('assets/styles.css')?>">
        
        <!-- Estilos Bootstrap (cargados después de los estilos principales) -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" type="text/css">

        <!-- Estilos adminlt3 (cargados después de los estilos Bootstrap) -->
        <link rel="stylesheet" href="<?php echo base_url('assets/adminlt3/css/adminlte.min.css')?>">

        <!-- Estilos JQuery (cargados después de los estilos adminlt3) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
        <?= $this->renderSection('content')?>

        <!-- Scripts JavaScript (cargados al final del cuerpo) -->
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/adminlt3/js/adminlte.js')?>"></script>
        <script src="https://kit.fontawesome.com/ad7d17c265.js" crossorigin="anonymous"></script>

        <!-- Script para solicitudes (cargado después de los scripts JavaScript principales) -->
        <script src="<?php echo base_url('assets/request/ajax.js')?>"></script>
        <script src="<?php echo base_url('assets/request/excel.js')?>"></script>
</body>
</html>