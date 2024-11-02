<?php
    include("../conexion.php");

    // profesores
    $Nombre= $_POST["nomProf"];
    $Apellido= $_POST["apeProf"];
    $Domicilio= $_POST["domProf"];
    $Telefono= $_POST["telProf"];
    $Materia= $_POST["matProf"];
    $DNI= $_POST["dniProf"];
    $idSalario = $_POST["salariosProfesores"];
    $idCurso= $_POST["cursosProfesores"];

    // CONSULTA PROFESORES
    $sql_profesores = "INSERT INTO profesores(nombres, apellidos, domicilio, telefono, asignatura, id_salario, id_curso, DNI) VALUES
    ('$Nombre','$Apellido','$Domicilio','$Telefono','$Materia','$idSalario','$idCurso','$DNI')";

    // RESULTADOS
    $resultado_profesores = mysqli_query($conn, $sql_profesores);

    // CONDICIONES
    if($resultado_profesores == TRUE){
        header("location: ../sistema_pagos.php");
    }else{
        echo "Datos no insertados correctamente";
    }

?>