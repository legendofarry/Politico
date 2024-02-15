<?php
// var_export($_SESSION);
// echo '<br />';
// var_export($_SERVER);
// echo '<br />';
// var_export(!isset($_SESSION['user']) && !in_array($_SERVER['REQUEST_URI'], ['/register.html.php', '/login.html.php']));
// echo '<br />';
// var_export(isset($_SESSION['user']) && in_array($_SERVER['REQUEST_URI'], ['/register.html.php', '/login.html.php']));
// die();

if (!isset($_SESSION['user']) && !in_array($_SERVER['REQUEST_URI'], ['/register.html.php', '/login.html.php'])) {
    session_destroy();
    header('Location: ../login.html.php');
    die();
} else if (isset($_SESSION['user']) && in_array($_SERVER['REQUEST_URI'], ['/register.html.php', '/login.html.php'])) {
    header('Location: ../index.php');
    die();
}