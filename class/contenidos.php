<?php
   if(isset($_GET['token'])){
             switch($_GET['token']){
                 case md5(0):
                   require_once("views/principal.php");
                   break;
				  case md5(1):
					  require_once("views/marco_teorico.php");
					  break;
				    case md5(2):
					  require_once("views/proyectos.php");
					  break;
                       case md5(3):
					  require_once("views/perfil.php");
					  break;
                    case md5(4):
					  require_once("views/nuevo_proyecto.php");
					  break;
                  case md5(5):
					  require_once("views/indicador_proyecto.php");
					  break;
					  case md5(6):
					  	require_once("views/componente_listado.php");
					  	break;
					  case md5(7):
					  	require_once("views/nuevo_componente.php");
					  	break;
                      case md5(8):
					  	require_once("views/editar_proyecto.php");
					  	break;
                     case md5(9):
                     require_once("views/actividades.php");
					  	break;
                 case md5(10):
                     require_once("views/nuevo_actividad.php");
                     break;
                     case md5(11):
                     require_once("views/info_proyecto.php");
                     break;

                 default:
                   require_once("views/error404.php");
                   break;

       }
   } else {

       require_once("views/principal.php");
   }



?>
