<?php

declare(strict_types=1);
require("config.php");
require("middleware/is-logged-in.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $Location = $_POST['Location'];

    try {
        require('db.php');
        require('party.modal.php');

        $id = $_SESSION['user']['id'];

        $query = "UPDATE party SET  title =:title, description = :description, Location = :Location WHERE title  =  title";


        $statement = $pdo->prepare($query);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":Location", $Location);

        $statement->execute();

        header("Location: ../party.list.html.php?id=$id");
    } catch (PDOException $e) {
        die('Failed man' . $e->getMessage());
    }
} else {
    header("Location: party.list.html.php");
    die();
}
