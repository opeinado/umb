<?php
require_once "conexion.php";

class ModeloCategorias
{

    static public function mdlMostrarCategorias()
    {
        $stmt = Conexion::conectar()->prepare("SELECT IDusuario,categoria,nombre,codigo,correo,contraseña,estado,'X' as acciones FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function mdlRegistrarCategorias($categoria, $nombre, $codigo, $correo, $contraseña, $estado)
    {

        $sql = ("INSERT INTO usuarios(categoria,nombre,codigo,correo,contraseña,estado) VALUES (?,?,?,?,?,?)");
        $dataInsert = [
            $categoria, $nombre, $codigo, $correo, $contraseña, $estado
        ];
        $stmt = Conexion::conectar()->prepare($sql);
        if ($stmt->execute($dataInsert)) {
            return "la categoria se registro correctamente";
        } else {
            return "Error, no se pudo registrar la categoria";
        }
    }



    static public function mdlEliminarCategoria($IDusuario)
    {

        $sql = "DELETE FROM usuarios WHERE IDusuario=?";
        $dataDelete = [
            $IDusuario
        ];

        $stmt = Conexion::conectar()->prepare($sql);

        if ($stmt->execute($dataDelete)) {

            return "la categoria se elimino correctamente";
        } else {
            return "Error, no se pudo eliminar categoria";
        }
    }



    static public function mdlActualizarCategoria($IDusuario, $categoria, $nombre, $codigo, $correo, $contraseña, $estado)
    {
        $sql = ("UPDATE usuarios
                        SET categoria = :categoria,
                        nombre = :nombre,
                        codigo = :codigo,
                        correo = :correo,
                        contraseña = :contraseña,
                        estado = :estado 
                        WHERE IDusuario=?");
        $dataInsert = [
            $IDusuario, $categoria, $nombre, $codigo, $correo, $contraseña, $estado
        ];
        $stmt = Conexion::conectar()->prepare($sql);
        if ($stmt->execute($dataInsert)) {
            return "la categoria se actualizo correctamente";
        } else {
            return "Error, no se pudo actualiar la categoria";
        }
    }
}

//$sql = "DELETE FROM users WHERE IDusuario=?";
//$stmt= Conexion::conectar()->prepare($sql);
//$stmt->execute([$id]);
