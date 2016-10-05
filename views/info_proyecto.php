<input type="hidden" id="id_proyecto" value="<?php echo $_GET['p'];?>">
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2>Información del Proyecto</h2>
</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="tooltip-demo ibox-title">
&nbsp;&nbsp;
<div class="btn-group">
<a href="javascript:imprimir()" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Imprimir">&nbsp;<i class="fa fa-print" aria-hidden="true"></i> Imprimir</a>
<a href="reportes/marco_estrategico_pdf.php" target="_blank" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a PDF">&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
<a href="reportes/marco_estrategico_xls.php" target="_blank" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a XLS">&nbsp;<i class="fa fa-file-excel-o" aria-hidden="true"></i> XLS</a>
        <a href="reportes/marco_estrategico_doc.php" target="_blank"class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Importar a DOC">&nbsp;<i class="fa fa-file-word-o" aria-hidden="true"></i> DOC</a></div></div>

<div class="ibox-content">
<div id="info_proyecto"> Cargando información del Proyecto... <img src="images/loading_verde.gif"></div>

</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">

  function imprimir(){
      w=window.open();
      w.document.write($('#info_proyecto').html());
      w.print();
      w.close();
  }

  function cargainfo(){
      var proyecto = $('#id_proyecto').val();
      console.log(proyecto);
     document.getElementById('info_proyecto').innerHTML = "Cargando información del Proyecto... <img src='images/loading_verde.gif'>";
      $.ajax({
method: "POST",
url: "reportes/info_proyecto_completo_print.php",
data: { id_proyecto: proyecto}
})
.done(function(msg) {
          console.log("retorno: "+msg);
document.getElementById('info_proyecto').innerHTML = msg;
});
  }

    window.onload = cargainfo();

</script>
