<?php
session_start();
if($_SESSION['key'] != md5("labor vincit omnia")){
    session_destroy();
    header("location:index.php");
    exit();
}
require_once("class/conexion.php");
require_once("views/estructura/header.php");
if($_SESSION['id_perfil'] == 1){
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




            <div class="wrapper wrapper-content">

                <div class="middle-box text-center animated fadeInRightBig">

                    <h3 class="font-bold">This is page content</h3>

                    <div class="error-desc">

                        You can create here any grid layout you want. And any variation layout you imagine:) Check out

                        main dashboard and other site. It use many different layout.

                        <br/><a href="index.html" class="btn btn-primary m-t">Dashboard</a>

                    </div>

                </div>

            </div>

            <div class="footer">

                <div class="pull-right">

                    10GB of <strong>250GB</strong> Free.

                </div>

                <div>

                    <strong>Copyright</strong> Example Company &copy; 2014-2015

                </div>

            </div>



        </div>

        </div>



    <!-- Mainly scripts -->

    <script src="js/jquery-2.1.1.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/jquery.metisMenu.js"></script>

    <script src="js/plugins/jquery.slimscroll.min.js"></script>



    <!-- Custom and plugin javascript -->

    <script src="js/inspinia.js"></script>

    <script src="js/plugins/pace.min.js"></script>





</body>



</html>


