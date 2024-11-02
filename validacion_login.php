<?php
    session_start();

    $nombre = $_POST['username'];
    $contraseña = $_POST['password'];

    // CONEXION A LA BD
    include("conexion.php");

    // añadiría un limit 1 a la consulta, solo esperamos un registro
    $consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre' AND contraseña_usuario = '$contraseña'");  

    // esto válida si la consulta se ejecuto correctamente o no
    // pero en ningún caso válida si devolvió algún registro
    if(!$consulta){ 
        echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " . 
        mysqli_error($mysqli);
        // si la consulta falla es bueno evitar que el código se siga ejecutando
        exit;
    } 

    // validamos si se obtuvieron resultados 
    // Obtenemos los resultados con mysqli_fetch_assoc
    // si no hay resultados devolverá NULL que al convertir a boleano para ser evaluado en el if será FALSE
    if($usuario = mysqli_fetch_assoc($consulta)) {
        // echo "El usuario y la contaseña son correctas";
        //redireccionar a FORMULARIO 
        header("Location: sistema_pagos.php");
    } else {
        echo "<script>alert('Usuario incorrecto o no existe')</script>";
        echo "<center><a href='index.html'><u>Reintentar</u></a></center>";
        // header("Location: sigin.html");
        // echo "<script>alert('Reintentar')</script>";
        die();
    }

?>