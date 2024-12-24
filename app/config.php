<?php

define('SERVIDOR', 'localhost'); // Servidor de la base de datos
define('USUARIO', 'root'); // Usuario de la base de datos
define('PASSWORD', ''); // Contraseña de la base de datos
define('BD', 'sistemadelivery'); // Nombre de la base de datos

define('APP_NAME', 'Sistema de Delivery'); // Nombre de la aplicación
define('APP_URL', 'http://localhost/Sistema-Motomandado'); // URL de la aplicación
define('KEY_API_MAPS', ''); // Key de la API de Google Maps

// CONEXIÓN A LA BASE DE DATOS
$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // echo "Conexión exitosa con la base de datos";
} catch (PDOException $excepcion) {
    print_r("Error de conexión con la base de datos: " . $excepcion->getMessage());
}

date_default_timezone_set('America/Argentina/Buenos_Aires'); // Configurar la zona horaria
$fyh = date('Y-m-d H:i:s'); // Fecha y hora actual
?>
