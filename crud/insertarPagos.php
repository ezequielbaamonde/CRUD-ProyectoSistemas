<?php
    include("../conexion.php");

    // PAGOS
    $Fecha = $_POST["fechaPago"];
    $Horas = $_POST["horasPago"];
    $ID_Maestro = $_POST["idProfPago"];
    $ID_Salario = $_POST["idSalPago"];

    // CONSULTA PAGOS
    $sql_pagos = "INSERT INTO pagos(fecha, horas_trabajadas, id_maestro, id_salario) VALUES ('$Fecha','$Horas','$ID_Maestro','$ID_Salario')";

    // RESULTADOS
    $resultado_pagos = mysqli_query($conn, $sql_pagos);


    // CONDICIONES
    if($resultado_pagos == TRUE){
        header("location: ../sistema_pagos.php");
    }else{
        echo "Datos no insertados correctamente";
    }


?>