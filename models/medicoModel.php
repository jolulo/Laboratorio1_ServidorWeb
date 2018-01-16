<?php
    include_once('Conexion.php'); 
    include_once("Persona.php");
    class medicoModel extends Persona{
        var $conn;  
        var $especialidad;
        var $id;
        var $id_persona;

        public function medicoModel(){
            $this->conn = new Conexion(); 
            $this->conn->Conexion();
        }
        public function registrarMedico(){

            $this->id_persona = $this->crearPersona();

            $sql = "INSERT INTO medico (especialidad,id_persona)
            VALUES ('" .$this->especialidad . "', " . $this->id_persona . ")";

            $res = $this->conn->executeQuery($sql);
            $this->conn->close();
            return $res;
        }
        public function consultarUnMedico($id){
            $this->conn = new Conexion(); 
            $sql = "SELECT p.*, m.id as id_medico, m.especialidad FROM persona p INNER JOIN medico m ON m.id_persona = p.id  AND p.id = " . $id;
            $res = $this->conn->executeQuery($sql);
            if($medico =  $res->fetch_object()){
                return $medico;
            }

           
        }
        public function consultarTodosMedicos(){
            $sql = "SELECT p.id, p.identificacion, p.nombres, p.apellidos,p.estado, m.especialidad FROM persona p INNER JOIN medico m ON m.id_persona = p.id ";
            $res = $this->conn->executeQuery($sql);
            return $res;
        }
        public function cerrarConexion(){
            $this->conn->close();
        }



        public function actualizarMedico(){
            if($this->editarPersona($this->id)){
                $sql ="update medico set especialidad='$this->especialidad' where id_persona=$this->id";
                $conexion = new Conexion();
                if($conexion->executeQuery($sql)){
                    $conexion->close();
                    return true;
                }
            }
        }

        public function inactivarMedico($id){
            $conexion = new Conexion();
            $sql = "update persona set estado = 0 where persona.id =$id";
            if($conexion->executeQuery($sql)){
                $conexion->close();
                return true;
            }
        }
    }
?>
