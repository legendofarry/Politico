<?php

// declare(strict_types=1);

// require_once('validations.php');

// function createOffice(
//     object $pdo,
//     string $title,
//     string $email,
//     $phoneNumber,
//     string $Location,
//     string $password,
//     string $officeType,
//     string $description
// ) {
//     $query = "INSERT INTO office (title,email,phoneNumber,Location,password,officeType,description) VALUES(:title,:email,:phoneNumber,:Location,:password,:officeType,:description)";


//     $statement = $pdo->prepare($query);

//     $extraSecurity = [
//         "cost" => 12
//     ];
//     $passHash = password_hash($password, PASSWORD_BCRYPT, $extraSecurity);

//     $statement->bindParam(":title", $title);
//     $statement->bindParam(":email", $email);
//     $statement->bindParam(":phoneNumber", $phoneNumber);
//     $statement->bindParam(":Location", $Location);
//     $statement->bindParam(":password", $passHash);
//     $statement->bindParam(":officeType", $officeType);
//     $statement->bindParam(":description", $description);


//     $statement->execute();
// }
