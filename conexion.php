<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "sistema_pagos";

    $conn= mysqli_connect($host, $user, $pass, $bd);

    if(!$conn){
        echo "Conexión fallida";
    }
?>
