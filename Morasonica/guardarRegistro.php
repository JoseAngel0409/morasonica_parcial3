<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $placas = $_POST["placas"];
    $color = $_POST["color"];
    $tarjeta = $_POST["tarjeta"];
    $propietario = $_POST["propietario"];

    $sql = "UPDATE automovil SET marca='".$marca."' , modelo= '".$modelo."',". 
    "placas = '".$placas."', color = '".$color."', tarjeta ='".$tarjeta."', propietario='".$propietario."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>