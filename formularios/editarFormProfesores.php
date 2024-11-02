<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Datos</title>
    <!-- links rel -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black text-white text-center">EDITAR PROFESORES</h1>
    <br>
    <form class="container" action="../CRUD/editarProfesores.php" method="POST">
        <!-- traer datos -->
        <?php
        include_once("../conexion.php");

        $sql = "SELECT * FROM profesores WHERE id_maestro =" . $_GET['Id']; //Id declarada en etiqueta <a> de index.php
        $resultado = $conn->query($sql);

        $row = $resultado->fetch_assoc();

        ?>

        <!-- input escondido para reconocer ID -->
        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['id_maestro']; ?>">

        <div class="mb-3">
            <label class="form-label">Nombres:</label>
            <input type="text" class="form-control" name="nombreProf" value="<?php echo $row['nombres']; ?>">

        </div>

        <div class="mb-3">
            <label class="form-label">Apellidos:</label>
            <input type="text" class="form-control" name="apelliProf" value="<?php echo $row['apellidos']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Domicilio:</label>
            <input type="text" class="form-control" name="domiProf" value="<?php echo $row['domicilio']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Télefono:</label>
            <input type="text" class="form-control" name="teleProf" value="<?php echo $row['telefono']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Materia:</label>
            <input type="text" class="form-control" name="mateProf" value="<?php echo $row['asignatura']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">DNI:</label>
            <input type="text" class="form-control" name="dniProf" value="<?php echo $row['DNI']; ?>">
        </div>

        <!-- LLAMAR DATOS -->
        <!-- ID_SALARIO -->
        <label for="">Id Salario:</label>
        <select class="form-select" aria-label="Default select example" name="salaProf">
            <option selected disabled>--SELECCIONE ID SALARIO--</option>
            
            <?php
                include("../conexion.php");

                $sql1 = "SELECT * FROM salarios WHERE id_salario=".$row['id_salario'];
                $resultado1 = $conn->query($sql1);
                $row1 = $resultado1->fetch_assoc();
                echo "<option selected value='".$row1['id_salario']."'>".$row1
                ['id_salario']."</option>";
                
                $sql2 = "SELECT * FROM salarios";
                $resultado2 = $conn->query($sql2);
                while($fila = $resultado2->fetch_array()){
                    echo "<option value='".$fila['id_salario']."'>".$fila
                    ['id_salario']."</option>";
                }
            ?>
        </select>

        <!-- LLAMAR DATOS -->
        <!-- ID_CURSO -->
        <label for="">Id Curso:</label>
        <select class="form-select" aria-label="Default select example" name="cursoProf">
            <option selected disabled>--SELECCIONE ID CURSO--</option>
            
            <?php
                include("../conexion.php");

                $sql3 = "SELECT * FROM cursos WHERE id_curso=".$row['id_curso'];
                $resultado3 = $conn->query($sql3);
                $row2 = $resultado3->fetch_assoc();
                echo "<option selected value='".$row2['id_curso']."'>".$row2
                ['id_curso']."</option>";
                
                $sql4 = "SELECT * FROM cursos";
                $resultado4 = $conn->query($sql4);
                while($fila = $resultado4->fetch_array()){
                    echo "<option value='".$fila['id_curso']."'>".$fila
                    ['id_curso']."</option>";
                }
            ?>
        </select>



        <!-- Efectuar cambios -->
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../sistema_pagos.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>