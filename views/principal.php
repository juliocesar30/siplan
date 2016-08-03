<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
	<h2><i class="fa fa-home"></i> Inicio</h2>
	<ol class="breadcrumb">
    <?php  if($_SESSION['id_perfil'] != 4){ ?>
	<li>
      <a data-toggle='modal' data-target='#myModal2'> <span class='label label-primary'> <i class='fa fa-refresh'></i> Cambiar Dependencia </span> </a>
    </li>

	<?php } ?>

<li class="active">
<strong>Breadcrumb</strong>
</li>

</ol>
</div>
</div>




