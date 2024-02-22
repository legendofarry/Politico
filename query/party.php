<?php

declare(strict_types=1);
require('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $Location = $_POST['Location'];


    try {
        require('db.php');
        require('party.modal.php');
        require('party.controller.php');

        $errors = [];
        if (isTitleTaken($pdo,  $title)) {
            $errors['invalidTitle'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Title provided is already taken...</p>';
        }

        if ($errors) {
            $_SESSION['errors'] = $errors;

            $partyData = [
                'title' => $title,
                'description' => $description,
                'Location' => $Location
            ];
            $_SESSION['partyData'] = $partyData;

            header('Location: ../parties.html.php');
            die();
        }

        registerParty($pdo, $title, $description, $Location);

        header("Location: ../party.list.html.php");
        $pdo = null;
    } catch (PDOException $e) {
        die('Failed man' . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
