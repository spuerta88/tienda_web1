<?php 
    include("base_datos.php");

    if(isset($_POST['btn'])){
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
        $precio=$_POST['precio'];
        $descripcion=$_POST['descripcion'];

        $actualizar = new base_datos();
        $consulta = "UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion' WHERE id='$id'";
        $actualizar->editar_datos($consulta);

        header("location:./../productos.php");
    }
?>