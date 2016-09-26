function cargar_selects_iniciales(){
       prog_pres_sel();
       ejes();
}

function prog_pres_sel(){
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
document.getElementById('linea_div').innerHTML = "<label >Linea</label><select class='form-control m-b'><option>-Sleccione Eje-</option></select>";
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
