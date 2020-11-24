<?php

    class base_datos{
        public $usuario = "root";
        public $pass = "";

        function __construct(){}

        function conectar(){
            try{
                $datos ="mysql:host=localhost;dbname=comics";
                $conectar =new PDO($datos,$this->usuario,$this->pass);
                return($conectar);

            }
            catch(PDOexeption $error){
                echo ($error->getMessage());
            }
        }
        function agregar_datos($consultaSql){
            $conectar =$this->conectar();
            $agregar =$conectar->prepare($consultaSql);
            $resultado =$agregar->execute();
            
            if($resultado){
                echo("datos agregados");
                
            }
            else{
                echo ("error sin datos");
            }
        }
        function consultar_datos($consultaSql){
            $conectar=$this->conectar();
            $consulta=$conectar->prepare($consultaSql);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $resultado=$consulta->execute();

            return($consulta->fetchAll());
        }
        function eliminar_datos($consulta){
            $conectar=$this->conectar();
            $eliminar=$conectar->prepare($consulta);
            $resultado=$eliminar->execute();

            if($resultado){
                echo("datos eliminados");
            }
            else{
                echo("los datos no se eliminaron");
            }
        }
        function editar_datos($consultaSql){
            $conectar=$this->conectar();
            $editar=$conectar->prepare($consultaSql);
            $resultado=$editar->execute();
        }
    }
?>