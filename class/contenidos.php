<?php

   if(isset($_GET['token'])){
             switch($_GET['token']){

                 case md5(0): {

                   require_once("views/principal.php");
                   break;
               }
                 default: {
                   require_once("views/error404.php");
                   break;
               }
       }
   } else {

       require_once("views/principal.php");
   }



?>
