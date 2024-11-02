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
    <h1 class="bg-black text-white text-center">Agregar Cursos</h1>
    <form class="container" action="../CRUD/insertarCursos.php" method="POST">
        
        <div class="mb-3">
            <label class="form-label">Turno</label>
            <input type="text" class="form-control" name="turnoCursos">
        </div>
        <div class="mb-3">
            <label class="form-label">Nivel</label>
            <input type="text" class="form-control" name="nivelCursos">
        </div>

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