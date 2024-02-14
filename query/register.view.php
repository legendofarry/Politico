<?php
declare(strict_types=1);

function checkErrors()
{
    if (isset($_SESSION['error'])) {
        $errors = $_SESSION['error'];

        foreach ($errors as $key => $error) {
            echo '<p>' . $error . '</p>';
        }

        unset($_SESSION['error']);
    } else {
        echo '<p> Success </p>';
    }
}
