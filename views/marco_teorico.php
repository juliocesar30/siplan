<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2>Marco Estratégico</h2>
</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Marco Estratégico<small> &nbsp; POA <?php echo $_SESSION['ejercicio'];?></small></h5>
</div>
    <div class="tooltip-demo ibox-title">
&nbsp;&nbsp;&nbsp;Importar: &nbsp;
<div class="btn-group">
<a href="reportes/marco_estrategico_pdf.php" target="_blank" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a PDF">&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
<a href="reportes/marco_estrategico_xls.php" target="_blank" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a XLS">&nbsp;<i class="fa fa-file-excel-o" aria-hidden="true"></i> XLS</a>
<a href="reportes/marco_estrategico_doc.php" target="_blank"class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a DOC">&nbsp;<i class="fa fa-file-word-o" aria-hidden="true"></i> DOC</a></div></div>
<div class="ibox-content">
<form method="get" class="form-horizontal" onsubmit="return guardar();">
<div class="form-group">
<label class="col-sm-2 control-label">Misión</label>
<div class="col-sm-10">
<textarea rows="4" cols="80" class="form-control" id="txtMision" required></textarea></div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Visión</label>
<div class="col-sm-10">
<textarea rows="4" cols="80" class="form-control" id="txtVision" required></textarea></div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Objetivos Estratégicos</label>
<div class="col-sm-10">
<textarea rows="4" cols="80" class="form-control" id="txtObjetivo" required></textarea></div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Actividades Sustantivas</label>
<div class="col-sm-10">
<textarea rows="4" cols="80" class="form-control" id="txtActividad" required></textarea></div>
</div>
<div class="hr-line-dashed"></div>
<?php
if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 2 || $_SESSION['id_perfil'] == 3 ) { ?>
<div class="form-group">
<div class="col-sm-4 col-sm-offset-2">
<button class="btn btn-default" type="button" onclick="cancelar();">Cancelar</button>
<button class="btn btn-default" type="submit">Guardar Cambios</button>
</div>
</div>
<?php } ?>
</form></div> </div> </div> </div> </div>
<input type="hidden" id="accionForm">
<script>
// revisamops información y checamos si ya tiene registrado el marco estrategico.
window.onload = function() {

document.getElementById('accionForm').value = 3;
$.ajax({
method:"POST",
url: "class/marcoEstrategico.php",
data: {accionMarco: 1}
})
.done(function(res) {
if(res == 1){
document.getElementById('accionForm').value = 4;
$.ajax({
method:"POST",
url: "class/marcoEstrategico.php",
data: {accionMarco: 2},
dataType: 'json'
}).done(function(info) {
document.getElementById('txtMision').value = info[0];
document.getElementById('txtVision').value = info[1];
document.getElementById('txtObjetivo').value = info[2];
document.getElementById('txtActividad').value = info[3];
});}});}

function guardar(){


    var accion = document.getElementById('accionForm').value;
    var mision = document.getElementById('txtMision').value;
    var vision = document.getElementById('txtVision').value;
    var objetivo = document.getElementById('txtObjetivo').value;
    var actividad = document.getElementById('txtActividad').value;

    $.ajax({
        method: "POST",
        url: "class/marcoEstrategico.php",
        data: { mision: mision, vision: vision, objetivo: objetivo, actividad: actividad, accionMarco: accion }
    }) .done(function(msg) {

        if(msg == "guardado"){
            document.getElementById('accionForm').value = 4;
            alert("Se ha guardado el Marco Estratégico");
        }
        if(msg == "actualizado"){
            alert("Se ha actualizado el Marco Estratégico");
        }
        if(msg == "error"){
            alert("Se ha presentado un error");
            return false;
        }
    });
    return false;
}


function cancelar(){
    location.href = "main.php?token=cfcd208495d565ef66e7dff9f98764da";
}
</script>
