<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página no encontrada</title>
    <style>
        *{
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    line-height: 21px;  
 }

        body {
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container {
            max-width: 500px;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }
        img.logo {
            width: 120px;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 36px;
            color: #E96671;
        }
        p {
            font-size: 15px;
        }
        a {
            margin-top: 20px;
            display: inline-block;
            color: #0971b7;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Cambia esta ruta por tu logo -->
                 <img src="<?=base_url('assets/img/icon_sm.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 100px; height: 100px; border-radius: 50%;">


    <h1>Error 404</h1>
    <p>La página que estás buscando no fue encontrada.</p>
    <a href="<?= base_url() ?>">Volver al inicio</a>
</div>
</body>
</html>
