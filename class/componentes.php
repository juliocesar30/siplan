<?php

session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
	die("Error de inicio de sesion");
}

class componentes {

	function listar(){
		require_once('conexion.php');
		extract($_POST);
		$sql = "SELECT
c.id_componente,
c.id_proyecto,
c.num_componente,
c.descripcion,
c.ponderacion,
u.unidad_medida,
c.cantidad,
p.estatus,
(select count(*) from actividades where id_componente = c.id_componente) as actividades
from componentes c
inner join u_medida_prog01 u on(c.u_medida = u.id_unidad)
inner join proyectos p on(c.id_proyecto = p.id_proyecto)
where c.id_proyecto = ".$proyecto;
		$conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$conexion->set_charset("utf8");
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
		return $ExeConsulta;

	}

    function eje(){
        require_once('conexion.php');
		extract($_POST);
		$sql = "select p.id_eje, e.eje from ejes e inner join proyectos p on (p.id_eje = e.id_eje) where p.id_proyecto = ".$proyecto;
		$conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$conexion->set_charset("utf8");
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
		return $ExeConsulta;
    }

    function contarPonderacion(){
        require_once('conexion.php');
		$sql = "SELECT sum(ponderacion) FROM componentes WHERE id_proyecto = ".$_POST['id_proyecto'];
       $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
        $Ponderacion = $ExeConsulta->fetch_array();
        return $Ponderacion[0];

    }

    function guardar(){
          require_once('conexion.php');
        extract($_POST);
		$sql = "SELECT sum(ponderacion) FROM componentes WHERE id_proyecto = ".$_POST['id_proyecto'];
       $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
        $Ponderacion = $ExeConsulta->fetch_array();
        return $Ponderacion[0];
    }

    function numComp(){
        require_once('conexion.php');
        extract($_POST);
		$sql = "SELECT count(*) FROM componentes WHERE num_componente = ".$_POST['num_componente']." AND id_proyecto = ".$_POST['proyecto'];
        $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
        $Resultado = $ExeConsulta->fetch_array();
        return $Resultado[0];
    }

    function eliminar(){
        require_once('conexion.php');
        extract($_POST);
		$sql = "SELECT count(*) FROM componentes WHERE num_componente = ".$_POST['num_componente']." AND id_proyecto = ".$_POST['proyecto'];
        $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
        $Resultado = $ExeConsulta->fetch_array();
        return $Resultado[0];
    }

}


/*--------------------------- fin de la clase ---------------*/
if(isset($_POST['accion'])){
$componente = new componentes;

switch($_POST['accion']){
case 1:
$lista = $componente->listar();
?>
<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
<th>Num</th>
<th>Componente</th>
<th>U. medida</th>
<th>Cantidad</th>
<th>Ponderación</th>
<th>Herramientas</th>
</tr>
</thead>
			<tbody>
			    <?php
			    $ponderacionTotal = 0;
			    while($Res = $lista->fetch_array()){
			    $id_comp =  $Res[0];
			    $id_proy = $Res[1];
			    $ponderacionActual = $Res[4];
			    $ponderacionTotal = $ponderacionTotal + $ponderacionActual;
			    $estatus = $Res[7];
                $actividades = $Res[8];
                $eliminar_btn = "";
                $editar_ntn = "";
                if($estatus == 0 and $actividades == 0){
                    $eliminar_btn =  "<a href='javascript:eliminar($id_comp);' title='Eliminar' class='btn btn-danger btn-circle'><i class='fa fa-trash' aria-hidden='true'></i></a>&nbsp;&nbsp;";
                }

                if($estatus == 0){
                    $editar_ntn = "<a href='main.php?token=".md5(0)."&p=$id_comp' title='Editar' class='btn btn-default btn-circle'><i class='fa fa-edit' aria-hidden='true'></i></a>&nbsp;&nbsp";
                }


			echo
			"<tr class='gradeX'>
			<td>".$Res[2]."</td>
			<td>".substr($Res[3],0,10)."...</td>
			<td>".$Res[5]."</td>
			<td>".$Res[6]."</td>
			<td>".$ponderacionActual."</td>
			<td>
			<a href='#' title='Información' class='btn btn-default btn-circle'><i class='fa fa-info' aria-hidden='true'></i></a>&nbsp;&nbsp;
			<a href='main.php?token=".md5(9)."&p=".$id_proy."&c=".$id_comp."' title='Actividades' class='btn btn-default btn-circle'><i class='fa fa-cogs' aria-hidden='true'></i>
            </a>&nbsp;&nbsp;
            $editar_ntn
            $eliminar_btn
			</td></tr>
			";
			    }
			    ?>
			</tbody>
			<tfoot>
			<tr>
			<th>Num</th>
			<th>Componente</th>
			<th>U. medida</th>
			<th>Cantidad</th>
			<th>Ponderación</th>
			<th>Herramientas</th>
			</tr>
			</tfoot>
			</table>
			<input type="hidden" id="ponderacionTotal" value="<?php echo $ponderacionTotal; ?>">
			<?php
			break;
            case 2:
              $eje = $componente->eje();
              $Res = $eje->fetch_array();
              echo "<label for='sltEje'>Eje</label>";
              echo "<select class='form-control m-b' name='sltEje' id='sltEje'>
              <option value='".$Res[0]."' selected>".$Res[0]." - ".$Res[1]."</option>";
            break;
            case 3:
               echo $componente->contarPonderacion();
            break;
    case 4:
         echo $componente->guardar();
        break;
    case 5:
        echo $componente->numComp();
        break;
	}
}


?>
