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

    static public function ctrEliminarCategoria($IDusuario){

        $respuesta = ModeloCategorias :: mdlEliminarCategoria($IDusuario);
        return $respuesta;
       
    }

    static public function ctrActualizarCategoria($IDusuario, $categoria, $nombre, $codigo, $correo, $contraseña, $estado)
    {
        $respuesta = ModeloCategorias :: mdlActualizarCategoria($IDusuario,$categoria,$nombre,$codigo,$correo,$contraseña,$estado);
        return $respuesta;
    }




}
