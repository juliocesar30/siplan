function cargar_selects_iniciales() {
prog_pres_sel();
ejes();
pnd_ejes();
ponderacion_maxima();
cargaSectorPoblacional();
cargaFinalidad();
}
function prog_pres_sel(){
document.getElementById('prog_pres_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
var catalogo = "prog_presupuestarios";
$.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: catalogo}
})
.done(function(msg) {
document.getElementById('prog_pres_div').innerHTML = msg;
});
}

function ejes(){
document.getElementById('ejes_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
var catalogo = "ejes";
$.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: catalogo}
})
.done(function(msg) {
document.getElementById('ejes_div').innerHTML = msg;
});
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
     if(msg == 0){
         alert("No tienes ponderacion disponible, no se puede agregar un proyecto");
         location.href="main.php?token=c81e728d9d4c2f636f067f89cc14862c";
         return false;
     }
     document.getElementById('ponderacion_max').innerHTML = "&nbsp;debe ser menor o igual a: "+msg;
     document.getElementById('ponderacion_max_h').value=msg;
  });
}

function cargaSectorPoblacional(){
    document.getElementById('sector_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
    var catalogo = "sector_poblacional";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: { catalogo: catalogo}
})
  .done(function(msg) {
     document.getElementById('sector_div').innerHTML = msg;
  });
}

function cargaFinalidad(){
document.getElementById('finalidad_div').innerHTML = "Cargando . . . <img src='images/loading_verde.gif'>";
    var catalogo = "finalidad";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: {catalogo: catalogo}
})
  .done(function(msg) {
     document.getElementById('finalidad_div').innerHTML = msg;
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
       data: {catalogo: catalogo,funcion: v}
})
  .done(function(msg) {

     document.getElementById('subfuncion_div').innerHTML = msg;
  });
}

function validar(){
    mostrarModal();
    var numproyecto = document.getElementById('intNumProyecto').value;
    var pondera = parseInt(document.getElementById('intPonderacion').value);
    var ponderamax = parseInt(document.getElementById('ponderacion_max_h').value);

    if(pondera > ponderamax){
        ocultarModal();
        alert("La ponderacion no puede ser mayor a: "+ponderamax);
        document.getElementById('intPonderacion').focus();
        return false;
    }

    $.ajax({
       method: "POST",
       url: "class/proyectos.php",
       data: {accion: 3,num_proyecto: numproyecto}
    })
   .done(function(msg) {
        ocultarModal();
    if(msg == 1){
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
data: {accion: 4,eje: eje,linea: linea,est: est,num: num,nomb: nomb,inversion: inversion,pondera: pondera,umedida: umedida,proganual: proganual,progsem: progsem,secpob: secpob,benh: benh, benm: benm,just: just,fin: fin,fun: fun,subf: subfun,prop: prop,obspro: obspro,uresp: uresp,titular: titular,obj: obj,pndeje: pndeje,pndobj: pndobj,pndest: pndest,pndlin: pndlin,progpres: progpres}
   })
  .done(function(msg) {
    ocultarModal();
      if(msg == "guardado"){
        alert("el proyecto con numero "+num+" se guardó correctamente");
        location.href="main.php?token=c81e728d9d4c2f636f067f89cc14862c";
      }else{
          console.log(msg);
          alert("ha ocurrido un error al intentar guardar el proyecto");
      }
  });

}

// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

function mostrarModal(){
   modal.style.display = "block";
}

function ocultarModal(){
    modal.style.display = "none";
}
