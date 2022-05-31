<?php 
require_once "conexion.php";

class ModeloCategorias{

    static public function mdlMostrarCategorias(){
        $stmt = Conexion::conectar()-> prepare ("SELECT IDusuario,categoria,nombre,codigo,correo,contraseña,estado,'X' as acciones FROM usuarios");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt = null;

    }

    static public function mdlRegistrarCategorias($categoria,$nombre,$codigo,$correo,$contraseña,$estado){
                
        $sql=("INSERT INTO usuarios(categoria,nombre,codigo,correo,contraseña,estado) VALUES (?,?,?,?,?,?)");                
        $dataInsert = [
            $categoria
            ,$nombre
            ,$codigo
            ,$correo
            ,$contraseña
            ,$estado
        ];        
        $stmt=Conexion::conectar()->prepare($sql);
        if($stmt->execute($dataInsert)){
            return "la categoria se registro correctamente";
        }else {
            return "Error, no se pudo registrar la categoria";
        }
    }
}
