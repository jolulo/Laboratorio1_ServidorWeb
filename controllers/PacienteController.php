<?php
@session_start();
include_once(dirname(__FILE__)."/../models/PacienteModel.php");

if(isset($_GET['accion'])){
    if($_GET['accion'] == "registrar"){
            
            $paciente = new Paciente();
            $paciente->identificacion = $_POST['identificacion'];
            $paciente->nombres=$_POST['nombres'];
            $paciente->apellidos= $_POST['apellidos'];
            $paciente->correo= $_POST['correo'];
            $paciente->telefono = $_POST['telefono'];
            $paciente->direccion =$_POST['direccion'];
            $paciente->ciudad = $_POST['ciudad'];
            $paciente->departamento= $_POST['departamento'];
            $paciente->f_nacimiento= $_POST['f_nacimiento'];
            $paciente->sexo = $_POST['sexo'];
            $paciente->numero_seguro = $_POST['seguro'];
            $pacienteController = new PacienteController($paciente);
           if($pacienteController->crearPaciente()){
                header("location: ../views/paciente/ViewListarPaciente.php");
           }else{
               echo "Error";
           }
    }

    if($_GET['accion']=="listar"){
        $pacienteController  =   new PacienteController(new Paciente());
        $pacientes = $pacienteController->listarPacientes();

    }

    if($_GET['accion'] == "consultar"){
        $id = $_GET['id'];
        $pacienteController = new PacienteController(new Paciente());
        $paciente = $pacienteController->buscarPaciente($id);
    }

    if($_GET['accion'] == "inactivar"){
        $id = $_GET['id'];
        $pacienteController = new PacienteController(new Paciente());
        $paciente = $pacienteController->inactivarPaciente($id);
    }

}


class PacienteController{
    
        var $model;
        
       function PacienteController($model){

          $this->model = $model;
        }

        function crearPaciente(){
            return $this->model->crearPaciente();
        }

        function listarPacientes(){
         return  $this->model->listarPacientes();

        }

        function buscarPaciente($id){
            return $this->model->buscarPacienteId($id);
        }

        function inactivarPaciente($id){
             if($this->model->inactivarPaciente($id)){
                 header("location: ../views/paciente/ViewListarPaciente.php?accion=listar");
             }

        }
    
      
    
    }
    


?>