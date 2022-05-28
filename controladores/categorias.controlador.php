<?php

class ControladorCategorias {
    static public function ctrMostrarCategorias (){
        $respuesta = ModeloCategorias :: mdlMostrarCategorias();

        return $respuesta;


    }
}
