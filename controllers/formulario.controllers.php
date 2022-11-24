<?php

class FormularioController{


    static public function ctrguardarFormulario($nombre, $empresa, $email, $telefono, $ciudad, $soporte_actual, $descripcion){

        $ctrguardarFormulario = FormularioModel::guardarFormulario($nombre, $empresa, $email, $telefono, $ciudad, $soporte_actual, $descripcion);

        return $ctrguardarFormulario;
    }



}