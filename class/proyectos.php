<?php
session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
    die("Error de inicio de sesion");
}
class proyectos{

    function listar(){
       $dep = $_SESSION['id_dependencia'];
       $ejercicio = $_SESSION['ejercicio'];
       require_once('conexion.php');
       $sql = "CALL listarProyectos($dep,'$ejercicio')";
       $conn = new conexion();
       $conexion = $conn->conectar($_SESSION['id_perfil']);
       $conexion->set_charset("utf8");
       $ExeConsulta = $conexion->query($sql);
       $conexion->close();
       return $ExeConsulta;

    }

    function agregar(){
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        extract($_POST);
        require_once('conexion.php');
        $sql = "CALL guardar_proyecto ($dep,$eje,$linea,$est,$num,'$nomb','$inversion',$pondera,'$umedida','$proganual','$progsem',$secpob,$benh,$benm,'$just',$fin,$fun,$subf,'$prop','$obspro','$uresp','$titular','$obj',$pndeje,$pndobj,$pndest,$pndlin,$progpres,'$ejercicio')";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
        if($conexion->query($sql)){
            $conexion->close();
            return "guardado";
        }else{
            $conexion->close();
            return "error:";
       }
    }

    function eliminar(){
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        extract($_POST);
        require_once('conexion.php');
        $sql = "SELECT COUNT(*) FROM actividades WHERE id_proyecto = ".$proyecto;
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExSql = $conexion->query($sql);
        $conexion->close();
        $Res = $ExSql->fetch_array();
        if($Res[0] > 0){
            return "No se puede eliminar, existen actividades";
            die();
        }
        unset($conexion);
        $sql = "SELECT COUNT(*) FROM componentes WHERE id_proyecto = ".$proyecto;
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExSql = $conexion->query($sql);
        $conexion->close();
        $Res = $ExSql->fetch_array();
        if($Res[0] > 0){
            return "No se puede eliminar, contiene componentes";
            die();
        }else{
            unset($conexion);
            $ConsultaElimina = "DELETE FROM proyectos WHERE id_proyecto = ".$proyecto." AND estatus = 0";
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            if($conexion->query($ConsultaElimina)){
                $conexion->close;
                return "eliminado";
            }else{
                $error = "error al eliminar: ".$conexion->error;
                $conexion->close();
                return $error;
                die();
          }
       }
    }

    function numero(){
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        extract($_POST);
        require_once('conexion.php');
        $sql = "SELECT COUNT(*) FROM proyectos WHERE id_dependencia = $dep AND num_proyecto = $num_proyecto AND ejercicio = '$ejercicio'";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeQuery = $conexion->query($sql);
        $conexion->close();
        $Res = $ExeQuery->fetch_array();
        return $Res[0];
    }

    function aprobar(){
        require_once('conexion.php');

        $sql = "SELECT count(*) FROM marco_estrategico WHERE id_dependencia = ".$_SESSION['id_dependencia'];
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeQuery = $conexion->query($sql);
        $conexion->close();
        $Res = $ExeQuery->fetch_array();
        if($Res[0] != 1){
            return "No se tiene capturado el Marco Estratégico";
            die();
        }

        $sql = "SELECT count(*) FROM indicadores_proyecto WHERE id_proyecto = ".$_POST['id_proyecto'];
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeQuery = $conexion->query($sql);
        $conexion->close();
        $Res = $ExeQuery->fetch_array();
        if($Res[0] != 1){
            return "No se tiene capturado el Indicador del Proyecto";
            die();
        }

        $sql = "call validarPonderacion(".$_POST['id_proyecto'].")";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeQuery = $conexion->query($sql);
        $conexion->close();
        $Res = $ExeQuery->fetch_array();
        if($Res[0] < 100){
            return "Profavor Revise su ponderación";
            die();
        }
        if($_SESSION['id_perfil'] == 2){
            $sql = "UPDATE proyectos SET estatus = 1 WHERE id_proyecto = ".$_POST['id_proyecto'];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->query($sql);
            $conexion->close();
            return "actualizado";
        }

        if($_SESSION['id_perfil'] == 1 OR $_SESSION['id_perfil'] == 3){
            $sql = "UPDATE proyectos SET estatus = 2 WHERE id_proyecto = ".$_POST['id_proyecto'];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->query($sql);
            $conexion->close();
            unset($conexion);

            $sql_proyecto = "SELECT
            id_proyecto,
            id_dependencia,
            id_eje,
            id_linea,
   id_estrategia,
   num_proyecto,
   nombre,
   inversion,
   ponderacion,
   unidad_medida,
   cantidad,
   prog_sem,
   sector_poblacion,
   beneficiarios_h,
   beneficiarios_m,
   justificacion,
   finalidad,
   funcion,
   subfuncion,
   proposito,
   observaciones,
   uresponsable,
   titular,
   objetivo,
   pnd_eje,
   pnd_objetivo,
   pnd_estrategia,
   pnd_linea,
   prog_pres,
   ejercicio FROM proyectos WHERE id_proyecto = ".$_POST['id_proyecto'];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeCons = $conexion->query($sql_proyecto);
            $conexion->close();
            $Proyecto = $ExeCons->fetch_array();
            unset($ExeCons);
            $sql_componentes = "SELECT * FROM componentes WHERE id_proyecto = ".$_POST['id_proyecto'];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeComp = $conexion->query($sql_componentes);
            $conexion->close();

            $sql_actividades = "SELECT * FROM actividades WHERE id_proyecto = ".$_POST['id_proyecto'];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeAct = $conexion->query($sql_actividades);
            $conexion->close();


            $conexion_finanzas = mysqli_connect("localhost","usr_siplan","siplan.2016","siplan_2017");
$queryPFinanzas = "call guardar_proyecto(".$Proyecto[0].",".$Proyecto[1].",".$Proyecto[2].",".$Proyecto[3].",".$Proyecto[4].",".$Proyecto[5].",'".$Proyecto[6]."','".$Proyecto[7]."',".$Proyecto[8].",'".$Proyecto[9]."','".$Proyecto[10]."','".$Proyecto[11]."',".$Proyecto[12].",".$Proyecto[13].",".$Proyecto[14].",'".$Proyecto[15]."',".$Proyecto[16].",".$Proyecto[17].",".$Proyecto[18].",'".$Proyecto[19]."','".$Proyecto[20]."','".$Proyecto[21]."','".$Proyecto[22]."','".$Proyecto[23]."',".$Proyecto[24].",".$Proyecto[25].",".$Proyecto[26].",".$Proyecto[27].",".$Proyecto[28].",'".$Proyecto[29]."')";
            $conexion_finanzas->set_charset("utf8");
            if(!$conexion_finanzas->query($queryPFinanzas)){
                $err = "error serv finanzas :".$conexion_finanzas->error."\n".$queryPFinanzas;
                $conexion_finanzas->close();
                return $err;
                die();
            }
            $conexion_finanzas->close();

            while($Componentes = $ExeComp->fetch_array()){
                 $conexion_finanzas = mysqli_connect("localhost","usr_siplan","siplan.2016","siplan_2017");
                $queryCompFin = "INSERT INTO componentes(
id_componente,
id_proyecto,
num_componente,
descripcion,
u_responsable,
prog_pres,
u_medida,
tipo_medida,
cantidad,
ponderacion,
eje,
linea,
estrategia,
nombre_indicador,
metodo_calculo,
tipo_indicador,
dimension_indicador,
frecuencia_indicador,
sentido_indicador,
u_medida_indicador,
meta_indicador,
medio_verifica_indicador,
supuesto_indicador)
VALUES
($Componentes[0],
$Componentes[1],
$Componentes[2],
'$Componentes[3]',
'$Componentes[4]',
$Componentes[5],
$Componentes[6],
$Componentes[7],
'$Componentes[8]',
$Componentes[9],
$Componentes[10],
$Componentes[11],
$Componentes[12],
'$Componentes[13]',
'$Componentes[14]',
$Componentes[15],
$Componentes[16],
$Componentes[17],
$Componentes[18],
'$Componentes[19]',
$Componentes[20],
'$Componentes[21]',
'$Componentes[22]'
)";
                $conexion_finanzas->set_charset("utf8");
            if(!$conexion_finanzas->query( $queryCompFin)){
                $err = "error serv finanzas :".$conexion_finanzas->error."\n".$queryCompFin;
                $conexion_finanzas->close();
                return $err;
                die();
            }
            $conexion_finanzas->close();
            }

            while($Actividades = $ExeAct->fetch_array()){
                 $conexion_finanzas = mysqli_connect("localhost","usr_siplan","siplan.2016","siplan_2017");
                $consActFin = "INSERT INTO actividades
(id_actividad,
id_componente,
id_proyecto,
demanda,
num_actividad,
descripcion,
eje,
linea,
estrategia,
u_medida,
t_medida,
cantidad,
ponderacion,
enero,febrero,marzo,abril,
mayo,junio,julio,agosto,
septiembre,octubre,noviembre,diciembre,
nombre_indicador,
metodo_calculo,
tipo_indicador,
dimension_indicador,
frecuencia_indicador,
sentido_indicador,
umedida_indicador,
meta_indicador,
medio_verificacion,
supuesto,
nombre_actividad,
tipo_actividad)

VALUES
($Actividades[0],
$Actividades[1],
$Actividades[2],
$Actividades[3],
$Actividades[4],
'$Actividades[5]',
$Actividades[6],
$Actividades[7],
$Actividades[8],
$Actividades[9],
$Actividades[10],
$Actividades[11],
$Actividades[12],
$Actividades[13],
$Actividades[14],
$Actividades[15],
$Actividades[16],
$Actividades[17],
$Actividades[18],
$Actividades[19],
$Actividades[20],
$Actividades[21],
$Actividades[22],
$Actividades[23],
$Actividades[24],
'$Actividades[25]',
'$Actividades[26]',
$Actividades[27],
$Actividades[28],
$Actividades[29],
$Actividades[30],
'$Actividades[31]',
$Actividades[32],
'$Actividades[33]',
'$Actividades[34]',
'$Actividades[35]',
'$Actividades[36]'
)
";
                 $conexion_finanzas->set_charset("utf8");
            if(!$conexion_finanzas->query($consActFin)){
                $err = "error serv finanzas :".$conexion_finanzas->error."\n".$consActFin;
                $conexion_finanzas->close();
                return $err;
                die();
            }
            $conexion_finanzas->close();

            }



            return "actualizado";
        }

    }


    function infoProyecto(){
       $proyecto = $_POST['proyecto'];
       extract($_POST);
       require_once('conexion.php');
       $sql = "CALL infoProyecto($proyecto)";
       $conn = new conexion();
       $conexion = $conn->conectar($_SESSION['id_perfil']);
         $conexion->set_charset("utf8");
       $ExeQuery = $conexion->query($sql);
       $conexion->close();
       return $ExeQuery;
    }

    function prNumActual(){

        require_once('conexion.php');
        $sql = "SELECT num_proyecto from proyectos where id_proyecto = ".$_POST['id_proyecto'];
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeQuery = $conexion->query($sql);
        $Res = $ExeQuery->fetch_array();

        if($Res[0] == $_POST['num_proyecto']){
            return "continuar";
        }
        else{
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        $sql = "SELECT COUNT(*) FROM proyectos WHERE id_dependencia = $dep AND num_proyecto = ".$_POST['num_proyecto']." AND ejercicio = '$ejercicio'";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeQuery = $conexion->query($sql);
        $conexion->close();
        $Res = $ExeQuery->fetch_array();
        if($Res[0] == 1){
            $conexion->close;
            return "error";
        }else{
            return "continuar";
        }

        }

    }

    function actualizar(){
        $dep = $_SESSION['id_dependencia'];
        $ejercicio = $_SESSION['ejercicio'];
        extract($_POST);
        require_once('conexion.php');
        $sql = "CALL actualiza_proyecto($id_proyecto,$dep,$eje,$linea,$est,$num,'$nomb',$inversion,$pondera,'$umedida',$proganual,$progsem,$secpob,$benh,$benm,'$just',$fin,$fun,$subf,'$prop','$obspro','$uresp','$titular','$obj',$pndeje,$pndobj,$pndest,$pndlin,$progpres)";
        $conn = new conexion();
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
        if($conexion->query($sql)){
            $conexion->close();
            return "guardado";
        }else{
            return "error:".$conexion->error." - sql: ".$sql;
            $conexion->close();
        }
    }

    function rechazar(){
         require_once('conexion.php');
       $sql = "UPDATE proyectos SET estatus = 0 WHERE id_proyecto = ".$_POST['id_proyecto'];
     $conn = new conexion();
      $conexion = $conn->conectar($_SESSION['id_perfil']);

        if($conexion->query($sql)){
          $conexion->close();
           return "guardado";
      }else{
        return "error:".$conexion->error." - sql: ".$sql;
        $conexion->close();

       }
    }
}


// ---------------- POST --------------------- //
if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 1:
            $proyecto = new proyectos();
            $lista = $proyecto->listar();
            ?>
<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
<th>No.</th>
<th>Proyecto</th>
<th>PED</th>
<th>Ponderación</th>
<th>Estatus</th>
<th>Herramientas</th>
</tr>
</thead>
<tbody>
    <?php
    $ponderacionTotal = 0;
    while($Res = $lista->fetch_array()){
    $aprob = "";
    $id_pr =  $Res[0];
    $status = $Res[5];
    $ponderacionActual = $Res[4];
    $ponderacionTotal = $ponderacionTotal + $ponderacionActual;
    if($status == 0){
        echo "<tr class='gradeX'>";
        $leyenda = "Sin Aprobar";
    }
    if($status == 1){
        echo "<tr class='gradeX bg_aprob1'>";
        $leyenda = "Aprob. Dep.";
    }
    if($status == 2){
        echo "<tr class='gradeX bg_aprob2'>";
        $leyenda = "Aprob. UPLA";
    }

    if($status == 0 && $_SESSION['id_perfil'] == 2){
        $aprob = "<a href='javascript:aprobar($id_pr);' title='Aprobar' class='btn btn-default btn-circle'><i class='fa fa-check' aria-hidden='true'></i></a>&nbsp;&nbsp;
        <a href='main.php?token=".md5(8)."&p=$id_pr' title='Editar' class='btn btn-default btn-circle'><i class='fa fa-edit' aria-hidden='true'></i></a>&nbsp;&nbsp;
        <a href='javascript:eliminar($id_pr);' title='Eliminar' class='btn btn-danger btn-circle btn-outline'><i class='fa fa-trash' aria-hidden='true'></i></a>&nbsp;&nbsp;";
    }

    if($status == 1 && $_SESSION['id_perfil'] == 3 or $status == 1 && $_SESSION['id_perfil'] == 1 ){
        $aprob = "<a href='javascript:aprobar($id_pr)' title='Aprobar' class='btn btn-success btn-circle'><i class='fa fa-check' aria-hidden='true'></i></a>&nbsp;&nbsp;
         <a href='javascript:rechazar($id_pr);' title='Rechazar' class='btn btn-warning btn-circle'><i class='fa fa-close' aria-hidden='true'></i></a>&nbsp;&nbsp;";
    }

      if($status == 2 && $_SESSION['id_perfil'] == 3 or $status == 2 && $_SESSION['id_perfil'] == 1 ){
        $aprob = "<a href='javascript:rechazar($id_pr);' title='Rechazar' class='btn btn-warning btn-circle'><i class='fa fa-close' aria-hidden='true'></i></a>&nbsp;&nbsp;";
    }

echo
"<td>".$Res[1]."</td>
<td>".$Res[2]."</td>
<td>".substr($Res[3],0,5)."</td>
<td>".$ponderacionActual."</td>
<td>".$leyenda."</td>
<td>
<a href='main.php?token=".md5(11)."&p=".$id_pr."' title='Información' class='btn btn-default btn-circle btn-outline'><i class='fa fa-info' aria-hidden='true'></i></a>&nbsp;&nbsp;
<a href='main.php?token=".md5(6)."&p=".$id_pr."' title='Componentes' class='btn btn-default btn-circle'><i class='fa fa-gear' aria-hidden='true'></i></a>&nbsp;&nbsp;
<a href='main.php?token=e4da3b7fbbce2345d7772b0674a318d5&p=".$id_pr."' title='Indicadores' class='btn btn-default btn-circle'><i class='fa fa-bar-chart' aria-hidden='true'></i></a>&nbsp;&nbsp;
".$aprob."
</td></tr>
";
    }
    ?>
</tbody>
<tfoot>
<tr>
<th>No.</th>
<th>Proyecto</th>
<th>PED</th>
<th>Ponderación</th>
<th>Estatus</th>
<th>Herramientas</th>
</tr>
</tfoot>
</table>
<input type="hidden" id="ponderacionTotal" value="<?php echo $ponderacionTotal; ?>">
<?php
break;
case 2:
$proyecto = new proyectos();
$lista = $proyecto->listar();
$ponderacionTotal = 0;
while($Res = $lista->fetch_array()){
    $ponderacionTotal = $ponderacionTotal + $Res[4];
}
print(100-$ponderacionTotal);
break;
        case 3:
        $proyecto = new proyectos();
        $numero = $proyecto->numero();
        echo $numero;
        break;
        case 4:
        $proyecto = new proyectos();
        $accion = $proyecto->agregar();
        echo $accion;
        break;
        case 5:
        $proyecto = new proyectos();
        $accion = $proyecto->eliminar();
        echo $accion;
        break;
        case 6:
        $proyecto = new proyectos();
        $accion = $proyecto->aprobar();
        echo $accion;
        break;
        case 7:
        $proyecto = new proyectos();
        $accion = $proyecto->prNumActual();
        echo $accion;
        break;
        case 8:
        $proyecto = new proyectos();
        $accion = $proyecto->actualizar();
        echo $accion;
        break;
        case 9:
        $proyecto = new proyectos();
        $accion = $proyecto->rechazar();
        echo $accion;
        break;
    }
}


?>
