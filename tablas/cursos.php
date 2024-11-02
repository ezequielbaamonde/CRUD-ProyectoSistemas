<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSOS</title>
    <!-- links rel -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color:  #ecf0f1;">

    <div class="container">
        <!-- ######################################################################################################### -->
        <!-- CURSOS -->
        <div class="container">
            <br>
            <h2 class="text-center" style="background-color: black; color: white;">LISTADO DE CURSOS</h2>
        </div>

        <br>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../conexion.php");
                // consultas
                $sql = $conn->query("SELECT * from cursos");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr class="text-center">
                        <th scope="row"><?php echo $resultado['id_curso'] ?></th>
                        <td scope="row"><?php echo $resultado['turno'] ?></td>
                        <td scope="row"><?php echo $resultado['nivel'] ?></td>
                        <td scope="row">
                            <a href="../formularios/editarFormCursos.php?Id=<?php echo $resultado['id_curso']?>" class="btn btn-warning">Editar</a>
                            <a href="../crud/eliminarCursos.php?Id=<?php echo $resultado['id_curso']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <!-- FORMULARIO -->
        <br>
        <div class="text-center">
            <a href="../formularios/agregarFormCursos.php" class="btn btn-success">Agregar Datos</a>
            <a href="../sistema_pagos.php" class="btn btn-dark">Regresar</a>
        </div>

    </div>

    <hr>
    <footer>
        <div class="text-center" style="font-family: arial; margin: auto; font-size: 15px;">
            <p>Proyecto Final - <strong>Baamonde Ezequiel 7°1</strong><br>E.E.S.T.N°4</p>
        </div>
    </footer>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>