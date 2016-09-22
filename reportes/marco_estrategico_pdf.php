<?php
session_start();
date_default_timezone_set("America/Mexico_City");
require_once("dompdf_config.inc.php");
include("../class/marcoEstrategico.php");
$marco = new marco_estrategico();
$exeMarco = $marco->informacion();
$html_inicio = "<!Doctype html>
<html>
<head>
    <title>Marco Estratégico</title>
    <meta charset='utf-8'>
<style>
body{
    font-family: sans-serif;
    color:#333;
    text-align: justify;
    font-size: 12px;
}


</style>
</head>
    <body>
<img src='../images/UplaLogoGrande.png' width='220'></td>
<hr>
<table>
   <tr>
       <td>
       <h4>Marco Estratégico POA".$_SESSION['ejercicio']."<br>
       <small><strong>Dependencia:</strong>&nbsp;".$_SESSION['dependencia']."</small></h4><hr>
       </td>
   </tr>
    <tr>
       <td><strong>Mision:<br></strong></td>
   </tr>
    <tr>
       <td>".$exeMarco[0]."<br><br></td>
   </tr>
    <tr>
       <td><strong>Visión:<br></strong></td>
   </tr>
    <tr>
       <td>".$exeMarco[1]."<br><br></td>
   </tr>
    <tr>
       <td><strong>Objetivos Estratégicos<br></strong></td>
   </tr>
    <tr>
       <td>".$exeMarco[2]."<br><br></td>
   </tr>
    <tr>
       <td><strong>Actividades Sustantivas<br></strong></td>
   </tr>
        <tr>
       <td>".$exeMarco[3]."</td>
   </tr>
</table>
    </body></html>";


$full_html = utf8_decode($html_inicio);
$dompdf = new DOMPDF();
$dompdf->load_html($full_html);
$dompdf->set_paper("letter","portrait");
$dompdf->render();
$canvas = $dompdf->get_canvas();
$font = Font_Metrics::get_font("helvetica", "bold");
$canvas->page_text(20, 585, "Marco Estratégico: Pag {PAGE_NUM} de {PAGE_COUNT}",$font, 7, array(0,0,0));
$canvas->page_text(450, 585, "Fecha del reporte: ".date('d-m-Y | h:i:s a'),$font, 7, array(0,0,0));
$dompdf->stream("sample.pdf",array("Attachment" => 0));

?>
