<?php

declare(strict_types=1);


function getParties()
{
    require('db.php');
    $query = "SELECT * FROM party";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);


    echo ($results['title']);
}
// foreach ($parties as $key => $party) {
//     # code...
// }