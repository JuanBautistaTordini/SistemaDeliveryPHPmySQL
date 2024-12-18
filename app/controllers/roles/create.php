<?php

include('../../../app/config.php'); // Incluir archivo de configuración

$nombre_rol = $_POST['nombre_rol'];

// Consultar si el rol ya existe
$query = $pdo->prepare("SELECT * FROM roles WHERE nombre_rol = :nombre_rol");
$query->bindParam(':nombre_rol', $nombre_rol);
$query->execute();

if ($query->rowCount() > 0) {
    session_start();
    $_SESSION['mensaje'] = "$nombre_rol . " ya existe""; // Mensaje de error
    $_SESSION['icono'] = "error"; // Icono de error
    ?>
    <script>
        window.history.back(); // Volver a la página anterior        
    </script>
    <?php
} 
