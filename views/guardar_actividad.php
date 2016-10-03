<?php
session_start();

require_once('../class/conexion.php');
extract($_POST);
if($demanda==""){$demanda=0;}
$sql = "INSERT INTO actividades
(id_componente,
id_proyecto,
demanda,
num_actividad,
nombre_actividad,
tipo_actividad,
descripcion,
eje,
linea,
estrategia,
u_medida,
t_medida,
cantidad,
ponderacion,
enero,febrero,marzo,abril,
mayo,junio,julio,agosto,
septiembre,octubre,noviembre,diciembre,
nombre_indicador,metodo_calculo,
tipo_indicador,dimension_indicador,frecuencia_indicador,sentido_indicador,
umedida_indicador,meta_indicador,medio_verificacion,supuesto)

VALUES
($id_componente,
$id_proyecto,
$demanda,
$intNumActividad,
'$txtNombreActiviadad',
'$txtDescripcionActiviadad',
$sltTipoAct,
$sltEje,
$sltLinea,
$sltEstrategia,
$sltumedida,
$slttipoumedida,
$intCantidad,
$intPonderacion,
$enero,
$febrero,
$marzo,
$abril,
$mayo,
$junio,
$julio,
$agosto,
$septiembre,
$octubre,
$noviembre,
$diciembre,
'$txtNombreIndicador',
'$txtMetodo',
$sltTipoInd,
$sltdimensionInd,
$sltFrecuenciaInd,
$sltSentidoInd,
'$txtUmedidaInd',
$intMetaInd,'n.a','n.a')
";

$conn = new conexion();
$conexion = $conn->conectar($_SESSION['id_perfil']);
if($conexion->query($sql)){
    $msg = "guarda";
}
?>
<script>
   location.href="../main.php?token=45c48cce2e2d7fbdea1afc51c7c6ad26&p=<?php echo $id_proyecto; ?>&c=<?php echo $id_componente; ?>"
</script>
