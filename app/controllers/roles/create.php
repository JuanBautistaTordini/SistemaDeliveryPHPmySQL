<?php

include('../../../app/config.php'); // Incluir archivo de configuración

$nombre_rol = $_POST['nombre_rol'];


// Consultar si el rol ya existe
$query = $pdo->prepare("SELECT * FROM roles WHERE nombre_rol = :nombre_rol");
$query->bindParam(':nombre_rol', $nombre_rol);
$query->execute();

if ($query->rowCount() > 0) {
    session_start();
    $_SESSION['mensaje'] = $nombre_rol . " ya existe"; // Mensaje de error
    $_SESSION['icono'] = "error"; // Icono de error
    ?>
    <script>
        window.history.back(); // Volver a la página anterior        
    </script>
    <?php
} 

// si no entra en el if, registra

$sentencia = $pdo->prepare("INSERT INTO roles (nombre_rol, fyh_creacion) VALUES (:nombre_rol, :fyh_creacion) ");

$sentencia->bindParam(':nombre_rol', $nombre_rol);
$sentencia->bindParam(':fyh_creacion', $fyh);

if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = $nombre_rol . " creado correctamente"; // Mensaje de ok
    $_SESSION['icono'] = "success"; // Icono de ok
    header("Location: " . APP_URL . "/admin/roles"); // Redireccionar al index de roles
} else
{
    $_SESSION['mensaje'] = "Error al crear el rol"; // Mensaje de error
    $_SESSION['icono'] = "error"; // Icono de error
    ?> <script>
        window.history.back(); // Volver a la página anterior
    </script>
    <?php
}
