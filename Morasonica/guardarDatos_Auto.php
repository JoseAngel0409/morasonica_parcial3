<?php

    include 'conexion.php';

    $idproducto = $_POST["idproducto"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
   
    

    $sql = "INSERT INTO producto (idproducto, precio, descripcion)". 
    "VALUES ('".$idproducto."', '".$precio."', '".$descripcion."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>