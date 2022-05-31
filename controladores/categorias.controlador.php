<?php

class ControladorCategorias {
    
    static public function ctrMostrarCategorias (){
        $respuesta = ModeloCategorias :: mdlMostrarCategorias();

        return $respuesta;


    }
    static public function ctrRegistrarCategorias($categoria,$nombre,$codigo,$correo,$contraseña,$estado){

        $respuesta = ModeloCategorias :: mdlRegistrarCategorias($categoria,$nombre,$codigo,$correo,$contraseña,$estado);
        return $respuesta;
       
    }




}
