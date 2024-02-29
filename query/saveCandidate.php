<?php

declare(strict_types=1);

require("config.php");
require("middleware/is-logged-in.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $officeType = $_POST['officeType'];
    $party = $_POST['party'];
    $user_id = $_SESSION['user']['id'];


    try {
        require_once('db.php');
        require_once('saveCandidateValidationModal.php');

        $query = "INSERT INTO candidates (fullname,officeType,email,phoneNumber,party,user_id) VALUES(:fullname,:officeType,:email,:phoneNumber,:party,:id)";

        $statement = $pdo->prepare($query);

        $statement->bindParam(":fullname", $fullname);
        $statement->bindParam(":officeType", $officeType);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":phoneNumber", $phoneNumber);
        $statement->bindParam(":party", $party);
        $statement->bindParam(":id", $user_id);


        $statement->execute();

        header("Location: ../offices.html.php");

        $pdo = null;
        $statement = null;

        die("");
    } catch (PDOException $e) {
        die('Errored' . $e->getMessage());
    }
} else {
    header("Location: ../party.list.html.php");
    die();
}
