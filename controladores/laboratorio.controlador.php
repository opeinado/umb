<?php

class ControladorLaboratorio {
    static public function ctrMostrarLaboratorio (){
        $respuesta3 = ModeloLaboratorio :: mdlMostrarLaboratorio();

        return $respuesta3;


    }
}
