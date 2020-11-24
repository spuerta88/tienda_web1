<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/style_prod.css">
</head>
<body>
    <?php
        include("php/base_datos.php");

        $objeto=new base_datos();
        $consulta="SELECT * FROM productos WHERE 1";
        $resultado=$objeto->consultar_datos($consulta);
    ?>
    <div class= "contenedor">
        <nav>
            <h1>tienda comic</h1>
            <a href="index.html">registro</a>
            <a href="productos.php">productos</a>
        </nav>
        <div class="box">
            <?php foreach($resultado as $resultados): ?>
                <div class="tarjeta">
                    <img src="<?php echo $resultados['foto']; ?>" alt="imagen comic">
                    <p><?php echo $resultados['nombre']; ?> </p>
                    <p><?php echo $resultados['marca']; ?> </p>
                    <p><?php echo $resultados['precio']; ?> </p>
                    <p><?php echo $resultados['descripcion']; ?> </p>
                    <div class="botones">
                        <a class="ed" onclick="abrir()">editar</a>
                        <a class="el" href="php/eliminar_datos.php?id=<?php echo $resultados['id']; ?>">eliminar</a>
                    </div>
                </div>

                <div id="modal">
                    <form action="php/editar_datos.php?id=<?php echo $resultados['id']; ?>"method="POST">

                        <p onclick="cerrar()">&times;</p>
                        <h4>actualizar datos</h4>
                        <input type="text"name="nombre"value="<?php echo $resultados['nombre']; ?>">
                        <input type="text"name="marca"value="<?php echo $resultados['marca']; ?>">
                        <input type="text"name="precio"value="<?php echo $resultados['precio']; ?>">
                        <input type="text"name="descripcion"value="<?php echo $resultados['descripcion']; ?>">
                        <input type="submit"name="btn"value="actualizar">
                    </form>
                </div>
            <?php endforeach ?>
        
        </div>
        <footer>
            <span>&copy;todos los derechos reservados</span>
        </footer>

    </div>
</body>
</html>

<script>
    function abrir(){
        document.getElementById('modal').style.display='block';

    }
    function cerrar(){
        document.getElementById('modal').style.display='none';

    }
</script>