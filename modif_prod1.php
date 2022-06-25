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
<html lang="en">
<head>

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Producto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css1/estilos2.css">
	<link rel="stylesheet" href="whatsapp.css">
	<link rel="stylesheet" href="Productos/index2">
<body>
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=3244172455&text=Hola,%20bienvenidos" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
		<header class="Tituloosm">       
			<div class="barra">
				<h2>Categorias<img src="img/menu.png" alt=""  width="50" height="50"></h2>
        <ul>
            <p><li><a class="active" href="index2.php">Inicio</a></li></p>
            <p><li><a href="index.php">Salir</a></li></p>
			
        </center></ul>
    
</div> 
</header>
<header>
	<article class="#">
			<footer class="row justify-content-center redes-sociales">
							
							<p class="#">E BUSINESS CJ</p> 					
</header>
<main class="container">
		<div class="row nosotros justify-content-center">
			<div class="col-12 text-center">
				<h2 class="subtitulo"></h2>
				<h3 class="titulo">escoja uno de los mejores productos para subir.</h3>
				
			</div>
		</div>

		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"></h2>
				<p class="titulo"><span<h1>Modificar Producto</h1></span></p>
				
			</article>

            <div class="todo">
            
            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 1px 5px;">
                    <span></span>
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
            <div id="cabecera">
                <img src="img/fondo2.jpg" width="1188" id="img1">
            </div>

           
        </div>
	</main>

	<div class="separador text-center text-white">
		<p><q>Un nuevo look para tu hogar</q></p>
	</div>
	<script src="js1/main.js"></script>
</body>
</html>