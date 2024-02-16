<?php

declare(strict_types=1);
require('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['Location'];

    try {
        require_once('db.php');
        require('party.modal.php');
        require('party.controller.php');

        $errors = [];
        $result = getTitle($pdo, $title);
        if ($result) {
            $errors['invalidTitle'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Title provided is already taken...</p>';
        }

        $_SESSION['errors'] = $errors;
        if (!empty($errors)) {
            header("Location: ../parties.html.php");
            die();
        }

        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die('Failed man' . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
