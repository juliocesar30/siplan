<?php
    session_start();
    unset($_SESSION);
    session_destroy();
include("class/conexion.php");
$conn = new conexion();
$conexion = $conn->conectar(5);
if ( $conexion->connect_errno ) {
 $error_msg_mysql = $conexion->connect_errno;
 include("views/error_conn.php");
 exit();
}
$ConsultaConfiguraciones = "SELECT valor FROM configuracion";
$ExQuery = $conexion->query($ConsultaConfiguraciones);
$x = 0;
while($ResQuery = $ExQuery->fetch_array()){
    $conf[$x] = $ResQuery[0];
    $x=$x+1;
}
$conexion->close();
if($conf[0] == 1){
    require_once("views/login.php");
}else{
    require_once("views/mantenimiento.php");
}
?>

