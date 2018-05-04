<?php
session_start();

if ($_SESSION['usuario']) {
    
} else {
    header('Location: ../index.html');
}

include 'clases/Conexion.php';
include 'clases/Publicacion.php';

$objConexion = new Conexion();
$objPublicacion = new Publicacion();

$con = $objConexion->conectar();
$datos = $objPublicacion->consultarPublicaciones($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Publicar posteo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body class="bodyPublicar">
        <div class="container">
            <h1>Añade tu publicación</h1>
            <form action="controlador/guardarpublicacion.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Titulo: </label>
                    <input class="form-control" type="text" name="titulo" placeholder="Nombre Publicación" required>
                </div>
                <div class="form-group">
                    <label>Descripción: </label>
                    <textarea class="form-control" name="descripcion" placeholder="Escriba un texto sobre su publicación" required></textarea>
                </div>

                <label>Agregar imagen: </label><br>
                <input type="file" name="foto"><br><br>

                <button class="btn btn-primary btn-block" name="button">Publicar</button><br><br>

                <a href='verPublicaciones.php'>Regresar</a>
            </form>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>
    </body>
</html>
