<?php

require_once("class/conexion.php");
?>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10"><h2>Agregar Actividad</h2></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<form role="form" class="form-horizontal" method="post" action="views/guardar_componente.php" enctype="application/x-www-form-urlencoded">
<input type="hidden" id="id_proyecto" name='id_proyecto' value="<?php echo $_GET['p']; ?>">
<input type="hidden" id="id_proyecto" name='id_componente' value="<?php echo $_GET['c']; ?>">

<h3><span class="text text-success">Información General de la actividad</span></h3>
<div class="row">
<div class="col-lg-2">
<div class="form-group">
<label for="intNumActividad">Num. Actividad</label>
<input type="number" id="intNumActividad" name="intNumActividad" class="form-control" required>
</div>
</div>
<div class="col-lg-3">
<div class="form-group">
    <?php
		$sql = "SELECT sum(ponderacion) FROM actividades WHERE id_componente = ".$_GET['c'];
        $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
        $Ponderacion = $ExeConsulta->fetch_array();

    ?>
<label for="intPonderacion">Ponderación&nbsp;<small><span class="text text-danger" id="ponderacion_max">Debe ser menor o igual a <?php print(100 - $Ponderacion[0]);?> </span></small></label>
<input type="hidden" id="ponderacion_max_h" value="<?php echo $Ponderacion[0]; ?>">
<input type="number" id="intPonderacion" name="intPonderacion" class="form-control" required>
</div>
</div>
    <div class="col-lg-3">
<div class="form-group">
<div class="i-checks"><label> <input type="checkbox" value="" name="demanda"> <i></i> Demanda </label></div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="form-group">
<label for="txtNombreActiviadad">Descripción de la Actividad</label>
<textarea id="txtNombreActividad" name="txtNombreActiviadad" maxlength="254" class="form-control" required></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group" id="umedida_div">
Cargando . . . <img src='images/loading_verde.gif'>
</div>
</div>
<div class="col-lg-4">
<div class="form-group" id="tipo_umed_div">
<label >Tipo Unidad de Medida</label>
<select class='form-control m-b'><option>-Seleccione U. Medida-</option></select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group" >
<label for="intCantidad">Cantidad</label>
<input type="number" id="intCantidad" name="intCantidad" class="form-control" required>
</div>
</div>
</div>
<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Alineación Plan Estatal de Desarrollo 2016-2021</span></h3>
<div class="row">
<div class="col-lg-4"><div class="form-group" id="eje_div"></div>
</div>
<div class="col-lg-4">
<div class="form-group" id="linea_div"></div>
</div>
<div class="col-lg-4">
<div class="form-group" id="estrategia_div">
<label for="txtNombreProyecto">Estrategia</label>
<select class='form-control m-b'><option>-Sleccione Linea-</option></select>
</div>
</div>
</div>
<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Calendarización</span></h3>
<div class="row">
    <div class="col-lg-3">
      <div class="form-group">
          <label>Enero</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Febrero</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Marzo</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Abril</label>
          <input type="number" class="form-control">
      </div>
    </div>
</div>
    <div class="row">
    <div class="col-lg-3">
      <div class="form-group">
          <label>Mayo</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Junio</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Julio</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Agosto</label>
          <input type="number" class="form-control">
      </div>
    </div>
</div>
    <div class="row">
    <div class="col-lg-3">
      <div class="form-group">
          <label>Septiembre</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Octubre</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Noviembre</label>
          <input type="number" class="form-control">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
          <label>Diciembre</label>
          <input type="number" class="form-control">
      </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Indicador de la Actividad</span></h3>

<div class="row">
  <div class="col-lg-6">
  <div class="form-group">
<label for="txtNombreIndicador">Nombre del Indicador</label>
    <textarea id="txtNombreIndicador" name="txtNombreIndicador" maxlength="254" class="form-control" required></textarea>
</div>
</div>
     <div class="col-lg-6">
  <div class="form-group">
<label for="txtMetodo">Método de Cálculo</label>
    <textarea id="txtMetodo" name="txtMetodo" maxlength="254" class="form-control" required></textarea>
</div>
</div>
</div>


<div class="row">
       <div class="col-lg-3">
        <div class="form-group" id="linea_div">
            <label>Tipo Indicador</label>
            <select class='form-control m-b' name="sltTipoInd" required><option value=''>-Sleccione-</option>
                <option value="1">Impacto</option>
                <option value="2">Proceso</option>
                <option value="3">Producto</option>
                <option value="4">Gestión</option>
            </select>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="form-group">
            <label >Dimensión Indicador</label>
            <select class='form-control m-b' name="sltdimensionInd" required><option value=''>-Sleccione-</option>
                <option value="1">Eficacia</option>
                <option value="2">Eficiencia</option>
                <option value="3">Calidad</option>
                <option value="4">Economía</option>
            </select>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="form-group">
            <label>Frecuencia Indicador</label>
            <select class='form-control m-b' name="sltFrecuenciaInd" required><option value=''>-Sleccione-</option>
                <option value="1">Mensual</option>
                <option value="2">Bimestral</option>
                <option value="3">Trimestral</option>
                <option value="4">Semestral</option>
                <option value="5">Anual</option>
            </select>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="form-group">
            <label >Sentido Indicador</label>
            <select class='form-control m-b' name="sltSentidoInd" required><option value=''>-Sleccione-</option>
                <option value="1">Incremento</option>
                <option value="2">Decremento</option>
                <option value="3">Constante</option>

            </select>
        </div>
    </div>

</div>
<div class="row">
 <div class="col-lg-4">
   <div class="form-group">
       <label>Unidad Medida Indicador</label>
       <input type="text" name="txtUmedidaInd" class="form-control" required>
    </div>
</div>
   <div class="col-lg-4">
   <div class="form-group">
       <label>Meta Anual</label>
       <input type="number" name="intMetaInd" class="form-control" required>
    </div>
</div>

</div>
<div class="row">
<div class="col-lg-4">
    <button type="button" class="btn btn-default"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</button>
    &nbsp;
    <button type="submit" class="btn btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
</div>

</div>

</form>
</div>
</div>
</div>
</div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    Cargando . . . <img src='images/loading_verde.gif'>
  </div>

</div>
<script src="js/actividades.js">
</script>

