<?php

    include ("base_datos.php");

    if (isset($_POST['registro'])){
        $nombre= $_POST['nombre'];
        $marca= $_POST['marca'];
        $precio= $_POST['precio'];
        $imagen= $_POST['imagen'];
        $descripcion= $_POST['descripcion'];

        $objeto_base= new base_datos();
        $consulta= "INSERT INTO productos (nombre,marca,precio,foto,descripcion) VALUES ('$nombre','$marca','$precio','$imagen','$descripcion')";

        $objeto_base->agregar_datos($consulta);
        header("location:./../index.html");
    }

?>