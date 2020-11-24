<?php 
    include("base_datos.php");

    $id=$_GET['id'];

    $objeto= new base_datos();
    $consulta= "DELETE  FROM productos WHERE id= '$id'";
    $objeto->eliminar_datos($consulta);
    header("location:./../productos.php");
?>