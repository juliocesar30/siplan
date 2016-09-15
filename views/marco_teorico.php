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
<div class="ibox-content">
<form method="get" class="form-horizontal">
<div class="form-group">
<label class="col-sm-2 control-label">Resultado y vinculación del Programa Operativo Anual</label>
<div class="col-sm-10">
	<textarea rows="4" cols="80" class="form-control" id="txtResultado">

	</textarea></div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Actividades Sustantivas</label>
<div class="col-sm-10">
	<textarea rows="4" cols="80" class="form-control" id="txtActividadsus">

	</textarea></div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Misión</label>
<div class="col-sm-10">
	<textarea rows="4" cols="80" class="form-control" id="txtMision">

	</textarea></div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Visión</label>
<div class="col-sm-10">
	<textarea rows="4" cols="80" class="form-control" id="txtVision">

	</textarea></div>
</div>


<div class="hr-line-dashed"></div>
 <div class="form-group">
 <div class="col-sm-4 col-sm-offset-2">
  <button class="btn btn-danger" type="submit">Cancelar</button>
   <button class="btn btn-primary" type="button" onclick="guardar();">Guardar Cambios</button>
   </div>
   </div>
   </form></div> </div> </div> </div> </div>

<script>
    function guardar(){
        var resultado = document.getElementById('txtResultado').value;
        var actividad = document.getElementById('txtActividadsus').value;
        var mision = document.getElementById('txtMision').value;
        var vision = document.getElementById('txtVision').value;


        $.ajax({
       method: "POST",
       url: "class/marcoEstrategico.php",
       data: { resultado: resultado, actividad: actividad, mision: mision, vision: vision }
})
  .done(function( msg ) {
    if(msg == "guardado"){
        alert("se ha registrado");
        location.reload();
    }
    if(msg == "actualizado"){
        alert("se ha actualizado");
        location.reload();
    }

    if(msg == "error"){
        alert("ha ocurrido un error");
        return false;
    }
  });
    }
</script>
