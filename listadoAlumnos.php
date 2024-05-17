<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <style>
        /* Estilo de la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>Listado de Alumnos</h2>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre y Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Ciudad</th>
                <th>Domicilio</th>
                <th>Email</th>
                <th>Género</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Incluir el archivo de conexión a la base de datos
            include ("conexion.php");

            // Consulta SQL para obtener la lista de alumnos
            $consulta_alumnos = "SELECT * FROM alumnos";
            $resultados_alumnos = mysqli_query($conex, $consulta_alumnos);

            // Mostrar filas para cada alumno
            while ($fila = mysqli_fetch_assoc($resultados_alumnos)) {
                echo "<tr>";
                echo "<td>" . $fila['dni'] . "</td>";
                echo "<td>" . $fila['nomyape'] . "</td>";
                echo "<td>" . $fila['fnac'] . "</td>";
                echo "<td>" . $fila['ciudad'] . "</td>";
                echo "<td>" . $fila['domicilio'] . "</td>";
                echo "<td>" . $fila['mail'] . "</td>";
                echo "<td>" . $fila['genero'] . "</td>";
                echo "<td>" . $fila['telefono'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="cargarAlumno.php">Volver al incio</a>
</body>

</html>