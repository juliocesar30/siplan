<?php
//Variables de Sesion utilizadas en el siplan
session_start();
$_SESSION['key'] = md5("labor vincit omnia");
$_SESSION['id_usuario'] = $infoUsuario['id_usuario'];
$_SESSION['id_dependencia'] = $infoUsuario['id_dependencia'];
$_SESSION['id_perfil'] = $infoUsuario['id_perfil'];
$_SESSION['nombre'] = $infoUsuario['nombre'];
$_SESSION['activo'] = $infoUsuario['activo'];
$_SESSION['dependencia'] = $infoUsuario['dependencia'];
$_SESSION['avatar'] = $infoUsuario['avatar'];
unset($infoUsuario);
?>
