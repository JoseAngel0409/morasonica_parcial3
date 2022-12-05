<?php

    include 'conexion.php';

    $idproducto = $_GET["idproducto"];

    $sql = "DELETE FROM biblioteca WHERE idproducto=" . $idproducto;

    if($conexion->query($sql) === TRUE){
        echo "Se eliminó el registro con ID " .$idproducto. "<br>";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Ocurrió un error: " . $conexion->error ."<br>";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    }

?>