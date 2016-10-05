<?php
session_start();
require_once("../seguridad/siplan_connection_db_2016.php");
date_default_timezone_set('America/Mexico_City');
header ("Expires: 0");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"info_proyecto2016.xls\"" );
$consulta_proyecto = "SELECT
pr.id_proyecto as id,
pr.no_proyecto as num,
pr.nombre as nombre,
eje.eje as eje,
linea.nombre as linea,
est.nombre as estrategia,
CASE
    WHEN pr.estatus = 1 THEN 'Sin Aprobar'
    WHEN pr.estatus = 2 THEN 'Aprobado por Dependencia'
    WHEN pr.estatus = 3 THEN 'Aprobado por UPLA'
END  as estatus,
pr.clasificacion as clasificacion,
clas.clasificacion as n_clas,
pr.inversion as inversion,
pr.ponderacion as ponderacion,
pr.unidad_medida as u_medida,
pr.cantidad as prog_anual,
pr.prog_sem as prog_sem,
vul.descripcion as vulnerable,
pr.beneficiarios_m as ben_m,
pr.beneficiarios_h as ben_h,
pr.justificacion as justificacion,
fin.nombre as n_finalidad,
fin.descripcion as d_finalidad,
fun.nombre as funcion,
sub.nombre as subfuncion,
pr.proposito as proposito,
pp.clave,
pp.descripcion as programa_presupuestal,
pr.observaciones as observacion
from
proyectos pr
inner join eje on (pr.id_eje = eje.id_eje)
inner join linea on (pr.id_linea = linea.id_linea)
inner join estrategias as est on(pr.id_estrategia = est.id_estrategia)
inner join clasificacion as clas on(pr.clasificacion = clas.id_clasificacion)
inner join grupo_vulnerable as vul on(pr.g_vulnerable = vul.id_vulnerable)
inner join finalidad as fin on(pr.finalidad = fin.id_finalidad)
inner join funcion as fun on(pr.funcion = fun.id_funf AND pr.finalidad = fun.id_finalidad)
inner join subfuncion as sub on(pr.subfuncion = sub.id_subfuncion)
left join programas_presupuestarios pp on (pr.prog_pres = pp.id)
where id_proyecto = ".$_GET['id_proyecto'];
$ex_con = @mysql_query($consulta_proyecto,$siplan_data_conn);
$res_proyecto = mysql_fetch_assoc($ex_con);
$inicio_html = "
<table>
  <tr>
    <td>Proyecto</td>
    <td width='70%' colspan='3'> ".$res_proyecto['num']." - ".utf8_decode($res_proyecto['nombre'])." </td>
  </tr>
  <tr>
    <td>Eje</td>
    <td colspan='3'>".utf8_decode($res_proyecto['eje'])."</td>
  </tr>
  <tr>
    <td>L&iacute;nea</td>
    <td colspan='3'>".utf8_decode($res_proyecto['linea'])."</td>
  </tr>
  <tr>
    <td>Estrategia</td>
    <td colspan='3'>".utf8_decode($res_proyecto['estrategia'])."</td>
  </tr>
  <tr>
    <td>Estatus</td>
    <td colspan='3'>".utf8_decode($res_proyecto['estatus'])."</td>
  </tr>
  <tr>
    <td>Clasificaci&oacute;n</td>
    <td colspan='3'>".$res_proyecto['clasificacion']." - ".utf8_decode($res_proyecto['n_clas'])."</td>
  </tr>
  <tr>
    <td>Inversi&oacute;n</td>
    <td colspan='3'>".$res_proyecto['inversion']."</td>
  </tr>
  <tr>
    <td>Ponderaci&oacute;n</td>
    <td colspan='3'>".$res_proyecto['ponderacion']."</td>
  </tr>
  <tr>
    <td>Unidad de Medida </td>
    <td colspan='3'>".utf8_decode($res_proyecto['u_medida'])."</td>
  </tr>
  <tr>
    <td>Canitdad Anual </td>
    <td>".$res_proyecto['prog_anual']."</td>
    <td>Cantidad Semestral </td>
    <td>".$res_proyecto['prog_sem']."</td>
  </tr>
  <tr>
    <td>Grupo Vulnerable </td>
    <td colspan='3'>".$res_proyecto['vulnerable']."</td>
  </tr>
  <tr>
    <td>Beneficiarios Hombres </td>
    <td>".$res_proyecto['ben_h']."</td>
    <td>Beneficiarios Mujeres </td>
    <td>".$res_proyecto['ben_m']."</td>
  </tr>
  <tr>
    <td>Justificaci&oacute;n</td>
    <td colspan='3'>".utf8_decode($res_proyecto['justificacion'])."</td>
  </tr>
  <tr>
    <td>Prop&oacute;sito</td>
    <td colspan='3'>".utf8_decode($res_proyecto['proposito'])."</td>
  </tr>

  <tr>
    <td>Finalidad</td>
    <td colspan='3'>".utf8_decode($res_proyecto['n_finalidad'])."<br>".utf8_decode($res_proyecto['d_finalidad'])."</td>
  </tr>
  <tr>
    <td>Funci&oacute;n</td>
    <td colspan='3'>".utf8_decode($res_proyecto['funcion'])."</td>
  </tr>
  <tr>
    <td>Subfunci&oacute;n</td>
    <td colspan='3'>".utf8_decode($res_proyecto['subfuncion'])."</td>
  </tr>
  <tr>
    <td>Programa Presupuestario</td>
    <td colspan='3'>". utf8_decode($res_proyecto['clave']). " - ". utf8_decode($res_proyecto['programa_presupuestal'])."</td>
  </tr>
  <tr>
    <td>Observaciones</td>
    <td colspan='3'>".utf8_decode($res_proyecto['observacion'])."</td>
  </tr>
</table>
<br>
<h2>Componentes y Actividades</h2>";
$contenido = "";
$consulta_componentes = "SELECT
componente.id_componente as id,
componente.no_componente as num,
componente.descripcion as nombre,
componente.unidad_responsable as responsable,
u_medida.nombre as unidad,
t_medida.nombre as tipo,
componente.cantidad as cantidad,
componente.ponderacion as ponderacion,
pp.clave as clave_presupuestal_com,
pp.descripcion as programa_presupuestal_com,
est.nombre as ped
From componentes as componente
inner join u_medida_prog01 as u_medida on(componente.unidad_medida = u_medida.id_unidad)
inner join tipo_unidad_prog01 as t_medida on(componente.id_tipo = t_medida.id_tipo_unidad)
left  join programas_presupuestarios as pp on (componente.prog_pres = pp.id)
left join estrategias as est on (componente.ped_estrategia = est.id_estrategia)
Where id_proyecto = ".$_GET['id_proyecto'];
$execute_comp = @mysql_query($consulta_componentes,$siplan_data_conn);
while($res_componentes = mysql_fetch_array($execute_comp)){
$consulta_acciones = @mysql_query("SELECT
accion.id_accion as id,
accion.no_accion as num,
accion.descripcion as nombre,
accion.ponderacion as ponderacion,
accion.cantidad as cantidad,
u_medida.nombre as unidad,
t_medida.nombre as tipo,
est.nombre as ped_ac
FROM acciones as accion
inner join u_medida_prog01 as u_medida on(accion.unidad_medida = u_medida.id_unidad)
inner join tipo_unidad_prog01 as t_medida on(accion.id_tipo = t_medida.id_tipo_unidad)
inner join estrategias as est on (accion.ped = est.id_estrategia)
where id_componente  =".$res_componentes['id']." ORDER BY accion.no_accion DESC",$siplan_data_conn);
$acciones_txt="";
while ($res_accion=mysql_fetch_array($consulta_acciones)) {
	$id_accion = $res_accion['id'];
	$consulta_metas = @mysql_query("SELECT * FROM metas WHERE id_accion = ".$id_accion,$siplan_data_conn);
	$res_metas = mysql_fetch_array($consulta_metas);
	$consulta_resultados = @mysql_query("SELECT * FROM resultados WHERE id_accion = ".$id_accion,$siplan_data_conn);
	$res_resultados = mysql_fetch_array($consulta_resultados);
	$acciones_txt=$acciones_txt."<table>
  <tr>
    <td width='5%'bgcolor='#ECF9F1'>PED</td>
    <td width='5%'>".substr($res_accion['ped_ac'],0,5)."</td>
    <td bgcolor='#ECF9F1'>Actividad</td>
    <td>".$res_accion['num']." - ".utf8_decode($res_accion['nombre'])."</td>
  </tr>
<table>
  <tr>
    <td bgcolor='#ECF9F1'>Ponderaci&oacute;n</td>
    <td>".$res_accion['ponderacion']."</td>
    <td bgcolor='#ECF9F1'>Cantidad</td>
    <td>".$res_accion['cantidad']."</td>
    <td bgcolor='#ECF9F1'>Unidad de Medida </td>
    <td>".utf8_decode($res_accion['unidad'])."</td>
    <td bgcolor='#ECF9F1'>Tipo de Medida </td>
    <td>".utf8_decode($res_accion['tipo'])."</td>
  </tr>
</table>
<table>
  <tr>
    <td width='20%' bgcolor='#ECF9F1'>Mes</td>
    <td width='6%' bgcolor='#ECF9F1'>Enero</td>
    <td width='7%' bgcolor='#ECF9F1'>Febrero</td>
    <td width='6%' bgcolor='#ECF9F1'>Marzo</td>
    <td width='6%' bgcolor='#ECF9F1'>Abril</td>
    <td width='6%' bgcolor='#ECF9F1'>Mayo</td>
    <td width='7%' bgcolor='#ECF9F1'>Junio</td>
    <td width='7%' bgcolor='#ECF9F1'>Julio</td>
    <td width='7%' bgcolor='#ECF9F1'>Agosto</td>
    <td width='7%' bgcolor='#ECF9F1'>Septiembre</td>
    <td width='7%' bgcolor='#ECF9F1'>Octubre</td>
    <td width='7%' bgcolor='#ECF9F1'>Noviembre</td>
    <td width='7%' bgcolor='#ECF9F1'>Diciembre</td>
  </tr>
  <tr>
    <td bgcolor='#ECF9F1'>Metas</td>
    <td>".$res_metas['enero_m']."</td>
    <td>".$res_metas['febrero_m']."</td>
    <td>".$res_metas['marzo_m']."</td>
    <td>".$res_metas['abril_m']."</td>
    <td>".$res_metas['mayo_m']."</td>
    <td>".$res_metas['junio_m']."</td>
    <td>".$res_metas['julio_m']."</td>
    <td>".$res_metas['agosto_m']."</td>
    <td>".$res_metas['septiembre_m']."</td>
    <td>".$res_metas['octubre_m']."</td>
    <td>".$res_metas['noviembre_m']."</td>
    <td>".$res_metas['diciembre_m']."</td>
  </tr>
  <tr>
    <td bgcolor='#ECF9F1'>Resultados</td>
    <td>".$res_resultados['enero_r']."</td>
    <td>".$res_resultados['febrero_r']."</td>
    <td>".$res_resultados['marzo_r']."</td>
    <td>".$res_resultados['abril_r']."</td>
    <td>".$res_resultados['mayo_r']."</td>
    <td>".$res_resultados['junio_r']."</td>
    <td>".$res_resultados['julio_r']."</td>
    <td>".$res_resultados['agosto_r']."</td>
    <td>".$res_resultados['septiembre_r']."</td>
    <td>".$res_resultados['octubre_r']."</td>
    <td>".$res_resultados['noviembre_r']."</td>
    <td>".$res_resultados['diciembre_r']."</td>
  </tr>
</table>
";
mysql_free_result($consulta_metas);
unset($res_metas);
mysql_free_result($consulta_resultados);
unset($res_resultados);
}
$contenido =$contenido."<table'>
  <tr>
    <td colspan='6' bgcolor='#D4D0C8'><div align='center'><strong>Componente</strong></div></td>
  </tr>
  </table>
<table width='100%' border='1' cellspacing='0' cellpadding='2'>
  <tr>
    <td width='10%' bgcolor='#E3E9D1' >PED</td>
    <td width='10%'> ".substr($res_componentes['ped'],0,5)."</td>
    <td width='20%' bgcolor='#E3E9D1' >Programa Presupuestario</td>
    <td width='50%'> ".$res_componentes['clave_presupuestal_com']." - ".utf8_decode($res_componentes['programa_presupuestal_com'])."</td>
  </tr>
</table>
<table width='100%' border='1' cellspacing='0' cellpadding='2'>
  <tr>
    <td width='10%' bgcolor='#E3E9D1' >Componente</td>
    <td width='90%'> ".$res_componentes['num']." - ".utf8_decode($res_componentes['nombre'])."</td>
  </tr>
</table>
<table width='100%' border='1' cellspacing='0' cellpadding='2'>
  <tr>
    <td width='14%' bgcolor='#E3E9D1'>Ponderacion</td>
    <td width='8%'>".$res_componentes['ponderacion']."</td>
    <td width='14%' bgcolor='#E3E9D1'>Unidad Responsable </td>
    <td width='64%'>".utf8_decode($res_componentes['responsable'])."</td>
  </tr>
</table>
<table>
  <tr>
    <td width='15%' bgcolor='#E3E9D1'>Unidad de Medida </td>
    <td width='27%'>".utf8_decode($res_componentes['unidad'])."</td>
    <td width='10%' bgcolor='#E3E9D1'>Tipo de Medida </td>
    <td width='25%'>".utf8_decode($res_componentes['tipo'])."</td>
    <td width='7%' bgcolor='#E3E9D1'>Cantidad</td>
    <td width='16%'>".$res_componentes['cantidad']."</td>
  </tr>

  <tr>
    <td colspan='6' bgcolor='#D4D0C8'><div align='center'><strong>Actividades</strong></div></td>
  </tr>
      ".$acciones_txt."
</table>";
}
$full_html = $inicio_html.$contenido;;
print($full_html);
?>
