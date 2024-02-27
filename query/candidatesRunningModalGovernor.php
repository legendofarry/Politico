<?php

declare(strict_types=1);
require('db.php');
// require("config.php");
// require("middleware/is-logged-in.php");

$officeType = $officeType['officeType'];
$query = "SELECT * FROM candidates WHERE officeType = '$officeType'";
$statement = $pdo->prepare($query);
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $key => $candidate) {
    require("partials/candidatesListGovernor.php");
};
