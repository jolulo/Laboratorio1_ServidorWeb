<?php

include_once "medicoModel.php";
include_once "PacienteModel.php";

class CitaModel extends Persona
{
    public $id;
    public $id_medico;
    public $id_paciente;
    public $fecha_cita;
    public $hora_cita;
    public $fecha_solicitud;
    public $tipo_servicio;
    public $motivo;
    public $estado;
    public $conn;

    public function CitaModel()
    {
        $this->conn = new Conexion();
        $this->conn->Conexion();
    }
    public function registrarCita(){
        $conexion = new Conexion();

        /*!!!!CAMBIAR LOS VALORES DE id_paciente, id_medico y estado por variables (modo prueba)*/
        $sql = "INSERT INTO cita (id_paciente, id_medico, fecha_cita, hora_cita, tipo_servicio, motivo, estado) 
        values ($this->id_paciente,$this->id_medico,'". $this->fecha_cita ."', '". $this->hora_cita . "', '" . 
        $this->tipo_servicio . "', '" . $this->motivo . "', 'Activo')";

        if($conexion->executeQuery($sql)){
            $conexion->close();
            return true;
        }
    }
    public function consultarCitaId($id)
    {
        $this->conn = new Conexion();
        $sql = "SELECT c.*, CONCAT(p1.nombres,' ', p1.apellidos) as nombre_medico, CONCAT(p2.nombres,' ', p2.apellidos) as nombre_paciente FROM cita c 
        INNER JOIN medico m ON c.id_medico = m.id 
        INNER JOIN persona p1 ON m.id_persona = p1.id
        INNER JOIN paciente pa ON c.id_paciente = pa.id
        INNER JOIN persona p2 ON pa.id_persona = p2.id
        WHERE c.id = " . $id;
        $res = $this->conn->executeQuery($sql);
        if ($cita = $res->fetch_object()) {
            return $cita;
        }
    }
    public function consultarCitas()
    {
        $sql = "SELECT c.*, CONCAT(p1.nombres,' ', p1.apellidos) as nombre_medico, CONCAT(p2.nombres,' ', p2.apellidos) as nombre_paciente FROM cita c 
        INNER JOIN medico m ON c.id_medico = m.id 
        INNER JOIN persona p1 ON m.id_persona = p1.id
        INNER JOIN paciente pa ON c.id_paciente = pa.id
        INNER JOIN persona p2 ON pa.id_persona = p2.id;";
        $res = $this->conn->executeQuery($sql);
       
        return $res;
    }
    public function cerrarConexion()
    {
        $this->conn->close();
    }

    public function actualizarCita(){
        $sql ="update cita set id_paciente=$this->id_paciente, id_medico = $this->id_medico,fecha_cita = '$this->fecha_cita', hora_cita='$this->hora_cita', tipo_servicio='$this->tipo_servicio', motivo ='$this->motivo', estado = '$this->estado' where id =$this->id";
        if($this->conn->executeQuery($sql)){
            $this->conn->close();
            return true;
        }
    }

    public function cancelarCita($id){
        $sql ="update cita set estado='Cancelado' where id =$id";
        if($this->conn->executeQuery($sql)){
            $this->conn->close();
            return true;
        }
    }
    
function contar(){
    $sql = "Select (select count(cita.id) from cita) as Citas,( select count(medico.id)  from medico) as Medicos, (select count(paciente.id)  from paciente)as Pacientes";
    $conexion = new Conexion();
    return $conexion->executeQuery($sql)->fetch_object();
    
}

}
