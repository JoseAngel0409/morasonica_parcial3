<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sesión</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #8d5524">
<br><br><br><br><br><br><br><br>
<div class="card text-center" style="width: 920px; margin: auto; width: 35rem; background-color:#c68642">
<div class="border">
<div class="text-center"><br>
    <img src="mora.jpg" class="rounded-circle" width="220"  alt="..." vertical-align="middle">
</div>
<h4>Morasonica</h4>
    <div class="card-body" >
        <form action="UsuarioExistente.php" method="POST" >
        <h5>Correo</h5>
            <div class="form-row">
                <input name="correo" type="text" class="form-control" placeholder="Correo electronico" required>  
            </div>
            <br>
            <h5>Usuario</h5>
            <div class="form-row">
                <input name="usuario" type="text" class="form-control" placeholder="Nombre" required>
            </div>
            <br>
            <h5>Contraseña</h5>
            <div class="form-row">
                <input name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <br>
            <a href="IniciarSesion.php"><button type="submit" class="btn btn-outline-light">  Iniciar sesión  </button><br><br>
            <br>
        </form>
    </div> 
</div>
</div>
    <script src="js/bootstrap.js"></script>
</body>
</html>