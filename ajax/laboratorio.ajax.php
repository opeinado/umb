<?php

require_once "../controladores/laboratorio.controlador.php";
require_once "../modelos/laboratorio.modelo.php";

class ajaxLaboratorio {
    public function MostrarLaboratorio() {
        
        $respuesta3 = ControladorLaboratorio::ctrMostrarLaboratorio();

        echo json_encode($respuesta3);


    }
}
$respuesta3 = new ajaxLaboratorio();
$respuesta3 -> MostrarLaboratorio();

?>