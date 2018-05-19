<?php

include '../clases/Conexion.php';
include '../clases/Usuario.php';

$objConexion = new Conexion();
$objUsuario = new Usuario();

$con = $objConexion->conectar();
$objUsuario->comentarios($con, $_POST['comenta'], $_POST['id_usuario'], $_POST['id_posteo']);
header('Location: ../verPublicaciones.php');