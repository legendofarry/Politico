<?php


require("db.php");
require("config.php");
$votes = $_POST['votes'];

$totalVotes = $votes + 1;
$user_id = $_SESSION['user']['id'];
$candidate_id = $_POST['candidateId'];

$query = "UPDATE candidates SET votes = $totalVotes WHERE id = $candidate_id";
$statement = $pdo->prepare($query);
$statement->execute();


var_dump($votes);
var_dump($totalVotes);
var_dump($user_id);
var_dump($votes);
var_dump($candidate_id);
