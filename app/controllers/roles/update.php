<?php

include('../../../app/config.php'); // Incluir archivo de configuración

$nombre_rol = trim($_POST['nombre_rol']); // Eliminar espacios en blanco al inicio y al final
$id_rol = trim($_POST['id_rol']); // Eliminar espacios en blanco al inicio y al final


// Verificar si el campo está vacío
if (empty($nombre_rol)) {
    session_start();
    $_SESSION['mensaje'] = "El nombre del rol no puede estar vacío"; // Mensaje de error
    $_SESSION['icono'] = "error"; // Icono de error
    ?>
    <script>
        window.history.back(); // Volver a la página anterior        
    </script>
    <?php
    exit; // Detener ejecución
}

// Actualizar el rol
$fyh = date('Y-m-d H:i:s'); // Fecha y hora actual
$sentencia = $pdo->prepare("UPDATE roles SET nombre_rol=:nombre_rol, fyh_actualizacion=:fyh_actualizacion WHERE id_rol=:id_rol");

$sentencia->bindParam(':nombre_rol', $nombre_rol);
$sentencia->bindParam(':fyh_actualizacion', $fyh);
$sentencia->bindParam(':id_rol', $id_rol);


try{
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = $nombre_rol . " actualizado correctamente"; // Mensaje de ok
        $_SESSION['icono'] = "success"; // Icono de ok
        header("Location: " . APP_URL . "/admin/roles"); // Redireccionar al index de roles
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error al actualizar el rol"; // Mensaje de error
        $_SESSION['icono'] = "error"; // Icono de error
        ?>
        <script>
            window.history.back(); // Volver a la página anterior
        </script>
        <?php
    }
} catch(Exception $e){
    if($e->getCode()==23000)
    {
        session_start();
        $_SESSION['mensaje'] = "El nombre del rol ya existe"; // Mensaje de error
        $_SESSION['icono'] = "error"; // Icono de error
        header("Location: " . APP_URL . "/admin/roles/edit.php?id=".$id_rol); // Redireccionar al index de roles
    }
}
