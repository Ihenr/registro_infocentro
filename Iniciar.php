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
    <link href="css/iniciar.css" rel="stylesheet">
</head>
<body>

<div class="contaider-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #0B0719; ">
        <img id="titulo1" src="img/info3.jpg" class="rounded" alt="Cinque Terre"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">INFOCENTRO JUAN DE VELASCO - PANGOR<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="login-box">
    <img src="img/info1.jpg" class="avatar" alt="Avatar Image">
    <h1><i class="fas fa-door-open"></i>   INICIAR SECIÓN</h1>
    <form action="validar.php" method="POST">
        <label for="username"><i class="fas fa-user-tie"></i> USUARIO</label>
        <input type="text" placeholder="Usuario" name="usuario" required="">

        <label for="password"><i class="fas fa-key"></i> CONTRASEÑA</label>
        <input type="password" placeholder="Contraseña" name="clave" required="">
        <input type="submit" value= " INGRESAR" >
    </form>
</div>

</body>
</html>
