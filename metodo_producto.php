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

    public function insertarProducto($nombre, $precio, $imagen){
        $msg = "";
        $sql = "INSERT INTO producto(nombre, precio, imagen) VALUES('$nombre', $precio, '$imagen')";

        try{
            $resultado = $this->conexion->query($sql);
            $msg = "Registro insertado";
        }catch(Exception $e){
            echo "Error: " + $e->getMessage();
            $msg = "Registro no insertado";
        }finally{
            $this->conexion = Conexion::cerrarConexion();
        }

        return $msg;
    }
}

?>