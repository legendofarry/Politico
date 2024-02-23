<?php

// declare(strict_types=1);
// require_once('validations.php');

// function saveCandidate(
//     object $pdo,
//     string $fullname,
//     string $officeType,
//     string $email,
//     $phoneNumber,
//     string $party
// ) {
//     $query = "INSERT INTO candidates (fullname,officeType,email,phoneNumber,party) VALUES(:fullname,:officeType,:email,:phoneNumber,:party)";

//     $statement = $pdo->prepare($query);

//     $statement->bindParam(":fullname", $fullname);
//     $statement->bindParam(":officeType", $officeType);
//     $statement->bindParam(":email", $email);
//     $statement->bindParam(":phoneNumber", $phoneNumber);
//     $statement->bindParam(":party", $party);


//     $statement->execute();
// }
