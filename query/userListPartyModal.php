<?php

declare(strict_types=1);

require('db.php');
$query = "SELECT * FROM party";
$statement = $pdo->prepare($query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $key => $party) {
    require("userPartyList.php");
}
