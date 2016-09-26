<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2>Proyectos Registrados</h2>
</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">

        <div class="tooltip-demo ibox-title">
&nbsp;&nbsp;
<div class="btn-group">
<a href="javascript:nuevo()" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a PDF">&nbsp;<i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>
<a href="reportes/marco_estrategico_pdf.php" target="_blank" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a PDF">&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
<a href="reportes/marco_estrategico_xls.php" target="_blank" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a XLS">&nbsp;<i class="fa fa-file-excel-o" aria-hidden="true"></i> XLS</a>
        <a href="reportes/marco_estrategico_doc.php" target="_blank"class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a DOC">&nbsp;<i class="fa fa-file-word-o" aria-hidden="true"></i> DOC</a></div></div>

<div class="ibox-content">
<div class="table-responsive" id="lista_proyectos">

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
     $.ajax({
       method: "POST",
       url: "class/proyectos.php",
       data: { accion: 1}
})
  .done(function(msg) {
     document.getElementById('lista_proyectos').innerHTML = msg;
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

window.onload = listar;

function nuevo(){
    var ponderacion = document.getElementById('ponderacionTotal').value;
    if(ponderacion == 100){
        alert("No puedes agregar más proyectos, ponderación 100%");
        return false;
    } else {
        location.href = "main.php?token=<?php echo md5(4); ?>"
    }
}
</script>
