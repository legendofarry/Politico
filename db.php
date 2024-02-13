<?php
$dsn = 'mysql:host=localhost;port=3306;dbname=Politico';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo 'Unsuccessful:' . $error->getMessage();
}