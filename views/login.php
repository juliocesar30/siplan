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
               <?php if($conf[2] == 1){ ?>
                <img src="images/logotipo_elecciones.png">
                <?php }else{ ?>
                <img src="images/logotipo_normal.png">
                <?php } ?>
            </div>
            <h3>Bienvenido</h3>
            <p>Sistema para la Planeación y Evaluación del POA del Gobierno del Estado de Zacatecas
            </p>
            <form class="m-t" role="form" action="class/login.php" method="post" enctype="application/x-www-form-urlencoded">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" required="">
                </div>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="clave" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar</button>

            </form>

        </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
