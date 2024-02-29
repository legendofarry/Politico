<?php

declare(strict_types=1);

require_once('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user']['id'];
    $candidate_id = $_POST['candidate_id'];
    $candidateOfficeType = $_POST['candidateOfficeType'];
    $candidateParty = $_POST['candidateParty'];
    $candidateName = $_POST['candidateName'];

    try {
        require_once('db.php');

        $query = "INSERT INTO votes (user_id,candidate_id,candidateOfficeType,candidateParty,candidateName) VALUES(:id,:candidate_id,:candidateOfficeType,:candidateParty,:candidateName)";

        $statement = $pdo->prepare($query);

        $statement->bindParam(":id", $user_id);
        $statement->bindParam(":candidate_id", $candidate_id);
        $statement->bindParam(":candidateOfficeType", $candidateOfficeType);
        $statement->bindParam(":candidateParty", $candidateParty);
        $statement->bindParam(":candidateName", $candidateName);


        $statement->execute();

        header("Location:  ../404.php");
    } catch (PDOException $e) {
        die('errrror') . $e->getMessage();
    }
}
