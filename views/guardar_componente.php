<?php
session_start();
require_once('../class/conexion.php');
extract($_POST);
$sql = "INSERT INTO componentes
(id_proyecto,
num_componente,
descripcion,
u_responsable,
prog_pres,
u_medida,
tipo_medida,
cantidad,
ponderacion,
eje,
linea,
estrategia,
nombre_indicador,
metodo_calculo,
tipo_indicador,
dimension_indicador,
frecuencia_indicador,
sentido_indicador,
u_medida_indicador,
meta_indicador,
medio_verifica_indicador,
supuesto_indicador)
VALUES
($id_proyecto,
$intNumComponente,
'$txtNombreComponente',
'$txtUresponsable',
$sltProgPres,
$sltumedida,
$slttipoumedida,
'$intCantidad',
$intPonderacion,
$sltEje,
$sltLinea,
$sltEstrategia,
'$txtNombreIndicador',
'$txtMetodo',
$sltTipoInd,
$sltdimensionInd,
$sltFrecuenciaInd,
$sltSentidoInd,
'$txtUmedidaInd',
$intMetaInd,
'n.a',
'n.a'
)";

$conn = new conexion();
$conexion = $conn->conectar($_SESSION['id_perfil']);
$conexion->query($sql);
$conexion->close();
echo $sql;
?>
