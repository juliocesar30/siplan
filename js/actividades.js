function cargar_selects_iniciales() {
    cargaUmedida();
}

function linea(v){
    $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: { catalogo: "lineas", eje: v}
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

function cargaUmedida(){
   $.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: "umedidaprog01"}
})
.done(function(msg) {
document.getElementById('umedida_div').innerHTML = msg;
});
}

function cargaTipoMedida(v){
   $.ajax({
method: "POST",
url: "class/catalogos.php",
data: { catalogo: "tipomedidaprog01",id_unidad: v}
})
.done(function(msg) {
document.getElementById('tipo_umed_div').innerHTML = msg;
});
}

window.onload=cargar_selects_iniciales();
