<?php

    Nuevo($_POST['correo'],$_POST['usuario'],$_POST['password']);

    function Nuevo($correo, $usuario, $password){
        include 'conexion.php';

        $sentencia="INSERT INTO iniciar (correo, usuario, password) 
        VALUES('".$correo."','".$usuario."','".$password."')   ";

        $conexion->query($sentencia);

    }