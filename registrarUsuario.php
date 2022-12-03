<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoraSonica</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarDatos_Auto.php">
                    <div class="form-group">
                        <label for="">Usuario:</label>
                        <input type="text" class="form-control" name="nombre_usuario" placeholder="Teclea el Nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="Teclea el correo" required>
                    </div>

                    <div class="form-row">
                        <label for="">Contraseña</label>
                        <input name="password" type="text" class="form-control" placeholder="Contraseña" required>
                    </div>

                    <div class="form-row">
                        <label for="">Nombre</label>
                        <input name="nombre_real" type="text" class="form-control" placeholder="Escribe tu Nombre " >
                    </div>


                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
