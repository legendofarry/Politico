<?php

declare(strict_types=1);

require('db.php');
$query = "SELECT * FROM office";
$statement = $pdo->prepare($query);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $key => $office) {
    require("userOfficeList.php");
}
