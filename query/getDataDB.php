<?php

$host = 'localhost';
$port = 3306;
$dbname = 'Politico';
$dbuser = 'root';
$dbpass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    // var_dump($pdo);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Failed' . $e->getMessage());
}

$query = $pdo->prepare("SELECT * FROM party");
$query->execute();
if ($query->rowCount()) {
    echo $query->rowCount();
} else {
    echo 'failed no';
}
    // $results = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
// foreach ($results  as $result) {
    
// }
