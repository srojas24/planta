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
            <div class="grupo">
                <div class="unidad">
                    <div class="polaroid">
                        <img src="img/laurel_ornamental.jpg" alt="Laurel Ornamental" class="cuadro">
                        <div class="container">
                            <p>Laurel Ornamental</p>
                            <p>Precio: S/. 55</p>
                        </div>
                    </div>
                </div>
                <div class="unidad">
                    <div class="polaroid">
                        <img src="img/anturio.jpg" alt="Laurel Ornamental" class="cuadro">
                        <div class="container">
                            <p>Anturio</p>
                            <p>Precio: S/. 35</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <?php
    include("footer.php");

    ?>
    
</body>
</html>