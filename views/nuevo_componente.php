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
<div class="col-lg-10"><h2>Agregar Componente</h2></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<form role="form" class="form-horizontal" onsubmit="return validar();">
<h3><span class="text text-success">Información General del componente</span></h3>
<div class="row">
<div class="col-lg-2">
<div class="form-group">
<label for="intNumComponente">Num. Componente</label>
<input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control" required>
</div>
</div>
<div class="col-lg-3">
<div class="form-group">
<label for="intPonderacion">Ponderación&nbsp;<small><span class="text text-danger" id="ponderacion_max">Debe ser menor o igual a </span></small></label>
<input type="hidden" id="ponderacion_max_h">
<input type="number" id="intPonderacion" name="intPonderacion" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="form-group">
<label for="txtNombreComponente">Descripción del Componente</label>
<textarea id="txtNombreProyecto" name="txtNombreProyecto" maxlength="254" class="form-control" required></textarea>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-6">
<div class="form-group">
<label for="txtNombreComponente">Unidad Responsable</label>
<input type="text" id="txtNombreProyecto" name="txtNombreProyecto" maxlength="254" class="form-control" required>
</div>
</div>
     <div class="col-lg-4">
        <div class="form-group" id="prog_pres_div"></div>
    </div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group" id="prog_umedida_div">
<label >Tipo Unidad de Medida</label>
<select class='form-control m-b'><option>-Sleccione U. Medida-</option></select>

</div>

</div>
<div class="col-lg-4">
<div class="form-group" id="tipo_umed_div">
<label >Tipo Unidad de Medida</label>
<select class='form-control m-b'><option>-Sleccione U. Medida-</option></select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group" >
<label for="intNumComponente">Cantidad</label>
<input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control" required>
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
    <input type="hidden" id="idproyecto" value="<?php echo $_GET['p']; ?>">
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
<h3><span class="text text-success">Indicador del Componente</span></h3>

<div class="row">
  <div class="col-lg-6">
  <div class="form-group">
<label for="txtNombreComponente">Nombre del Indicador</label>
    <textarea id="txtNombreProyecto" name="txtNombreProyecto" maxlength="254" class="form-control" required></textarea>
</div>
</div>
     <div class="col-lg-6">
  <div class="form-group">
<label for="txtNombreComponente">Método de Cálculo</label>
    <textarea id="txtNombreProyecto" name="txtNombreProyecto" maxlength="254" class="form-control" required></textarea>
</div>
</div>
</div>


<div class="row">
       <div class="col-lg-3">
        <div class="form-group" id="linea_div">
            <label>Tipo Indicador</label>
            <select class='form-control m-b'><option>-Sleccione-</option></select>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="form-group" id="linea_div">
            <label >Dimensión Indicador</label>
            <select class='form-control m-b'><option>-Sleccione-</option></select>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="form-group" id="linea_div">
            <label >Frecuencia Indicador</label>
            <select class='form-control m-b'><option>-Sleccione-</option></select>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="form-group" id="linea_div">
            <label >Sentido Indicador</label>
            <select class='form-control m-b'><option>-Sleccione-</option></select>
        </div>
    </div>

</div>
<div class="row">
 <div class="col-lg-4">
   <div class="form-group">
       <label>Unidad Medida</label>
       <input type="text" id="intNumProyecto" name="intNumProyecto" class="form-control" required>
    </div>
</div>
   <div class="col-lg-4">
   <div class="form-group">
       <label>Meta Anual</label>
       <input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control" required>
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
    <input type="hidden" id="id_proyecto" value="<?php echo $_GET['p']; ?>">
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
<script src="js/componentes.js"></script>
<script type="text/javascript">
    window.onload = cargar_selects_iniciales();
</script>
