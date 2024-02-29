<?php

declare(strict_types=1);
require('db.php');
// require('config.php');

$user_id = $_SESSION['user'];
$user_id = $user_id['id'];
var_dump($user_id);
$query = "SELECT * FROM votes WHERE user_id = '$user_id'";
$statement = $pdo->prepare($query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $key => $vote) {
    require("partials/myActivity.php");
}
