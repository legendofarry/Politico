<?php

declare(strict_types=1);

function checkCandidate(object $pdo, string $email)
{
    $query = "SELECT * FROM candidates WHERE email=:email;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
