<?php
session_start();
$siplan_data_conn = mysql_connect('localhost', 'siplan_consultas', 'IEwmQLQf&/NYmaRkih4');
mysql_select_db('siplan');
mysql_query("SET CHARACTER SET utf8 ");
require_once("dompdf_config.inc.php");
date_default_timezone_set('America/Mexico_City');
$consulta = mysql_query("CALL infoMarcoEstrategico(".$_SESSION['id_dependencia'].",'".$_SESSION['ejercicio']."');",$siplan_data_conn);
$resultado = mysql_fetch_array($consulta);
$inicio_html = "
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<style>
.titulo{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.titulo{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.cabecera{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
table{
	border:solid 1px #666666;
}
td{
	border-right:solid 1px #666;
	border-bottom:solid 1px #666;
}
body{
	font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;
	font-size:12px;
}
</style>
<title>Reporte por Proyecto</title>
</head>
<body>
<table width='100%' cellspacing='1' cellpadding='4' style='border:0px;'>
  <tr>
    <td width='29%' valign='middle' style='border:0px;'><img src='logoupla.png' width='309' height='66'></td>
    <td width='71%' valign='top' style='border:0px;'><span class='titulo'><b>Unidad de Planeaci&oacute;n<br>
      Direcci&oacute;n de Planeaci&oacute;n</b></span><br>
      <span class='cabecera'>
      <b>Dependencia:</b>&nbsp;".utf8_decode($_SESSION["dependencia"])."<br>
      <b>Reporte:</b>&nbsp;Marco Estrat&eacute;gico<br>
  </tr>
</table>
<hr>
<h3>Marco Estrat&eacute;gico POA 2016</h3>
<b>Misi&oacute;n: :</b><br>
<div style='border:solid 1px #ccc;border-radius:4px 4px 4px 4px;text-align:justify;padding:2px 2px 2px 2px;'>".utf8_decode($resultado[0])."</div><br><br>
<b>Visi&oacute;n: :</b><br>
<div style='border:solid 1px #ccc;border-radius:4px 4px 4px 4px;text-align:justify;padding:2px 2px 2px 2px;'>".utf8_decode($resultado[1])."</div><br><br>
<b>Objetivo Estrat&eacute;gico:</b><br>
<div style='border:solid 1px #ccc;border-radius:4px 4px 4px 4px;text-align:justify;padding:2px 2px 2px 2px;'>".utf8_decode($resultado[2])."</div><br>
<b>Actividades Sustantivas:</b><br>
<div style='border:solid 1px #ccc;border-radius:4px;text-align:justify; padding:2px 2px 2px 2px;'>".utf8_decode($resultado[3])."</div><br><br>
</body>
</html>";
$full_html = $inicio_html;
$dompdf = new DOMPDF();
$dompdf->load_html($full_html);
$dompdf->set_paper("letter", "portrait");
$dompdf->render();
$canvas = $dompdf->get_canvas();
$font = Font_Metrics::get_font("helvetica", "bold");
$canvas->page_text(20, 750, "Marco Estrat&eacute;gico: Pag {PAGE_NUM} de {PAGE_COUNT}",$font, 7, array(0,0,0));
$canvas->page_text(450, 750, "Fecha del reporte: ".date('d-m-Y h:i:s A'),$font, 7, array(0,0,0));
$dompdf->stream("Marco Estrategíco 2017.pdf",array("Attachment" => 0));
?>
