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


    try {
        require_once('db.php');
        require_once('saveCandidateValidationModal.php');
        // require_once('saveCandidateValidationController.php');


        // $errors = [];

        // if (isCandidateEmailTaken($pdo,  $email)) {
        //     $errors['cant-revote'] = '<p class="w-[10%] bg-[gold] py-[10px] tracking-[2px]">  Title provided is already taken...</p>';
        // }


        // if ($errors) {
        //     $_SESSION['errors'] = $errors;

        //     $candidateData = [
        //         'fullname' => $fullname,
        //         'officeType' => $officeType,
        //         'email' => $email,
        //         'phoneNumber' => $phoneNumber,
        //         'party' => $party
        //     ];
        //     $_SESSION['candidateData'] = $candidateData;

        //     header("Location: ../party.list.html.php");
        //     die();
        // }
        $query = "INSERT INTO candidates (fullname,officeType,email,phoneNumber,party) VALUES(:fullname,:officeType,:email,:phoneNumber,:party)";

        $statement = $pdo->prepare($query);

        $statement->bindParam(":fullname", $fullname);
        $statement->bindParam(":officeType", $officeType);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":phoneNumber", $phoneNumber);
        $statement->bindParam(":party", $party);


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
