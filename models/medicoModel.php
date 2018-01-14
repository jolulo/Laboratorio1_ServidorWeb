<?php
    include('Conexion.php'); 
    include_once("Persona.php");
    class medicoModel extends Persona{
        var $conn;  
        var $especialidad;
        var $id;
        var $id_persona;

        public function medicoModel(){
            $this->conn = new Conexion; 
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
            $sql = "SELECT * FROM persona p INNER JOIN medico m ON m.id_persona = p.id AND p.estado = 1 AND p.id = " . $id;
            $res = $this->conn->executeQuery($sql);
            return $res;
        }
        public function consultarTodosMedicos(){
            $sql = "SELECT p.id, p.identificacion, p.nombres, p.apellidos, m.especialidad FROM persona p INNER JOIN medico m ON m.id_persona = p.id AND p.estado = 1;";
            $res = $this->conn->executeQuery($sql);
            return $res;
        }
        public function cerrarConexion(){
            $this->conn->close();
        }
    }
?>
