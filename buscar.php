<?php
$conexion=mysqli_connect('localhost', 'root', '', 'infocentro') or die(mysqli_error());


//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM usuarios ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['usuarios']))
{
    $q=$conexion->real_escape_string($_POST['usuarios']);
    $query="SELECT * FROM usuarios WHERE 
		nombre LIKE '%".$q."%' OR
		apellido LIKE '%".$q."%' OR
		cedula LIKE '%".$q."%'";
}

$buscarUsusarios=$conexion->query($query);
if ($buscarUsusarios->num_rows > 0)
{
    $tabla.= '<table border=1 class="table">
		<tr class="bg-primary">
			<td>ID </td>
			<td>NOMBRE</td>
			<td>APELLIDO</td>
			<td>CEDULA</td>
			<td>NACIONALIDAD</td>
			<td>FECHA Y HORA DE REGISTRO</td>
		</tr>';

    while($filaUsuario= $buscarUsusarios->fetch_assoc())
    {
        $tabla.=
            '<tr>
			<td>'.$filaUsuario['id'].'</td>
			<td>'.$filaUsuario['nombre'].'</td>
			<td>'.$filaUsuario['apellido'].'</td>
			<td>'.$filaUsuario['cedula'].'</td>
			<td>'.$filaUsuario['nacionalidad'].'</td>
			<td>'.$filaUsuario['fecha_registro'].'</td>
		 </tr>
		';
    }

    $tabla.='</table>';
} else
{

    $tabla="<h1>NO SE ENCONTRÓ EL USUARIO !!</h1>";
}


echo $tabla;
?>
