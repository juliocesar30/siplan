<!-- menu Lateral -->
<nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav metismenu" id="side-menu">
<li class="nav-header">
<div class="dropdown profile-element">
<span>
	<img alt="image" class="img-circle" src="images/avatares/<?php echo $_SESSION['avatar']; ?>" width="48" height="48"/>
</span>
<a data-toggle="dropdown" class="dropdown-toggle" href="#">
<span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['nombre']; ?></strong>
</span> <span class="text-muted text-xs block"><?php echo $_SESSION['dependencia']; ?><b class="caret"></b></span> </span> </a>
<ul class="dropdown-menu animated fadeInRight m-t-xs">
	<li><a href="main.php?token=<?php echo md5(3); ?>">Perfil</a></li>
    <li><a href="mailbox.html">Mensajes</a></li>
    <li class="divider"></li>
 <li><a href="login.html">Salir</a></li>
 </ul>
</div>
<div class="logo-element">
 SZ+
 </div>
</li>
<li>
	<a href="main.php?token=<?php echo md5(0);?>"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
</li>
<li>
<a href="index.html"><i class="fa fa-list"></i> <span class="nav-label">Planeación</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="main.php?token=<?php echo md5(1);?>">Marco Estratégico</a></li>
   <li><a href="main.php?token=<?php echo md5(2);?>">Proyectos</a></li>
   <li><a href="main.php?token=<?php echo md5(0);?>">Obras</a></li>
   <li><a href="dashboard_3.html">Inversión</a></li>
</ul>
</li>

<li>
<a href="index.html"><i class="fa fa-line-chart"></i> <span class="nav-label">Evaluación</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="index.html">Trimestral</a></li>
   <li><a href="dashboard_2.html">Seguimiento</a></li>
   <li><a href="dashboard_3.html">Avances</a></li>
   <li><a href="dashboard_3.html">Cuenta Pública</a></li>
   <li><a href="dashboard_3.html">Indicadores</a></li>
</ul>
</li>


<li>
<a href="index.html"><i class="fa fa-bar-chart"></i> <span class="nav-label">Resultados</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="index.html">POA x DEP</a></li>
   <li><a href="dashboard_2.html">POA x SECTOR</a></li>
   <li><a href="dashboard_3.html">POA x EJES</a></li>
   <li><a href="dashboard_3.html">% Dependencias</a></li>
   <li><a href="dashboard_3.html">% Proyectos</a></li>
</ul>
</li>

<li>
<a href="index.html"><i class="fa fa-gears"></i> <span class="nav-label">Administración</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="dashboard_2.html">Cambiar Ejercicio</a></li>

  <?php if($_SESSION['id_perfil'] != 4) { ?>
    <li><a data-toggle='modal' data-target='#cambioDep'>Cambiar Dependencia</a></li>
  <?php } ?>

  <?php if($_SESSION['id_perfil'] == 1) { ?>
     <li><a href="index.html">Usuarios</a></li>
     <li><a href="index.html">Base de Datos</a></li>
     <li><a href="index.html">Servicios Web</a></li>
  <?php } ?>


</ul>
</li>

</ul>
</div>
</nav>
<!-- Fin Menu lateral -->
<!-- Modals requeridos -->
<div class="modal inmodal" id="cambioDep" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content animated flipInY">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
<h4 class="modal-title">Cambiar de Dependencia</h4>
<small class="font-bold">Utilice esta ventana para cmbiar la dependencia con la que se esta trabajando</small>
</div>
<div class="modal-body">
Dependencia Actual: <strong> Mi Dep</strong>
<form>
  <select><option>-Seleccione Dependencia</option></select>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
<button type="button" class="btn btn-primary" onClick="cambiaDep();">Guardar Cambios</button>
</div>
</div>
</div>
 </div>

<?php if($_SESSION['id_perfil'] == 1) { ?>
<script type="text/javascript">
function cambiaDep(){

	location.reload();
}
</script>

<?php } ?>

