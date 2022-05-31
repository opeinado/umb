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
        echo json_encode($respuesta);
    }
}
if (!isset($_POST["categoria"])) {
    $respuesta = new ajaxCategorias();
    $respuesta->MostrarCategorias();
} else {
    $insertar = new ajaxCategorias();
    $insertar->categoria = $_POST["categoria"];
    $insertar->nombre = $_POST["nombre"];
    $insertar->codigo = $_POST["codigo"];
    $insertar->correo = $_POST["correo"];
    $insertar->contraseña = $_POST["contraseña"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarCategorias();
}
