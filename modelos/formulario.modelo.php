<?php
require_once "conexion.php";

class ModeloFormulario
{

    static public function mdlMostrarFormulario()
    {
        $stmt2 = Conexion::conectar()->prepare("SELECT IDequipo,laboratorio,item,cant,placa,descripcion,marca,modelo,serie,ubicacion,estado,observacion,Vunitario,Vtotal,'X' as acciones FROM formulario");
        $stmt2->execute();
        return $stmt2->fetchAll();
        $stmt2 = null;
    }

    static public function mdlRegistrarFormulario($laboratorio,$item,$cant,$placa,$descripcion,$marca,$modelo,$serie,$ubicacion,$estado,$observacion,$Vunitario,$Vtotal){
                
        $sql=("INSERT INTO formulario(laboratorio,item,cant,placa,descripcion,marca,modelo,serie,ubicacion,estado,observacion,Vunitario,Vtotal) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");                
        $dataInsert = [
            $laboratorio
            ,$item
            ,$cant
            ,$placa
            ,$descripcion
            ,$marca
            ,$modelo
            ,$serie
            ,$ubicacion
            ,$estado
            ,$observacion
            ,$Vunitario
            ,$Vtotal
        ];        
        $stmt2=Conexion::conectar()->prepare($sql);
        if($stmt2->execute($dataInsert)){
            return "la categoria se registro correctamente";
        }else {
            return "Error, no se pudo registrar la categoria";
        }
    }




}
