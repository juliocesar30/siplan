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
            $this->usuario = "siplan_admin";
            $this->clave = "key";
            case 2:
            $this->usuario = "siplan_admin";
            $this->clave = "key";
            case 3:
            $this->usuario = "siplan_admin";
            $this->clave = "key";
            case 4:
            $this->usuario = "siplan_admin";
            $this->clave = "key";
            case 5:
            $this->usuario = "siplan_consultas";
            $this->clave = "IEwmQLQfNYmaRkih";
        }
       $conn = new mysqli($this->host,$this->usuario,$this->clave,$this->db);
       return $conn;
    }
}
?>
