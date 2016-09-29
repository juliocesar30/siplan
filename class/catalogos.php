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

        function linea(){
            require_once('conexion.php');
            $sql = "SELECT * FROM lineas WHERE id_eje = ".$_POST['eje'];
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

         function estrategia(){
            require_once('conexion.php');
            $sql = "SELECT id_estrategia,estrategia FROM estrategias WHERE id_linea = ".$_POST['linea'];
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

        function pnd_eje(){
            require_once('conexion.php');
            $sql = "SELECT id_pnd_eje,pnd_eje FROM pnd_ejes";
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

           function pnd_objetivo(){
            require_once('conexion.php');
            $sql = "SELECT id_pnd_objetivo,pnd_objetivo FROM pnd_objetivos WHERE id_pnd_eje = ".$_POST['eje'];
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

         function pnd_estrategia(){
            require_once('conexion.php');
            $sql = "SELECT id_pnd_estrategia,pnd_estrategia FROM pnd_estrategias WHERE id_pnd_objetivo = ".$_POST['objetivo'];
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

        function pnd_linea(){
            require_once('conexion.php');
            $sql = "SELECT id_pnd_linea_accion,linea_accion FROM pnd_lineas_accion WHERE id_pnd_estrategia = ".$_POST['estrategia'];
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

        function sector_poblacional(){
            require_once('conexion.php');
            $sql = "SELECT * FROM sector_poblacional";
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

        function finalidad(){
            require_once('conexion.php');
            $sql = "SELECT id_finalidad,finalidad FROM finalidad";
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

        function funcion(){
            require_once('conexion.php');
            $sql = "SELECT id_funf,funcion FROM funcion WHERE id_finalidad = ".$_POST['finalidad'];
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            return $ExeConsulta;

        }

        function subfuncion(){
              require_once('conexion.php');
            $sql = "SELECT id_subfuncion,subfuncion  FROM subfuncion WHERE id_finalidad = ".$_POST['finalidad']." AND id_funcion_f = ".$_POST['funcion'];
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
            echo "<select class='form-control m-b' id='sltEje' name='sltEje' onchange='cargarLineasPED(this.value);' required><option value=''>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;

        case "lineas":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->linea();
            echo "<label for='sltLinea'>Linea</label>";
            echo "<select class='form-control m-b' id='sltLinea' name='sltLinea' onchange='cargarEstrategiasPED(this.value);' required><option value=''>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[2]."</option>";
            }
            echo "<select>";
        break;
        case "estrategias":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->estrategia();
            echo "<label for='sltEstrategia'>Estrategia</label>";
            echo "<select class='form-control m-b' id='sltEstrategia' name='sltEstrategia' required><option value=''>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;

        case "pnd_ejes":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->pnd_eje();
            echo "<label for='sltPndEje'>Meta Nacional</label>";
            echo "<select class='form-control m-b' id='sltPndEje' name='sltPndEje' onchange='cargaObjPND(this.value);' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;
        case "pnd_objetivos":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->pnd_objetivo();
            echo "<label for='sltObjPND'>Objetivo PND</label>";
            echo "<select class='form-control m-b' id='sltObjPND' name='sltObjPND' onchange='cargaEstrategiaPND(this.value);' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;
        case "pnd_estrategias":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->pnd_estrategia();
            echo "<label for='sltEstrategiaPND'>Estrategia PND</label>";
            echo "<select class='form-control m-b' id='sltEstrategiaPND' name='sltEstrategiaPND' onchange='cargaLineaPND(this.value);' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;
        case "pnd_lineas":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->pnd_linea();
            echo "<label for='sltLineaPND'>Línea de Acción PND</label>";
            echo "<select class='form-control m-b' id='sltLineaPND' name='sltLineaPND' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;
          case "sector_poblacional":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->sector_poblacional();
            echo "<label for='sltSectorPoblacional'>Sector Poblacional</label>";
            echo "<select class='form-control m-b' id='sltSectorPoblacional' name='sltSectorPoblacional' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;
        case "finalidad":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->finalidad();
            echo "<label for='sltFinalidad'>Finalidad</label>";
            echo "<select class='form-control m-b' id='sltFinalidad' name='sltFinalidad' onchange='cargaFuncion(this.value)' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;

        case "funcion":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->funcion();
            echo "<label for='sltFuncion'>Funcion</label>";
            echo "<select class='form-control m-b' id='sltFuncion' name='sltFuncion' onchange='cargaSubFuncion(this.value)' required><option value='0'>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;

            case "subfuncion":
            $catalogo = new catalogos;
            $prog_pres = $catalogo->subfuncion();
            echo "<label for='sltSubFuncion'>Funcion</label>";
            echo "<select class='form-control m-b' id='sltSubFuncion' name='sltSubFuncion'><option value='0' required>-Seleccione-</option>";
            while($res = $prog_pres->fetch_array()){
                echo "<option value='".$res[0]."'>".$res[1]."</option>";
            }
            echo "<select>";
        break;

    }
}


?>
