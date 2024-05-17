<?php
// Verifica si se ha enviado el formulario para eliminar un registro
if (isset($_POST["eliminar"])) {
    // Verifica si se ha seleccionado un alumno para eliminar
    if (isset($_POST["alumno_id"])) {
        $alumno_id = $_POST["alumno_id"];

        // Conexión a la base de datos
        include ("conexion.php");

        // Consulta SQL para eliminar el registro del alumno
        $consulta = "DELETE FROM alumnos WHERE id = $alumno_id";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Verificar si la consulta se ejecutó correctamente
        if ($resultado) {
            echo "El registro se ha eliminado correctamente.";
        } else {
            echo "Error al intentar eliminar el registro.";
        }
    } else {
        echo "Por favor, selecciona un alumno para eliminar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Alumno</title>
    <link rel="stylesheet" href="eliminar.css">
</head>

<body>
    <h2>Eliminar Alumno</h2>
    <form method="post">
        <select name="alumno_id">
            <?php
            // Conexión a la base de datos
            include ("conexion.php");

            // Consulta SQL para obtener la lista de alumnos
            $consulta_alumnos = "SELECT id, nomyape FROM alumnos";
            $resultados_alumnos = mysqli_query($conex, $consulta_alumnos);

            // Mostrar opciones para cada alumno
            while ($fila = mysqli_fetch_assoc($resultados_alumnos)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nomyape'] . "</option>";
            }
            ?>
        </select>
        <button type="submit" name="eliminar">Eliminar</button>
    </form>
    <a href="cargarAlumno.php">Volver al incio</a>
</body>

</html>