<?php 
require_once "conexion.php";

class ModeloCategorias{

    static public function mdlMostrarCategorias(){
        $stmt = Conexion::conectar()-> prepare ("SELECT IDusuario,categoria,nombre,codigo,correo,contraseña,estado,'X' as acciones FROM usuarios");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt = null;

    }
}


?>