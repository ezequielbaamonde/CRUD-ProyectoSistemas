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
    <h1 class="bg-black text-white text-center">EDITAR SALARIOS</h1>
    <br>
    <form class="container" action="../CRUD/editarSalarios.php" method="POST">
        <!-- traer datos -->
        <?php
            include_once("../conexion.php");

            $sql = "SELECT * FROM salarios WHERE id_salario =".$_GET['Id']; //Id declarada en etiqueta <a> de index.php
            $resultado = $conn->query($sql);

            $row = $resultado->fetch_assoc();
            
        ?>

        <!-- input escondido para reconocer ID -->
        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['id_salario']; ?>">

        <div class="mb-3">
            <label class="form-label">Grado:</label>
            <input type="text" class="form-control" name="gradoSalarios" value="<?php echo $row['grado']; ?>">

        </div>
        
        <div class="mb-3">
            <label class="form-label">Pago por Hora:</label>
            <input type="text" class="form-control" name="pagohoraSalarios" value="<?php echo $row['pago_hora']; ?>">
        </div>

        <!-- Efectuar cambios -->                
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../sistema_pagos.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>