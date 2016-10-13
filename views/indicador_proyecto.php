<?php

  $id_proyecto = $_GET['p'];
  $query1 = "select count(*) from indicadores_proyecto where id_proyecto = $id_proyecto";
  $conn = new conexion();
  $conexion = $conn->conectar($_SESSION['id_perfil']);
  $ExeConsulta = $conexion->query($query1);
  $conexion->close();
  $Res = $ExeConsulta->fetch_array();

  if($Res[0] == 1){
     $actualizar = true;
    $query2 = "select
ip.fin_objetivo,
ip.fin_nombre,
ip.fin_metodo,
ip.fin_tipo,
tiF.tipo_indicador,
ip.fin_dimension,
diF.dimension_indicador,
ip.fin_frecuencia,
fiF.frecuencia,
ip.fin_sentido,
siF.sentido,
ip.fin_umedida,
ip.fin_meta,
ip.fin_medio_verifica,
ip.fin_supuesto,
ip.proposito_objetivo,
ip.proposito_nombre,
ip.proposito_metodo,
ip.proposito_tipo,
tiP.tipo_indicador,
ip.proposito_dimension,
diP.dimension_indicador,
ip.proposito_frecuencia,
fiP.frecuencia,
ip.proposito_sentido,
siP.sentido,
ip.proposito_umedida,
ip.proposito_meta,
ip.proposito_medio_verifica,
ip.proposito_supuesto
from
indicadores_proyecto ip
inner join tipo_indicador tiF on (ip.fin_tipo = tiF.id_tipo_indicador)
inner join dimension_indicador diF on (ip.fin_dimension = diF.id_dimension_indicador)
inner join frecuencia_indicador fiF on (ip.fin_frecuencia = fiF.id_frecuencia)
inner join sentido_indicador siF on (ip.fin_sentido = siF.id_sentido)
inner join tipo_indicador tiP on (ip.proposito_tipo = tiP.id_tipo_indicador)
inner join dimension_indicador diP on (ip.proposito_dimension = diP.id_dimension_indicador)
inner join frecuencia_indicador fiP on (ip.proposito_frecuencia = fiP.id_frecuencia)
inner join sentido_indicador siP on (ip.proposito_sentido = siP.id_sentido)
where ip.id_proyecto = $id_proyecto";
    $conn = new conexion();

    $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
    $ExeConsulta = $conexion->query($query2);
    $conexion->close();
    $Res = $ExeConsulta->fetch_array();
  }

?>

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
<select class='form-control m-b' id='sltTipoFin' required>
    <?php if($actualizar){ ?>
        <option value="<?php echo $Res[3]; ?>"><?php echo $Res[4]; ?></option>
    <?php } ?>
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
            <select class='form-control m-b' id="sltDimensionFin" name="sltDimensionFin" required>
                 <?php if($actualizar){ ?>
        <option value="<?php echo $Res[5]; ?>"><?php echo $Res[6]; ?></option>
    <?php } ?>
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
            <select class='form-control m-b' id="sltFrecuanciaFin" name="sltFrecuanciaFin" required>
                 <?php if($actualizar){ ?>
        <option value="<?php echo $Res[7]; ?>"><?php echo $Res[8]; ?></option>
    <?php } ?>
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
            <select class='form-control m-b' id="sltSentidoFin" name="sltSentidoFin" required>
                 <?php if($actualizar){ ?>
        <option value="<?php echo $Res[9]; ?>"><?php echo $Res[10]; ?></option>
    <?php } ?>
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
            <input type="text" id="txtUmedidaFin" name="txtUmedidaFin" maxlength="128" class="form-control" required>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="form-group">
            <label for="txtMetaFin">Meta Anual</label>
            <input type="number" id="txtMetaFin" name="txtMetaFin" maxlength="254" class="form-control" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtSupuestoFin">Supuestos</label>
            <textarea id="txtSupuestoFin" name="txtSupuestoFin" class="form-control" required></textarea>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="form-group">
            <label for="txtMedioFin">Medio de Verificación</label>
            <textarea id="txtMedioFin" name="txtMedioFin" class="form-control" required></textarea>
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
     <?php if($actualizar){ ?>
        <option value="<?php echo $Res[18]; ?>"><?php echo $Res[19]; ?></option>
    <?php } ?>
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
                 <?php if($actualizar){ ?>
        <option value="<?php echo $Res[20]; ?>"><?php echo $Res[21]; ?></option>
    <?php } ?>
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
            <label for="sltFrecuenciaPro">Frecuencia</label>
            <select class='form-control m-b' id="sltFrecuenciaPro" required>
                 <?php if($actualizar){ ?>
        <option value="<?php echo $Res[22]; ?>"><?php echo $Res[23]; ?></option>
    <?php } ?>
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
                 <?php if($actualizar){ ?>
        <option value="<?php echo $Res[24]; ?>"><?php echo $Res[25]; ?></option>
    <?php } ?>
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
<input type="hidden" value="2" id="accion">
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
document.getElementById('accion').value=3;
informacion();
}
});
}

function informacion(){
   document.getElementById('txtObjetivoFin').value = "<?php echo $Res[0]; ?>";
   document.getElementById('txtNombreIndFin').value = "<?php echo $Res[1]; ?>";
   document.getElementById('txtMetodoFin').value = "<?php echo $Res[2]; ?>";
   document.getElementById('txtUmedidaFin').value = "<?php echo $Res[11]; ?>";
    document.getElementById('txtMetaFin').value = "<?php echo $Res[12]; ?>";
    document.getElementById('txtMedioFin').value = "<?php echo $Res[13]; ?>";
    document.getElementById('txtSupuestoFin').value = "<?php echo $Res[14]; ?>";

    document.getElementById('txtObjetivoPro').value = "<?php echo $Res[15]; ?>";
   document.getElementById('txtNombreIndPro').value = "<?php echo $Res[16]; ?>";
   document.getElementById('txtMetodoPro').value = "<?php echo $Res[17]; ?>";
   document.getElementById('txtUmedidaPro').value = "<?php echo $Res[26]; ?>";
    document.getElementById('txtMetaPro').value = "<?php echo $Res[27]; ?>";
    document.getElementById('txtMedioPro').value = "<?php echo $Res[28]; ?>";
    document.getElementById('txtSupuestoPro').value = "<?php echo $Res[29]; ?>";


}

function guardar(){
var accion = $('#accion').val();
$.ajax({
 method: "POST",
 url: "class/ind_proyecto.php",
            data: {accion: accion,
                   id_proyecto: $('#idproyecto').val(),
                   fin_objetivo: $('#txtObjetivoFin').val(),
                   fin_nombre: $('#txtNombreIndFin').val(),
                   fin_metodo: $('#txtMetodoFin').val(),
                   fin_tipo: $('#sltTipoFin').val(),
                   fin_dimension: $('#sltDimensionFin').val(),
                   fin_frecuencia: $('#sltFrecuanciaFin').val(),
                   fin_sentido: $('#sltSentidoFin').val(),
                   fin_umedida: $('#txtUmedidaFin').val(),
                   fin_meta: $('#txtMetaFin').val(),
                   fin_medio_verifica: $('#txtMedioFin').val(),
                   fin_supuesto: $('#txtSupuestoFin').val(),
                   proposito_objetivo: $('#txtObjetivoPro').val(),
                   proposito_nombre: $('#txtNombreIndPro').val(),
                   proposito_metodo: $('#txtMetodoPro').val(),
                   proposito_tipo: $('#sltTipoPro').val(),
                   proposito_dimension: $('#sltDimensionPro').val(),
                   proposito_frecuencia: $('#sltFrecuenciaPro').val(),
                   proposito_sentido: $('#sltSentidoPro').val(),
                   proposito_umedida: $('#txtUmedidaPro').val(),
                   proposito_meta: $('#txtMetaPro').val(),
                   proposito_medio_verifica: $('#txtMedioPro').val(),
                   proposito_supuesto: $('#txtSupuestoPro').val()

                  }
        })
 .done(function(msg) {
    if(msg == "guardado"){
        alert("Se ha guardado el Indicador");
        location.href = "main.php?token=c81e728d9d4c2f636f067f89cc14862c";
        return false;
    }else{
        alert("ha ocurrido un error");
        return false;
    }

});

    return false;
}
  window.onload = inicio;
</script>
