<?php


class usuario{

    function informacion($u,$c,$conexion){
        $Consulta = "call infoUsuario('$u','$c')";
        $ExConsulta = $conexion->query($Consulta);
        $Resultado  = $ExConsulta->fetch_assoc();
        return  $Resultado;
     }
}


?>
