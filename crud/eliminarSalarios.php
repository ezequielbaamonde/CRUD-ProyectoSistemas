<?php   
    include_once("../conexion.php");

    $Id = $_GET["Id"];

    $sql = "DELETE FROM salarios WHERE id_salario ='".$Id."'";

    $query = mysqli_query($conn, $sql);
    if($query == TRUE){
        header("Location: ../sistema_pagos.php");

    }
?>