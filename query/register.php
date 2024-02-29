<?php

declare(strict_types=1);

require('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $othername = $_POST['otherName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $isAdmin = $_POST['isAdmin'];
    $password = $_POST['password'];

    try {
        require_once('db.php');
        require_once('register.modal.php');
        require_once('register.controller.php');
        // ERRORS

        $errors = [];

        if (isEmpty($email, $password)) {
            $errors['emptyField'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Email and Password are required to connect...</p>';
        }

        if (isEmailValid($email)) {
            $errors['wrongEmail'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Email seems to be the issue...</p>';
        }

        if (isEmailTaken($pdo, $email)) {

            $errors['userExists'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Email already exists...</p>';
        }

        if ($errors) {
            $_SESSION['errors'] = $errors;

            $signupData = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'othername' => $othername,
                'email' => $email,
                'phoneNumber' => $phoneNumber
            ];
            $_SESSION['signupData'] = $signupData;

            header("Location: ../index.php");
            die();
        }

        signUpUser($pdo, $firstname, $lastname, $othername, $email, $phoneNumber, $isAdmin, $password);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $statement = null;
        die("");
    } catch (PDOException $e) {
        die('Failed' . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
