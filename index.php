<?php
include("class/conexion.php");
$conn = new conexion();
$conexion = $conn->conectar(5);
if ( $conexion->connect_errno ) {
 $error_msg_mysql = $conexion->connect_errno;
 include("views/error_conn.php");
 exit();
}
$conexion->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPLAN | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                LOGOTIPO
            </div>
            <h3>Bienvenido</h3>
            <p>Sistema para la Planeación y Evaluación del POA del Gobierno del Estado de Zacatecas
            </p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
