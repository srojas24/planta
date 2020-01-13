<?php
require("config.php");

class Conexion{
    public static function abrirConexion(){
        $conexion = new Mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

    public static function cerrarConexion(){
        $conexion = null;
        return $conexion;
    }
}

?>