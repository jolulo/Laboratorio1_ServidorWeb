<?php 
include_once("Conexion.php");


class Persona{
  var $id;
  var $identificacion;
  var $nombres;
  var $apellidos;
  var $correo;
  var $estado;
  var $telefono;
  var $direccion;
  var $ciudad;
  var $departamento;
  var $f_nacimiento;
  var $sexo;

  function Persona(){}

   function crearPersona(){
      $conexion = new Conexion();
      $sql ="insert into persona (identificacion,nombres,apellidos,correo,telefono,direccion,ciudad,departamento,f_nacimiento,sexo) values".
      "($this->identificacion,'$this->nombres','$this->apellidos','$this->correo','$this->telefono','$this->direccion','$this->ciudad','$this->departamento','$this->f_nacimiento','$this->sexo')";

      if($conexion->executeQuery($sql)){
       
       $id =$conexion->lastId();  
       $conexion->close();
         return $id;
      }else{
        return false;
      }

   }

   function editarPersona(){

   }

   function buscarPersonaId($id){

   }

   function listarPersonas(){}


    function inactivarPersona($id){

    }

   

}


?>