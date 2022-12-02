<?php

    NuevoUsuario($_POST['correo'],$_POST['nombre'],$_POST['password']);

    function NuevoUsuario($correo, $usuario, $password){
        include 'conexion.php';

        $sentencia="INSERT INTO usuarios (correo, usuario, password) 
        VALUES('".$correo."','".$usuario."','".$password."')   ";

        $conexion->query($sentencia);

        echo '<script>';
            echo 'window.location.href="entro/index.php";';
        echo '</script>';
    }