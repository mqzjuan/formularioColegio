<?php
include ("conexion.php");
if (isset($_POST["register"])) {
    if (
        strlen($_POST["dni"]) >= 1 &&
        strlen($_POST["fnac"]) >= 1 &&
        strlen($_POST["nomyape"]) >= 1 &&
        strlen($_POST["ciudad"]) >= 1 &&
        strlen($_POST["domicilio"]) >= 1 &&
        strlen($_POST["mail"]) >= 1 &&
        strlen($_POST["genero"]) >= 1 &&
        strlen($_POST["telefono"]) >= 1
    ) {
        $dni = trim($_POST["dni"]);
        $fnac = $_POST["fnac"]; // Utilizamos la fecha de nacimiento del formulario
        $nomyape = trim($_POST["nomyape"]);
        $ciudad = trim($_POST["ciudad"]);
        $domicilio = trim($_POST["domicilio"]);
        $mail = trim($_POST["mail"]);
        $genero = trim($_POST["genero"]);
        $telefono = trim($_POST["telefono"]);

        $consulta = "INSERT INTO alumnos(dni, fnac, nomyape, ciudad, domicilio, mail, genero, telefono)
            VALUES('$dni','$fnac','$nomyape','$ciudad','$domicilio','$mail','$genero','$telefono')";
        $resultado = mysqli_query($conex, $consulta);
        
    } else {
        ?>
        <h3 class="error">Rellena todos los campos, capo</h3>
        <?php
    }
}
?>