<?php
    // CONEXION A LA BD
    include("../conexion.php");

    /* PROFESORES */
    mysqli_query($conn,"insert into profesores(nombres, apellidos, domicilio, telefono, asignatura, DNI) values
    ('$_REQUEST[nombreProf]', '$_REQUEST[apellidoProf]', '$_REQUEST[domicilioProf]', '$_REQUEST[telProf]', 
    '$_REQUEST[asignProf]', '$_REQUEST[dniProf]')") or die("Problemas en el select de PROFESORES<br>".mysqli_error($conn));
    
    /* PAGOS */
    mysqli_query($conn,"insert into pagos(fecha, horas_trabajadas) values ('$_REQUEST[fechaPago]', 
    '$_REQUEST[horasPago]')") or die("Problemas en el select de PAGOS<br>".mysqli_error($conn));
    
    /* CURSOS */
    mysqli_query($conn,"insert into cursos(turno, nivel) values ('$_REQUEST[turnoCurso]', 
    '$_REQUEST[nivelCurso]')") or die("Problemas en el select de CURSOS<br>".mysqli_error($conn));

    /* SALARIOS */
    mysqli_query($conn,"insert into salarios(grado, pago_hora) values ('$_REQUEST[gradoSalario]', 
    '$_REQUEST[pago_horaSalario]')") or die("Problemas en el select de SALARIOS<br>".mysqli_error($conn));

    /* cierre de conexión */
    mysqli_close($conn);
        
    echo "El alta de los datos se ha realizado con éxito";
    echo "<hr>";
    echo "<a href='../sistema_gestion.html'>Volver a inicio</a>";
?>