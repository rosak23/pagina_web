<?php

require_once "controllers/formulario.controllers.php";
require_once "models/formulario.php";

class ajaxFormulario{

    public $nombre;
    public $empresa;
    public $email;
    public $telefono;
    public $ciudad;
    public $soporte_actual;
    public $descripcion;


    public function ajaxRegistrarformulario(){

        $formulario = FormularioController::ctrguardarFormulario($this->nombre,$this->empresa,$this->email,$this->telefono,$this->ciudad,$this->soporte_actual,$this->descripcion);
        
        echo json_decode($formulario);
    }
    
}