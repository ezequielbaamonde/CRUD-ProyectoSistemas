<?php
    include_once("../conexion.php");

    $id_mapeado = $_POST['Id'];
    $Fecha = $_POST['fechaPago'];
    $Horas = $_POST['horasPago'];
    $Salario = $_POST['salarioPago'];
    $Profesores = $_POST['profPago'];

    $sql = "UPDATE pagos SET 
                    fecha='".$Fecha."',
                    horas_trabajadas='".$Horas."',
                    id_maestro='".$Profesores."',
                    id_salario='".$Salario."' WHERE id_pago = '".$id_mapeado."'";

    if($resultado = $conn->query($sql)){
        header("location:../sistema_pagos.php");
    }else{
        echo "Hubo un error...";
        echo "<a href='../sistema_pagos.php'>Regresar</a>";
    }

?>