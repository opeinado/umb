<?php

class ControladorCategorias {
    static public function ctrMostrarCategoria (){
        $respuesta = ModeloCategoria :: mdlMostrarCategorias();

        return $respuesta;


    }
}
