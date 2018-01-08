<?php
        
        
        class Conexion{
            var $username;
            var $password;
            var $host;
            var $db;
            var $mysqli;

            function Conexion(){
                $this->mysqli = new mysqli($this->host, $this->username,$this->password, $this->db);
                if($this->$mysqli -> connect_error){
                    die("Error de conexión (" . $this->mysqli -> connect_errno . ")" . $this->mysqli -> connect_error);
                }
            
            }


        }

        function exexuteQuery($sql){

            $res = $this->mysqli->query($sql);
             return $res;
            
          
        }
        
        function close(){
            $this->mysqli->close();
        }
		
	?>