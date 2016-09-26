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
        return false;
    }

    function eliminar(){
        return false;
    }

    function actualizar(){
        return false;
    }
}

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
    $status = $Res[5];
    $ponderacionActual = $Res[4];
    $ponderacionTotal = $ponderacionTotal + $ponderacionActual;
    if($status == 0){
        echo "<tr class='gradeX'>";
        $leyenda = "Sin Aprobar";
    }
    if($status == 1){
        echo "<tr class='gradeX'>";
        $leyenda = "Aprob. Dep.";
    }
    if($status == 2){
        echo "<tr class='gradeX'>";
        $leyenda = "Aprob. UPLA";
    }

    echo
          " <td>".$Res[1]."</td>
<td>".$Res[2]."</td>
<td>".$Res[3]."</td>
<td>".$ponderacionActual."</td>
<td>".$leyenda."</td>
<td>
   <a href='#' title='Información'><i class='fa fa-info-circle' aria-hidden='true'></i></a>&nbsp;&nbsp;
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
    }
}

?>
