<?php

require_once "../controladores/formulario.controlador.php";
require_once "../modelos/formulario.modelo.php";

class ajaxFormulario
{

    public $IDequipo;
    public $laboratorio;
    public $item;
    public $cant;
    public $placa;
    public $descripcion;
    public $marca;
    public $modelo;
    public $serie;
    public $ubicacion;
    public $estado;
    public $observacion;
    public $Vunitario;
    public $Vtotal;


    public function MostrarFormulario()
    {

        $respuesta2 = ControladorFormulario::ctrMostrarFormulario();

        echo json_encode($respuesta2);
    }

    public function registrarFormulario()
    {

        $respuesta2 = ControladorFormulario::ctrRegistrarFormulario($this->laboratorio, $this->item, $this->cant, $this->placa, $this->descripcion, $this->marca, $this->modelo, $this->serie, $this->ubicacion, $this->estado, $this->observacion, $this->Vunitario, $this->Vtotal);
        echo json_encode($respuesta2,JSON_UNESCAPED_UNICODE);
    }

    public function eliminarFormulario()
    {
        $respuesta2 = ControladorFormulario::ctrEliminarFormulario($this->IDequipo);
        echo json_encode($respuesta2, JSON_UNESCAPED_UNICODE);
    }






}

if (!isset($_POST["accion"])) {

    $respuesta2 = new ajaxFormulario();
    $respuesta2->MostrarFormulario();
}else {
    if ($_POST["accion"] == "registrar") {
    $insertar = new ajaxFormulario();
    $insertar->laboratorio = $_POST["laboratorio"];
    $insertar->item = $_POST["item"];
    $insertar->cant = $_POST["cant"];
    $insertar->placa = $_POST["placa"];
    $insertar->descripcion = $_POST["descripcion"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->serie = $_POST["serie"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->estado = $_POST["estado"];
    $insertar->observacion = $_POST["observacion"];
    $insertar->Vunitario = $_POST["Vunitario"];
    $insertar->Vtotal = $_POST["Vtotal"];
    $insertar->registrarFormulario();
    }
    if ($_POST["accion"] == "eliminar"){
        $eliminar = new ajaxFormulario();
        $eliminar->IDequipo = $_POST["IDequipo"];
        $eliminar->eliminarFormulario();

    }
    
}
