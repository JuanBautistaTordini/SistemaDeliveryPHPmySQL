<!-- 
 * Este archivo es responsable de manejar el proceso de ingreso de usuarios al sistema.
 * Recibe los datos de inicio de sesión (email y contraseña) a través de un formulario POST.
 * Verifica si el email y la contraseña coinciden con los registros de la base de datos.
 * Si hay una coincidencia, muestra un mensaje de "Ingreso exitoso".
 * Si no hay una coincidencia, muestra un mensaje de "Ingreso fallido".
-->

<?php
include('../app/config.php'); //incluir archivo de configuración

//recibir datos del formulario
$email = $_POST ['email'];
$password = $_POST ['password'];

//consulta para verificar si el email y la contraseña coinciden con los registros de la base de datos
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' ";

//ejecutar consulta
$query = $pdo -> prepare($sql);
$query -> execute();

//almacenar los resultados en un array
$usuarios = $query -> fetchAll(PDO::FETCH_ASSOC);

//contar el número de resultados
$contador = 0;

//recorrer el array de resultados
foreach ($usuarios as $usuario) {
    $contador++;
}

// Si el ingreso es exitoso
if ($contador > 0) {
    session_start();
    $_SESSION['mensaje'] = 'Ingreso exitoso';
    $_SESSION['mensaje_tipo'] = 'success';  // Se agrega un campo para el tipo de mensaje
    $_SESSION['session_email'] = $email;

    // redireccionar
    header('Location: '.APP_URL.'/admin');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ingreso fallido';
    $_SESSION['mensaje_tipo'] = 'error';  // Se agrega un tipo de mensaje "error"

    // redireccionar
    header('Location: '.APP_URL.'/login');
}


?>
