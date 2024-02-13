<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $othername = $_POST['otherName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $isAdmin = (INT) $_POST['isAdmin'];
    $password = $_POST['password'];

    try {
        require_once('db.php');
        $query = "INSERT INTO users (firstname,lastname,othername,email,phoneNumber,isAdmin,password) 
     VALUES (?,?,?,?,?,?,?);";

        $statement = $pdo->prepare($query);
        $statement->execute([
            $firstname,
            $lastname,
            $othername,
            $email,
            $phoneNumber,
            $isAdmin,
            $password
        ]);
        $pdo = null;
        $statement = null;
        die();

    } catch (PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }

} else {
    var_dump('error');
}