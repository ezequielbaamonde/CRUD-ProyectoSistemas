<?php
    include_once("../conexion.php");

    $id_mapeado = $_POST['Id'];
    $Grado = $_POST['gradoSalarios'];
    $Pago_Hora = $_POST['pagohoraSalarios'];

    $sql = "UPDATE salarios SET 
                    grado='".$Grado."',
                    pago_hora='".$Pago_Hora."' WHERE id_salario = '".$id_mapeado."'";

    if($resultado = $conn->query($sql)){
        header("location:../sistema_pagos.php");

    }else{
        echo "Hubo un error...";
        echo "<a href='../sistema_pagos.php'>Regresar</a>";
    }

?>