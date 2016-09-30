<?php

session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
	die("Error de inicio de sesion");
}

class componentes {

	function listar(){
		require_once('conexion.php');
		extract($_POST);
		$sql = "SELECT id_componente,id_proyecto,num_componente,descripcion,ponderacion,u_medida,cantidad from componentes where id_proyecto = ".$proyecto;
		$conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$conexion->set_charset("utf8");
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
		return $ExeConsulta;

	}

}

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
