<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class ajaxCategorias {
    public function MostrarCategorias() {
        
        $respuesta = ControladorCategorias::ctrMostrarCategorias();

        echo json_encode($respuesta);


    }
}
$respuesta = new ajaxCategorias();
$respuesta -> MostrarCategorias();

?>