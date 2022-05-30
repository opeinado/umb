<?php 
require_once "conexion.php";

class ModeloLaboratorio{

    static public function mdlMostrarLaboratorio(){
        $stmt3 = Conexion::conectar()-> prepare ("SELECT IDlaboratorio,laboratorio,estado,'X' as acciones FROM laboratorio");
        $stmt3 -> execute();
        return $stmt3 -> fetchAll();
        $stmt3 = null;

    }
}


?>