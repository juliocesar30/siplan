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
     document.getElementById('ponderacion_max_h').value=msg;
  });
}

    function inicio(){
        ponderacion_maxima();
    }

window.onload = inicio;
