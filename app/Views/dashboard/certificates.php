<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Certificados</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" type="text/css">
</head>
<body>
        <section class="container py-5">
                <div class="row text-center pt-3">
                        <div class="col-lg-6 m-auto">
                                <h1 class="h1">Consulta de Certificados</h1>
                                <p>Nos complace presentarte nuestro nuevo servicio de Validación de Certificados en Línea,
                                diseñado para ofrecerte tranquilidad y seguridad con respecto a la legitimidad de tus logros educativos.</p>
                        </div>
                </div>
                <div class="row">
                        <div class="col-12 col-md-4 p-5 mt-3">
                                <a href="#"><img src="assets/img/retie.PNG" class="rounded-circle img-fluid border"></a>
                                <h5 class="text-center mt-3 mb-3">Consultas Retie</h5>
                                <p class="text-center"><a class="btn btn-success" href="<?php echo $_SERVER['REQUEST_URI'];?>?page=retie">Consultar</a></p>
                        </div>
                        <div class="col-12 col-md-4 p-5 mt-3">
                                <a href="#"><img src="./assets/img/productos.png" class="rounded-circle img-fluid border"></a>
                                <h2 class="h5 text-center mt-3 mb-3">Consultas de Producto</h2>
                                <p class="text-center"><a class="btn btn-success">Consultar</a></p>
                        </div>
                        <div class="col-12 col-md-4 p-5 mt-3">
                                <a href="#"><img src="./assets/img/calidad.PNG" class="rounded-circle img-fluid border"></a>
                                <h2 class="h5 text-center mt-3 mb-3">Consultas de Certificado SIG</h2>
                                <p class="text-center"><a class="btn btn-success">Consultar</a></p>
                        </div>
                </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>