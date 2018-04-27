<?php
session_start();
include '../clases/Conexion.php';
include '../clases/Usuario.php';

$username = "username";
$password = "password";

$objConexion = new Conexion();
$objUsuario = new Usuario();

$con = $objConexion->conectar();
$datos = $objUsuario->login($_POST['username'], $_POST['password'], $con);

//se crea variable validacion que se inicia en 0
$validacion = 0;
$validacion = $datos->num_rows;
if($validacion == 1){
    echo 'ingreso';
    header('Location: ../menu.php');
}else{
    echo 'no ingresa';
    header('Location: ../index.html');
}