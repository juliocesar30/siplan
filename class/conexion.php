<?php
//Clase para conectarse/desconectarse a la base de datos
class conexion {
      private $host;
      private $db;
      private $usuario;
      private $clave;
    function conectar($u){
        $this->host = "localhost";
        $this->db = "siplan";
        switch($u){
            case 1:
            $this->usuario = "usr_siplan";
            $this->clave = "siplan.2016";
            break;
            case 2:
            $this->usuario = "usr_siplan";
            $this->clave = "siplan.2016";
            break;
            case 3:
            $this->usuario = "usr_siplan";
            $this->clave = "siplan.2016";
            break;
            case 4:
            $this->usuario = "usr_siplan";
            $this->clave = "siplan.2016";
            break;
            case 5:
            $this->usuario = "usr_siplan";
            $this->clave = "siplan.2016";
            break;
        }
       $conn = new mysqli($this->host,$this->usuario,$this->clave,$this->db);
       return $conn;
    }
}
?>
