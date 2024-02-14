<?php
declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $othername = $_POST['otherName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $isAdmin = (INT) $_POST['isAdmin'];
    $password = $_POST['password'];



    try {
        require_once('db.php');
        require_once('register.modal.php');
        require_once('register.controller.php');
        // ERRORS

        $errors = [];

        if (isEmpty($email, $password)) {
            $errors['emptyField'] = 'Email and Password are required to connect...';
        }

        if (isEmailValid($email)) {
            $errors['wrongEmail'] = 'Email seems to be the issue...';
        }

        if (isEmailTaken($pdo, $email)) {
            $errors['userExists'] = 'Email already exists...';
        }

        require('config.php');
        if ($errors) {
            $_SESSION['error'] = $errors;
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
