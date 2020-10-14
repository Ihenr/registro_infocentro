<!DOCTYPE html>
<?php
session_start();
$usuario =$_SESSION['username'];
if(!isset($usuario)){
    header("location: Iniciar.php");
}
?>
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

    <link href="css/administrador.css" rel="stylesheet">
</head>
<body>

<div class="contaider-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #0B0719; position: fixed; width: 100%; top: 0; ">
        <img id="titulo" src="img/info3.jpg" class="rounded" alt="Cinque Terre"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="administrador.php">INFOCENTRO JUAN DE VELASCO - PANGOR<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="nav navbar=nav navbar=righr ">
                <li class="nav-item" >
                    <a href="cerrar_sesion.php" id="Is" class="nav-link" href="#"><i class="fas fa-times-circle"></i> Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</div>





<header>
    <div class="alert alert-info">
        <img src="img/info1.jpg" class="avatar" alt="Avatar Image">
        <h2>BIENVENIDO ADMINISTRADOR</h2>
    </div>
</header>
<div class="container-fluid" id="bus">
    <section >
        <label for="busqueda_usuarios" >Buscar por Cédula o Nombre/Apellido  <i class="fas fa-search"></i></label>
        <input type="text" name="busqueda" id="busqueda" placeholder="BUSCAR...">
    </section>
</div>

 <h3><i class="fas fa-table"></i>  TABLA DE CONTENIDO</h3>
<section id="tabla_resultado">
    <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
</section

</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</html>

