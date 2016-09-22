<?php
session_start();
date_default_timezone_set("America/Mexico_City");
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=marco_estrategico.xls");
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
<table>
         <tr>
             <td><img src="http://siplan.zacatecas.gob.mx/imagenes/logo_upla.png" width="220"></td>
             <td>
                 <strong>Fecha:</strong>&nbsp;<?php echo date('d/m/Y'); ?><br>
                 <strong>Hora:</strong>&nbsp;<?php echo date('H:i:s'); ?><br>
                 <strong>Dependencia:</strong>&nbsp;<?php echo $_SESSION['dependencia'] ?><br>
             </td>

        </tr>
        </table>
<table>
   <tr>
       <td><h3>Marco Estratégico<small> &nbsp; POA <?php echo $_SESSION['ejercicio'];?></small></h3></td>
   </tr>
    <tr>
       <td><strong>Mision:<br></strong></td>
   </tr>
    <tr>
       <td> <?php echo $exeMarco[0]; ?></td>
   </tr>
    <tr>
       <td><strong>Visión:<br></strong></td>
   </tr>
    <tr>
       <td> <?php echo $exeMarco[1]; ?></td>
   </tr>
    <tr>
       <td><strong>Objetivos Estratégicos<br></strong></td>
   </tr>
    <tr>
       <td><?php echo $exeMarco[2]; ?></td>
   </tr>
    <tr>
       <td><strong>Actividades Sustantivas<br></strong></td>
   </tr>
        <tr>
       <td><?php echo $exeMarco[3]; ?></td>
   </tr>
</table>
    </body></html>
