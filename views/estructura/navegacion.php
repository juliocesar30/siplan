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
<a href="#"><i class="fa fa-list"></i> <span class="nav-label">Planeación</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="main.php?token=<?php echo md5(1);?>">Marco Estratégico</a></li>
   <li><a href="main.php?token=<?php echo md5(2);?>">Proyectos</a></li>
   <li><a href="main.php?token=<?php echo md5(0);?>">Obras</a></li>
   <li><a href="dashboard_3.html">Inversión</a></li>
</ul>
</li>

<li>
<a href="#"><i class="fa fa-line-chart"></i> <span class="nav-label">Evaluación</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="#">Trimestral</a></li>
   <li><a href="#">Seguimiento</a></li>
   <li><a href="#">Avances Fis/fin</a></li>
   <li><a href="#">Cuenta Pública</a></li>
   <li><a href="#">Indicadores</a></li>
</ul>
</li>


<li>
<a href="#"><i class="fa fa-bar-chart"></i> <span class="nav-label">Resultados</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <?php if($_SESSION['id_perfil'] != 2 and $_SESSION['id_perfil'] != 5) { ?>
   <li><a href="#">POA x DEP</a></li>
   <li><a href="#">POA x SECTOR</a></li>
   <li><a href="#">POA x EJES</a></li>
   <li><a href="#">% Dependencias</a></li>
   <li><a href="#">% Proyectos</a></li>
    <?php } ?>
   <li><a href="#">Resultados POA</a></li>
</ul>
</li>

 <?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3)  { ?>
<li>
<a href="#"><i class="fa fa-usd"></i> <span class="nav-label">Presupuestal</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
   <li><a href="#">Oficios de Ejecución</a></li>
    <li><a href="#">Lista de Oficios</a></li>
    </ul>
</li>
<?php } ?>

<li>
<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3)  { ?>
 <a href="#"><i class="fa fa-tasks"></i> <span class="nav-label">Reportes</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="#">POA</a></li>
        <li><a href="#">Indicadores</a></li>
        <li><a href="#">Proyectos</a></li>
        <li><a href="#">Reportes Generales</a></li>
        <li><a href="#">Resumen Oficios</a></li>
        <li><a href="#">Resumen Est/Fin</a></li>
        <li><a href="#">Avances Fis/fin</a></li>
        <li><a href="#">Cuenta Pública</a></li>
        <li><a href="#">Prog 3x1</a></li>
    </ul>
</li>
<?php } ?>
<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3)  { ?>
<li>
  <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Estados Financieros</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="#">Actualizar</a></li>
        <li><a href="#">Mostrar</a></li>
    </ul>
    </li>
<li>
  <a href="#"><i class="fa fa-bookmark"></i> <span class="nav-label">Cierres de Ejercicio</span> <span class="fa arrow"></span></a>
    </li>
<li>
  <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Catálogos</span> <span class="fa arrow"></span></a>
    </li>
<li>
  <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Municipio</span> <span class="fa arrow"></span></a>
    </li>

<?php } ?>
<li>
<a href="#"><i class="fa fa-gears"></i> <span class="nav-label">Administración</span> <span class="fa arrow"></span></a>
 <ul class="nav nav-second-level collapse">
   <li><a href="dashboard_2.html">Cambiar Ejercicio</a></li>
  <?php if($_SESSION['id_perfil'] != 2 and $_SESSION['id_perfil'] != 5) { ?>
    <li><a data-toggle='modal' data-target='#cambioDep'>Cambiar Dependencia</a></li>
  <?php } ?>
  <?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3) { ?>
     <li><a href="main.php?token=<?php echo md5(12); ?>">Usuarios</a></li>
     <li><a href="#">Oficios Aprobación</a></li>
      <li><a href="#">Permisos</a></li>
     <li><a href="#">Trimestre</a></li>



  <?php } ?>

    <?php if($_SESSION['id_perfil'] == 1) { ?>
          <li><a href="index.html">Respaldar BD</a></li>
      <li><a href="index.html">Estatus del Sistema</a></li>
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

