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
        <article>
            <div class="titulo">
                <h2>Registro de Producto</h2>
            </div>
        </article>
        <article class="tabla">
            <div class="fondo">
                <form name="frm1" method="POST" action="insertar.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="txtnombre"></td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td><input type="number" name="txtprecio"></td>
                        </tr>
                        <tr>
                            <td>Imagen:</td>
                            <td><input type="file" name="imagen"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Agregar"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </article>
    </section>
    <?php
    include("footer.php");

    ?>
    
</body>
</html>