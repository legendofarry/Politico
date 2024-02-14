<?php
$host = 'localhost';
$port = 3306;
$dbname = 'Politico';
$dbuser = 'root';
$dbpass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Failed' . $e->getMessage());
}