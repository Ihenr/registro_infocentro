<?php
if (isset($_POST['registrar'])) {
    # code...
    $conexion=mysqli_connect('localhost', 'root', '', 'infocentro') or die(mysqli_error());
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $nacionalidad = $_POST['nacionalidad'];

    date_default_timezone_set('America/Guayaquil');
    $fecha_registro = date("Y-m-d H:i:s");

    $sql = "INSERT INTO usuarios(nombre, apellido, cedula, nacionalidad, fecha_registro) VALUE ('$nombre', '$apellido', '$cedula', '$nacionalidad', '$fecha_registro')" or die(mysqli_error());
    $ejecutar = mysqli_query($conexion, $sql);


}
if($ejecutar){
    echo"<script> alert('REGISTRADO EXITOSAMENTE');
    location.href = 'index.php';
    </script>";
}
?>

