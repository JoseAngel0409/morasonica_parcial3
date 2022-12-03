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
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM automovil WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    
                
                    <div class="form-group">
                        <label for="">Usuario:</label>
                        <input value="<?php echo $registro["nombre_usuario"]; ?>" type="text" class="form-control" name="nombre_usuario" placeholder="Teclea el Nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input value="<?php echo $registro["email"]; ?>" type="text" class="form-control" name="email" placeholder="Teclea el correo" required>
                    </div>

                    <div class="form-row">
                        <label for="">Contraseña</label>
                        <input value="<?php echo $registro["password"]; ?>" name="password" type="text" class="form-control" placeholder="Contraseña" required>
                    </div>

                    <div class="form-row">
                        <label for="">Nombre</label>
                        <input value="<?php echo $registro["nombre_real"]; ?>" name="nombre_real" type="text" class="form-control" placeholder="Escribe tu Nombre " >
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
