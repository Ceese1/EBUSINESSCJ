<?php

    modificarProducto($_POST['no'], $_POST['id_producto'], $_POST['producto'], $_POST['descripcion']);

    function modificarProducto($no, $id_prod, $nom, $descrip){
        include "conexion.php";
        $sentencia = "UPDATE productos SET id_producto='".$id_prod."', nombre='".$nom."', descripcion='".$descrip."' WHERE no='".$no."' ";
        $conexion->query($sentencia) or die("Error al actualizar datos".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Datos actualizados exitosamente!!");
    window.location.href="index2.php";
</script>