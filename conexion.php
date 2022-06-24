<?php
    $conexion = new mysqli('localhost', 'root', '', 'baselogin');
//comprobar conexión
if(mysqli_connect_errno()){
    printf("Fallo la conexión");
}else{
    //printf("Estas conectado");
}
?>