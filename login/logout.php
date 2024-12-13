<?php

include('../app/config.php'); //incluir archivo de configuración

session_start();

if (isset($_SESSION['session_email']))
{
    session_destroy();
    header('Location: '.APP_URL.'/login');
}