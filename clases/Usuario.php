<?php


class Usuario {
    
     //Metodo para consultar los datos de la tabla usuario
    public function login($username, $password, $con){
        $sql = "SELECT username, password FROM usuario WHERE username ='$username' and password = $password";
        $datos = mysqli_query($con, $sql);
        return $datos;
    }
    
    public function registrar($con, $cedula, $nombre, $apellido, $telefono, $email, $username, $password){
        $query = "INSERT INTO usuario (cedula, nombre, apellido, telefono, correo, username, password) VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$email', '$username', '$password')";
        $consulta = mysqli_query($con, $query);
        if($consulta){
            $respuesta = "Registrado con Éxito";
        } else {
            $respuesta = "Problema con el Registro";    
        }
        return $respuesta;
    }
}
