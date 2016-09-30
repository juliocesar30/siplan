<?php
session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
    die("Error de inicio de sesion");
}

class indicador_proyecto {

    function buscar(){
       require_once('conexion.php');
       extract($_POST);
       $sql = "SELECT COUNT(*) FROM indicadores_proyecto WHERE id_proyecto = $idproyecto";
       $conn = new conexion();
       $conexion = $conn->conectar($_SESSION['id_perfil']);
       $ExeConsulta = $conexion->query($sql);
       $conexion->close();
       $Res = $ExeConsulta->fetch_array();
       return $Res[0];
    }

    function agregar(){
        return "underm";
    }

    function actualizar(){
        return "underm";
    }

    function informacion(){
    	return "under";
    }


}

if(isset($_POST['accion'])){
    $accion = new indicador_proyecto();
	switch($_POST['accion']){
		case 1:
			echo $accion->buscar();
		break;
		case 2:
			$accion->agregar();
			echo $accion;
		break;
		case 3:
			$accion->actualizar();
			echo $accion;
		break;
		case 4:
			$accion->informacion();
			echo $accion;
		break;
	}

}

?>
