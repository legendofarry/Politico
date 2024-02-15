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
    } else if (isset($GET['signup']) && $_GET['signup'] === 'success') {
        echo '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]"> Success </p>';
    }
}

