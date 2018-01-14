<?php
@session_start();
include_once(dirname(__FILE__)."/../models/medicoModel.php");

    if(isset($_GET['accion'])){
        if($_GET['accion'] == "registrar"){
            $medico = new medicoModel();
            $medico->identificacion = $_POST['identificacion'];
            $medico->nombres=$_POST['nombres'];
            $medico->apellidos= $_POST['apellidos'];
            $medico->correo= $_POST['correo'];
            $medico->telefono = $_POST['telefono'];
            $medico->direccion =$_POST['direccion'];
            $medico->ciudad = $_POST['ciudad'];
            $medico->departamento= $_POST['departamento'];
            $medico->f_nacimiento= $_POST['fnacimiento'];
            $medico->sexo = $_POST['genero'];
            $medico->especialidad = $_POST['especialidad'];
            $medicoController = new medicoController();
            if($medicoController->registrarMedico($medico)){
                header("location: ../views/medico/consultar.php");
            }
            else{
                echo "Error";
            }
        }
        
        /*if($_GET['accion']=="listar"){
            $pacienteController = new PacienteController(new Paciente());
            $pacientes = $pacienteController->listarPacientes();
        }
        if($_GET['accion'] == "consultar"){
            $id = $_GET['id'];
        }*/
    }
    
    class medicoController{
        var $model;
        
        public function medicoController(){
            $this->model = new medicoModel();
        }
        public function registrarMedico($medico){
            $this->model = $medico;
            return $this->model->registrarMedico();
        }
        public function consultarUnMedico($id){
            return $this->model->consultarUnMedico($id);
        }

        public function consultarTodosMedicos(){
            return $this->model->consultarTodosMedicos();
        }
        public function cerrarConexion(){
            $this->model->cerrarConexion();
        }
    }
?>