<?php

declare(strict_types=1);

require("validations.php");

function registerParty(object $pdo, string $title, string $description, string $location)
{
    $query = "INSERT INTO party (title,description,location) VALUES(:title,:description,:location)";

    $statement = $pdo->prepare($query);
    $statement->bindParam(":title", $title);
    $statement->bindParam(":description", $description);
    $statement->bindParam(":location", $location);

    $statement->execute();
}
