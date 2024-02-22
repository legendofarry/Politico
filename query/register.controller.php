<?php

declare(strict_types=1);
require_once('validations.php');

function signUpUser(
    object $pdo,
    string $firstname,
    string $lastname,
    string $othername,
    string $email,
    $phoneNumber,
    $isAdmin,
    string $password
) {
    $query = "INSERT INTO users (firstname,lastname,othername,email,phoneNumber,isAdmin,password) VALUES(:firstname,:lastname,:othername,:email,:phoneNumber,:isAdmin,:password)";


    $statement = $pdo->prepare($query);

    $extraSecurity = [
        "cost" => 12
    ];
    $passHash = password_hash($password, PASSWORD_BCRYPT, $extraSecurity);

    $statement->bindParam(":firstname", $firstname);
    $statement->bindParam(":lastname", $lastname);
    $statement->bindParam(":othername", $othername);
    $statement->bindParam(":email", $email);
    $statement->bindParam(":phoneNumber", $phoneNumber);
    $statement->bindParam(":isAdmin", $isAdmin);
    $statement->bindParam(":password", $passHash);


    $statement->execute();
}
