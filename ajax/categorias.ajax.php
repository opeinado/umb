<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class ajaxCategoria {
    public function MostrarCategorias() {
        
        $respuesta = ControladorCategorias::ctrMostrarCategoria();

        echo json_decode($respuesta);


    }
}
$respuesta = new ajaxCategoria();
$respuesta -> MostrarCategorias();

?>