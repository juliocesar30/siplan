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
<div class="col-lg-10">
<h2>Componentes para del proyecto</h2>
</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">

        <div class="tooltip-demo ibox-title">
&nbsp;&nbsp;
<div class="btn-group">
<a href="javascript:mostrarModal()" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a PDF">&nbsp;<i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>
</div></div>
<div class="ibox-content">
<div class="table-responsive" id="lista_usuarios">
</div>
</div>
</div>
</div>
</div>
</div>


<script src="js/plugins/jquery.jeditable.js"></script>
<script src="js/plugins/datatables.min.js"></script>
<script>
function listar(){
	var p = $('#proyecto').val();
    $.ajax({
      method: "POST",
      url: "class/usuario.php",
      data: { accion: 1}
})
 .done(function(msg) {
    document.getElementById('lista_usuarios').innerHTML = msg;
    cargar();
 });

}

function cargar(){
      $('.dataTables-example').DataTable({
               dom: '<"html5buttons"B>lTfgitp',
               buttons: [

               ]
           });

           /* Init DataTables */
           var oTable = $('#editable').DataTable();
           /* Apply the jEditable handlers to the table */
           oTable.$('td').editable( '../example_ajax.php', {
               "callback": function( sValue, y ) {
                   var aPos = oTable.fnGetPosition( this );
                   oTable.fnUpdate( sValue, aPos[0], aPos[1] );
               },
               "submitdata": function ( value, settings ) {
                   return {
                       "row_id": this.parentNode.getAttribute('id'),
                       "column": oTable.fnGetPosition( this )[2]
                   };
               },
               "width": "90%",
               "height": "100%"
           } );

}
function fnClickAddRow() {
           $('#editable').dataTable().fnAddData( [
               "Custom row",
               "New row",
               "New row",
               "New row",
               "New row" ] );
       }

console.log("sesion id: <?php echo $_SESSION['id_perfil']; ?>");

window.onload = listar;




// Get the button that opens the modal

// Get the <span> element that closes the modal



function mostrarModal(){
   var modal = document.getElementById('myModal');
   var btn = document.getElementById("myBtn");
   var span = document.getElementsByClassName("close")[0];
   modal.style.display = "block";
}

function ocultarModal(){
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}


function validar(){
    console.log("valida el formulario");
        $.ajax({
      method: "POST",
      url: "class/usuario.php",
      data: {
          accion: 2,
          usuario: $('#txtUsuario').val(),
          clave: $('#txtClave').val(),
          dependencia: $('#sltDep').val(),
          perfil: $('#sltPerfil').val(),
          nombre: $('#txtNombre').val(),
          correo: $('#txtCorreo').val()}
})
 .done(function(msg) {
    if(msg == "existe"){
        alert("El usuario ya existe");
        return false;
    }
    if(msg == "error"){
        alert("Ha ocurrido un error");
        return false;
    }

    if(msg == "guardado"){
        alert("Se ha guardado el usuario");
        location.reload();
    }

 });
    return false;
}

</script>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="ocultarModal()">x</span>

<form role="form" class="form-horizontal" onsubmit="return validar();">

<h3><span class="text text-success">Agregar Usuario</span></h3>

<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label for="txtUsuario">Usuario</label>
<input type="text" id="txtUsuario" name="txtUsuario" class="form-control" required>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="txtClave">Clave</label>
<input type="text" id="txtClave" name="txtClave" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="txtNombre">Nombre</label>
<input type="text" id="txtNombre" name="txtNombre" class="form-control" required>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="txtCorreo">Correo</label>
<input type="email" id="txtCorreo" name="txtCorreo" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label for="sltDep">Dependencia</label>
<select name="sltDep" id="sltDep" class='form-control m-b' required>
    <option value=''>-Seleccione-</option>
    <?php
      require_once('class/conexion.php');

            $sql = "SELECT id_dependencia,nombre FROM dependencias";
            $conn = new conexion();
            $conexion = $conn->conectar($_SESSION['id_perfil']);
            $conexion->set_charset("utf8");
            $ExeConsulta = $conexion->query($sql);
            $conexion ->close();
            while($ResDep = $ExeConsulta->fetch_array()){
                echo "<option value='".$ResDep[0]."'>".$ResDep[1]."</option>";
            }
    ?>
</select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label for="sltPerfil">Perfil</label>
<?php if($_SESSION['id_perfil'] == 1){
?>
<select id="sltPerfil" name="sltPerfil" class='form-control m-b' required>
    <option value=''>-Seleccione-</option>
    <option value='1'>Administrador</option>
    <option value='2'>Dependencia</option>
    <option value='3'>Planeación</option>
    <option value='4'>Evaluación</option>
    <option value='5'>Consulta</option>
</select>
<?php
}
 if($_SESSION['id_perfil'] == 3){
?>
    <select id="sltPerfil" name="sltPerfil" class='form-control m-b' required>
    <option value=''>-Seleccione-</option>
    <option value='2'>Dependencia</option>
    <option value='5'>Consulta</option>
</select>
<?php
    }
?>



</div>
</div>
</div>

    <div class="row">
<div class="col-lg-4">
    <button type="button" class="btn btn-default" onclick="ocultarModal();"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</button>
    &nbsp;
    <button type="submit" class="btn btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
</div>

</div>
</form>

  </div>

</div>
