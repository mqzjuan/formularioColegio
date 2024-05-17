<?php
// Incluir el archivo de conexión a la base de datos
include ("conexion.php");

// Verificar si se ha enviado el formulario para modificar un registro
if (isset($_POST["modificar"])) {
    // Verificar si se ha seleccionado un alumno para modificar
    if (isset($_POST["id"])) {
        // Obtener el ID del alumno seleccionado
        $alumno_id = $_POST["id"];

        // Obtener los nuevos datos del formulario
        $nuevonomyape = $_POST["nuevonomyape"]; // Nuevo nombre y apellido
        $nuevafnac = $_POST["nuevafnac"]; // Nueva fecha de nacimiento
        $nuevaciudad = $_POST["nuevaciudad"]; // Nueva ciudad
        $nuevodomicilio = $_POST["nuevodomicilio"]; // Nuevo domicilio
        $nuevomail = $_POST["nuevomail"]; // Nuevo correo electrónico
        $nuevogenero = $_POST["nuevogenero"]; // Nuevo género
        $nuevotelefono = $_POST["nuevotelefono"]; // Nuevo número de teléfono

        // Consulta SQL para actualizar el registro del alumno
        $consulta = "UPDATE alumnos SET nomyape = '$nuevonomyape', fnac = '$nuevafnac', ciudad = '$nuevaciudad', domicilio = '$nuevodomicilio', mail = '$nuevomail', genero = '$nuevogenero', telefono = '$nuevotelefono' WHERE id = $alumno_id";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Verificar si la consulta se ejecutó correctamente
        if ($resultado) {
            echo "El registro se ha modificado correctamente.";
        } else {
            echo "Error al intentar modificar el registro.";
        }
    } else {
        echo "Por favor, selecciona un alumno para modificar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Alumno</title>
    <link rel="stylesheet" href="modificar.css">
</head>

<body>
    <h2>Modificar Alumno</h2>
    <form method="post">
        <select name="id">
            <?php
            // Consulta SQL para obtener la lista de alumnos
            $consulta_alumnos = "SELECT id, nomyape FROM alumnos";
            $resultados_alumnos = mysqli_query($conex, $consulta_alumnos);

            // Mostrar opciones para cada alumno
            while ($fila = mysqli_fetch_assoc($resultados_alumnos)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nomyape'] . "</option>";
            }
            ?>
        </select>
        <div>
            <input type="text" name="nuevonomyape" id="nuevonomyape" placeholder="Nuevo Nombre y Apellido">
        </div>
        <div>
            <input type="date" name="nuevafnac" id="nuevafnac" placeholder="Nueva Fecha de Nacimiento">
        </div>
        <div>
            <input type="text" name="nuevaciudad" id="nuevaciudad" placeholder="Nueva Ciudad">
        </div>
        <div>
            <input type="text" name="nuevodomicilio" id="nuevodomicilio" placeholder="Nuevo Domicilio">
        </div>
        <div>
            <input type="mail" name="nuevomail" id="nuevomail" placeholder="Nuevo Correo Electrónico">
        </div>
        <div>
            <input type="text" name="nuevogenero" id="nuevogenero" placeholder="Nuevo Género">
        </div>
        <div>
            <input type="text" name="nuevotelefono" id="nuevotelefono" placeholder="Nuevo Número de Teléfono">
        </div>
        <button type="submit" name="modificar">Modificar</button>
    </form>
    <a href="cargarAlumno.php">Volver al incio</a>
</body>

</html>