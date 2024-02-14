<?php
declare(strict_types=1);


function isEmpty(string $email, string $password)
{
    if (empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function isEmailValid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function isEmailTaken(object $pdo, string $email)
{
    if (getEmail($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}
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