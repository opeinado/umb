<?php

require_once "../controladores/formulario.controlador.php";
require_once "../modelos/formulario.modelo.php";

class ajaxFormulario {
    public function MostrarFormulario() {
        
        $respuesta2 = ControladorFormulario::ctrMostrarFormulario();

        echo json_encode($respuesta2);


    }
}
$respuesta2 = new ajaxFormulario();
$respuesta2 -> MostrarFormulario();

?>