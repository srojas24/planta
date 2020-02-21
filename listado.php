<?php
require("metodo_producto.php");

$producto = new MetodoProducto();
$resultado = $producto->listarProducto();

?>

<!DOCTYPE html>
<html lang="es">
<?php
include("head.php");

?>
<body>
    <?php
    include("header.php");

    ?>
    <section class="fila grupo">
        <div class="titulo">
            <h2>Listado de Productos</h2>
        </div>
        <div class="tabla">
            <table id="producto">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <?php
                while($fila = $resultado->fetch_assoc()){

                ?>
                <tr>
                    <td><?php echo $fila["id"]; ?></td>
                    <td><?php echo $fila["nombre"]; ?></td>
                    <td><?php echo $fila["precio"]; ?></td>
                    <td><img src="<?php echo $fila["imagen"]; ?>" class="imagen-tabla"></td>
                </tr>
                <?php
                }

                ?>
            </table>
        </div>
    </section>
    <?php
    include("footer.php");

    ?>
    
</body>
</html>