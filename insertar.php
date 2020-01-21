<?php
require("metodo_producto.php");

$nombre = $_POST['txtnombre'];
$precio = $_POST['txtprecio'];
$imagen = $_FILES['imagen']['name'];
$ruta = $_FILES['imagen']['tmp_name'];
$destino = "img/" . $imagen;

copy($ruta, $destino);

$producto =  new MetodoProducto();
$resultado = $producto->insertarProducto($nombre, $precio, $imagen);

if($resultado == "Registro insertado"){
    header('Location: listado.php');
}else{
    echo $resultado;
}

?>