<?php
session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
    die("Error de inicio de sesion");
}
if($_SESSION['id_perfil'] == 5){
    die("Usted no tiene permiso para agregar/editar");
}

require_once('conexion.php');
extract($_POST);
$MarcoEstrategicoQuery = "SELECT COUNT(*) FROM marco_estrategico WHERE id_dependencia = ".$_SESSION['id_dependencia']." AND ejercicio = ".$_SESSION['ejercicio'];
$conn = new conexion();
$conexion = $conn->conectar($_SESSION['id_perfil']);
$ExMarco = $conexion->query($MarcoEstrategicoQuery);
$conexion->close();
$ResMarco = $ExMarco->fetch_array();
$dep = $_SESSION['id_dependencia'];
$ejercicio = $_SESSION['ejercicio'];
	if($ResMarco[0] == 0){

        $GuardarRegistro = "call agregaMarcoEstrategico($dep,'$resultado','$actividad,'$mision','$vision','$ejercicio')";


        $conexion = $conn->conectar($_SESSION['id_perfil']);
        if($conexion->query($MarcoEstrategicoQuery)){
           echo "guardado";
        }else{
            echo "error";
        }
        $conexion->close();

	}else{
        echo "Actualizar nuevo";
    }

?>
