<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Datos</title>
    <!-- links rel -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black text-white text-center">Agregar Pagos</h1>
    <form class="container" action="../CRUD/insertarPagos.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="text" class="form-control" name="fechaPago" placeholder="YYYY-MM-DD">
        </div>
        <div class="mb-3">
            <label class="form-label">Horas</label>
            <input type="text" class="form-control" name="horasPago">
        </div>
        <!-- ########################################################################## -->
        <!-- RELACION ID_SALARIO -->
        <label for="">ID Maestro</label>
        <select class="form-select mb-3 " name="idProfPago">
            <option selected disabled>--Seleccionar ID Maestro--</option>
            <?php
                include("../conexion.php");

                $sql = $conn -> query("SELECT * FROM profesores");
                while($resultado = $sql ->fetch_assoc()){
                    echo "<option value='".$resultado['id_maestro']."'>".$resultado
                    ['id_maestro']."</option>";
                }
            ?>
        </select>
        <!-- ########################################################################## -->
        <!-- RELACION ID_SALARIO -->
        <label for="">ID Salario</label>
        <select class="form-select mb-3 " name="idSalPago">
            <option selected disabled>--Seleccionar ID Salario--</option>
            <?php
                include("../conexion.php");

                $sql = $conn -> query("SELECT * FROM salarios");
                while($resultado = $sql ->fetch_assoc()){
                    echo "<option value='".$resultado['id_salario']."'>".$resultado
                    ['id_salario']."</option>";
                }
            ?>
        </select>
        <!-- ########################################################################## -->
        <!-- DAR ALTA -->                
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../sistema_pagos.php" class="btn btn-dark">Regresar</a>
        </div>
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>