<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2>Agregar Proyecto</h2>
</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<form role="form" class="form-horizontal">
<h3><span class="text text-success">
 Información General del proyecto</span></h3>
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
            <input type="number" id="numInversion" name="numInversion" class="form-control">
          </div>
    </div>
    <div class="col-lg-8">
    <div class="form-group" id="prog_pres_div">
    </div></div>
  </div>
  <div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <label for="txtUresponsable">Unidad Responsable</label>
            <input type="text" id="txtUresponsable" name="txtUresponsable" class="form-control">
          </div>
    </div>
    <div class="col-lg-5">
         <div class="form-group">
    <label for="txtNombreTitular">Nombre del Titular</label>
  <input type="text" id="txtNombreTitular" name="txtNombreTitular" class="form-control">

    </div>

         </div>
  </div>
  <div class="hr-line-dashed"></div>
   <h3><span class="text text-success">Alineación Plan Estatal de Desarrollo 2016-2021</span></h3>
     <div class="row">
    <div class="col-lg-4">
        <div class="form-group" id="ejes_div">
          </div>
    </div>
    <div class="col-lg-4">
         <div class="form-group">
    <label for="txtNombreProyecto">Nombre del Titular</label>
  <input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control">

    </div>

         </div>
          <div class="col-lg-4">
         <div class="form-group">
    <label for="txtNombreProyecto">Nombre del Titular</label>
  <input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control">

    </div>

         </div>
  </div>

</form>
</div>
</div>
</div>
</div>
</div>
<script src="js/proyectos.js"></script>
<script type="text/javascript">
    window.onload = cargar_selects_iniciales();
</script>
