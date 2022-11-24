<?php

require_once "coneccion.php";

class FormularioModel{

    static public function guardarFormulario($nombre, $empresa, $email, $telefono, $ciudad, $soporte_actual, $descripcion){
        
        $stm = Conexion::conectar()->prepare( "INSERT INTO formulario(  nombre, empresa, email, telefono, ciudad, soporte_actual, descripcion)
        VALUES( :nombre, :empresa, :email, :telefono, :ciudad, :soporte_actual, :descripcion)");


        $stm -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stm ->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stm ->bindParam(":email", $email, PDO::PARAM_STR);
        $stm ->bindParam(":telefono", $telefono, PDO::PARAM_STR);
        $stm ->bindParam(":ciudad", $ciudad,PDO::PARAM_STR);
        $stm ->bindParam(":soporte_actual", $soporte_actual,PDO::PARAM_STR);
        $stm ->bindParam(":descripcion", $descripcion,PDO::PARAM_STR);
    

        if($stm -> execute()){
            $mensaje = "Envio de Solicitud con exito!!!";
        }else{
            $mensaje = "Ha fallado el envio!!!";
        }

        
        $stm = null;

        return 'guardado';
    }














}