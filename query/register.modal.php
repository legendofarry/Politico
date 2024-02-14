<?php
declare(strict_types=1);

function getEmail(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email=:email;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
