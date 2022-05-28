<?php

class ControladorFormulario {
    static public function ctrMostrarFormulario (){
        $respuesta2 = ModeloFormulario :: mdlMostrarFormulario();

        return $respuesta2;


    }
}
