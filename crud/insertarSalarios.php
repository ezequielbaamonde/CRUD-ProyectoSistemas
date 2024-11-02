<?php
    include("../conexion.php");

    // salarios
    $Grado = $_POST["graSalario"];
    $Pago = $_POST["pagoSalario"];

    // CONSULTA SALARIOS
    $sql_salarios = "INSERT INTO salarios(grado, pago_hora) VALUES ('$Grado','$Pago')";

    // RESULTADOS
    $resultado_salarios = mysqli_query($conn, $sql_salarios);


    // CONDICIONES
    if($resultado_salarios == TRUE){
        header("location: ../sistema_pagos.php");
    }else{
        echo "Datos no insertados correctamente";
    }


?>