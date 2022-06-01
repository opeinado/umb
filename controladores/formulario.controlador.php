<?php

class ControladorFormulario {
    static public function ctrMostrarFormulario (){
        $respuesta2 = ModeloFormulario :: mdlMostrarFormulario();

        return $respuesta2;


    }
    static public function ctrRegistrarFormulario($laboratorio,$item,$cant,$placa,$descripcion,$marca,$modelo,$serie,$ubicacion,$estado,$observacion,$Vunitario,$Vtotal){

        $respuesta2 = ModeloFormulario :: mdlRegistrarFormulario($laboratorio,$item,$cant,$placa,$descripcion,$marca,$modelo,$serie,$ubicacion,$estado,$observacion,$Vunitario,$Vtotal);
        return $respuesta2;
       
    }
}
