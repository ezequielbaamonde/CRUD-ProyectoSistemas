<?php   
    include_once("../conexion.php");

    $Id = $_GET["Id"];

    $sql = "DELETE FROM profesores WHERE id_maestro ='".$Id."'";

    $query = mysqli_query($conn, $sql);
    if($query == TRUE){
        header("Location: ../sistema_pagos.php");

    }
?>