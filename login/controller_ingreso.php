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

//mostrar mensaje de ingreso exitoso o fallido
if ($contador > 0) {
    // echo "Ingreso exitoso";
    
    //iniciar sesión
    session_start();
    $_SESSION['mensaje'] = 'Ingreso exitoso';
    $_SESSION['session_email'] = $email;

    // redireccion $APP_URL = ./admin
    header('Location: '.APP_URL.'/admin');
} else {
    // echo "Ingreso fallido";

    //iniciar sesión
    session_start();
    $_SESSION['mensaje'] = 'Ingreso fallido';

    //redireccion $APP_URL = ./login
    header('Location: '.APP_URL.'/login');
}

?>
