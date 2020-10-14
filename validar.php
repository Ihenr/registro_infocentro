<?php
$conexion=mysqli_connect('localhost', 'root', '', 'infocentro') or die(mysqli_error());
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar from admin WHERE usuario = '$usuario' and clave = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']=$usuario;
    header("location: administrador.php");
}else{
    header("location: Iniciar.php");
}
