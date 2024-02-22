<?php

declare(strict_types=1);


require("validations.php");

function registerParty(
    object $pdo,
    string $title,
    string $description,
    string $Location
) {
    $query = "INSERT INTO party (title,description,Location) VALUES(:title,:description,:Location)";

    $statement = $pdo->prepare($query);
    $statement->bindParam(":title", $title);
    $statement->bindParam(":description", $description);
    $statement->bindParam(":Location", $Location);

    $statement->execute();
}
