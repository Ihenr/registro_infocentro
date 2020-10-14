<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INFOCENTRO JUAN DE VELASCO - PANGOR</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/614b351718.js" crossorigin="anonymous"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="contaider-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #0B0719; ">
        <img id="titulo" src="img/info3.jpg" class="rounded" alt="Cinque Terre"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">INFOCENTRO JUAN DE VELASCO - PANGOR<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="nav navbar=nav navbar=righr ">
                <li class="nav-item" >
                    <a id="Is" class="nav-link" href="Iniciar.php"><i class="fas fa-user-circle"></i> Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<?php
date_default_timezone_set('America/Guayaquil');
$fecha=date("Y-m-d H:i:s");
?>

<div class="login-box">
    <img src="img/info1.jpg" class="avatar" alt="Avatar Image">
    <h1>REGISTRARSE <i class="fas fa-user-plus"></i></h1>
    <form ACTION="registrar.php" method="post" enctype="multipart/form-data"
    <label for="nombre">Nombres</label>
    <input type="text" name="nombre" placeholder="Nombres" required="" pattern="[a-z A-Z]+">

    <label for="apellido">Apellidos</label>
    <input type="text" name= "apellido" placeholder="Apellidos" required="" pattern="[a-z A-Z]+">

    <label for="cedula">Cedula</label>
    <input maxlength="10" minlength="10" type="text" name="cedula" placeholder="Cedula" required="" pattern="[0-9]+">
    <label for="nacionalidad">Nacionalidad</label>
    <select name="nacionalidad">
        <option>-Seliccione-</option>
        <option value="Africana">Africana</option>
        <option value="Asiática">Asiática</option>
        <option value="Centroamericana">Centroamericana</option>
        <option value="Colombiana">Colombiana</option>
        <option value="Cubana">Cubana</option>
        <option value="Ecuatoriana" selected="selected">Ecuatoriana</option>
        <option value="Europea">Europea</option>
        <option value="Norteamericana">Norteamericana</option>
        <option value="Oceánica">Oceánica</option>
        <option value="Peruana">Peruana</option>
        <option value="Sudamericana">Sudamericana</option>
        <option value="Venezolana">Venezolana</option>
        <option value="Otros">Otros</option>
    </select>

    <input type="submit" name="registrar" value="REGISTRAR">

    <p><i class="fas fa-calendar-alt"></i> Fecha y Hora de Registro <i class="far fa-clock"></i> </p>
    <input maxlength="0" minlength="0" type="datetime" name="fecha1" class="fecha1" placeholder="<?= $fecha?>" >
    </form>
</div>
</body>
</html>

