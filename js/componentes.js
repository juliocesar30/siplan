function cargar_selects_iniciales() {
    var id_eje = $('#sltEje').val();
    ponderacion_maxima();
    prog_pres_sel();
    linea(id_eje);
    cargaUmedida();
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





function ponderacion_maxima(){
    var id_proyecto = $('#id_proyecto').val();
    $.ajax({
       method: "POST",
       url: "class/componentes.php",
       data: { accion: 3, id_proyecto: id_proyecto}
})
  .done(function(msg) {
     if(msg == 100){
         alert("No tienes ponderacion disponible, no se puede agregar un proyecto");
         location.href="main.php?token=c81e728d9d4c2f636f067f89cc14862c";
         return false;
     }
        max = 100 - msg;
     document.getElementById('ponderacion_max').innerHTML = "&nbsp;debe ser menor o igual a: "+max;
     document.getElementById('ponderacion_max_h').value=msg;

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


