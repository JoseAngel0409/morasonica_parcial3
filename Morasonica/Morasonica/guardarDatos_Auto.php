<?php

    include 'conexion.php';

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $placas = $_POST["placas"];
    $color = $_POST["color"];
    $tarjeta = $_POST["tarjeta"];
    $propietario = $_POST["propietario"];
    

    $sql = "INSERT INTO automovil (marca, modelo, placas, color, tarjeta, propietario)". 
    "VALUES ('".$marca."', '".$modelo."', '".$placas."', '".$color."', '".$tarjeta."', '".$propietario."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>