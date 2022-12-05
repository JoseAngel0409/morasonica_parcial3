<?php

    include 'conexion.php';

    $idproducto = $_POST["idproducto"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $sql = "UPDATE producto SET precio='".$precio."' , descripcion= '".$descripcion."'  ='".$."', ='".$."'".
    "WHERE idproducto=".$idproducto;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>