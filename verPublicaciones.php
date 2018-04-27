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
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="table-responsive">
                <table class="table" border="1" align="center" >
                    <tr>
                        <td>Titulo</td>
                        <td>Descripcion</td>
                        <td>Imagen</td>
                    </tr>
                    <?php
                    while ($dato = mysqli_fetch_array($datos)) {
                        ?>
                        <tr>
                            <td><?php echo $dato['titulo'] ?></td>
                            <td><?php echo $dato['descripcion'] ?></td>
                            <td><img src="files/<?php echo $dato['archivo'] ?>" name="" width="300px"></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href='menu.php'>Regresar</a>
            </div>
        </div>
    </body>
</html>
