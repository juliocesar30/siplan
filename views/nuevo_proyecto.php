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
<div class="col-lg-10"><h2>Agregar Proyecto</h2></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<form role="form" class="form-horizontal" onsubmit="return validar();">
<h3><span class="text text-success">Información General del proyecto</span></h3>
<div class="row">
<div class="col-lg-1">
<div class="form-group">
<label for="intNumProyecto">Num. Proyecto</label>
<input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label for="txtNombreProyecto">Nombre</label>
            <input type="text" id="txtNombreProyecto" name="txtNombreProyecto" maxlength="254" class="form-control" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <div class="form-group">
            <label for="numInversion">Inversión Aproximada</label>
            <input type="number" id="numInversion" name="numInversion" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="form-group" id="prog_pres_div"></div>
    </div>
</div>

<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <label for="txtUresponsable">Unidad Responsable</label>
            <input type="text" id="txtUresponsable" name="txtUresponsable" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="form-group">
            <label for="txtNombreTitular">Nombre del Titular</label>
            <input type="text" id="txtNombreTitular" name="txtNombreTitular" class="form-control" required>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Alineación Plan Estatal de Desarrollo 2016-2021</span></h3>
<div class="row">
    <div class="col-lg-4"><div class="form-group" id="ejes_div"></div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" id="linea_div">
            <label >Linea</label>
            <select class='form-control m-b'><option>-Sleccione Eje-</option></select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" id="estrategia_div">
            <label for="txtNombreProyecto">Estrategia</label>
            <select class='form-control m-b'><option>-Sleccione Eje-</option></select>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Alineación Plan Nacional de Desarrollo 2012-2018</span></h3>
<div class="row">
    <div class="col-lg-3">
        <div class="form-group" id="pnd_ejes_div"></div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="pnd_objetivo_div">
            <label for="sltObjPND">Objetivo PND</label>
            <select class='form-control m-b' id="sltObjPND" name="sltObjPND"><option value="">-Sleccione Eje PND-</option></select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="pnd_estrategia_div">
            <label for="sltEstrategiaPND">Estrategia PND</label>
            <select class='form-control m-b' id="sltEstrategiaPND" name="sltEstrategiaPND"><option value="">-Sleccione Eje PND-</option></select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="pnd_linea_div">
            <label for="sltLineaPND">Línea de Acción PND</label>
            <select class='form-control m-b' id="sltLineaPND" name="sltLineaPND"><option value="">-Sleccione Eje PND-</option></select>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Objetivo Estratégico</span></h3>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group" >
            <label for="txtDep">Dependencia o Entidad</label>
            <input type="text" id="txtDep" name="txtUresponsable" class="form-control" value="<?php echo $_SESSION['dependencia']; ?>" readonly>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" >
            <label for="intPonderacion">Ponderación&nbsp;<small><span class="text text-danger" id="ponderacion_max">Debe ser menor o igual a </span></small></label>
            <input type="hidden" id="ponderacion_max_h">
            <input type="number" id="intPonderacion" name="intPonderacion" class="form-control" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group" >
            <label for="txtObjetivo">Objetivo</label>
            <textarea class="form-control" rows="4" id="txtObjetivo" name="txtObjetivo" required></textarea>
        </div>
    </div>
     <div class="col-lg-4">
        <div class="form-group" >
            <label for="txtProposito">Propósito</label>
            <textarea class="form-control" rows="4" id="txtProposito" name="txtProposito" required></textarea>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" >
            <label for="txtJustificacion">Justificación</label>
            <textarea class="form-control" rows="4" id="txtJustificacion" name="txtJustificacion" required></textarea>
        </div>
    </div>
</div>

<div class="row">
<div class="col-lg-4">
    <div class="form-group" >
    <label for="intBenMuj">Beneficiarios Mujeres</label>
  <input type="number" id="intBenMuj" name="intBenMuj" class="form-control" required>
    </div>
</div>
<div class="col-lg-4" >
    <div class="form-group" >
       <label for="intBenHom">Beneficiarios Hombres</label>
  <input type="number" id="intBenHom" name="intBenHom" class="form-control" required>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group" id="sector_div"></div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
    <div class="form-group">
        <label for="txtUmedida">Unidad de Medida</label>
        <input type="text" class="form-control" id="txtUmedida" name="txtUmedida" required>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
         <label for="intProgAnual">Programado Anual</label>
        <input type="number" class="form-control" id="intProgAnual" name="intProgAnual" required>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <label for="intProgSem">Programado Semestral</label>
        <input type="number" class="form-control" id="intProgSem" name="intProgSem" required>
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
    <div class="form-group" id="finalidad_div"></div>
</div>
<div class="col-lg-4">
    <div class="form-group" id="funcion_div">
        <label for="sltFuncion">Función</label>
        <select id="sltFuncion" name="sltFuncion" class='form-control m-b'><option value="">-Seleccione Finalidad-</option></select>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group" id="subfuncion_div">
        <label for="sltSubFuncion">Sub-Función</label>
        <select id="sltSubFuncion" name="sltSubFuncion" class='form-control m-b'><option value="">-Seleccione Finalidad-</option></select>
    </div>
</div>
</div>

<div class="row">
    <div class="col-lg-10">
    <div class="form-group">
      <label for="ObservacionesProyecto">
          Observaciones del Proyecto
      </label>
        <textarea name="ObservacionesProyecto" id="ObservacionesProyecto" class="form-control" rows="4"></textarea>
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

<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    Cargando . . . <img src='images/loading_verde.gif'>
  </div>

</div>


<script src="js/proyectos.js"></script>
<script type="text/javascript">
    window.onload = cargar_selects_iniciales();
</script>
