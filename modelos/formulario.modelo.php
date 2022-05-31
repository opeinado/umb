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
}
