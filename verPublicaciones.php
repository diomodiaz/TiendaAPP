<?php
session_start();

if ($_SESSION['usuario']) {
    
} else {
    header('Location: index.html');
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
        <meta charset="UTF-8">
        <title>Publicaciones</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="verPublicaciones.php">Inicio</a></li>
                    <li><a href="publicar.php">Nueva Publicación</a></li>
                    <li><a href="controlador/cerrarsesion.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>

        <?php
        echo $_SESSION['usuario'];
        echo $_SESSION['clave'];
        ?>
        <div class="container">
            <div class="table-responsive">
<!--                <menu class="menu">
                    <a class="" href="publicar.php"><button class="btn btn-primary btn-block">Nueva Publicacion</button></a>
                </menu> -->
                <table class="table" border="0" align="center" >
                    <?php
                    while ($dato = mysqli_fetch_array($datos)) {
                        ?>
                        <tr class="postInterna" align="center">
                            <td><?php echo $dato['titulo'] ?></td>
                        </tr>
                        <tr align="center" class="postInterna">
                            <td><?php echo $dato['descripcion'] ?></td>
                        </tr>
                        <tr align="center" class="postInterna">
                            <td class="border">
                                <img src="files/<?php echo $dato['archivo'] ?>" name="" width="300px"><br><br>
                                <form action="controlador/guardarcomentario.php" method="post">
                                    <textarea type="text" name="comenta" placeholder="Escribe un comentario"></textarea><br>
                                    <input type="submit" value="Comentar">
                                </form>
                            </td>
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
