<?php
session_start();
date_default_timezone_set("America/Mexico_City");
header('Content-type: application/vnd.ms-word');
header("Content-Disposition: attachment; filename=Marco_estrategico.doc");
header("Pragma: no-cache");
header("Expires: 0");

include("../class/marcoEstrategico.php");
$marco = new marco_estrategico();
$exeMarco = $marco->informacion();
?>
<html>
<head>
    <title>Marco Estratégico</title>
    <meta charset="utf-8">
<style>
body{
    font-family: sans-serif;
    color:#333;
}

hr{
    color: #2f7531;
    background-color: #2f7531;
    height: 1px;
}

.contenido {
    text-align: justify;
    color: black;
    font-size: 12px;
}
</style>
</head>
    <body>
        <table width="100%">
         <tr>
             <td><img src="http://siplan.zacatecas.gob.mx/imagenes/logo_upla.png" width="220"></td>
             <td>
                 <strong>Fecha:</strong>&nbsp;<?php echo date('d/m/Y'); ?><br>
                 <strong>Hora:</strong>&nbsp;<?php echo date('H:i:s'); ?><br>
                 <strong>Dependencia:</strong>&nbsp;<?php echo $_SESSION['dependencia'] ?><br>
             </td>

        </tr>
        </table>
<hr>
<h3>Marco Estratégico<small> &nbsp; POA <?php echo $_SESSION['ejercicio'];?></small></h3>
<br>
<strong>Mision:<br></strong>
<div id="txtMision" class="contenido">
        <?php echo $exeMarco[0]; ?>
        </div>
<br>
<strong>Visión:<br></strong>
<div id="txtVision" class="contenido">
        <?php echo $exeMarco[1]; ?>
        </div>
<br>
<strong>Objetivos Estratégicos<br></strong>
<div id="txtObjetivo" class="contenido">
        <?php echo $exeMarco[2]; ?>
        </div>
<br>
<strong>Actividades Sustantivas<br></strong>
<div id="txtActividad" class="contenido">
        <?php echo $exeMarco[3]; ?>
        </div>
</body>
</html>

