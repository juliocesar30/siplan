<?php
session_start();
    class catalogos{
        function prog_pres(){
            require_once('conexion.php');
            $sql = "SELECT * FROM prog_presupuestarios";
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;
        }

        function eje(){
            require_once('conexion.php');
            $sql = "SELECT * FROM ejes";
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

    }


if(isset($_POST['catalogo'])){

    switch($_POST['catalogo']){
        case "prog_presupuestarios":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->prog_pres();
            echo "<label for='sltProgPres'>Programa Presupuestario</label>";
            echo "<select class='form-control m-b' id='sltProgPres' name='sltProgPres'><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]." - ".$res[2]."</option>";
            }
            echo "<select>";
        break;

        case "ejes":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->eje();
            echo "<label for='sltEje'>Eje</label>";
            echo "<select class='form-control m-b' id='sltEje' name='sltEje'><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;
    }
}


?>
