function cargar_selects_iniciales() {
      prog_pres_sel();
       ejes();
       pnd_ejes();
    ponderacion_maxima();
    cargaSectorPoblacional();
    cargaFinalidad();
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

function cargarEstrategiasPED(v){
   document.getElementById('estrategia_div').innerHTML = "<label >Estrategia</label><select class='form-control m-b'><option>-Sleccione Linea-</option></select>";
    var catalogo = "estrategias";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: { catalogo: catalogo,linea: v}
})
  .done(function(msg) {
     document.getElementById('estrategia_div').innerHTML = msg;
  });

}

function pnd_ejes(){
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
     document.getElementById('ponderacion_max').innerHTML = "&nbsp;debe ser menor o igual a: "+msg;
     document.getElementById('ponderacion_max_h').value=msg;
  });
}

function cargaSectorPoblacional(){
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
    var finalidad = document.getElementById('sltFinalidad').value;
    var catalogo = "subfuncion";
       $.ajax({
       method: "POST",
       url: "class/catalogos.php",
       data: {catalogo: catalogo,funcion: v,finalidad: finalidad}
})
  .done(function(msg) {
     document.getElementById('subfuncion_div').innerHTML = msg;
  });
}

function validar(){
    var numproyecto = document.getElementById('intNumProyecto').value;
    var pondera = parseInt(document.getElementById('intPonderacion').value);
    var ponderamax = parseInt(document.getElementById('ponderacion_max_h').value);
    if(pondera > ponderamax){
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
    if(msg == 1){
        alert("Ya existe un proyecto con ese numero");
        document.getElementById('intNumProyecto').value = '';
        document.getElementById('intNumProyecto').focus();
        return false;
    }else{
      var resultado = guardaProyecto();
      if(resultado == "guardado"){
        console.log("se guardo");
      }
    }

  });

   return false;
}

function guardaProyecto(){
  $.ajax({
       method: "POST",
       url: "class/proyectos.php",
       data: {accion: 4,
              eje: $('#sltEje').val(),
              linea: $('#sltLinea').val(),
              est: $('#sltEstrategia').val(),
              num: $('#intNumProyecto').val(),
              nomb: $('#txtNombreProyecto').val(),
              inversion: $('#numInversion').val(),
              pondera: $('#intPonderacion').val(),
              umedida: $('#txtUmedida').val(),
              proganual: $('#intProgAnual').val(),
              progsem: $('#intProgSem').val(),
              secpob: $('#sltSectorPoblacional').val(),
              benh: $('#intBenHom').val(),
              benm: $('#intBenMuj').val(),
              just: $('#txtJustificacion').val(),
              fin: $('#sltFinalidad').val(),
              fun: $('#sltFuncion').val(),
              subf: $('#sltSubFuncion').val(),
              prop: $('#txtProposito').val(),
              obspro: : $('#ObservacionesProyecto').val(),

             }
   })
  .done(function(msg) {
      return msg;
  }
}
