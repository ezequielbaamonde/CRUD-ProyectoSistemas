<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión</title>
    <!-- links rel -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color:  #ecf0f1;">
    <!-- logo -->
    <img src="img/LogoColeCircular.png" alt="" class="imagen_colegio">
    <!-- Cerrar Sesión -->
    <div class="pos">
        <a href="index.html" class="btn btn-primary" onclick="alert('Saliendo del Sistema de Gestión...')">Cerrar Sesión</a>
    </div>
    

    <!-- TITULO -->
    <div class="text-center" style="font-family: arial; margin: auto;">
        <h1>Sistema de Gestión - <strong>CRUD</strong><br>Profesores de Escuela Privada</h1>
        <a href="https://docs.google.com/document/d/1L_MtSJg7P6tIryOyYutW8nSTPe18lLVgWoOEixDb10s/edit?usp=sharing" target="_blank">Documentación Drive</a>
    </div>
    

    <hr>

    <br>
    <div class="container">
        <!-- ######################################################################################################### -->
        <!-- SALARIOS -->
        <div class="container">
            <br>
            <h1 class="text-center" style="background-color: black; color: white;">LISTADO SALARIOS</h1>
        </div>

        <br>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Grado</th>
                    <th scope="col">Pago x Hora</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("conexion.php");
                // consultas
                $sql = $conn->query("SELECT * from salarios");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr class="text-center">
                        <th scope="row"><?php echo $resultado['id_salario'] ?></th>
                        <td scope="row"><?php echo $resultado['grado'] ?></td>
                        <td scope="row"><?php echo $resultado['pago_hora'] ?></td>
                        <td scope="row">
                            <a href="formularios/editarFormSalarios.php?Id=<?php echo $resultado['id_salario']?>" class="btn btn-warning">Editar</a>
                            <a href="crud/eliminarSalarios.php?Id=<?php echo $resultado['id_salario']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <!-- FORMULARIO -->
        <br>
        <div class="container">
            <a href="formularios/agregarFormSalarios.php" class="btn btn-success">Agregar Datos</a>
            <a href="tablas/salarios.php" class="btn btn-primary">Ver Tabla</a>
        </div>

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
                require("conexion.php");
                // consultas
                $sql = $conn->query("SELECT * from cursos");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr class="text-center">
                        <th scope="row"><?php echo $resultado['id_curso'] ?></th>
                        <td scope="row"><?php echo $resultado['turno'] ?></td>
                        <td scope="row"><?php echo $resultado['nivel'] ?></td>
                        <td scope="row">
                            <a href="formularios/editarFormCursos.php?Id=<?php echo $resultado['id_curso']?>" class="btn btn-warning">Editar</a>
                            <a href="crud/eliminarCursos.php?Id=<?php echo $resultado['id_curso']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <!-- FORMULARIO -->
        <br>
        <div class="container">
            <a href="formularios/agregarFormCursos.php" class="btn btn-success">Agregar Datos</a>
            <a href="tablas/cursos.php" class="btn btn-primary">Ver Tabla</a>
        </div>

        <!-- ######################################################################################################### -->
        <!-- PROFESORES -->
        <div class="container">
            <br>
            <h2 class="text-center" style="background-color: black; color: white;">LISTADO DE PROFESORES</h2>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Télefono</th>
                    <th scope="col">Materia</th>
                    <th scope="col">IdSalario</th>
                    <th scope="col">IdCurso</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("conexion.php");
                // consultas
                $sql = $conn->query("SELECT * from profesores
                        INNER JOIN salarios ON profesores.id_salario = salarios.id_salario
                        INNER JOIN cursos ON profesores.id_curso = cursos.id_curso
                    ");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr class="text-center">
                        <th scope="row"><?php echo $resultado['id_maestro'] ?></th>
                        <td scope="row"><?php echo $resultado['nombres'] ?></td>
                        <td scope="row"><?php echo $resultado['apellidos'] ?></td>
                        <td scope="row"><?php echo $resultado['domicilio'] ?></td>
                        <td scope="row"><?php echo $resultado['telefono'] ?></td>
                        <td scope="row"><?php echo $resultado['asignatura'] ?></td>
                        <td scope="row"><?php echo $resultado['id_salario'] ?></td>
                        <td scope="row"><?php echo $resultado['id_curso'] ?></td>
                        <td scope="row"><?php echo $resultado['DNI'] ?></td>
                        <td scope="row">
                            <a href="formularios/editarFormProfesores.php?Id=<?php echo $resultado['id_maestro']?>" class="btn btn-warning">Editar</a>
                            <a href="crud/eliminarProf.php?Id=<?php echo $resultado['id_maestro']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <!-- FORMULARIO -->
        <br>
        <div class="container">
            <a href="formularios/agregarFormProf.php" class="btn btn-success">Agregar Datos</a>
            <a href="tablas/profesores.php" class="btn btn-primary">Ver Tabla</a>
        </div>

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
                require("conexion.php");
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
                            <a href="formularios/editarFormPagos.php?Id=<?php echo $resultado['id_pago']?>" class="btn btn-warning">Editar</a> <!-- FALTA PONER ACA EL FORM DE EDITAR Y EL ALTA DE EDITAR -->
                            <a href="crud/eliminarPago.php?Id=<?php echo $resultado['id_pago']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
        <!-- FORMULARIO -->
        <br>
        <div class="container">
            <a href="formularios/agregarFormPagos.php" class="btn btn-success">Agregar Datos</a>
            <a href="tablas/pagos.php" class="btn btn-primary">Ver Tabla</a>
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