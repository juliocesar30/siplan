<?php
 require_once('class/conexion.php');
$idp = $_GET['p'];
$sql = "call infoProyecto($idp)";
$conn = new conexion();
$conexion = $conn->conectar($_SESSION['id_perfil']);
$conexion->set_charset("utf8");
$ExeConsulta = $conexion->query($sql);
$conexion ->close();
$Res = $ExeConsulta->fetch_array();
?>
<style>
.modal {
display: none;
position: fixed;
z-index: 1;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgb(0,0,0);
background-color: rgba(0,0,0,0.4);
}
.modal-content {
background-color: #fefefe;
margin: 15% auto;
padding: 20px;
border: 1px solid #888;
width: 80%;
}
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
<div class="col-lg-10"><h2>Editar Proyecto</h2></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-content">
<form role="form" class="form-horizontal" onsubmit="return validar();">
<h3><span class="text text-success">Información General del proyecto</span></h3>
<div class="row">
<div class="col-lg-2">
<div class="form-group">
<label for="intNumProyecto">Num. Proyecto</label>
<input type="hidden" id="num_proyecto_o" value="<?php echo $Res[6]; ?>">
<input type="hidden" id="id_proyecto" value="<?php echo $_GET['p']; ?>">
<input type="number" id="intNumProyecto" name="intNumProyecto" class="form-control" value="<?php echo $Res[6]; ?>" required>
</div>
</div>
<div class="col-lg-8">
<div class="form-group">
<label for="txtNombreProyecto">Nombre</label>
<input type="text" id="txtNombreProyecto" name="txtNombreProyecto" maxlength="254" class="form-control" value="<?php echo $Res[7]; ?>"  required>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-2">
<div class="form-group">
<label for="numInversion">Inversión Aproximada</label>
<input type="number" id="numInversion" name="numInversion" class="form-control" value="<?php echo $Res[8]; ?>"  required>
</div>
</div>
<div class="col-lg-8">
<div class="form-group" id="prog_pres_div">
<label for="sltProgPres">Programa Presupuestal</label>
<select class='form-control m-b' id='sltProgPres' name='sltProgPres' required>
<option value="<?php echo $Res[37]; ?>" ><?php echo $Res[38];?></option>
<option value="">-------------</option>
<?php
   $sql_progPres = "SELECT * FROM prog_presupuestarios";
  $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeProgPres= $conexion->query($sql_progPres);
            $conexion ->close();
              while($ResProgPres = $ExeProgPres->fetch_array()){
                  echo "<option value='".$ResProgPres[0]."'>".$ResProgPres[1]."-".$ResProgPres[2]."</option>";
              }
              ?>
          </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <label for="txtUresponsable">Unidad Responsable</label>
            <input type="text" id="txtUresponsable" name="txtUresponsable" class="form-control" value="<?php echo $Res[26]; ?>"  required>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="form-group">
            <label for="txtNombreTitular">Nombre del Titular</label>
            <input type="text" id="txtNombreTitular" name="txtNombreTitular" class="form-control" value="<?php echo $Res[27]; ?>" required>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Alineación Plan Estatal de Desarrollo 2016-2021</span></h3>
<div class="row">
    <div class="col-lg-4"><div class="form-group" id="ejes_div">
        <label for="sltEje">Eje</label>
          <select class='form-control m-b' id='sltEje' name='sltEje' onchange='cargarLineasPED(this.value);' required>
              <option value="<?php echo $Res[0]; ?>" ><?php echo $Res[0] ." - ". $Res[1];?></option>
              <option value="">-------------</option>
              <?php

            $sql_eje = "SELECT * FROM ejes";
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeEje= $conexion->query($sql_eje);
            $conexion ->close();


              while($Reseje = $ExeEje->fetch_array()){
                  echo "<option value='".$Reseje[0]."'>".$Reseje[1]."</option>";
              }
              ?>
          </select>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" id="linea_div" >
             <label for='sltLinea'>Linea</label>
            <select class='form-control m-b' id='sltLinea' name='sltLinea' onchange='cargarEstrategiasPED(this.value);' required>
                <option value='<?php echo $Res[2]; ?>'><?php echo $Res[3]; ?></option>
                <option value=''>-----------------</option>
                <?php
                 $sql_linea= "SELECT * FROM lineas WHERE id_eje = ".$Res[0];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeLinea= $conexion->query($sql_linea);
            $conexion ->close();


              while($Reslin = $ExeLinea->fetch_array()){
                  echo "<option value='".$Reslin[0]."'>".$Reslin[2]."</option>";
              }
                ?>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" id="estrategia_div">
            <label for='sltEstrategia'>Estrategia</label>
            <select class='form-control m-b' id='sltEstrategia' name='sltEstrategia' required>
                <option value='<?php echo $Res[4]; ?>'><?php echo $Res[5]; ?></option>
                <option value=''>-----------</option>
                 <?php
                 $sql_estrategia= "SELECT * FROM estrategias WHERE id_linea = ".$Res[2];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $Exeestrategia= $conexion->query($sql_estrategia);
            $conexion ->close();


              while($Resestrategia = $Exeestrategia->fetch_array()){
                  echo "<option value='".$Resestrategia[0]."'>".$Resestrategia[3]."</option>";
              }
                ?>
            </select>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<h3><span class="text text-success">Alineación Plan Nacional de Desarrollo 2012-2018</span></h3>
<div class="row">
    <div class="col-lg-3">
        <div class="form-group" id="pnd_ejes_div">
            <label for='sltPndEje'>Meta Nacional</label>
            <select class='form-control m-b' id='sltPndEje' name='sltPndEje' onchange='cargaObjPND(this.value);' required>
                <option value='<?php echo $Res[29];?>'><?php echo $Res[30];?></option>
                <option value=''>-------------</option>
                     <?php
                 $sql= "SELECT * FROM pnd_ejes";
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeCons= $conexion->query($sql);
            $conexion ->close();


              while($ResPND = $ExeCons->fetch_array()){
                  echo "<option value='".$ResPND[0]."'>".$ResPND[1]."</option>";
              }
                ?>
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="pnd_objetivo_div">
            <label for="sltObjPND">Objetivo PND</label>
            <select class='form-control m-b' id="sltObjPND" name="sltObjPND"  onchange='cargaEstrategiaPND(this.value);' required>
                <option value="<?php echo $Res[31]; ?>"><?php echo $Res[32] ?></option>
                <option value=''>----------</option>
                <?php
                 $sqlpndobj= "SELECT * FROM pnd_objetivos WHERE id_pnd_eje = ".$Res[29];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsPndobj= $conexion->query($sqlpndobj);
            $conexion ->close();


              while($ResPNDO = $ExeConsPndobj->fetch_array()){
                  echo "<option value='".$ResPNDO[0]."'>".$ResPNDO[2]."</option>";
              }
                ?>
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="pnd_estrategia_div">
            <label for="sltEstrategiaPND">Estrategia PND</label>
            <select class='form-control m-b' id="sltEstrategiaPND" name="sltEstrategiaPND"  onchange='cargaLineaPND(this.value);' required>
             <option value="<?php echo $Res[33]; ?>"><?php echo $Res[34] ?></option>
                <option value=''>----------</option>
                <?php
                 $sqlpndest= "SELECT * FROM pnd_estrategias WHERE id_pnd_objetivo = ".$Res[31];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsPndest= $conexion->query($sqlpndest);
            $conexion ->close();

              while($ResPNDEs = $ExeConsPndest->fetch_array()){
                  echo "<option value='".$ResPNDEs[0]."'>".$ResPNDEs[3]."</option>";
              }
                ?>
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group" id="pnd_linea_div">
            <label for="sltLineaPND">Línea de Acción PND</label>
            <select class='form-control m-b' id="sltLineaPND" name="sltLineaPND" required>
             <option value="<?php echo $Res[35]; ?>"><?php echo $Res[36] ?></option>
                <option value=''>----------</option>
                <?php
            $sqlpndlin= "SELECT * FROM pnd_lineas_accion WHERE id_pnd_estrategia = ".$Res[33];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsPndlin= $conexion->query($sqlpndlin);
            $conexion ->close();

              while($ResPNDL = $ExeConsPndlin->fetch_array()){
                  echo "<option value='".$ResPNDL[0]."'>".$ResPNDL[4]."</option>";
              }
                ?>
            </select>
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
            <input type="number" id="intPonderacion" name="intPonderacion" class="form-control" value="<?php echo $Res[9]; ?>" required >
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group" >
            <label for="txtObjetivo">Objetivo</label>
            <textarea class="form-control" rows="4" id="txtObjetivo" name="txtObjetivo" required>
            <?php echo $Res[28]; ?>
            </textarea>
        </div>
    </div>
     <div class="col-lg-4">
        <div class="form-group" >
            <label for="txtProposito">Propósito</label>

            <textarea class="form-control" rows="4" id="txtProposito" name="txtProposito" required>
            <?php echo $Res[24]; ?>
            </textarea>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" >
            <label for="txtJustificacion">Justificación</label>
            <textarea class="form-control" rows="4" id="txtJustificacion" name="txtJustificacion" required>

            <?php echo $Res[17]; ?></textarea>
        </div>
    </div>
</div>

<div class="row">
<div class="col-lg-4">
    <div class="form-group" >
    <label for="intBenMuj">Beneficiarios Mujeres</label>
  <input type="number" id="intBenMuj" name="intBenMuj" class="form-control" value="<?php echo $Res[16]; ?>" required>
    </div>
</div>
<div class="col-lg-4" >
    <div class="form-group" >
       <label for="intBenHom">Beneficiarios Hombres</label>
  <input type="number" id="intBenHom" name="intBenHom" class="form-control" value = "<?php echo $Res[15]; ?>" required>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group" id="sector_div">
    <label for="sltSectorPoblacional">Sector Poblacional</label>
            <select class='form-control m-b' id='sltSectorPoblacional' name='sltSectorPoblacional' required>
             <option value="<?php echo $Res[13]; ?>"><?php echo $Res[14] ?></option>
                <option value=''>----------</option>
                <?php
            $sqlsecp= "SELECT * FROM sector_poblacional";
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsSecPob= $conexion->query($sqlsecp);
            $conexion ->close();

              while($ResSecPob= $ExeConsSecPob->fetch_array()){
                  echo "<option value='".$ResSecPob[0]."'>".$ResSecPob[1]."</option>";
              }
                ?>
            </select>

    </div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
    <div class="form-group">
        <label for="txtUmedida">Unidad de Medida</label>
        <input type="text" class="form-control" id="txtUmedida" name="txtUmedida" value="<?php echo $Res[10]; ?>" required>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
         <label for="intProgAnual">Programado Anual</label>
        <input type="number" class="form-control" id="intProgAnual" name="intProgAnual" value="<?php echo $Res[11]; ?>" required>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <label for="intProgSem">Programado Semestral</label>
        <input type="number" class="form-control" id="intProgSem" name="intProgSem" value="<?php echo $Res[12]; ?>" required>
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
    <div class="form-group" id="finalidad_div">
        <label for='sltFinalidad'>Finalidad</label>
            <select class='form-control m-b' id='sltFinalidad' name='sltFinalidad' onchange='cargaFuncion(this.value)' required>
                <option value='<?php echo $Res[18]; ?>'><?php echo $Res[19]; ?></option>
                <option value=''>--------</option>
                  <?php
            $sqlfin= "SELECT * FROM finalidad";
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsFin= $conexion->query($sqlfin);
            $conexion ->close();
              while($ResFin= $ExeConsFin->fetch_array()){
                  echo "<option value='".$ResFin[0]."'>".$ResFin[1]."</option>";
              }
                ?>
        </select>


    </div>
</div>
<div class="col-lg-4">
    <div class="form-group" id="funcion_div">
        <label for="sltFuncion">Función</label>
        <select select class='form-control m-b' id='sltFuncion' name='sltFuncion' onchange='cargaSubFuncion(this.value)' required>
            <option value='<?php echo $Res[20]; ?>'><?php echo $Res[21]; ?></option>
            <option value=''>--------</option>
            <?php
            $sqlfun= "SELECT * FROM funcion WHERE id_finalidad = ".$Res[18];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsfun= $conexion->query($sqlfun);
            $conexion ->close();
              while($ResFun= $ExeConsfun->fetch_array()){
                  echo "<option value='".$ResFun[0]."'>".$ResFun[3]."</option>";
              }
                ?>
        </select>

    </div>
</div>
<div class="col-lg-4">
    <div class="form-group" id="subfuncion_div">
        <label for="sltSubFuncion">Sub-Función</label>
        <select  class='form-control m-b' id='sltSubFuncion' name='sltSubFuncion' required>
             <option value='<?php echo $Res[22]; ?>'><?php echo $Res[23]; ?></option>
            <option value=''>--------</option>
        <?php
            $sql_subfuncion = "SELECT id_funf FROM funcion WHERE id_funcion = ".$Res[20];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $ExeConsultaF = $conexion->query($sql_subfuncion);
            $conexion ->close();
            $Rfun = $ExeConsultaF->fetch_array();
            $sqlsb = "SELECT id_subfuncion,subfuncion FROM subfuncion WHERE id_funcion_f = ".$Rfun[0]." AND id_finalidad = ".$Res[18];
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsfun = $conexion->query($sqlsb);
            $conexion ->close();
              while($ResFun= $ExeConsfun->fetch_array()){
                  echo "<option value='".$ResFun[0]."'>".$ResFun[1]."</option>";
              }
                ?>
        </select>

    </div>
</div>
</div>

<div class="row">
    <div class="col-lg-10">
    <div class="form-group">
      <label for="ObservacionesProyecto">
          Observaciones del Proyecto
      </label>
        <textarea name="ObservacionesProyecto" id="ObservacionesProyecto" class="form-control" rows="4">
        <?php echo $Res[25]; ?>
        </textarea>
    </div>
    </div>
</div>
<div class="row">
<div class="col-lg-4">
    <button type="button" class="btn btn-default" onclick="cancelarEdit();"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</button>
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

<div id="myModal" class="modal">
  <div class="modal-content" >
    <span class="close">x</span>
      <div id="modalInfo" ><b>Validando y Guardando . . .</b> <img src='images/loading_verde.gif'></div>
  </div>
</div>
<script type="text/javascript">

function cancelarEdit(){
        location.href="main.php?token=c81e728d9d4c2f636f067f89cc14862c";
}

function cargarLineasPED(v){
document.getElementById('linea_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
document.getElementById('estrategia_div').innerHTML = "<label >Estrategia</label><select class='form-control m-b'><option>-Sleccione Linea-</option></select>";
var catalogo = "lineas";
$.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: catalogo,eje: v}
})
.done(function(msg) {
document.getElementById('linea_div').innerHTML = msg;
});
}


function cargarEstrategiasPED(v){
document.getElementById('estrategia_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
var catalogo = "estrategias";
$.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: catalogo,linea: v}
})
.done(function(msg) {
document.getElementById('estrategia_div').innerHTML = msg;


});}


 function pnd_ejes(){
document.getElementById('pnd_ejes_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
var catalogo = "pnd_ejes";
$.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: catalogo}
})
.done(function(msg) {
document.getElementById('pnd_ejes_div').innerHTML = msg;
});
}

function cargaObjPND(v){
document.getElementById('pnd_objetivo_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
document.getElementById('pnd_estrategia_div').innerHTML = "<label for='sltEstrategiaPND'>Estrategia PND</label><select class='form-control m-b' id='sltEstrategiaPND' name='sltEstrategiaPND'><option>-Sleccione Objetivo PND-</option></select>";
    document.getElementById('pnd_linea_div').innerHTML = "<label for='sltLineaPND'>Línea de Acción PND</label><select class='form-control m-b' id='sltLineaPND' name='sltLineaPND'><option>-Sleccione Objetivo PND-</option></select>";
    var catalogo = "pnd_objetivos";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: { catalogo: catalogo,eje: v}
})
  .done(function(msg) {
     document.getElementById('pnd_objetivo_div').innerHTML = msg;
  });

}

function cargaEstrategiaPND(v){
    document.getElementById('pnd_estrategia_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
     document.getElementById('pnd_linea_div').innerHTML = "<label for='sltLineaPND'>Línea de Acción PND</label><select class='form-control m-b' id='sltLineaPND' name='sltLineaPND'><option>-Sleccione Estrategia PND-</option></select>";
    var catalogo = "pnd_estrategias";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: { catalogo: catalogo,objetivo: v}
})
  .done(function(msg) {
     document.getElementById('pnd_estrategia_div').innerHTML = msg;
  });


}

function cargaLineaPND(v){
    document.getElementById('pnd_linea_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
    var catalogo = "pnd_lineas";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: { catalogo: catalogo,estrategia: v}
})
  .done(function(msg) {
     document.getElementById('pnd_linea_div').innerHTML = msg;
  });
}


function ponderacion_maxima(){
    $.ajax({
       method: "POST",
       url: "class/proyectos.php",
       data: { accion: 2}
})
  .done(function(msg) {
     var PonderaActual = parseInt(<?php echo $Res[9]; ?>);
     var max = parseInt(msg);
    pmax = PonderaActual + max;
     document.getElementById('ponderacion_max').innerHTML = "&nbsp;debe ser menor o igual a: "+pmax;
     document.getElementById('ponderacion_max_h').value=pmax;
  });
}


function cargaFuncion(v){
    document.getElementById('funcion_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
    document.getElementById('subfuncion_div').innerHTML = "<label for='sltSubFuncion'>SubFunción</label><select class='form-control m-b' id='sltSubFuncion' name='sltSubfunción'><option>-Sleccione Función-</option></select>";
    var catalogo = "funcion";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: {catalogo: catalogo,finalidad: v}
})
  .done(function(msg) {
     document.getElementById('funcion_div').innerHTML = msg;
  });
}

function cargaSubFuncion(v){

    document.getElementById('subfuncion_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
    var catalogo = "subfuncion";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: {catalogo: catalogo,funcion: v,finalidad: $('#sltFinalidad').val()}
})
  .done(function(msg) {
     document.getElementById('subfuncion_div').innerHTML = msg;
  });
}


function inicio(){
	ponderacion_maxima();
}

window.onload = inicio;


function validar(){
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
    var num_pr_actual = $('#num_proyecto_o').val();
    var numproyecto = $('#intNumProyecto').val();
    var id_proyecto = $('#id_proyecto').val();
    var pondera = parseInt(document.getElementById('intPonderacion').value);
    var ponderamax = parseInt(document.getElementById('ponderacion_max_h').value);

    if(pondera > ponderamax){
        modal.style.display = "none";
        alert("La ponderacion no puede ser mayor a: "+ponderamax);
        document.getElementById('intPonderacion').focus();
        return false;
    }

    $.ajax({
       method: "POST",
       url: "class/proyectos.php",
       data: {accion: 7,num_proyecto: numproyecto,pr_actual: num_pr_actual,id_proyecto: id_proyecto}
    })
   .done(function(msg) {

    if(msg == "error"){
        modal.style.display="none";
        alert("Ya existe un proyecto con ese numero");
        document.getElementById('intNumProyecto').value = '';
        document.getElementById('intNumProyecto').focus();
        return false;
    }else{
        var resultado_guardar = guardarProyecto();
    }

  });

   return false;
}

function guardarProyecto(){
var modal = document.getElementById('myModal');
modal.style.display = "block";
var id_proyecto =  $('#id_proyecto').val();
var eje = $('#sltEje').val();
var linea = $('#sltLinea').val();
var est = $('#sltEstrategia').val();
var num = $('#intNumProyecto').val();
var nomb = $('#txtNombreProyecto').val();
var inversion = $('#numInversion').val();
var pondera = $('#intPonderacion').val();
var umedida = $('#txtUmedida').val();
var proganual = $('#intProgAnual').val();
var progsem =  $('#intProgSem').val();
var secpob = $('#sltSectorPoblacional').val();
var benh = $('#intBenHom').val();
var benm =  $('#intBenMuj').val();
var just = $('#txtJustificacion').val();
var fin = $('#sltFinalidad').val();
var fun = $('#sltFuncion').val();
var subfun = $('#sltSubFuncion').val();
var prop = $('#txtProposito').val();
var obspro = $('#ObservacionesProyecto').val();
var uresp = $('#txtUresponsable').val();
var titular = $('#txtNombreTitular').val();
var obj = $('#txtObjetivo').val();
var pndeje = $('#sltPndEje').val();
var pndobj = $('#sltObjPND').val();
var pndest = $('#sltEstrategiaPND').val();
var pndlin = $('#sltLineaPND').val();
var progpres =  $('#sltProgPres').val();

$.ajax({
method: "POST",
url: "class/proyectos.php",
data: {accion: 8,id_proyecto: id_proyecto,eje: eje,linea: linea,est: est,num: num,nomb: nomb,inversion: inversion,pondera: pondera,umedida: umedida,proganual: proganual,progsem: progsem,secpob: secpob,benh: benh, benm: benm,just: just,fin: fin,fun: fun,subf: subfun,prop: prop,obspro: obspro,uresp: uresp,titular: titular,obj: obj,pndeje: pndeje,pndobj: pndobj,pndest: pndest,pndlin: pndlin,progpres: progpres}
   })
  .done(function(msg) {
     modal.style.display = "none";
      if(msg == "guardado"){
        alert("el proyecto con numero "+num+" se guardó correctamente");
        location.href="main.php?token=c81e728d9d4c2f636f067f89cc14862c";
      }else{
          console.log(msg);
          alert("ha ocurrido un error al intentar guardar el proyecto");
          return false;
      }
  });
return false;
}



</script>
