<?php
declare(strict_types=1);

function getTitle(object $pdo, string $title)
{
    $query = "SELECT * FROM party WHERE title=:title;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":title", $title);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}