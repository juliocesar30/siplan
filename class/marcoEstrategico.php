<?php
session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
    die("Error de inicio de sesion");
}


class marco_estrategico{

    function guardar(){
        extract($_POST);
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        require_once('conexion.php');
        $mision = addslashes($mision);
        $vision = addslashes($vision);
        $objetivo = addslashes($objetivo);
        $actividad = addslashes($actividad);
        $ConsultaAgregar = "call registraMarcoEstrategico($dep,'$mision','$vision','$objetivo','$actividad','$ejercicio')";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
        if($conexion->query($ConsultaAgregar)){
            $conexion->close();
            return "guardado";
        }else {
            $error = $conexion->error;
            $conexion->close();
            return $error;
        }
    }

    function actualizar(){

         extract($_POST);
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        require_once('conexion.php');
        $mision = addslashes($mision);
        $vision = addslashes($vision);
        $objetivo = addslashes($objetivo);
        $actividad = addslashes($actividad);
        $ConsultaAgregar = "call actualizaMarcoEstrategico($dep,'$mision','$vision','$objetivo','$actividad','$ejercicio')";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
        if($conexion->query($ConsultaAgregar)){
            $conexion->close();
            return "actualizado";
        }else {
            $conexion->close();
            return "error";
        }

    }

    function contar(){

        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        require_once('conexion.php');
        $Consulta = "call contarMarcoEstrategico($dep,'$ejercicio')";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExConsulta = $conexion->query($Consulta);
        $conexion->close();
        $Res = $ExConsulta->fetch_array();
        return $Res[0];

    }

    function informacion(){

        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        require_once('conexion.php');
        $Consulta = "call infoMarcoEstrategico($dep,'$ejercicio')";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
        $ExConsulta = $conexion->query($Consulta);
        $conexion->close();
        $Res = $ExConsulta->fetch_array();
        return $Res;
    }
}

if(isset($_POST['accionMarco'])){
    if($_POST['accionMarco'] == 1){
        $marco = new marco_estrategico();
        $exeMarco = $marco->contar();
        echo $exeMarco;
    }
    if($_POST['accionMarco']==2){
        $marco = new marco_estrategico();
        $exeMarco = $marco->informacion();
        echo json_encode($exeMarco);
    }
     if($_POST['accionMarco']==3){
        $marco = new marco_estrategico();
        $exeMarco = $marco->guardar();
        echo $exeMarco;
    }
     if($_POST['accionMarco']==4){
        $marco = new marco_estrategico();
        $exeMarco = $marco->actualizar();
        echo $exeMarco;
    }
}
?>
