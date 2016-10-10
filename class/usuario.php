<?php

session_start();
class usuario{

    function informacion($u,$c,$conexion){
        $Consulta = "call infoUsuario('$u','$c')";
        $ExConsulta = $conexion->query($Consulta);
        $Resultado  = $ExConsulta->fetch_assoc();
        return  $Resultado;
     }

    function listadoTotal(){
         require_once('conexion.php');
		$sql = "select
u.id_usuario,
u.usuario,
u.nombre,
u.activo,
p.perfil,
d.acronimo
from usuarios u
inner join perfiles p on(u.perfil = p.id_perfil)
inner join dependencias d on (u.dependencia = d.id_dependencia)
";
        $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
		$ExeConsulta = $conexion->query($sql);
		$conexion->close();
        return $ExeConsulta;
    }


    function nuevoUsuario(){
        require_once('funciones.php');
        $funcion = new funciones();
        $usuario = $_POST['usuario'];
        $clave =  $funcion->encriptar($_POST['clave']);
        $dependencia = $_POST['dependencia'];
        $perfil = $_POST['perfil'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];


        require_once('conexion.php');

        $sql1 = "SELECT count(*) from usuarios WHERE usuario = '$usuario'";
        $conn = new conexion();
		$conexion = $conn->conectar($_SESSION['id_perfil']);
        $ExeConsulta = $conexion->query($sql1);
	    $conexion->close();
        $R1 = $ExeConsulta->fetch_array();
        if($R1[0] == 1){
            return "existe";
        }

        $sql2 = "CALL agregarUsuario('$usuario','$clave',$dependencia,$perfil,'$nombre','$correo')";
        $conexion = $conn->conectar($_SESSION['id_perfil']);
        $conexion->set_charset("utf8");
        if($conexion->query($sql2)){
             $conexion->close();
            return "guardado";
        }else{
             return "error";
             $conexion->close();

        }




    }
}


if(isset($_POST['accion'])){
    $usr = new usuario();
    switch($_POST['accion']){
        case 1:
            $lista = $usr->listadoTotal();

           ?>
<table class="table table-striped table-bordered table-hover dataTables-example" >
<thead>
<tr>
<th>Id Usuario</th>
<th>Usuario</th>
<th>Nombre</th>
<th>Activo</th>
<th>Perfil</th>
<th>Dependencia</th>
<th>Herramientas</th>
</tr>
</thead>
<tbody>
<?php
          while($Res = $lista->fetch_array()){
			echo
			"<tr class='gradeX'>
			<td>".$Res[0]."</td>
			<td>".$Res[1]."</td>
			<td>".$Res[2]."</td>
			<td>".$Res[3]."</td>
			<td>".$Res[4]."</td>
            <td>".$Res[5]."</td>
			<td>
			<a href='#' title='Editar' class='btn btn-default btn-circle'><i class='fa fa-edit' aria-hidden='true'></i></a>&nbsp;&nbsp;
            <a href='#' title='Eliminar' class='btn btn-danger btn-circle'><i class='fa fa-trash' aria-hidden='true'></i></a>&nbsp;&nbsp;
			</td></tr>
			";
          }
			    ?>
			</tbody>
			<tfoot>
			<tr>
		<th>Id Usuario</th>
<th>Usuario</th>
<th>Nombre</th>
<th>Activo</th>
<th>Perfil</th>
<th>Dependencia</th>
<th>Herramientas</th>
			</tr>
			</tfoot>
			</table>
			<?php
        break;
        case 2:
             $lista = $usr->nuevoUsuario();
             echo $lista;
        break;
    }
}

?>
