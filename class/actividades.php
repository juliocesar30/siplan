<?php
session_start();
class actividades {
    function listar(){
		require_once('conexion.php');
		extract($_POST);
		$sql = "SELECT id_actividad,descripcion,estrategia,u_medida,cantidad,ponderacion FROM actividades where id_componente = ".$componente;
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
			    if($status == 0){
			        echo "";
			        $leyenda = "Sin Aprobar";
			    }


			echo
			"<tr class='gradeX'>
			<td>".$Res[2]."</td>
			<td>".substr($Res[3],0,10)."...</td>
			<td>".$ponderacionActual."</td>
			<td>".$Res[5]."</td>
			<td>".$Res[6]."</td>
			<td>
			<a href='#' title='Información' class='btn btn-default btn-circle'><i class='fa fa-info' aria-hidden='true'></i></a>&nbsp;&nbsp;
			<a href='main.php?token=".md5(9)."&p=".$id_proy."&c=".$id_comp."' title='Actividades' class='btn btn-default btn-circle'><i class='fa fa-cogs' aria-hidden='true'></i></a>&nbsp;&nbsp;
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

    }
}
?>

