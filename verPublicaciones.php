<!DOCTYPE html>
<?php
include 'clases/Conexion.php';
include 'clases/Publicacion.php';

$objConexion = new Conexion();
$objPublicacion = new Publicacion();

$con = $objConexion->conectar();
$datos = $objPublicacion->consultarPublicaciones($con);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Publicaciones</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
        <style type="text/css">
            body{
                background-image: url(media/login.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                /*background-position: center;*/
            }
            .border{
                border-bottom: 5px solid #ccc;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="table-responsive">
                <h1 class="title" align="center">Publicaciones recientes</h1>
                <table class="table" border="0" align="center" >
<!--                    <tr>
                        <td>Titulo</td>
                        <td>Descripcion</td>
                        <td>Imagen</td>
                    </tr>-->
                    <?php
                    while ($dato = mysqli_fetch_array($datos)) {
                        ?>
                        <tr align="center"><td><?php echo $dato['titulo'] ?></td></tr>
                        <tr align="center"><td><?php echo $dato['descripcion'] ?></td></tr>
                        <tr align="center"><td class="border"><img src="files/<?php echo $dato['archivo'] ?>" name="" width="300px"><br><br>
                                <textarea placeholder="Escriba un comentario"></textarea></td></tr>
                        <?php
                    }
                    ?>
                </table>
                <a href='menu.php'>Regresar</a>
            </div>
        </div>
    </body>
</html>
