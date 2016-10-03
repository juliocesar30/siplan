function cargar_selects_iniciales() {
     prog_pres_sel();
     ejes();
     ponderacion_maxima();

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
var p = $('#idproyecto').val();
$.ajax({
method: "POST",
url: "class/componentes.php",
data: { accion: 2,proyecto: p}
})
.done(function(msg) {
console.log(msg);
});
}


function ponderacion_maxima(){
    var id_proyecto = $('#idproyecto').val();
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


