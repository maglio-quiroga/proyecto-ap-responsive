<?php
include 'conexion.php';

if(isset($_POST['del'])){
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (!empty($email)) {
        // Utilizando parámetros preparados
        $consulta = $conexion->prepare("DELETE FROM clientes WHERE email=?");
        $consulta->bind_param("s", $email);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            echo "<div class='alerta'>Usuario Eliminado Correctamente.</div>";
        } else {
            echo "<div class='alerta'>El Usuario no se pudo Eliminar.</div>";
        }

        // Cerrar la consulta
        $consulta->close();
    } else {
        echo "<div class='alerta'>No se proporcionó un correo electrónico válido.</div>";
    }
}
?>

