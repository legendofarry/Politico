<?php


require("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $votes = $_POST['votes'];
    $candidate_id = $_POST['candidate_id'];
    $candidateOfficeType = $_POST['candidateOfficeType'];
    $user_id = $_SESSION['user']['id'];

    try {
        require("db.php");
        $totalVotes = $votes + 1;


        if ($errors) {
            $_SESSION['errors'] = $errors;

            $vote = [
                'votes' => $votes,
                'candidate_id' => $candidate_id,
                'candidateOfficeType' => $candidateOfficeType,
            ];
            $_SESSION['vote'] = $vote;

            header('Location: ../candidates.php');
            die();
        }
        $query = "SELECT * FROM votes WHERE user_id = '$user_id'";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $key => $result) {

            if ($result['user_id'] === $user_id && $result['candidateOfficeType'] === $candidateOfficeType) {
                die('<h1>You can only vote for one Candidate per Office Party !..</h1> ');
            }
        }
        $query = "UPDATE candidates SET votes = $totalVotes WHERE id = $candidate_id";
        $statement = $pdo->prepare($query);
        $result =  $statement->execute();
        require("votes.controller.php");
    } catch (PDOException $e) {
        die('Failed' . $e->getMessage());
    }
}









// require("votes.modal.php");
