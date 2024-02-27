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

// $admin = $_SESSION['user']['isAdmin'] === 'yes';

// if ($admin !== 'yes' && in_array($_SERVER['REQUEST_URI'], ['/index.php'])) {
//     // session_destroy();
//     header('Location: ../users.homepage.php');
//     die();
// };
// if (!isset($admin) && !in_array($_SERVER['REQUEST_URI'], ['/register.html.php', '/login.html.php'])) {
//     session_destroy();
//     header('Location: ../login.html.php');
//     die();
// } else if (isset($admin) && in_array($_SERVER['REQUEST_URI'], ['/register.html.php', '/login.html.php'])) {
//     header('Location: ../users.homepage.php');
//     die();
// }

// if (!isset($admin) && in_array($_SERVER['REQUEST_URI'], ['/index.php'])) {
//     header('Location: ../users.homepage.php');
//     die();
// }
