<?php
require("conexion.php");

class MetodoProducto{
    private $conexion;

    public function __construct(){
        $this->conexion = Conexion::abrirConexion();
    }

    public function listarProducto(){
        $sql = "SELECT * FROM producto";

        try{
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error: " + $e->getMessage();
        }finally{
            $this->conexion = Conexion::cerrarConexion();
        }
    }
}

?>