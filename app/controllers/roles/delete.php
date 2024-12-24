<?php
include('../../../app/config.php'); // Incluir archivo de configuración

echo $id_rol = $_POST['id_rol'];

$sql = "SELECT * FROM usuarios WHERE rol_id = '$id_rol' ";
$query = $pdo->prepare($sql);
$query->execute();

if ($query->rowCount() > 0) {
    // echo "existe";}
    session_start();
    $_SESSION['mensaje'] = "No se puede eliminar el rol porque tiene usuarios asociados"; // Mensaje de error
    $_SESSION['icono'] = "error"; // Icono de error
    ?>
    <script>
        window.history.back(); // Volver a la página anterior
    </script>
<?php
} else {
    // echo "no existe";
    $sql2 = "DELETE FROM roles WHERE id_rol = '$id_rol' "; // Sentencia SQL para eliminar el rol
    $sentencia = $pdo->prepare($sql2);
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Rol eliminado correctamente"; // Mensaje de ok
        $_SESSION['icono'] = "success"; // Icono de ok
        header("Location: " . APP_URL . "/admin/roles"); // Redireccionar al index de roles
    } else
    {
        session_start();
        $_SESSION['mensaje'] = "Error al eliminar el rol, consulte soporte"; // Mensaje de error
        $_SESSION['icono'] = "error"; // Icono de error
        ?>
        <script>
            window.history.back(); // Volver a la página anterior
        </script>
<?php
    }
}