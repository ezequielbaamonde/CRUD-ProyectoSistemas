<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGOS</title>
    <!-- links rel -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color:  #ecf0f1;">
    <div class="container">
        <!-- ######################################################################################################### -->
        <!-- PAGOS -->
        <div class="container">
            <br>
            <h2 class="text-center" style="background-color: black; color: white;">LISTADO DE PAGOS</h2>
        </div>

        <br>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Horas</th>
                    <th scope="col">IdMaestro</th>
                    <th scope="col">IdSalario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../conexion.php");
                // consultas
                $sql = $conn->query("SELECT * from pagos");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr class="text-center">
                        <th scope="row"><?php echo $resultado['id_pago'] ?></th>
                        <td scope="row"><?php echo $resultado['fecha'] ?></td>
                        <td scope="row"><?php echo $resultado['horas_trabajadas'] ?></td>
                        <td scope="row"><?php echo $resultado['id_maestro'] ?></td>
                        <td scope="row"><?php echo $resultado['id_salario'] ?></td>
                        <td scope="row">
                            <a href="../formularios/editarFormPagos.php?Id=<?php echo $resultado['id_pago']?>" class="btn btn-warning">Editar</a> <!-- FALTA PONER ACA EL FORM DE EDITAR Y EL ALTA DE EDITAR -->
                            <a href="../crud/eliminarPago.php?Id=<?php echo $resultado['id_pago']?>" class="btn btn-danger">Eliminar</a>
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
            <a href="../formularios/agregarFormPagos.php" class="btn btn-success">Agregar Datos</a>
            <a href="../sistema_pagos.php" class="btn btn-dark">Regresar</a>
        </div>
        <br>
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