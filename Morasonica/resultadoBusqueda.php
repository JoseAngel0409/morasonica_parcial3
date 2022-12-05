<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        include 'menu.php';

    ?>
        <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if($_GET["termino"] == ""){
    ?>
        <br>
        <div class="alert alert-danger">No existen registros con ese término de búsqueda</div><br><br>
        <a href="consultarDatos.php">Regresar</a>
    <?php } else { 
        $sql = "SELECT * from producto WHERE idproducto LIKE '%" . $_GET["termino"] . "%'";
        $idproducto= $conexion->query($sql);
        if($id->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>No existen registros con ese término de búsqueda</div><br><br>";
        } else {
    ?>
        <table class="table table-hover">
            <thead>
                <th>producto</th>
                <th>Precio</th>
                <th>Descripción</th>
            </thead>
            <tbody>
                <?php while($row = $id->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["idproducto"]; ?></td>
                        <td><?php echo $row["precio"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td><br>
                            <a href="comprar.php?id=<?php echo $row["idproducto"]; ?>" class="btn btn-primary">Comprar</a><br>
                            <a href="eliminarRegistro_Auto.php?id=<?php echo $row["idproducto"]; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } } ?>
                </div></div></div>
    <script src="js/bootstrap.js"></script>
</body>
</html>