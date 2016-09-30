<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10"><h2>Indicador del Proyecto</h2></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<form role="form" class="form-horizontal" onsubmit="return guardar();">
<h3><span class="text text-success">Indicador Fin</span></h3>
<div class="row">
<div class="col-lg-10">
<div class="form-group">
<label for="txtObjetivoFin">Objetivos</label>
<textarea id="txtObjetivoFin" name="txtObjetivoFin" class="form-control" required></textarea>
</div>
</div></div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="txtNombreIndFin">Nombre Indicador</label>
<textarea id="txtNombreIndFin" name="txtNombreIndFin" class="form-control" required></textarea>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="txtMetodoFin">Método de Cálculo</label>
<textarea id="txtMetodoFin" name="txtMetodoFin" class="form-control" required></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">
<div class="form-group">
<label for="sltTipoFin">Tipo</label>
<select class='form-control m-b' id="sltTipoFin" required>
    <option value=''>-Sleccione-</option>
     <option value='1'>Impacto</option>
     <option value='2'>Proceso</option>
     <option value='3'>Producto</option>
     <option value='4'>Gestión</option>
</select>
</div>
</div>
    <div class="col-lg-3">
    <div class="form-group">
            <label for="sltDimensionFin">Dimensión</label>
            <select class='form-control m-b' id="sltDimensionFin" required>
                <option value="">-Seleccione-</option>
                <option value="1">Eficiencia</option>
                <option value="2">Eficacia</option>
                <option value="3">Calidad</option>
                <option value="4">Economía</option>
           </select>
        </div>
</div>
    <div class="col-lg-3">
    <div class="form-group" id="linea_div">
            <label for="sltFrecuanciaFin">Frecuencia</label>
            <select class='form-control m-b' id="sltFrecuanciaFin" required>
                <option value="">-Sleccione-</option>
                <option value="1">Mensual</option>
                <option value="2">Bimestral</option>
                <option value="3">Trimestral</option>
                <option value="4">Semestral</option>
                <option value="5">Anual</option>
        </select>
        </div>
</div>
    <div class="col-lg-3">
    <div class="form-group" id="linea_div">
            <label for="sltSentidoFin">Sentido</label>
            <select class='form-control m-b' id="sltSentidoFin" required>
                <option value="">-Sleccione-</option>
                <option value="1">Incremento</option>
                <option value="2">Decremento</option>
                <option value="3">Constante</option>
        </select>
        </div>
</div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtUmedidaFin">Unidad Medida</label>
            <input type="text" id="txtUmedidaFin" maxlength="128" class="form-control" required>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="form-group">
            <label for="txtMetaFin">Meta Anual</label>
            <input type="number" id="txtMetaFin" maxlength="254" class="form-control" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtSupuestoFin">Supuestos</label>
            <textarea id="txtSupuestoFin" class="form-control" required></textarea>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="form-group">
            <label for="txtMedioFin">Medio de Verificación</label>
            <textarea id="txtMedioFin" class="form-control" required></textarea>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>

<h3><span class="text text-success">Indicador Propósito</span></h3>
<div class="row">
<div class="col-lg-10">
<div class="form-group">
<label for="txtObjetivoPro">Objetivos</label>
<textarea id="txtObjetivoPro" class="form-control" required></textarea>
</div>
</div></div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="txtNombreIndPro">Nombre Indicador</label>
<textarea id="txtNombreIndPro" class="form-control" required></textarea>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="txtMetodoPro">Método de Cálculo</label>
<textarea id="txtMetodoPro" class="form-control" required></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">
<div class="form-group">
<label for="sltTipoPro">Tipo</label>
<select class='form-control m-b' id="sltTipoPro" required>
    <option value=''>-Sleccione-</option>
     <option value='1'>Impacto</option>
     <option value='2'>Proceso</option>
     <option value='3'>Producto</option>
     <option value='4'>Gestión</option>
</select>
</div>
</div>
    <div class="col-lg-3">
    <div class="form-group">
            <label for="sltDimensionPro">Dimensión</label>
            <select class='form-control m-b' id="sltDimensionPro" required>
                <option value="">-Seleccione-</option>
                <option value="1">Eficiencia</option>
                <option value="2">Eficacia</option>
                <option value="3">Calidad</option>
                <option value="4">Economía</option>
           </select>
        </div>
</div>
    <div class="col-lg-3">
    <div class="form-group" id="linea_div">
            <label for="sltFrecuanciaPro">Frecuencia</label>
            <select class='form-control m-b' id="sltFrecuanciaPro" required>
                <option value="">-Sleccione-</option>
                <option value="1">Mensual</option>
                <option value="2">Bimestral</option>
                <option value="3">Trimestral</option>
                <option value="4">Semestral</option>
                <option value="5">Anual</option>
        </select>
        </div>
</div>
    <div class="col-lg-3">
    <div class="form-group" id="linea_div">
            <label for="sltSentidoPro">Sentido</label>
            <select class='form-control m-b' id="sltSentidoPro" required>
                <option value="">-Sleccione-</option>
                <option value="1">Incremento</option>
                <option value="2">Decremento</option>
                <option value="3">Constante</option>
        </select>
        </div>
</div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtUmedidaPro">Unidad Medida</label>
            <input type="text" id="txtUmedidaPro" maxlength="128" class="form-control" required>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="form-group">
            <label for="txtMetaPro">Meta Anual</label>
            <input type="number" id="txtMetaPro" maxlength="254" class="form-control" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtSupuestoPro">Supuestos</label>
            <textarea id="txtSupuestoPro" class="form-control" required></textarea>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="form-group">
            <label for="txtMedioPro">Medio de Verificación</label>
            <textarea id="txtMedioPro" class="form-control" required></textarea>
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
<div id="accion"></div>
<input type="hidden" value="<?php echo $_GET['p']; ?>" id="idproyecto">
</form>
</div></div></div></div></div>

<script type="text/javascript">

function inicio(){
	var proyecto = $('#idproyecto').val();
    $.ajax({
    	method: "POST",
        url: "class/ind_proyecto.php",
        data: {accion: 1, idproyecto: proyecto}
        })
        .done(function(msg) {
            if(msg == 1){
                informacion();
            }
         });
 }

function informacion(){
   console.log("carga informacion ya guaradada");
}

function guardar(){
var accion = $('#accion').val();

$.ajax({
 method: "POST",
 url: "class/ind_proyecto.php",
            data: {accion: accion}
        })
 .done(function(msg) {
   console.log(msg);
});
}
  window.onload = inicio;
</script>
