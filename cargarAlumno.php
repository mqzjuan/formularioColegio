<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar</title>
</head>

<body>
    <form method="post">

        <h2>Hola</h2>
        <p>Completa el registro</p>

        <div class="input-wrapper">
            <input type="text" name="dni" placeholder="Ingrese el DNI">
        </div>

        <div class="input-wrapper">
            <input type="date" name="fnac" placeholder="Ingrese la Fecha de Nacimiento">
        </div>

        <div class="input-wrapper">
            <input type="text" name="nomyape" placeholder="Ingrese el Nombre y apellido">
        </div>

        <div class="input-wrapper">
            <input type="text" name="ciudad" placeholder="Ingrese la ciudad">
        </div>

        <div class="input-wrapper">
            <input type="text" name="domicilio" placeholder="Ingrese el Domicilio">
        </div>

        <div class="input-wrapper">
            <input type="mail" name="mail" placeholder="Ingrese el Email">
        </div>

        <div class="input-wrapper">
            <input type="text" name="genero" placeholder="Ingrese el Genero">
        </div>

        <div class="input-wrapper">
            <input type="text" name="telefono" placeholder="Ingrese el Numero de telefono">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>
    <a href="modificar.php" class="btn">Modificar</a>
    <a href="eliminar.php" class="btn">Eliminar</a> <!-- Enlace al archivo eliminar.php -->
    <a href="listadoAlumnos.php">Ver Listado de Alumnos</a>
    <a href="index.php">Volver al inicio</a>

    <?php

    include ("registrar.php");
    ?>
</body>

</html>