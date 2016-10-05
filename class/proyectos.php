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
    function informacion(){
        return false;
    }

    function agregar(){
        $dep = $_SESSION['id_dependencia'];
       $ejercicio = $_SESSION['ejercicio'];
        extract($_POST);
       require_once('conexion.php');
       $sql = "CALL guardar_proyecto ($dep,$eje,$linea,$est,$num,'$nomb',$inversion,$pondera,'$umedida',$proganual,$progsem,$secpob,$benh,$benm,'$just',$fin,$fun,$subf,'$prop','$obspro','$uresp','$titular','$obj',$pndeje,$pndobj,$pndest,$pndlin,$progpres,'$ejercicio')";
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
       $sql = "SELECT COUNT(*) FROM componentes WHERE id_proyecto = ".$proyecto;
         $conn = new conexion();
       $conexion = $conn->conectar($_SESSION['id_perfil']);
       $ExSql = $conexion->query($sql);
        $conexion->close();
        $Res = $ExSql->fetch_array();
        if($Res[0] == 0){
           $ConsultaElimina = "DELETE FROM proyectos WHERE id_proyecto = ".$proyecto;
             $conn = new conexion();
       $conexion = $conn->conectar($_SESSION['id_perfil']);
            if($conexion->query($ConsultaElimina)){return "eliminado";}else{return "error01";}
        }else{ return "error02";}
    }

    function actualizar(){
        return false;
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
        require_once('componentes.php');
        $componente = new componentes();
        $contar = $componente->contarPonderacion();
        if($contar < 100){
            return "errorPondera";
            die();
        }

        if($_SESSION['id_perfil'] == 2){
            $sql = "UPDATE proyectos SET estatus = 1 WHERE id_proyecto = ".$_POST['id_proyecto'];
            require_once('conexion.php');
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->query($sql);
            $conexion->close();
            return "actualizado";
        }
        if($_SESSION['id_perfil'] == 1 OR $_SESSION['id_perfil'] == 3){
            $sql = "UPDATE proyectos SET estatus = 2 WHERE id_proyecto = ".$_POST['id_proyecto'];
            require_once('conexion.php');
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->query($sql);
            $conexion->close();
            return "actualizado";
        }
        return false;
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
        $aprob = "<a href='#' title='Aprobar' class='btn btn-success btn-circle'><i class='fa fa-check' aria-hidden='true'></i></a>&nbsp;&nbsp;
         <a href='#' title='Rechazar' class='btn btn-warning btn-circle'><i class='fa fa-close' aria-hidden='true'></i></a>&nbsp;&nbsp;";
    }

      if($status == 2 && $_SESSION['id_perfil'] == 3 or $status == 2 && $_SESSION['id_perfil'] == 1 ){
        $aprob = "<a href='#' title='Rechazar' class='btn btn-warning btn-circle'><i class='fa fa-close' aria-hidden='true'></i></a>&nbsp;&nbsp;";
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
    }
}


?>
