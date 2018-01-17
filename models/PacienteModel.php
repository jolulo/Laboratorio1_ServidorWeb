<?php 
include_once("Conexion.php");
include_once("Persona.php");

class Paciente extends Persona{
var $id;
var $numero_seguro;
var $id_persona;
   

function __construct(){}


function crearPaciente(){

 $this->id_persona = $this->crearPersona();
 $conexion = new Conexion();
 $sql = "insert into paciente(num_seguro,id_persona) values('$this->numero_seguro',$this->id_persona)";
 if($conexion->executeQuery($sql)){
     $conexion->close();
     return true;
 }

}

function buscarPacienteId($id){

        $conexion = new Conexion();
        $sql = "select persona.*, paciente.id as id_paciente, paciente.num_seguro from persona inner join paciente on persona.id = paciente.id_persona and (persona.id = $id or paciente.id =$id)";
        $res = $conexion->executeQuery($sql);
        $paciente = new Paciente();
        if ($obj = $res->fetch_object()) {
                
                $paciente = $obj;
                if($paciente->estado ==1){
                    $paciente->estado = "Activo";
                }else{ 
                    $paciente->estado = "Inactivo";
                }
                
        }
    $conexion->close();
    return $paciente;
}

function listarPacientes(){
   $conexion = new Conexion();
   $sql = "select persona.*, paciente.id as id_paciente, paciente.num_seguro from persona inner join paciente on persona.id = paciente.id_persona";
   $res = $conexion->executeQuery($sql);
   $pacientes = array();
   while ($obj = $res->fetch_object()) {
    $paciente = new Paciente();
    $paciente = $obj;
    if($paciente->estado ==1){
        $paciente->estado = "Activo";
    }else{ 
        $paciente->estado = "Inactivo";
    }
    array_push($pacientes,$paciente);

  }

  $conexion->close();

  return $pacientes;



}

function editarPaciente(){
  if($this->editarPersona($this->id_persona)){
      $sql ="update paciente set num_seguro='$this->numero_seguro' where id_persona=$this->id_persona";
      $conexion = new Conexion();
      if($conexion->executeQuery($sql)){
          $conexion->close();
          return true;
      }
  }

}

function inactivarPaciente($id){
    $conexion = new Conexion();
    $sql = "update persona set estado = 0 where persona.id =$id";
    if($conexion->executeQuery($sql)){
        $conexion->close();
        return true;
    }
   


}



}




?>