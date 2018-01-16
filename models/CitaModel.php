<?php

    include_once("medicoModel.php");
    include_once("PacienteModel.php");
    
    class CitaModel extends Persona{
        var $id;  
        var $id_medico;
        var $id_paciente;
        var $fecha_cita;
        var $hora_cita;
        var $fecha_solicitud;
        var $tipo_servicio;
        var $motivo;
        var $estado;



        function CitaModel(){

        }




    }