<?php
session_start();
class actividades {
    function listar(){
		require_once('conexion.php');
		extract($_POST);
		$sql = "SELECT
a.id_actividad,
a.num_actividad,
a.nombre_actividad,
u.unidad_medida,
a.cantidad,
a.ponderacion,
p.estatus
FROM
actividades a
inner join u_medida_prog01 u on(a.u_medida = u.id_unidad)
inner join proyectos p on (a.id_proyecto = p.id_proyecto)
where a.id_componente = ".$componente;
		$conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$conexion->set_charset("utf8");
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
		return $ExeConsulta;

	}
}
/*--------------------end-----------------------------*/
if(isset($_POST['accion'])){
    $accion = new actividades();
    switch($_POST['accion']){

        case 1:
            $lista = $accion->listar();
            ?>
<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
<th>Num</th>
<th>Actividad</th>
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

			    $ponderacionActual = $Res[5];
			    $ponderacionTotal = $ponderacionTotal + $ponderacionActual;
                $estatus = $Res[6];
			 $btn_acciones = "";
                if($estatus == 0){
                    $btn_acciones = "
                    <a href='main.php?token=".md5(0)."&p=$id_comp' title='Editar' class='btn btn-default btn-circle'><i class='fa fa-edit' aria-hidden='true'></i></a>&nbsp;&nbsp
                    <a href='javascript:eliminar($id_comp);' title='Eliminar' class='btn btn-danger btn-circle'><i class='fa fa-trash' aria-hidden='true'></i></a>&nbsp;&nbsp;

                    ";
                }
			echo
			"<tr class='gradeX'>
			<td>".$Res[1]."</td>
			<td>".substr($Res[2],0,10)."...</td>
			<td>".$Res[3]."</td>
			<td>".$Res[4]."</td>
			<td>".$ponderacionActual."</td>
			<td>
			<a href='#' title='Información' class='btn btn-default btn-circle'><i class='fa fa-info' aria-hidden='true'></i></a>&nbsp;&nbsp;
			$btn_acciones
			</td></tr>
			";
			    }
			    ?>
			</tbody>
			<tfoot>
			<tr>
			<th>Num</th>
			<th>Actividad</th>
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

    }
}
?>

