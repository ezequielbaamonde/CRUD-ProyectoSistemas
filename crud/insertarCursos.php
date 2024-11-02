<?php
    include("../conexion.php");

    // salarios
    $Turno = $_POST["turnoCursos"];
    $Nivel = $_POST["nivelCursos"];

    // CONSULTA CURSOS
    $sql_cursos = "INSERT INTO cursos(turno, nivel) VALUES ('$Turno','$Nivel')";

    // RESULTADOS
    $resultado_cursos = mysqli_query($conn, $sql_cursos);


    // CONDICIONES
    if($resultado_cursos == TRUE){
        header("location: ../sistema_pagos.php");
    }else{
        echo "Datos no insertados correctamente";
    }


?>