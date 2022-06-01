<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class ajaxCategorias
{

    public $IDusuario;
    public $categoria;
    public $nombre;
    public $codigo;
    public $correo;
    public $contraseña;
    public $estado;


    public function MostrarCategorias()
    {

        $respuesta = ControladorCategorias::ctrMostrarCategorias();

        echo json_encode($respuesta);
    }


    public function registrarCategorias()
    {

        $respuesta = ControladorCategorias::ctrRegistrarCategorias($this->categoria, $this->nombre, $this->codigo, $this->correo, $this->contraseña, $this->estado);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function eliminarCategoria()
    {
        $respuesta = ControladorCategorias::ctrEliminarCategoria($this->IDusuario);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

    public function actualizarCategoria()
    {
        $respuesta = ControladorCategorias::ctrActualizarCategoria($this->IDusuario, $this->categoria, $this->nombre, $this->codigo, $this->correo, $this->contraseña, $this->estado);
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }




}
if (!isset($_POST["accion"])) {
    $respuesta = new ajaxCategorias();
    $respuesta->MostrarCategorias();
} else {

    if ($_POST["accion"] == "registrar") {
        $insertar = new ajaxCategorias();
        $insertar->categoria = $_POST["categoria"];
        $insertar->nombre = $_POST["nombre"];
        $insertar->codigo = $_POST["codigo"];
        $insertar->correo = $_POST["correo"];
        $insertar->contraseña = $_POST["contraseña"];
        $insertar->estado = $_POST["estado"];
        $insertar->registrarCategorias();
    }

    if ($_POST["accion"] == "eliminar"){
        $eliminar = new ajaxCategorias();
        $eliminar->IDusuario = $_POST["IDusuario"];
        $eliminar->eliminarCategoria();

    }

    if ($_POST["accion"] == "actualizar"){
        $actualizar = new ajaxCategorias();

        $actualizar->IDusuario = $_POST["IDusuario"];
        $actualizar->categoria = $_POST["categoria"];
        $actualizar->nombre = $_POST["nombre"];
        $actualizar->codigo = $_POST["codigo"];
        $actualizar->correo = $_POST["correo"];
        $actualizar->contraseña = $_POST["contraseña"];
        $actualizar->estado = $_POST["estado"];
        $actualizar->actualizarCategoria();

    }
}
