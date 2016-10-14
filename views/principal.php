<div class="row wrapper border-bottom white-bg page-heading">
<div class="animated fadeInRightBig">
<div>
<h2><i class="fa fa-home"></i> Inicio</h2>
<small>Resumen de Proyectos e indicadores - Ejercicio <b><?php echo $_SESSION['ejercicio'];  ?> </b></small>
</div>
    <hr>
   <div align="center"> <img src="images/UplaLogoGrande.png" width="400"> </div>
    <br>
<div class="col-sm-4">
<ul class="list-group clear-list m-t">
<li class="list-group-item fist-item">
<?php
    $sql = "select
(select count(*) from proyectos where id_dependencia = ".$_SESSION['id_dependencia']."),
(select count(*) from proyectos where id_dependencia = ".$_SESSION['id_dependencia']." and estatus = 1) as ap_dep,
(select count(*) from proyectos where id_dependencia = ".$_SESSION['id_dependencia']." and estatus = 2) as ap_upla,
(select count(*) from proyectos where id_dependencia = ".$_SESSION['id_dependencia']." and estatus = 0) as no_ap;";
    $conn = new conexion();
    $conexion = $conn->conectar($_SESSION['id_perfil']);
    $ExeConsulta = $conexion->query($sql);
    $Res = $ExeConsulta->fetch_array();
    $conexion ->close();
    unset($conexion);
    ?>
<span class="label label-default"><?php echo $Res[0]; ?></span> Proyectos de la Dependencia
</li>
<li class="list-group-item">
<span class="label label-success"><?php echo $Res[1]; ?></span> Aprobados por la UPLA
</li>
<li class="list-group-item">
<span class="label label-warning"><?php echo $Res[2]; ?></span> Aprobados por la Dependencia
</li>
<li class="list-group-item">
<span class="label label-danger"><?php echo $Res[3]; ?></span> Sin aprobar
</li>
</ul>
</div>
<div class="col-sm-8">
<div class="panel panel-success">
<div class="panel-heading">
Información
</div>
<div class="panel-body">
    <h3>Bienvenido</h3>
    <p>Sistema Integral de Información para la Planeación de Gobierno del Estado de Zacatecas</p>
    <p><small>Version 6.0</small></p>
<?php  
	$MarcoEstrategicoQuery = "SELECT COUNT(*) FROM marco_estrategico WHERE id_dependencia = ".$_SESSION['id_dependencia']." AND ejercicio = ".$_SESSION['ejercicio'];
	$conn = new conexion();
    $conexion = $conn->conectar(5); 
	$ExMarco = $conexion->query($MarcoEstrategicoQuery);
	$ResMarco = $ExMarco->fetch_array();
	if($ResMarco[0] == 0){
		echo "  <div class='alert alert-danger'>
         <i class='fa fa-exclamation-circle' aria-hidden='true'></i> No se tiene registrado marco teórico para este ejercicio. <a class='alert-link' href='main.php?token=".md5(1)."'>  Registrar Marco</a>.
         </div>";
	}
	$conexion->close();
?>

</div>
</div>
</div>
</div>
</div>


