<?php
require("config.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    try {
        require('db.php');
        require('login.modal.php');
        require('validations.php');
        require('login.controller.php');

        $errors = [];

        if (isEmpty($email, $password)) {
            $errors['emptyField'] = '<p class="w-fit bg-[gold] py-[2px] tracking-[2px] font-semibold px-[10px] rounded-full mb-[10px]">  Email and Password are required.</p>';
            $_SESSION['errors'] = $errors;
            header("Location: ../login.html.php");
            die();
        }

        $result = getUser($pdo, $email);

        if (verifyEmail($result)) {
            $errors['wrongEmail'] = '<p class="w-fit bg-[gold] py-[2px] tracking-[2px] font-semibold px-[10px] rounded-full mb-[10px]">  Email seems to be the issue...</p>';
        }

        if (!verifyEmail($result) && verifyPassword($password, $result['password'])) {
            $errors['Password-Error'] = '<p class="w-fit bg-[gold] py-[2px] tracking-[2px] font-semibold px-[10px] rounded-full mb-[10px]" >  Incorrect password</p>';
        }

        $_SESSION['errors'] = $errors;
        if (!empty($errors)) {
            header("Location: ../login.html.php");
            die();
        }

        $newSession = session_create_id();
        $sessionId = $newSession . "_" . $result['id'];
        session_id($sessionId);

        $_SESSION['user'] = $result;
        $_SESSION['isAdmin'] = !!$result['email'];
        $_SESSION['last_regeneration'] = time();
        $admin = $_SESSION['user']['isAdmin'];

        if ($admin === 'yes') {
            header('Location: ../index.php');
        } else {
            header('Location: ../users.homepage.php');
        }

        die();
    } catch (PDOException $e) {
        die('Failed' . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
