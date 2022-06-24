<?php
    $consulta = consultaProducto($_GET['no']);

    function consultaProducto($no_prod){
        include "conexion.php";
        $sentencia = "SELECT * FROM productos WHERE no='".$no_prod."' ";
        $resultado = $conexion->query($sentencia) or die ("Error al consultar el producto".mysqli_error($conexion));
        $fila = $resultado->fetch_assoc();

        return [
            $fila['id_producto'],
            $fila['nombre'],
            $fila['descripcion'],
        ];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Producto</title>
    </head>
    <body>
        <div class="todo">
            <div id="cabecera">
                <img src="imagenes/" width="1188" id="img1">
            </div>

            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 1px 5px;">
                    <span><h1>Modificar Producto</h1></span>
                    <br>
                    <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 1px 5px;">
                        <input type="hidden" name="no" value="<?php echo $_GET['no']?>">
                        <label for="">Id Producto: </label>
                        <input type="text" id="id_producto" name="id_producto" value="<?php echo $consulta[0] ?>">

                        <label for="">Producto: </label>
                        <input type="text" id="producto" name="producto" value="<?php echo $consulta[1] ?>">

                        <label for="">Descripción: </label>
                        <textarea style="border-radius: 10px;" cols="50" rows="3" name="descripcion"><?php echo $consulta[2] ?></textarea><br>

                        <br>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>

            <div id="footer">
                <img src="imagenes/" id="img2">
            </div>
        </div>
    </body>
</html>