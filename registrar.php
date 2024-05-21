<?php
include("conexion.php");
if(isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) < 1 &&
        strlen($_POST['correo']) < 1 &&
        strlen($_POST['celular']) < 1 &&
        strlen($_POST['nocuenta']) < 1 ) {
            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $celular = trim($_POST['celular']);
            $nocuenta = trim($_POST['nocuenta']);
            $consulta = "INSERT INTO datos(nombre,correo,celular,nocuenta) VALUES ('$nombre','$correo','$celular','$nocuenta')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                <h3 class="good">¡Datos guardados correctamente!</h3> 
                <?php
            } else {
                ?>
                <h3 class="bad">¡Ha ocurrido un error!</h3> 
                <?php
            }
        } else {
            ?>
            <h3 class="bad">¡Por favor rellene los campos solicitados!</h3> 
            <?php
        }
    }
?>