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

    function guardar(){
       require_once('conexion.php');
       extract($_POST);
       $sql = "call guarda_IndicadorProyecto($id_proyecto,'$fin_objetivo','$fin_nombre','$fin_metodo',$fin_tipo,$fin_dimension,$fin_frecuencia,$fin_sentido,'$fin_umedida','$fin_meta','$fin_medio_verifica','$fin_supuesto','$proposito_objetivo','$proposito_nombre','$proposito_metodo',$proposito_tipo,$proposito_dimension,$proposito_frecuencia,$proposito_sentido,'$proposito_umedida','$proposito_meta','$proposito_medio_verifica','$proposito_supuesto')";
       $conn = new conexion();
       $conexion = $conn->conectar($_SESSION['id_perfil']);
       if($conexion->query($sql)){
           $conexion->close();
           return "guardado";
       }else{
           $error = "Error: ".$conexion->error;
           $conexion->close;
           return $error;
       }


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
			print($accion->guardar());
		break;
		case 3:
			$res = $accion->actualizar();
			echo $res;
		break;
		case 4:
			$accion->informacion();
			echo $accion;
		break;
	}

}

?>
