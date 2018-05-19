<?php

class Publicacion {

    public function guardarPulicacion($con, $titulo, $descripcion, $id_usuario, $archivo) {
//ubicar la carpeta donde almacenar files
        $carpeta = "../files/";
//abrir la carpeta con la funcion opendir
        opendir($carpeta);
//guardar lor archivos en la carpeta files
        $destino = $carpeta . $archivo['name'];
        copy($archivo['tmp_name'], $destino);
        $nombrearchivo = $archivo['name'];

        $query = "INSERT INTO posteo (titulo, descripcion, id_usuario, archivo) VALUES ('$titulo', '$descripcion', '$id_usuario', '$nombrearchivo')";
        $consulta = mysqli_query($con, $query);
    }

    public function consultarPublicaciones($con) {
        $query = "SELECT * FROM posteo order by id_posteo DESC";
        $consulta = mysqli_query($con, $query);
        return $consulta;
    }

    public function consultarComentarios($con, $id_posteo) {
        $query = "SELECT us.nombre, co.comentar 
        FROM usuario us INNER JOIN comentario co ON us.id_usuario = co.id_usuario WHERE id_posteo=$id_posteo";
        $consulta = mysqli_query($con, $query);
        return $consulta;
    }

}
