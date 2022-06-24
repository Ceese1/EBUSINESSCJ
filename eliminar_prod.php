<?php
    eliminarProducto($_GET['no']);

    function eliminarProducto($no){
        include "conexion.php";
        $sentencia = "DELETE FROM productos WHERE no='".$no."' ";
        $conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Producto Eliminado!");
    window.location.href='index2.php';
</script>