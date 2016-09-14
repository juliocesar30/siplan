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
<span class="label label-default">1</span> Proyectos de la Dependencia
</li>
<li class="list-group-item">
<span class="label label-success">2</span> Aprobados por la UPLA
</li>
<li class="list-group-item">
<span class="label label-warning">3</span> Aprobados por la Dependencia
</li>
<li class="list-group-item">
<span class="label label-danger">4</span> Sin aprobar
</li>
</ul>
</div>
<div class="col-sm-8">
<div class="panel panel-success">
<div class="panel-heading">
Información
</div>
<div class="panel-body">
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
<p>Por el momento el sistema se encuentra en fase de desarrollo, algunos modulos pueden no funcionar correctamente.</p>
</div>
</div>
</div>
</div>
</div>


