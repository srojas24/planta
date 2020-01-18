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
    <section class="fila">
        <article class="producto">
            <div class="titulo">
                <h2>Nuestros Productos</h2>
            </div>
        </article>
        <article class="conjunto">
            <?php
            while($fila = $resultado->fetch_assoc()){

            ?>
            <div class="unidad">
                <div class="polaroid">
                    <img src="<?php echo $fila["imagen"]; ?>" alt="Laurel Ornamental" class="cuadro">
                    <div class="container">
                        <p><?php echo $fila["nombre"]; ?></p>
                        <p>Precio: S/.<?php echo $fila["precio"]; ?></p>
                    </div>
                </div>
            </div>
            <?php
            }

            ?>
        </article>
    </section>
    <?php
    include("footer.php");

    ?>
    
</body>
</html>