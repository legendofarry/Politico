<?php
declare(strict_types=1);

function showLoginResult()
{
    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION['errors'];
        foreach ($errors as $error) {
            echo '<p class="text-red-600 w-full">' . $error . '</p>';
        }

        unset($_SESSION['errors']);
    } elseif (isset($_GET['login']) && $_GET['login'] === 'success') {
        header('Location: ../index.php');

    }
}