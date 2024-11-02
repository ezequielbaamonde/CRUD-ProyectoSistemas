<?php
    include_once("../conexion.php");

    $id_mapeado = $_POST['Id'];
    $Turno = $_POST['turnoCursos'];
    $Nivel = $_POST['nivelCursos'];

    $sql = "UPDATE cursos SET 
                    turno='".$Turno."',
                    nivel='".$Nivel."' WHERE id_curso = '".$id_mapeado."'";

    if($resultado = $conn->query($sql)){
        header("location:../sistema_pagos.php");

    }else{
        echo "Hubo un error...";
        echo "<a href='../sistema_pagos.php'>Regresar</a>";
    }

?>