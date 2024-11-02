<?php   
    include_once("../conexion.php");

    $Id = $_GET["Id"];

    $sql = "DELETE FROM pagos WHERE id_pago ='".$Id."'";

    $query = mysqli_query($conn, $sql);
    if($query == TRUE){
        header("Location: ../sistema_pagos.php");

    }
?>