<?php
    include_once("../conexion.php");

    $id_mapeado = $_POST['Id'];
    $Nombres = $_POST['nombreProf'];
    $Apellidos = $_POST['apelliProf'];
    $Domicilio = $_POST['domiProf'];
    $Telefono = $_POST['teleProf'];
    $Materia = $_POST['mateProf'];
    $dni = $_POST['dniProf'];
    $Salario = $_POST['salaProf'];
    $Curso = $_POST['cursoProf'];

    $sql = "UPDATE profesores SET 
                    nombres='".$Nombres."',
                    apellidos='".$Apellidos."',
                    domicilio='".$Domicilio."',
                    telefono='".$Telefono."',
                    asignatura='".$Materia."',
                    id_salario='".$Salario."',
                    id_curso='".$Curso."',
                    DNI='".$dni."' WHERE id_maestro = '".$id_mapeado."'";

    if($resultado = $conn->query($sql)){
        header("Location:../sistema_pagos.php");

    }else{
        echo "Hubo un error...";
        echo "<a href='../sistema_pagos.php'>Regresar</a>";
    }

?>