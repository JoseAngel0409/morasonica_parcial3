<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión sesión</title>
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
            <h5>Usuario o Correo</h5>
            <div class="form-row">
             <input name="inputUsuario" type="text" class="form-control" placeholder="Usuario/Correo" required></div>
            <br>
            <h5>Contraseña</h5>
            <div class="form-row">
             <input name="inputPassword" type="password" class="form-control" placeholder="Contraseña" required>
            </div>
            ¿No tienes ninguna cuenta? <a href="CrearUsuario.php">Crear una.</a><br>
            <br>
            <div class="form-row">
            <div class="col-md-12 mb-9">
            <a href="index.php"><button type="submit" class="btn btn-outline-light">  Iniciar sesión  </button><br><br>
            
        </form>
    </div> 
</div>
</div>
    <script src="js/bootstrap.js"></script>
</body>
</html>