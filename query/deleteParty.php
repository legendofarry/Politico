<?php

declare(strict_types=1);
require("config.php");
require("middleware/is-logged-in.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];

    try {
        require('db.php');
        require('party.modal.php');
        $id = $_SESSION['user']['id'];
        // var_dump($id);
        $query = "DELETE FROM party  WHERE title = :title;";
        // die();

        $statement = $pdo->prepare($query);
        $statement->bindParam(":title", $title);

        $statement->execute();

        header("Location: ../party.list.html.php?id=$id");
    } catch (PDOException $e) {
        die('Failed man' . $e->getMessage());
    }
} else {
    header("Location: party.list.html.php");
    die();
}
