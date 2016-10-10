<?php
session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
    session_destroy();
    header("location:index.php");
    exit();
}
require_once("class/conexion.php");
require_once("views/estructura/header.php");
if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3){
  $body_class = "pace-down skin-3";
}else{
  $body_class = "pace-down skin-1";
}
?>
<body class="<?php echo $body_class;?>">
<div id="wrapper">
<?php require_once("views/estructura/navegacion.php"); ?>
<div id="page-wrapper" class="gray-bg">
<?php require_once("views/estructura/cabecera.php"); ?>
<?php require_once("class/contenidos.php"); ?>
<?php require_once("views/estructura/footer.php"); ?>
</body>
</html>


