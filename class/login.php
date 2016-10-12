<?php
// revisamos la seguridad para evitar un SQLInjection
include("funciones.php");
$funciones = new funciones();
$SqlInjection = $funciones->SqlInjection($_POST['usuario']);

if($SqlInjection == 1){
?>
<script type="text/javascript">
  window.location="../index.php?msg=1";
</script>
<?php
            exit();
}

// buscamos al usuario
include("conexion.php");
$conn = new conexion();
$conexion = $conn->conectar(5);
$clave = $funciones->encriptar($_POST['clave']);
$consultaUsuario = "call acceso('".$_POST['usuario']."','$clave')";
$ExConsulta = $conexion->query($consultaUsuario);
$ResConsulta = $ExConsulta->fetch_array();
$conexion->close();
if($ResConsulta[0] == 0){
    unset($conexion);
    unset($conn);
  ?>
<script type="text/javascript">
  window.location="../index.php?msg=2";
</script>
<?php
    exit();
}

// usuario encontrado obtenemos su información
$conexion = $conn->conectar(5);
include("usuario.php");
$usuario = new usuario();
$infoUsuario = $usuario->informacion($_POST['usuario'],$clave,$conexion);
$conexion->close();

//revisamos si el usuario esta activo o no;
if($infoUsuario['activo']==0){
    unset($conexion);
    unset($conn);
    unset($infoUsuario);
  ?>
<script type="text/javascript">
  window.location="../index.php?msg=3";
</script>
<?php
    exit();
}

// Cargamos la información del usuario a las variables de sesion
include("session_var.php");
header("location:../main.php");
?>
