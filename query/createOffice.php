<?php

declare(strict_types=1);

require('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $Location = $_POST['Location'];
    $party = $_POST['party'];
    $password = $_POST['password'];
    $officeType = $_POST['officeType'];
    $description = $_POST['description'];


    try {
        require_once('db.php');
        require_once('createOffice.modal.php');
        require_once('createOffice.controller.php');
        // ERRORS

        $errors = [];

        if (isEmailValid($email)) {
            $errors['wrongEmail'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Email seems to be the issue...</p>';
        }

        if (isOfficeTitleTaken($pdo,  $title)) {
            $errors['invalidTitle'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Title provided is already taken...</p>';
        }

        if ($errors) {
            $_SESSION['errors'] = $errors;

            $officeData = [
                'title' => $title,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'Location' => $Location,
                'party' => $party,
                'password' => $password,
                'officeType' => $officeType,
                'description' => $description
            ];
            $_SESSION['officeData'] = $officeData;

            header("Location: ../party.list.html.php");
            die();
        }

        createOffice($pdo, $title, $email, $phoneNumber, $Location, $party, $password, $officeType, $description);
        header("Location: ../index.php");

        $pdo = null;
        $statement = null;
        die("");
    } catch (PDOException $e) {
        die('Failed' . $e->getMessage());
    }
} else {
    header("Location: ../party.list.html.php");
    die();
}
